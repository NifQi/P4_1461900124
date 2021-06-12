<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buku;

use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
	public function index()
	{
		$buku = Buku::all();
		return view('buku0124',['buku'=>$buku]);
	}

	public function export_excel()
	{
		return Excel::download(new BukuExport, ' Data_1461900124.xlsx');
	}
}