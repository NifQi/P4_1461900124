<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;

use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
	public function index()
	{
		$buku = Buku::crossJoin('jenis_buku.jenis');
		return view('buku0124',['buku'=>$buku]);
	}

	public function export_excel()
	{
		return Excel::download(new BukuExport, ' Data_1461900124.xlsx');
	}
}