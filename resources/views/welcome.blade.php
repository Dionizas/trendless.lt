<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trendless</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Castoro:ital@0;1&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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
                                    <td>I-V 9:00-20:00</td>
                                </tr>
                                <tr>
                                    <td class="pe-1"></td>
                                    <td>VI - Išankstinės registracijos</td>
                                </tr>
                            </table>

                             
                        </div>

                        <div class="h-10 mt-4 mb-8">

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
                            Klinikos atidarymas 2025-02-01 dieną.
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
