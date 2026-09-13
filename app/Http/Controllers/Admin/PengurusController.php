<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{


public function index()
{

    $penguruses = Pengurus::all();


    return view('admin.pengurus.index',
    compact('penguruses'));

}




public function create()
{

    return view('admin.pengurus.create');

}





public function store(Request $request)
{


$request->validate([

    'nama'=>'required',
    'jabatan'=>'required',
    'deskripsi'=>'nullable',
    'gambar'=>'nullable|image'

]);



$gambar = null;



if($request->hasFile('gambar')){


    $gambar = 
    $request->file('gambar')
    ->store('pengurus','public');


}




Pengurus::create([


    'nama'=>$request->nama,

    'jabatan'=>$request->jabatan,

    'deskripsi'=>$request->deskripsi,

    'gambar'=>$gambar


]);




return redirect()
->route('admin.pengurus.index');

}





public function edit(Pengurus $pengurus)
{

    return view('admin.pengurus.edit',
    compact('pengurus'));

}





public function update(Request $request, Pengurus $pengurus)
{

$request->validate([

'nama'=>'required',
'jabatan'=>'required',
'deskripsi'=>'required'

]);



$gambar = $pengurus->gambar;



if($request->hasFile('gambar')){


$gambar =
$request->file('gambar')
->store('pengurus','public');


}



$pengurus->update([

'nama'=>$request->nama,

'jabatan'=>$request->jabatan,

'deskripsi'=>$request->deskripsi,

'gambar'=>$gambar

]);



return redirect()
->route('admin.pengurus.index');

}




public function destroy(Pengurus $pengurus)
{


$pengurus->delete();



return back();


}



}