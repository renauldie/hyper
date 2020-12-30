<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use App\Models\Admin\BloodPressure;
use App\Models\Admin\Disease;
use App\Models\Admin\Medicine;
use App\Models\Admin\Age;
use App\Models\Admin\Weight;
use App\Models\Consultation;
use App\Models\ConsultationDetail;

use App\Http\Requests\GrievenceRequest;
use App\Http\Requests\GrievenceDetailRequest;

use PDF;
class GrievenceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.grievence.grievence');
    }

    public function adminshow() 
    {
        return view('pages.admin.user-consultation.index');
    }

    public function process(GrievenceRequest $request) {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $consultation = Consultation::create($data);
        return redirect()->route('choose-disease', $consultation->id);
    }

    public function addProcess(GrievenceDetailRequest $request, $redirect) {
        $data = $request->all();
        ConsultationDetail::create($data);
        return redirect()->route('choose-disease', $redirect);
    }

    public function deleteProcess($id) {
        $item = ConsultationDetail::findOrfail($id);
        $item->delete();

        return redirect()->route('choose-disease', $item->cosultations_id);
    }

    public function show($id) {
        $items = Consultation::with([
            'consultation_detail', 'user' 
        ])->findOrFail($id);

        $diseases = Disease::all()->sortBy('id');

        $dets = ConsultationDetail::with(
            'diseases', 'consultation'
        )->where('cosultations_id', $id)->get();
        
        return \view('pages.grievence.grievence-detail', [
            'items' => $items, 
            'diseases' => $diseases,
            'dets' => $dets
        ]);
    }

    public function checkResult(Request $request, $id) {
        // dd($request->disease_id);
        $items = Consultation::with([
            'consultation_detail', 'user' 
        ])->findOrFail($id);

        $age = $items['ages'];
        $b_pressure = $items['blood_pressure'];
        $b_weight = $items['body_weight'];

        $par = $request->disease_id;

        $result = DB::table('medicines')
                ->select('medicines.medicine_name', 'medicines.find_at_pharmacy', 'medicines.id')
                ->join('medicine_rules', 'medicines.id', '=',  'medicine_rules.medicine_id')
                ->join('medicine_rule_details', 'medicine_rule_details.medicine_rule_id', '=', 'medicine_rules.id')
                ->whereIn('medicine_rule_details.disease_id', $par)
                ->groupBy('medicines.id')
                ->get();
        
        // dd($age, $b_pressure, $b_weight);

        return \view('pages.grievence.grievence-result', [
            'result' => $result, 
            'items' => $items
        ]);   
    }

    public function checkDosage(Request $request, $id) {
        $items = Consultation::with([
            'consultation_detail', 'user' 
        ])->findOrFail($id);

        $dets = ConsultationDetail::with(
            'diseases', 'consultation'
        )->where('cosultations_id', $id)->get();

        $cons = $id;
        $age = $items['ages'];
        $b_pressure = $items['blood_pressure'];
        $b_weight = $items['body_weight'];
        $par = $request -> medicine_id;

        $age_id = Age::all()
            ->where('start_age', '<=', $age)
            ->where('end_age', '>=', $age)
            ->first();

        $weight_id = Weight::all()
            ->where('start_weight', '<=', $b_weight)
            ->where('end_weight', '>=', $b_weight)
            ->first();

        $bp_id = BloodPressure::all()
            ->where('sistolic_start', '<=', $b_pressure)
            ->where('sistolic_end', '>=', $b_pressure)
            ->first();

        $dosages = DB::table('dosages')
            ->select('dosages.dosage', 'medicines.medicine_name', 'medicines.find_at_pharmacy')
            ->join('medicines', 'medicines.id', 'dosages.medicine_id')
            ->join('medicine_rules', 'medicine_rules.medicine_id',   'medicines.id')
            ->join('dosage_details', 'dosage_details.dosages_id', 'dosages.id')
            ->groupBy('dosages.dosage', 'medicines.medicine_name', 'medicines.find_at_pharmacy')
            ->whereIn('dosages.medicine_id', $par)
            ->where('dosage_details.ages_id', $age_id->id)
            ->where('dosage_details.weights_id', $weight_id->id)
            ->where('dosage_details.blood_pressure_id', $bp_id->id)
            ->get();

            // \dd($par, $age_id->id, $weight_id->id, $bp_id->id, $items->id);

        return view('pages.grievence.grievence-dosage', [
            'dosages' => $dosages,
            'items' =>$items,
            'dets' => $dets,
            'cons' => $cons
        ]);
    }

    public function export_pdf(Request $request, $id) {

        $pdf = PDF::loadView('pages.grievence.grievence_pdf');
        return $pdf->download('consultation.pdf');
    }

    public function record($id) {
        $items = Consultation::with([
            'user', 'consultation_detail'
        ])->where('user_id', $id)->get();

        // $detail = Consultation::with([
        //     'consultation_detail'
        // ])->where('consultation');

        return view('pages.record.grievence-record', [
            'items' =>$items
        ]);

    }
}
