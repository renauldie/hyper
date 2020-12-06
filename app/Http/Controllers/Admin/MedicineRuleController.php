<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\MedicineRuleRequest;

use App\Models\Admin\Disease;
use App\Models\Admin\MedicineRule;
use App\Models\Admin\MedicineRuleDetail;

class MedicineRuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = MedicineRule::all();
        
        return \view('pages.admin.medicine-rule.index', [
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
        return \view('pages.admin.medicine-rule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicineRuleRequest $request)
    {
        $data = $request->all();
        MedicineRule::create($data);

        return \redirect()->route('medicine-rule.index');
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
        $item = MedicineRule::findOrFail($id);
        return \view('pages.admin.medicine-rule.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MedicineRuleRequest $request, $id)
    {
        $data = $request->all();

        $item = MedicineRule::findOrFail($id);
        $item -> update($data);

        return \redirect()->route('medicine-rule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = MedicineRule::findOrFail($id);
        MedicineRuleDetail::where('medicine_rule_id', $id)->delete();
        $item->delete();

        return \redirect()->route('medicine-rule.index');
    }
}
