<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class RegistroExcelController extends Controller
{
    public function exportExcel () {
        return Excel::download(new UsersExport('2021-07-26 17:23:41','2021-07-22 22:51:48'), 'user-list.xlsx');
    }
}
