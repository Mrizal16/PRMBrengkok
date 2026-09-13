@extends('layouts.app')


@section('content')


<section class="hero"
style="
background:
linear-gradient(
90deg,
rgba(0,190,180,.75),
rgba(3,32,164,.486),
rgba(0,80,120,.25)
),
url('{{ $setting->hero_image 
    ? asset('storage/'.$setting->hero_image) 
    : asset('assets/images/masjid.jpeg') }}');

background-size:cover;
background-position:center center;
">


<div class="overlay">


<p>
Selamat datang di Official Website
</p>

<h1>
{{ $setting->hero_title }}
</h1>


<h2>
{{ $setting->hero_subtitle }}
</h2>


</div>


</section>



<section class="welcome">


<h2>
Website Resmi Pimpinan Ranting Muhammadiyah Brengkok
</h2>


</section>




<section class="ketua">


@if($setting->foto_ketua)

<img src="{{ asset('storage/'.$setting->foto_ketua) }}">

@else

<img src="{{ asset('assets/images/ketua.png') }}">

@endif


<div>


<h1>
{{ $setting->ketua_nama }}
</h1>


<h3>
{{ $setting->ketua_jabatan }}
</h3>


<p>
{{ $setting->deskripsi }}
</p>


<a href="{{ route('kami') }}" class="btn-card">
    Tentang Kami
</a>


</div>


</section>




<section class="cards">


<div class="card">

<div class="placeholder">


@if($setting->gambar_aum)

<img src="{{ asset('storage/'.$setting->gambar_aum) }}">


@else

<img src="{{ asset('assets/images/default.png') }}">


@endif


</div>

<h2>
{{ $setting->aum_title }}
</h2>


<p>
{{ $setting->aum_description }}
</p>


<a href="{{ route('aum') }}" class="btn-card">
    Selengkapnya
</a>

</div>



<div class="card">

<div class="placeholder">


@if($setting->gambar_ortom)

<img src="{{ asset('storage/'.$setting->gambar_ortom) }}">


@else

<img src="{{ asset('assets/images/default.png') }}">


@endif


</div>

<h2>
{{ $setting->ortom_title }}
</h2>


<p>
{{ $setting->ortom_description }}
</p>


<a href="{{ route('ortom') }}" class="btn-card">
    Selengkapnya
</a>

</div>


</section>


@endsection