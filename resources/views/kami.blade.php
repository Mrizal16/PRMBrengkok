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
            Profil Pimpinan Ranting Muhammadiyah Brengkok
        </p>

        <h1>
            PIMPINAN RANTING MUHAMMADIYAH
        </h1>

        <h2>
            DESA BRENGKOK BRONDONG LAMONGAN
        </h2>

    </div>

</section>


{{-- DESKRIPSI TENTANG PRM --}}
<section class="tentang-intro">

    <p>
        Pimpinan Ranting Muhammadiyah (PRM) Desa Brengkok merupakan organisasi
        Muhammadiyah di tingkat desa yang berperan dalam mengembangkan dakwah Islam
        serta meningkatkan kehidupan keagamaan dan sosial masyarakat. PRM Desa Brengkok
        aktif dalam berbagai kegiatan seperti pengajian, pendidikan keagamaan,
        kegiatan sosial, serta pemberdayaan masyarakat.
    </p>

    <p>
        Melalui semangat kebersamaan dan gotong royong, PRM Desa Brengkok berupaya
        memberikan manfaat bagi masyarakat serta mewujudkan kehidupan yang religius,
        harmonis, dan berkemajuan.
    </p>

</section>


{{-- DATA PENGURUS --}}
<section class="pengurus-container">

    @foreach($penguruses as $pengurus)

        <div class="pengurus-card">

            <div class="pengurus-image">

                @if($pengurus->gambar)

                    <img src="{{ asset('storage/'.$pengurus->gambar) }}">

                @else

                    <img src="{{ asset('assets/images/default.jpg') }}">

                @endif

            </div>

            <h2>
                {{ $pengurus->nama }}
            </h2>

            <p>
                {{ $pengurus->jabatan }}
            </p>

        </div>

    @endforeach

</section>

@endsection