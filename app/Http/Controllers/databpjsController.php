<?php

namespace App\Http\Controllers;

use App\Models\databpjs;
use Illuminate\Http\Request;

class databpjsController extends Controller
{
    public function dtbpjs(){
        $dtabpjs = databpjs::all();
        return view ('databpjs.dtbpjs',compact(['dtabpjs']));
    
    }
    public function bpjscreate()
    {
        return view('databpjs.bpjscreate');
    }
    public function bpjssave(Request $request)
    {
        //dd($request->except(['token','submit']));
        databpjs::create($request->except(['token','submit']));
    }
}
