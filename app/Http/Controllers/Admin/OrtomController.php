<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Ortom;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class OrtomController extends Controller
{


public function index()
{

$ortoms = Ortom::all();

return view('admin.ortom.index',
compact('ortoms'));

}



public function create()
{

return view('admin.ortom.create');

}



public function store(Request $request)
{


$request->validate([

'nama'=>'required',
'deskripsi'=>'required'

]);



$gambar=null;


if($request->hasFile('gambar')){

$gambar=$request
->file('gambar')
->store('ortom','public');

}



Ortom::create([

'nama'=>$request->nama,

'slug'=>Str::slug($request->nama),

'deskripsi'=>$request->deskripsi,

'gambar'=>$gambar

]);


return redirect()
->route('admin.ortom.index');


}




public function edit(Ortom $ortom)
{

return view('admin.ortom.edit',
compact('ortom'));

}




public function update(Request $request, Ortom $ortom)
{


$request->validate([

'nama'=>'required',
'deskripsi'=>'required'

]);



$ortom->update([

'nama'=>$request->nama,

'slug'=>Str::slug($request->nama),

'deskripsi'=>$request->deskripsi

]);



if($request->hasFile('gambar')){


$ortom->update([

'gambar'=>$request
->file('gambar')
->store('ortom','public')

]);


}



return redirect()
->route('admin.ortom.index');


}





public function destroy(Ortom $ortom)
{

$ortom->delete();


return back();

}


}