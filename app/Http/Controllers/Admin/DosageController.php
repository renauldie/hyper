<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Dosage;
use App\Models\Admin\Medicine;

use App\Http\Requests\Admin\DosageRequest;

class DosageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Dosage::with([
            'medicine'
        ])->get();

        return \view('pages.admin.dosage-list.index', [
            'items' => $items
        ]);

        // \dd($items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicines = Medicine::all();
        return \view('pages.admin.dosage-list.create', [
            'medicines' => $medicines
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DosageRequest $request)
    {
        $data = $request->all();
        
        Dosage::create($data);

        return \redirect()->route('dosage-list.index');
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
        $item = Dosage::findOrFail($id);
        return \view('pages.admin.dosage-list.edit', [
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
    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        $item = Dosage::findOrFail($id);
        $item->update($data);

        return \redirect()->route('dosage-list.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Dosage::findOrFail($id);
        $item->delete();

        return \redirect()->route('dosage-list.index');
    }
}
