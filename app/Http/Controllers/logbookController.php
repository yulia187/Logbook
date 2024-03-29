<?php

namespace App\Http\Controllers;

use App\Models\logbook;
use Illuminate\Http\Request;


class logbookController extends Controller
{
    public function index(){
        $logbook = logbook::all();
        return view('logbook.index',compact(['logbook']));
    }

    public function create()
    {
        return view('logbook.create');
    }
    public function datakaryawan(Request $request)
    {
        //dd($request->except(['token','submit']));
        logbook::create($request->except(['token','submit']));
    }
}
