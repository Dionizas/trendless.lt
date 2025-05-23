@extends('html.user')


@section('content')

        <div class="flex flex-col items-center justify-center min-h-screen pb-20">
            <div class="flex flex-col items-center justify-center w-full max-w-7xl p-4 mt-32 mx-auto text-center">


                <h1 class="text-4xl font-bold mb-12">Trendless - nauja dantų priežiūros kultūra.</h1>

                <p class="mt-4 text-lg text-justify">Trendless skatina tvarią dantų priežiūros kultūra, kuri užtikrina sveikus
                    dantis visam gyvenimui ir padeda išvengti netikėtų sveikatos krizių bei
                    finansinių siurprizų. Mes tikime, kad nė vienas pacientas neturi kentėti
                    dėl netikėtų dantų skausmo siurprizų, todėl siekiame sukurti dantų
                    priežiūros sistemą, kuri užtikrintų teisingus pacientų įpročius ir padėtų
                    išvengti brangių bei skausmingų dantų gydymo procedurų pačiu
                    netinkamiausiu metu. Trendless atranda vietą kiekvienam
                    svajojančiam apie nuolatos sveikus dantis ir rūpestingą
                    bendruomenę, kuri padeda formuoti prasmingus dantų priežiūros
                    įpročius.</p>


                <div class="w-full grid grid-cols-3 gap-8 mt-20 text-base md:text-xs lg:text-base">

                    <div class="col-span-3 md:col-span-1 bg-white/60 p-4 rounded-lg border border-[#C1C9AE] outline -outline-offset-2 outline-white shadow-xl">
                        <h2 class="text-xl font-bold text-left">Trendless Savanoriai</h2>
                        <div class="h-32 text-left pt-4">
                            Adresas: <a href="https://maps.app.goo.gl/KCcedvckWnDLF8mZ8">Savanorių pr. 4, Vilnius</a><br />
                            Telefonas: <a href="tel:+37068622760">+370 686 22760</a><br />
                            El. paštas: <a href="mailto:b@trendless.lt">b@trendless.lt</a><br />
                            Darbo laikas: I-V 9:00-20:00
                        </div>

                        <div class="h-10 mt-4 mb-8">
                            <a href="https://serveonline.lt/b605ecdc-81b6-4ad3-89c3-a1f963fc1507/company"
                            class="inline-block rounded border border-[#C49B80] outline -outline-offset-2 outline-white/50 bg-[#C1C9AE] text-white px-4 py-2 hover:bg-[#99AD87] hover:text-white">
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


                    <div class="col-span-3 md:col-span-1 bg-white/60 p-4 rounded-lg border border-[#C1C9AE] outline -outline-offset-2 outline-white shadow-xl">
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
                            class="inline-block rounded border border-[#C49B80] outline -outline-offset-2 outline-white/50
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



                    <div class="col-span-3 md:col-span-1 bg-white/60 p-4 rounded-lg border border-[#C1C9AE] outline -outline-offset-2 outline-white shadow-xl">
                        <h2 class="text-xl font-bold text-left">Trendless Karvelio</h2>
                        <div class="h-32 text-left pt-4">
                            Adresas: <a href="https://maps.app.goo.gl/bqxf6khEXjN1NzpV8">B. Karvelio g. 14, Vilnius</a><br />
                            Telefonas: <a href="tel:+37064481181">+370 644 81181</a><br />
                            El. paštas: <a href="mailto:b@trendless.lt">b@trendless.lt</a><br />
                            Darbo laikas: I-V 9:00-20:00
                        </div>

                        <div class="h-10 mt-4 mb-8">
                            <a href="https://serveonline.lt/29e38c39-aefb-4837-8e82-a2fcc05c1250/company"
                            class="inline-block rounded border border-[#C49B80] outline -outline-offset-2 outline-white/50
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


@endsection


