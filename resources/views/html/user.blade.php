<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trendless</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">


        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NRZRBBTL');</script>
        <!-- End Google Tag Manager -->


    </head>
    <body class="min-h-screen bg-cover bg-center bg-fixed items-center justify-center" style="background-image: url('{{ asset('assets/bg/body.jpg') }}');">


        <header class="drawer fixed w-full p-2 z-10">
            <input id="my-drawer-3" type="checkbox" title="Navigation" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">
                <div class="navbar glass w-full max-w-7xl py-2 px-4 mx-auto rounded-xl !border-1 !border-[#C1C9AE] outline -outline-offset-2 outline-white/50 shadow-lg">
                    <a href="/" class="min-w-[180px] my-2 mx-2 flex-1">
                        <img src="{{  asset('assets/logo/logo.png') }}" alt="Trendless odontologijos klinikos" class="h-12">
                    </a>
                    <div class="hidden flex-none lg:block">
                        <ul class="menu menu-horizontal text-lg">
                            <li><a href="{{ route('kontaktai.index') }}">KONTAKTAI</a></li>
                            <li><a href="{{ route('straipsniai.index') }}">STRAIPSNIAI</a></li>
                            <li><a href="{{ route('kainos.index') }}">KAINORAŠTIS</a></li>
                        </ul>
                    </div>
                    <div class="flex-none lg:hidden">
                        <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-6 w-6 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </label>
                    </div>
                </div>
            </div>
            <div class="drawer-side">
                <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu min-h-full min-w-80 p-4 text-lg" style="background-image: url('{{ asset('assets/bg/body.jpg') }}');">
                    <li><a href="{{ route('kontaktai.index') }}">KONTAKTAI</a></li>
                    <li><a href="{{ route('straipsniai.index') }}">STRAIPSNIAI</a></li>
                    <li><a href="{{ route('kainos.index') }}">KAINORAŠTIS</a></li>
                </ul>
            </div>
        </header>


        
        @yield('content')


        <!--
        <section class="w-full pb-8 px-4">
            <div class="max-w-7xl mx-auto px-8 py-12 rounded-lg border border-[#405850] outline -outline-offset-2 outline-white/50 shadow-xl bg-linear-to-br from-[#405850] via-[#708f84] to-[#405850] animate-uoga block xl:flex gap-x-8 gap-y-4">


                <div class="w-full lg:w-1/3">

                    <h2 class="text-2xl md:text-3xl font-bold text-base-300 mb-4">Sekite mus</h2>


                    <a href="https://www.facebook.com/btrendless" target="_blank" class="icon-[circum--facebook] w-10 h-10 text-white/70 transition-all duration-200 hover:text-white hover:rotate-28"></a>

                    <a href="https://www.linkedin.com/company/trendless-dental/" target="_blank" class="icon-[circum--linkedin] w-10 h-10 text-white/70 transition-all duration-200 hover:text-white hover:rotate-28"></a>

                    <a href="https://www.instagram.com/trendless_dental/" target="_blank" class="icon-[circum--instagram] w-10 h-10 text-white/70 transition-all duration-200 hover:text-white hover:rotate-28"></a>



                </div>




                <div class="divider lg:divider-horizontal"></div>




                <div class="w-full lg:grow">

                    <h2 class="text-xl md:text-3xl text-base-300 mb-4">Prenumeruokite naujienas</h2>

                    <p class="text-base-100 mb-6 text-center">Gaukite naujausią informaciją apie mūsų paslaugas, akcijas ir straipsnius tiesiai į savo el. paštą.</p>

                    <form action="#" method="POST" class="flex xl:flex-row items-center justify-center gap-4">
                        @csrf
                        <input type="email" name="email" placeholder="Įveskite savo el. paštą" class="input bg-white/80 rounded border-2 border-[#C49B80] !outline !-outline-offset-2 !outline-white focus:border-green-900 shadow-xl w-full md:w-1/2" required>
                        <button type="submit" class="btn btn-primary font-semibold rounded border border-[#C49B80] outline -outline-offset-2 outline-white/50 shadow-xl">Prenumeruoti</button>
                    </form>



                </div>

            </div>
        </section>
        -->

    </body>
</html>
