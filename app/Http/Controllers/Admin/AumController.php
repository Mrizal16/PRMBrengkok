<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aum;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class AumController extends Controller
{


    public function index()
    {

        $aums = Aum::latest()->get();

        return view('admin.aum.index', compact('aums'));

    }





    public function create()
    {

        return view('admin.aum.create');

    }





    public function store(Request $request)
    {


        $request->validate([

            'nama' => 'required|max:255',

            'deskripsi' => 'required',

            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'

        ]);




        $gambar = null;



        if($request->hasFile('gambar')){


            $gambar = $request
                ->file('gambar')
                ->store('aum','public');


        }





        Aum::create([

            'nama' => $request->nama,

            'slug' => Str::slug($request->nama),

            'deskripsi' => $request->deskripsi,

            'gambar' => $gambar

        ]);




        return redirect()
            ->route('admin.aum.index')
            ->with('success','Data AUM berhasil ditambahkan');


    }








    public function edit(Aum $aum)
    {


        return view('admin.aum.edit',
        compact('aum'));


    }








    public function update(Request $request, Aum $aum)
    {


        $request->validate([

            'nama'=>'required|max:255',

            'deskripsi'=>'required',

            'gambar'=>'nullable|image|mimes:jpg,jpeg,png|max:2048'

        ]);





        $gambar = $aum->gambar;





        if($request->hasFile('gambar')){


            // hapus gambar lama

            if($aum->gambar){

                Storage::disk('public')
                ->delete($aum->gambar);

            }



            $gambar = $request
                ->file('gambar')
                ->store('aum','public');


        }







        $aum->update([

            'nama'=>$request->nama,

            'slug'=>Str::slug($request->nama),

            'deskripsi'=>$request->deskripsi,

            'gambar'=>$gambar

        ]);





        return redirect()
            ->route('admin.aum.index')
            ->with('success','Data AUM berhasil diperbarui');


    }








    public function destroy(Aum $aum)
    {


        if($aum->gambar){

            Storage::disk('public')
            ->delete($aum->gambar);

        }



        $aum->delete();



        return back()
        ->with('success','Data AUM berhasil dihapus');


    }



}