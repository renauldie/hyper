<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\MedicineRuleRequest;
use App\Http\Requests\Admin\MedicineRuleDetailRequest;

use App\Models\Admin\Disease;
use App\Models\Admin\Medicine;
use App\Models\Admin\MedicineRule;
use App\Models\Admin\MedicineRuleDetail;

class MedicineRuleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = MedicineRuleDetail::with([
            'medicine_rule', 'disease_rule'
        ])->get();
        
        return \view('pages.admin.medicine-rule-detail.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rules = MedicineRule::all();
        $diseases = Disease::all();
        return \view('pages.admin.medicine-rule-detail.create', [
            'rules' => $rules,
            'diseases' => $diseases
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicineRuleDetailRequest $request)
    {
        $data = $request->all();
        MedicineRuleDetail::create($data);

        return \redirect()->route('medicine-rule-detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \view('pages.admin.medicine-rule-detail.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = MedicineRuleDetail::findOrFail($id);
        $item->delete();

        return \redirect()->route('medicine-rule-detail.index');
    }
}
