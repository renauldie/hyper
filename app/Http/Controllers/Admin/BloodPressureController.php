<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\BloodPressureRequest;
use App\Models\Admin\BloodPressure;

class BloodPressureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = BloodPressure::all();
        return \view('pages.admin.blood-pressure.index',[
            'items' => $items->sortBy('id')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.blood-pressure.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BloodPressureRequest $request)
    {
        $data = $request->all();
        BloodPressure::create($data);

        return \redirect() -> route('blood-pressure.index');
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
        $item = BloodPressure::findOrFail($id);
        return \view('pages.admin.blood-pressure.edit', [
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
    public function update(BloodPressureRequest $request, $id)
    {
        $data = $request->all();

        $item = BloodPressure::findOrFail($id);
        $item->update($data);

        return \redirect() -> route('blood-pressure.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = BloodPressure::findOrFail($id);
        $item->delete();

        return \redirect()->route('blood-pressure.index');

    }
}
