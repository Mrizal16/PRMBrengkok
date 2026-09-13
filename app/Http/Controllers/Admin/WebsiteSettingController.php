<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;



class WebsiteSettingController extends Controller
{


public function edit()
{

$setting = WebsiteSetting::first();


return view(
'admin.setting.edit',
compact('setting')
);

}




public function update(Request $request)
{


$setting = WebsiteSetting::first();



$data=$request->except([

'foto_ketua',
'gambar_aum',
'gambar_ortom',
'hero_image',

'email_icon',
'instagram_icon'

]);





/*
|--------------------------------------------------------------------------
| Upload Foto Ketua
|--------------------------------------------------------------------------
*/


if($request->hasFile('foto_ketua')){


$data['foto_ketua']
=
$request
->file('foto_ketua')
->store('setting','public');


}





/*
|--------------------------------------------------------------------------
| Upload Gambar AUM
|--------------------------------------------------------------------------
*/


if($request->hasFile('gambar_aum')){


$data['gambar_aum']
=
$request
->file('gambar_aum')
->store('setting','public');


}





/*
|--------------------------------------------------------------------------
| Upload Gambar ORTOM
|--------------------------------------------------------------------------
*/


if($request->hasFile('gambar_ortom')){


$data['gambar_ortom']
=
$request
->file('gambar_ortom')
->store('setting','public');


}





/*
|--------------------------------------------------------------------------
| Upload Hero Image
|--------------------------------------------------------------------------
*/


if($request->hasFile('hero_image')){


$data['hero_image']
=
$request
->file('hero_image')
->store('setting','public');


}





/*
|--------------------------------------------------------------------------
| Upload Logo Email Footer
|--------------------------------------------------------------------------
*/


if($request->hasFile('email_icon')){


$data['email_icon']
=
$request
->file('email_icon')
->store('setting','public');


}





/*
|--------------------------------------------------------------------------
| Upload Logo Instagram Footer
|--------------------------------------------------------------------------
*/


if($request->hasFile('instagram_icon')){


$data['instagram_icon']
=
$request
->file('instagram_icon')
->store('setting','public');


}





$setting->update($data);



return back();

}


}