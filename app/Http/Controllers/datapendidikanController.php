<?php

namespace App\Http\Controllers;

use App\Models\datapendidikan;
use Illuminate\Http\Request;

class datapendidikanController extends Controller
{
    public function datapend(){
        $dtapend = datapendidikan::all();
        return view ('datapendidikan.datapend',compact(['dtapend']));
    
    }
    public function pendcreate()
    {
        return view('datapendidikan.pendcreate');
    }

}
