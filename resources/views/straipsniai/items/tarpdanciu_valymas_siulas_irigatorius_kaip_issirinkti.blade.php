@extends('html.user')


@section('content')

        <div class="flex flex-col items-center justify-center min-h-screen pb-20">
            <div class="flex flex-col items-center justify-center w-full max-w-5xl p-4 mt-32 mx-auto text-center gap-y-8">

                <h1 class="text-4xl font-bold mb-12">Trendless straipsniai ir naujienos apie odontologiją</h1>

                <div class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Tarpdančių valymas: nuo siūlo iki irigatoriaus. Kaip išsirinkti tinkamiausią įrankį?" 
                    src="{{ asset('assets/straipsniai/tarpdanciu_valymas_siulas_irigatorius_kaip_issirinkti.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Tarpdančių valymas: nuo siūlo iki irigatoriaus. Kaip išsirinkti tinkamiausią įrankį?</h2>

                        <p>Dantų siūlas – nepakeičiama priemonė kasdienėje burnos higienoje. Tačiau, kaip išsirinkti tinkamiausią tarpdančių valymo įrankį, atitinkantį jūsų poreikius?</p>
                    </div>
                </div>


                <div class="trendless-straipsnis">

                    <h3>Dantų siūlas</h3>

                    <img class="trendless-full-image" alt="Dantų siūlas" src="{{ asset('assets/straipsniai/dantu_siulas.jpg') }}" />

                    <p>Universalus įrankis, ypač tinkantis siauriems tarpdančiams, efektyviai pašalina apnašas ir maisto likučius, tačiau reikalauja tam tikros technikos ir gali būti nepatogus žmonėms su ribotu rankų judrumu ar didesniais tarpdančiais. Idealiai tinka kasdieniam naudojimui, ypač vakare, prieš valant dantis šepetėliu, be to, yra nebrangus.</p>

                    <h3>Vaškuotas ar nevaškuotas siūlas?</h3>

                    <p>Abi priemonės pagamintos iš nailono. Vaškuotas dantų siūlas turi ploną vaško sluoksnį ant savo paviršiaus, todėl jis šiek tiek storesnis nei nevaškuotas siūlas, bet lengviau slysta tarp dantų. Taip pat vaškuotas siūlas dažniau būna su skoniu.</p>

                    <h4>Vaškuotas siūlas</h4>

                    <p>Vaškuotas siūlas yra populiarus dėl savo lengvo slydimo tarp tolygiai išsidėsčiusių dantų. Vaškas sustiprina siūlą ir neleidžia jam trūkinėti. Daugeliui tai patogiausias pasirinkimas kasdieniam naudojimui.</p>



                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-8 gap-y-4 px-4 xl:px-12 mb-8">
                        <div class="relative bg-green-100/50 shadow-xl rounded-lg border border-green-500/75 outline -outline-offset-2 outline-white/70">
                            <div class="bg-green-400/50 rounded-t-lg pt-3 pb-2 text-center border-b border-b-white/70 max-h-12">
                                <h4 class="!m-0">Privalumai</h4>
                            </div>
                            <ul class="m-4">
                                <li>Lengvai slysta tarp dantų</li>
                                <li>Patvaresnis, mažiau linkęs trūkinėti.</li>
                                <li>Kai kurie vaškuoti siūlai yra prisotinti eteriniais aliejais ar fermentais, kurie padeda efektyviau pašalinti apnašas.</li>
                            </ul>
                        </div>

                        <div class="relative bg-red-100/50 shadow-xl rounded-lg border border-red-400/75 outline -outline-offset-2 outline-white/70">
                            <div class="bg-red-400/50 rounded-t-lg pt-3 pb-2 text-center border-b border-b-white/70 max-h-12">
                                <h4 class="!m-0">Trūkumai</h4>
                            </div>
                            <ul class="m-4">
                                <li>Dėl vaško šis dantų siūlas yra storesnis. Jei kai kurie jūsų dantys yra suspausti, gali tekti naudoti nevaškuotą siūlą arba irigatorių.</li>
                            </ul>
                        </div>
                    </div>

                    <h4>Nevaškuotas siūlas</h4>

                    <p>Tai idealus pasirinkimas žmonėms, turintiems labai siaurus tarpdančius, kur vaškuotas siūlas gali būti per storas. Tačiau dėl vaško trūkumo šis siūlas yra linkęs greičiau trūkinėti ir susidėvėti. Nevaškuotas siūlas dažnai būna be papildomų skonių, todėl yra laikomas natūralesniu pasirinkimu, sumažinančiu kontaktą su papildomomis cheminėmis medžiagomis.</p>

                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-8 gap-y-4 px-4 xl:px-12 mb-8">
                        <div class="relative bg-green-100/50 shadow-xl rounded-lg border border-green-500/75 outline -outline-offset-2 outline-white/70">
                            <div class="bg-green-400/50 rounded-t-lg pt-3 pb-2 text-center border-b border-b-white/70 max-h-12">
                                <h4 class="!m-0">Privalumai</h4>
                            </div>
                            <ul class="m-4">
                                <li>Plonesnis, todėl idealiai tinka siauriems tarpdančiams.</li>
                                <li>Nėra papildomų cheminių medžiagų, kurios gali būti vaškuotame siūle.</li>
                            </ul>
                        </div>

                        <div class="relative bg-red-100/50 shadow-xl rounded-lg border border-red-400/75 outline -outline-offset-2 outline-white/70">
                            <div class="bg-red-400/50 rounded-t-lg pt-3 pb-2 text-center border-b border-b-white/70 max-h-12">
                                <h4 class="!m-0">Trūkumai</h4>
                            </div>
                            <ul class="m-4">
                                <li>Mažiau patvarus ir gali greičiau susidėvėti.</li>
                                <li>Be apsauginio vaško sluoksnio siūlas greičiau trūkinėja.</li>
                            </ul>
                        </div>
                    </div>


                    <h3>Skonių įvairovė — vaikams ir suaugusiems</h3>

                    <p>Ar žinojote, kad dantų siūlas gali būti įvairių skonių? Mėtų, cinamono ar šokolado skonio siūlai gali paskatinti vaikus (ir net suaugusius) dažniau valytis tarpdančius. Šie siūlai neturi cukraus, todėl nesukelia dantų ėduonies.</p>

                    <p>Jei jūsų vaikai nenoriai valosi tarpdančius, pasiūlykite jiems pasirinkti mėgstamo skonio siūlą. Suaugusiems, kurie dienos metu neturi galimybių pilnai pasirūpinti savo burnos higiena, skoniu papildytas siūlas gali būti puiki paguoda po pietų. O jei mėtų skonio siūlas jums per intensyvus, naudokite jį dienos metu, o vakarui pasirinkite neutralaus skonio.</p>

                    <div class="divider"></div>

                    <h3>Dantų siūlas su laikikliu</h3>

                    <img class="trendless-full-image" alt="Dantų siūlas su laikikliu" src="{{ asset('assets/straipsniai/dantu_siulas_su_laikikliu.jpg') }}" />

                    <p>Patogus pasirinkimas tiems, kuriems sunku naudoti įprastą siūlą dėl riboto rankų judrumo, artrito, nes laikiklis leidžia lengviau pasiekti tolimiausius dantis. Tačiau jis brangesnis už įprastą dantų siūlą.</p>

                    <div class="divider"></div>

                    <h3>Tarpdančių šepetėliai</h3>

                    <img class="trendless-full-image" alt="Tarpdančių šepetėliai" src="{{ asset('assets/straipsniai/tarpdanciu_sepeteliai.jpg') }}" />

                    <p>Idealiai tinka žmonėms su didesniais tarpdančiais, dantenų recesija ar breketais, taip pat implantų priežiūrai. Efektyviai pašalina apnašas ir maisto likučius, tačiau jie netinka siauriems tarpdančiams.</p>

                    <div class="divider"></div>

                    <h3>Irigatorius</h3>

                    <img class="trendless-full-image" alt="Irigatorius" src="{{ asset('assets/straipsniai/irigatorius.jpg') }}" />

                    <p>Tai papildomas įrankis, nepakeičiantis, o papildantis tradicines tarpdančių valymo priemones. Jis ypač tinka žmonėms, turintiems dantenų problemų, breketus ar sunkumų naudojant kitas priemones. Irigatorius gerai pašalina maisto likučius ir apnašas iš sunkiai pasiekiamų vietų masažuodamas dantenas. Tačiau jis nepašalina kietų apnašų.</p>

                    <h3>Neapsisprendžiate kaip pasirinkti tinkamiausią priemonę?</h3>

                    <p>Jums padės Trendless specialistai — odontologai ir higienistai. Įvertinsime jūsų burnos būklę ir rekomenduosime tinkamiausią tarpdančių valymo įrankį. Teisinga technika yra tokia pat svarbi, kaip ir pasirinktas įrankis, tad būtinai apmokysime.</p>


                    <p class="text-right">
                        <a href="http://trendless.lt/" title="Trendless odontologijos klinikų gydytojai" class="hover:underline">
                            Trendless odontologijos klinikos
                        </a>
                    </p>

                </div>



            </div>
        </div>

@endsection

