<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

<title>PRM Brengkok</title>


<!-- Favicon -->
<link rel="icon" type="image/png" 
href="{{ asset('assets/images/logo.png') }}">


<!-- Google Font -->


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    @stack('css')

</head>


<body>


   {{-- Navbar --}}

@if(auth()->check() && auth()->user()->role == 'admin')

    {{-- Navbar Admin --}}
    @include('layouts.navigation')


@else

    {{-- Navbar User/Public --}}
    @include('partials.navbar')

@endif



    {{-- Isi Halaman --}}
    @yield('content')



    {{-- Footer --}}
    @include('partials.footer')


@stack('js')


<script>

function openMenu(){

    let menu = document.getElementById("mobileMenu");

    if(menu){

        menu.classList.toggle("show");

    }

}



function openAdminMenu(){

    let menu = document.getElementById("adminMenu");

    if(menu){

        menu.classList.toggle("admin-show");

    }

}

</script>
</body>

</html>