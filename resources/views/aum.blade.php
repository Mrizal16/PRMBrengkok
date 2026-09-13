@extends('layouts.app')

@section('content')


<section class="hero aum-hero"
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
Data Amal Usaha
</p>


<h1>
PIMPINAN RANTING MUHAMMADIYAH
</h1>


<h2>
DESA BRENGKOK BRONDONG LAMONGAN
</h2>


</div>


</section>



<section class="aum-container">


@foreach($aums as $aum)


<div class="aum-card">


<div class="aum-image">


@if($aum->gambar)

<img src="{{ asset('storage/'.$aum->gambar) }}">

@else

<img src="{{ asset('assets/images/default.jpg') }}">

@endif


</div>



<h2>
{{ $aum->nama }}
</h2>



<p>
{{ Str::limit($aum->deskripsi, 120, '...') }}
</p>



<a href="{{ route('detail',$aum->slug) }}" 
class="btn-card">

Selengkapnya

</a>



</div>


@endforeach



</section>



@endsection