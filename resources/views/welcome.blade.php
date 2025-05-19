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
    <body class="min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('assets/bg/body.jpg') }}');">


        <header class="fixed w-full p-2 z-10">
            <div class="glass-tooth w-full py-2 px-4">

                <div class="max-w-screen-xl mx-auto flex justify-between items-center">

                    <a href="#" class="text-white">
                        <img src="{{  asset('assets/logo/logo-white.png') }}" alt="logo" class="h-12">
                    </a>

                    <nav class="hidden lg:flex space-x-2">
                        <a href="#">
                            Pradžia
                        </a>
                        <a href="#">
                            Straipsniai
                        </a>
                        <a href="#" class="active">
                            Registracija
                        </a>
                        <a href="#">
                            Parduotuvė
                        </a>
                        <a href="#">
                            Paslaugos
                        </a>
                        <a href="#">
                            Kontaktai
                        </a>
                    </nav>

                    <nav class="flex lg:hidden">
                        <a href="#" class="text-white">
                            <img src="{{  asset('assets/menu.png') }}" alt="Meniu" class="h-6 w-6">
                            <div aria-label="status" class="hidden absolute top-0 right-0 status border-none status-md text-white bg-white"></div>
                        </a>
                    </nav>


                </div>


            </div>
        </header>







        <div class="flex flex-col items-center justify-center min-h-screen">
            <div class="flex flex-col items-center justify-center w-full max-w-7xl p-4 mx-auto text-center">

                <img src="{{ asset('assets/logo/logo.png') }}" alt="Trendless" class="w-2/3 max-w-lg mx-auto mt-4 mb-20">

                <h1 class="text-4xl font-bold">Šiuo metu atnaujiname svetainę</h1>
                <p class="mt-4 text-lg">Atsiprašome už nepatogumus.</p>


                <div class="w-full grid grid-cols-3 gap-8 mt-16 text-base md:text-xs lg:text-base">

                    <div class="col-span-3 md:col-span-1 bg-white bg-opacity-60 p-4 rounded-lg border border-[#C1C9AE] outline outline-1 -outline-offset-2 outline-white shadow-xl">
                        <h2 class="text-xl font-bold text-left">Trendless Savanoriai</h2>
                        <div class="h-32 text-left pt-4">
                            Adresas: <a href="https://maps.app.goo.gl/KCcedvckWnDLF8mZ8">Savanorių pr. 4, Vilnius</a><br />
                            Telefonas: <a href="tel:+37068622760">+370 686 22760</a><br />
                            El. paštas: <a href="mailto:b@trendless.lt">b@trendless.lt</a><br />
                            Darbo laikas: I-V 9:00-20:00
                        </div>

                        <div class="h-10 mt-4 mb-8">
                            <a href="https://serveonline.lt/b605ecdc-81b6-4ad3-89c3-a1f963fc1507/company"
                            class="inline-block rounded border border-[#C49B80] outline outline-1 -outline-offset-2 outline-white/50
                            bg-[#C1C9AE] text-white px-4 py-2 hover:bg-[#99AD87] hover:text-white">
                                Registruotis vizitui
                            </a>
                        </div>

                        <div class="h-60 md:h-40 mt-4 -mx-4 -mb-4 rounded-b-lg overflow-hidden">
                            <a href="https://maps.app.goo.gl/KCcedvckWnDLF8mZ8">
                                <img src="{{ asset('assets/bg/savanoriai.jpg') }}" alt="Trendless Savanoriai" class="w-full h-full object-cover grayscale
                                hover:grayscale-0 hover:scale-150 transition-transform duration-500">
                            </a>
                        </div>

                    </div>


                    <div class="col-span-3 md:col-span-1 bg-white bg-opacity-60 p-4 rounded-lg border border-[#C1C9AE] outline outline-1 -outline-offset-2 outline-white shadow-xl">
                        <h2 class="text-xl font-bold text-left">Trendless Braškės</h2>
                        <div class="h-32 text-left pt-4">
                            Adresas: <a href="https://maps.app.goo.gl/yNDaXLEpmvu8iZ5XA">Braškių g. 2B-1, Vilnius</a><br />
                            Telefonas: <a href="tel:+37061559700">+370 615 59700</a><br />
                            El. paštas: <a href="mailto:b@trendless.lt">b@trendless.lt</a><br />

                            <table>
                                <tr>
                                    <td class="pe-1">Darbo laikas:</td>
                                    <td>I-VI 9:00-20:00</td>
                                </tr>
                            </table>

                             
                        </div>

                        <div class="h-10 mt-4 mb-8">
                            <a href="https://serveonline.lt/2f9f13b7-7849-43aa-b8b8-0e7cc2a0491c/company"
                            class="inline-block rounded border border-[#C49B80] outline outline-1 -outline-offset-2 outline-white/50
                            bg-[#C1C9AE] text-white px-4 py-2 hover:bg-[#99AD87] hover:text-white">
                                Registruotis vizitui
                            </a>
                        </div>

                        <div class="h-60 md:h-40 mt-4 -mx-4 -mb-4 rounded-b-lg overflow-hidden">
                            <a href="https://maps.app.goo.gl/yNDaXLEpmvu8iZ5XA">
                                <img src="{{ asset('assets/bg/braskes.jpg') }}" alt="Trendless Braškės" class="w-full h-full object-cover grayscale
                                hover:grayscale-0 hover:scale-150 transition-transform duration-500">
                            </a>
                        </div>

                    </div>



                    <div class="col-span-3 md:col-span-1 bg-white bg-opacity-60 p-4 rounded-lg border border-[#C1C9AE] outline outline-1 -outline-offset-2 outline-white shadow-xl">
                        <h2 class="text-xl font-bold text-left">Trendless Karvelio</h2>
                        <div class="h-32 text-left pt-4">
                            Adresas: <a href="https://maps.app.goo.gl/bqxf6khEXjN1NzpV8">B. Karvelio g. 14, Vilnius</a><br />
                            Telefonas: <a href="tel:+37064481181">+370 644 81181</a><br />
                            El. paštas: <a href="mailto:b@trendless.lt">b@trendless.lt</a><br />
                            Darbo laikas: I-V 9:00-20:00
                        </div>

                        <div class="h-10 mt-4 mb-8">
                            <a href="https://serveonline.lt/29e38c39-aefb-4837-8e82-a2fcc05c1250/company"
                            class="inline-block rounded border border-[#C49B80] outline outline-1 -outline-offset-2 outline-white/50
                            bg-[#C1C9AE] text-white px-4 py-2 hover:bg-[#99AD87] hover:text-white">
                                Registruotis vizitui
                            </a>
                        </div>

                        <div class="h-60 md:h-40 mt-4 -mx-4 -mb-4 rounded-b-lg overflow-hidden">
                            <a href="https://maps.app.goo.gl/bqxf6khEXjN1NzpV8">
                                <img src="{{ asset('assets/bg/karvelio.jpg') }}" alt="Trendless Karvelio" class="w-full h-full object-cover grayscale
                                hover:grayscale-0 hover:scale-150 transition-transform duration-500">
                            </a>
                        </div>

                    </div>

                </div>



            </div>
        </div>


        

    </body>
</html>
