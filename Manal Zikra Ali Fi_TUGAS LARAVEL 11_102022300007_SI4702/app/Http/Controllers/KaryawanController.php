<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all(); // ambil semua data
        return view('karyawans.index', compact('karyawans'));
    }
}
