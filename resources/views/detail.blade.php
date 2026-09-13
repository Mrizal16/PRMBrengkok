@extends('layouts.app')

@section('content')

<section class="detail-page">

<div class="detail-wrapper">

    <div class="detail-image">

    <a href="{{ url()->previous() }}" class="btn-kembali">
        ← Kembali
    </a>


    @if($data->gambar)

    <img 
    src="{{ asset('storage/'.$data->gambar) }}"
    class="detail-cover"
    >

    @else

    <img 
    src="{{ asset('assets/images/default.jpg') }}"
    class="detail-cover"
    >

    @endif

</div>


    <div class="detail-content">

        <h1>
            {{ $data->nama }}
        </h1>


        <p>
            {{ $data->deskripsi }}
        </p>


     


    </div>


</div>

</section>

@endsection