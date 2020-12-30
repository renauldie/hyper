<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin\Medicine;
class BlogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Medicine::has('medicine_galleries')
        ->get();
        return view('pages.blog',[
            'items' => $items
        ]);
    }
}
