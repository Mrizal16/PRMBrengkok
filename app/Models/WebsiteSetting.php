<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{

protected $fillable=[

'hero_title',
'hero_subtitle',

'hero_image',

'ketua_nama',
'ketua_jabatan',
'deskripsi',

'foto_ketua',

'gambar_aum',
'gambar_ortom',


'aum_title',
'aum_description',

'ortom_title',
'ortom_description',

    'nama',
    'deskripsi',
    'logo',

    'email_icon',
    'email',
    'instagram_icon',
    'instagram'
];

}