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
Data Organisasi Otonom
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



@foreach($ortoms as $ortom)



<div class="aum-card">





<div class="aum-image">



@if($ortom->gambar)


<img src="{{ asset('storage/'.$ortom->gambar) }}"
alt="{{ $ortom->nama }}">



@else


<img src="{{ asset('assets/images/default.jpg') }}">



@endif



</div>





<h2>
{{ $ortom->nama }}
</h2>





<p>
{{ Str::limit($ortom->deskripsi,120,'...') }}
</p>





<a href="{{ route('detail',$ortom->slug) }}" 
class="btn-card">

Selengkapnya

</a>





</div>



@endforeach



</section>



@endsection