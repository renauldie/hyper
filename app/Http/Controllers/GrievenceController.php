<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use App\Models\Admin\BloodPressure;
use App\Models\Admin\Disease;
use App\Models\Consultation;
use App\Models\ConsultationDetail;

use App\Http\Requests\GrievenceRequest;
use App\Http\Requests\GrievenceDetailRequest;
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
        return view('pages.grievence');
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
        
        // $details = DB::table('diseases')
        //             ->join('consultation_details', 'diseases.id', '=', 'consultation_details.diseases_id')
        //             ->where('consultation_details.cosultations_id', '=', $id)
        //             ->get();

        $dets = ConsultationDetail::with(
            'diseases', 'consultation'
        )->where('cosultations_id', $id)->get();
        
        return \view('pages.grievence-detail', [
            'items' => $items, 
            'diseases' => $diseases,
            'dets' => $dets
        ]);
    }
}
