<?php

namespace App\Http\Controllers;

use App\Models\masakerjakaryawan;
use Illuminate\Http\Request;

class masakerjakaryawanController extends Controller
{
    public function msKK(){
        $msaKK = masakerjakaryawan::all();
        return view('masakerjakaryawan.msKK',compact(['msaKK']));
    }
    public function mskkcreate()
    {
        return view('masakerjakaryawan.mskkcreate');
    }
}
