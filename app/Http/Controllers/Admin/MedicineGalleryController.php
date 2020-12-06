<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\MedicineGalleryRequest;

use App\Models\Admin\MedicineGallery;
use App\Models\Admin\Medicine;

class MedicineGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = MedicineGallery::with(['medicine'])->orderby('medicines_id', 'asc')->get();
        return view('pages.admin.medicine-gallery.index', [
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
        $items = Medicine::all();
        return view('pages.admin.medicine-gallery.create', [
            'items' => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicineGalleryRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/medicine-gallery', 'public'
        );

        MedicineGallery::create($data);

        return \redirect() -> route('medicine-gallery.index');
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
        $item = MedicineGallery::findOrFail($id);
        return \view('pages.admin.medicine-gallery.edit', [
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
    public function update(MedicineGalleryRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/medicine-gallery', 'public'
        );

        $item = MedicineGallery::findOrFail($id);
        
        $item->update($data);

        return \redirect() -> route('medicine-gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = MedicineGallery::findOrFail($id);
        $item->delete();

        return \redirect()->route('medicine-gallery.index');

    }
}
