<?php

namespace App\Http\Controllers;

use App\Models\datapribadi;
use Illuminate\Http\Request;

class DataPribadiController extends Controller
{
    public function DataPribadi(){
        $datapribadi = DataPribadi::all();
        return view ('DataPribadi.datapribadi',compact(['datapribadi']));
    }
    public function pribadicreate()
    {
        return view('DataPribadi.pribadicreate');
    }


}
