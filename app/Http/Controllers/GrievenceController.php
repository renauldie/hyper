<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin\BloodPressure;
use App\Models\Admin\Disease;

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
        $bloods = BloodPressure::all()->sortBy('id');
        $diseases = Disease::all()->sortBy('id');
        return view('pages.grievence',[
            'bloods' => $bloods,
            'diseases' => $diseases

        ]);
    }
}
