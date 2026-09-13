<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteSetting;
class HomeController extends Controller
{
    public function index()
{

$setting = WebsiteSetting::first();


return view('home',compact('setting'));

}
}