<?php

namespace App\Http\Controllers;

use App\Models\Aum;
use App\Models\Ortom;

class DetailController extends Controller
{


public function index($slug)
{


    $data = Aum::where('slug',$slug)->first();


    if(!$data){

        $data = Ortom::where('slug',$slug)->first();

    }



    if(!$data){

        abort(404);

    }



    return view('detail',compact('data'));

}



}