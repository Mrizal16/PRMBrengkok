<x-guest-layout>


<div class="login-page">


    <div class="login-card">


        <div class="login-logo">

            <img src="{{ asset('assets/images/logo.png') }}">

        </div>



        <h1>
            PRM Brengkok
        </h1>


        <p class="login-subtitle">
            Sistem Admin Website
        </p>



        <form method="POST" action="{{ route('login') }}">

            @csrf



            <!-- Email -->

            <div class="login-group">

                <label>
                    Email
                </label>


                <input 
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                >

            </div>



            <!-- Password -->

            <div class="login-group">

                <label>
                    Password
                </label>


                <input 
                    type="password"
                    name="password"
                    required
                >

            </div>




            <div class="login-option">


                <label>

                    <input 
                    type="checkbox"
                    name="remember">

                    Ingat saya

                </label>


            </div>



            <button class="login-button">

                Masuk

            </button>



        </form>



    </div>


</div>



</x-guest-layout>