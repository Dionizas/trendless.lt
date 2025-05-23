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
            <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">
                <div class="navbar glass w-full max-w-7xl py-2 px-4 mx-auto rounded-xl !border-1 !border-[#C1C9AE] outline -outline-offset-2 outline-white/50 shadow-lg">
                    <a href="/" class="min-w-[180px] my-2 mx-2 flex-1">
                        <img src="{{  asset('assets/logo/logo.png') }}" alt="logo" class="h-12">
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



    </body>
</html>
