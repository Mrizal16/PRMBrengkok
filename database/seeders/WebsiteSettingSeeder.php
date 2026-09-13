<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WebsiteSetting;


class WebsiteSettingSeeder extends Seeder
{

public function run()
{

WebsiteSetting::create([



'aum_title'=>'Amal Usaha',

'aum_description'=>'Informasi mengenai Amal Usaha Muhammadiyah Brengkok.',



'ortom_title'=>'Data ORTOM',

'ortom_description'=>'Informasi Organisasi Otonom Muhammadiyah Brengkok.',


]);


}

}