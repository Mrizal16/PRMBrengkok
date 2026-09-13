<nav class="navbar">


    <div class="logo">

        <img src="{{ asset('assets/images/logo.png') }}">

    </div>



    <div class="hamburger" onclick="openMenu()">

    <span></span>
    <span></span>
    <span></span>

</div>



    <div class="menu" id="mobileMenu">


        <a href="{{ route('home') }}">
            Beranda
        </a>


        <a href="{{ route('aum') }}">
            Data AUM
        </a>


        <a href="{{ route('ortom') }}">
            Data Ortom
        </a>


        <a href="{{ route('kami') }}">
            Tentang Kami
        </a>


    </div>


</nav>