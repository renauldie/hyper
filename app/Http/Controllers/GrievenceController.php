<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Admin\BloodPressure;
use App\Models\Admin\Disease;
use App\Models\Consultation;

use App\Http\Requests\GrievenceRequest;
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

    public function process(GrievenceRequest $request) {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $consultation = Consultation::create($data);
        return redirect()->route('choose-disease', $consultation->id);
    }

    public function addProcess() {

    }

    public function show($id) {
        $items = Consultation::with('consultation_detail')->findOrFail($id);
        $diseases = Disease::all()->sortBy('id');
        
        return \view('pages.grievence-detail', [
            'items' => $items, 
            'diseases' => $diseases
        ]);
    }
}
