<?php

use Illuminate\Support\Facades\Route;


// Controller Public
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;


// Controller Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AumController;
use App\Http\Controllers\Admin\OrtomController;
use App\Http\Controllers\Admin\PengurusController;


// Models
use App\Models\Aum;
use App\Models\Ortom;
use App\Models\Pengurus;
use App\Models\WebsiteSetting;


/*
|--------------------------------------------------------------------------
| PUBLIC WEBSITE
|--------------------------------------------------------------------------
*/


Route::get('/', 
[HomeController::class,'index'])
->name('home');





Route::get('/data-aum', function(){

    $aums = Aum::all();

    $setting = WebsiteSetting::first();


    return view('aum',
    compact(
        'aums',
        'setting'
    ));

})
->name('aum');




Route::get('/data-ortom', function(){

    $ortoms = Ortom::all();

    $setting = WebsiteSetting::first();


    return view('ortom',
    compact(
        'ortoms',
        'setting'
    ));

})
->name('ortom');








Route::get('/tentang-kami', function(){

    $penguruses = Pengurus::all();

    $setting = WebsiteSetting::first();


    return view('kami',
    compact(
        'penguruses',
        'setting'
    ));

})
->name('kami');





Route::get('/detail/{slug}',
[DetailController::class,'index'])
->name('detail');





/*
|--------------------------------------------------------------------------
| USER PROFILE
|--------------------------------------------------------------------------
*/


Route::middleware('auth')->group(function(){


    Route::get('/profile',
    [ProfileController::class,'edit'])
    ->name('profile.edit');


    Route::patch('/profile',
    [ProfileController::class,'update'])
    ->name('profile.update');


    Route::delete('/profile',
    [ProfileController::class,'destroy'])
    ->name('profile.destroy');


});





/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/


Route::middleware(['auth','admin'])
->prefix('admin')
->name('admin.')
->group(function(){



    /*
    | Dashboard
    */

    Route::get('/dashboard',
    [DashboardController::class,'index'])
    ->name('dashboard');




    /*
    | AUM CRUD
    */

    Route::resource('aum',
    AumController::class)
    ->except(['show']);




    /*
    | ORTOM CRUD
    */

    Route::resource('ortom',
    OrtomController::class)
    ->except(['show']);





    /*
    | PENGURUS CRUD
    */

  Route::resource('pengurus',
PengurusController::class)
->parameters([
    'pengurus'=>'pengurus'
])
->except(['show']);



});





require __DIR__.'/auth.php';
use App\Http\Controllers\Admin\WebsiteSettingController;


Route::middleware(['auth','admin'])
->prefix('admin')
->name('admin.')
->group(function(){


Route::get('/setting',
[WebsiteSettingController::class,'edit'])
->name('setting.edit');


Route::put('/setting',
[WebsiteSettingController::class,'update'])
->name('setting.update');


});