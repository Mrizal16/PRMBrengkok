@extends('layouts.app')


@section('content')


<section class="admin-dashboard">


<div class="admin-header">


<h1>
Pengaturan Website
</h1>


<a href="{{ route('admin.dashboard') }}"
class="btn-kembali">

← Kembali

</a>


</div>





<div class="form-container">


<form method="POST"
action="{{ route('admin.setting.update') }}"
enctype="multipart/form-data">


@csrf
@method('PUT')




<div class="form-group">


<label>
Judul Hero
</label>


<input type="text"
name="hero_title"
value="{{ $setting->hero_title }}">


</div>





<div class="form-group">


<label>
Sub Judul Hero
</label>


<input type="text"
name="hero_subtitle"
value="{{ $setting->hero_subtitle }}">


</div>


<div class="form-group">

<label>
Background Hero
</label>


<input type="file"
name="hero_image">


@if($setting->hero_image)

<div class="preview-edit">

<img src="{{ asset('storage/'.$setting->hero_image) }}">

</div>

@endif


</div>


<div class="form-group">


<label>
Nama Ketua
</label>


<input type="text"
name="ketua_nama"
value="{{ $setting->ketua_nama }}">


</div>





<div class="form-group">


<label>
Jabatan Ketua
</label>


<input type="text"
name="ketua_jabatan"
value="{{ $setting->ketua_jabatan }}">


</div>





<div class="form-group">


<label>
Deskripsi Website
</label>


<textarea name="deskripsi">{{ $setting->deskripsi }}</textarea>


</div>






<div class="form-group">


<label>
Foto Ketua
</label>


<input type="file"
name="foto_ketua">


@if($setting->foto_ketua)

<div class="preview-edit">

<img src="{{asset('storage/'.$setting->foto_ketua)}}">

</div>

@endif


</div>





<div class="form-group">


<label>
Gambar AUM Home
</label>


<input type="file"
name="gambar_aum">



</div>






<div class="form-group">


<label>
Gambar ORTOM Home
</label>


<input type="file"
name="gambar_ortom">


</div>


<div class="form-group">

<label>
Judul Card AUM
</label>


<input type="text"
name="aum_title"
value="{{ $setting->aum_title }}">


</div>



<div class="form-group">

<label>
Deskripsi Card AUM
</label>


<textarea name="aum_description">
{{ $setting->aum_description }}
</textarea>


</div>





<div class="form-group">

<label>
Judul Card ORTOM
</label>


<input type="text"
name="ortom_title"
value="{{ $setting->ortom_title }}">


</div>




<div class="form-group">

<label>
Deskripsi Card ORTOM
</label>


<textarea name="ortom_description">
{{ $setting->ortom_description }}
</textarea>


</div>
<div class="footer-setting">


<h3>
Footer Website
</h3>



<div class="footer-group">


<label>
Logo Email
</label>

<input type="file"
name="email_icon">


<label>
Email
</label>

<input type="text"
name="email"
value="{{ $setting->email }}">


</div>





<div class="footer-group">


<label>
Logo Instagram
</label>

<input type="file"
name="instagram_icon">



<label>
Instagram
</label>


<input type="text"
name="instagram"
value="{{ $setting->instagram }}">


</div>



</div>
<button class="btn-submit">

Simpan Perubahan

</button>




</form>



</div>



</section>


@endsection