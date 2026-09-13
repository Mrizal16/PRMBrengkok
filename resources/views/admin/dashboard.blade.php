@extends('layouts.app')


@section('content')


<section class="admin-dashboard">


    <div class="admin-header">

        <h1>
            Dashboard Admin PRM Brengkok
        </h1>


        <p>
            Selamat datang, 
            <strong>{{ auth()->user()->name }}</strong>
        </p>

    </div>



    <div class="admin-menu">


        <a href="{{ route('admin.setting.edit') }}" class="admin-card">

            <h3>
                Kelola Profil
            </h3>

            <p>
                Mengatur informasi profil PRM Brengkok
            </p>

        </a>



        <a href="{{ route('admin.aum.index') }}" class="admin-card">

            <h3>
                Kelola AUM
            </h3>

            <p>
                Mengatur data Amal Usaha Muhammadiyah
            </p>

        </a>



        <a href="{{route('admin.ortom.index')}}" 
class="admin-card">

            <h3>
                Kelola ORTOM
            </h3>

            <p>
                Mengatur Organisasi Otonom Muhammadiyah
            </p>

        </a>



       <a href="{{ route('admin.pengurus.index') }}" class="admin-card">

            <h3>
                Kelola Pengurus
            </h3>

            <p>
                Mengatur struktur kepengurusan
            </p>

        </a>



    </div>


</section>


@endsection