<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\adminMedicineExport;

use App\Http\Requests\Admin\MedicineRequest;
use App\Models\Admin\Medicine;
use App\Models\Admin\MedicineGallery;
use App\Models\Admin\MedicineRuleDetail;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Medicine::all()->sortBy('id');
        return \view('pages.admin.medicine.index',[
            'items' => $items
        ]);
    }

    public function export_pdf(){
        return Excel::download(new adminMedicineExport, 'medicine-list.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicineRequest $request)
    {
        $data = $request->all();
        
        Medicine::create($data);

        return \redirect() -> route('medicine.index');
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
        $item = Medicine::findOrFail($id);
        return \view('pages.admin.medicine.edit', [
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
    public function update(MedicineRequest $request, $id)
    {
        $data = $request->all();

        $item = Medicine::findOrFail($id);
        $item->update($data);

        return \redirect() -> route('medicine.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Medicine::findOrFail($id);
        MedicineGallery::where('medicines_id', $id)->delete();
        MedicineRuleDetail::where('medicine_rule_id', $id)->delete();
        $item->delete();

        return \redirect()->route('medicine.index');

    }
}
