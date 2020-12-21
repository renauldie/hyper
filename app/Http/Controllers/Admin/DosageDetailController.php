<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\DosageDetail;
use App\Models\Admin\Dosage;
use App\Models\Admin\Age;
use App\Models\Admin\Weight;

use App\Http\Requests\Admin\DosageDetailRequest;

class DosageDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = DosageDetail::with([
            'dosage', 'age', 'weight'
        ])->get();
        return \view('pages.admin.dosage-detail.index',[
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
        $dosages = Dosage::all();
        $ages = Age::all();
        $weights = Weight::all();
        return \view('pages.admin.dosage-detail.create', [
            'dosages' => $dosages,
            'ages' => $ages,
            'weights' => $weights
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DosageDetailRequest $request)
    {
        $data = $request->all();
        
        DosageDetail::create($data);

        return \redirect()->route('dosage-detail.index');
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
        $item = DosageDetail::with([
            'dosage', 'age', 'weight'
        ])->findOrFail($id);

        $dosages = Dosage::all();
        $ages = Age::all();
        $weights = Weight::all();
        return \view('pages.admin.dosage-detail.edit', [
            'item' => $item,
            'dosages' => $dosages,
            'ages' => $ages,
            'weights' => $weights
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DosageDetailRequest $request, $id)
    {
        $data = $request->all();

        $item = DosageDetail::findOrFail($id);
        $item->update($data);

        return \redirect()->route('dosage-detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = DosageDetail::findOrFail($id);
        $item->delete();

        return \redirect()->route('dosage-detail.index');
    }
}
