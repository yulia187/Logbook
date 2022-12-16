<?php
  
namespace App\Http\Controllers;
  
use App\Models\pekerja;
use Illuminate\Http\Request;
  
class pekerjaController extends Controller
{

    public function index()
    {
        $pekerjas = pekerja::latest()->paginate(5);
      
        return view('pekerjas.index',compact('pekerjas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('pekerjas.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pass' => 'required',
        ]);
      
        pekerja::create($request->all());
       
        return redirect()->route('pekerjas.index')
                        ->with('success','pekerja created successfully.');
    }
  
    public function show(pekerja $pekerja)
    {
        return view('pekerjas.show',compact('pekerja'));
    }
  
    public function edit(pekerja $pekerja)
    {
        return view('pekerjas.edit',compact('pekerja'));
    }

    public function update(Request $request, pekerja $pekerja)
    {
        $request->validate([
            'name' => 'required',
            'pass' => 'required',
        ]);
      
        $pekerja->update($request->all());
      
        return redirect()->route('pekerjas.index')
                        ->with('success','pekerja updated successfully');
    }

    public function destroy(pekerja $pekerja)
    {
        $pekerja->delete();
       
        return redirect()->route('pekerjas.index')
                        ->with('success','pekerja deleted successfully');
    }
}