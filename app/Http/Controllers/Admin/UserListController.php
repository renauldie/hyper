<?php

namespace App\Http\Controllers\Admin;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Exports\adminUserListExport;

use App\Models\User;

class UserListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::where('roles', '!=', 'ADMIN')->get();
        return \view('pages.admin.users.index',[
            'items' => $items,
        ]);
    }

    public function export_pdf() {
        return Excel::download(new adminUserListExport, 'user-list.xlsx');
    }
}
