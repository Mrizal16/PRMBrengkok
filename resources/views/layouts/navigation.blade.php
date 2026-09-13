<nav class="admin-navbar">


    <div class="admin-logo">
        PRM Brengkok Admin
    </div>



    <button class="admin-hamburger" onclick="openAdminMenu()">

        <span></span>
        <span></span>
        <span></span>

    </button>




    <div class="admin-menu-nav" id="adminMenu">


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



        {{-- Mobile User --}}

        <div class="mobile-user">

<a href="{{ route('admin.dashboard') }}">
    Dashboard Admin
</a>

<span>
    
</span>



            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button type="submit">
                    Logout
                </button>

            </form>


        </div>


    </div>





    {{-- Desktop User --}}

    <div class="admin-user">


        <span>
            {{ auth()->user()->name }}
        </span>



        <a href="{{ route('admin.dashboard') }}" class="dashboard-btn">
            Dashboard
        </a>



        <form method="POST" action="{{ route('logout') }}">

            @csrf

            <button type="submit">
                Logout
            </button>

        </form>


    </div>



</nav>