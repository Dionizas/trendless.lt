@extends('html.user')


@section('content')

        <div class="flex flex-col items-center justify-center min-h-screen pb-20">
            <div class="flex flex-col items-center justify-center w-full max-w-7xl p-4 mt-32 mx-auto text-center gap-y-12">

                <h1 class="text-4xl font-bold mb-12">Trendless straipsniai ir naujienos apie odontologiją</h1>


                <a href="{{ route('straipsniai.show', ['item' => 'estetinis_plombavimas_graziai_sypsenai']) }}" class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Estetinis plombavimas gražiai ir sveikai šypsenai atkurti" 
                    src="{{ asset('assets/straipsniai/estetinis_plombavimas_graziai_sypsenai.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Estetinis plombavimas gražiai ir sveikai šypsenai atkurti</h2>

                        <p>Estetinis plombavimas – tai moderni odontologijos sritis, leidžianti subtiliai ir efektyviai atkurti dantis, 
                        suteikiant jiems natūralų grožį ir harmoningą išvaizdą. „Trendless” klinikoje tikime, kad kiekviena šypsena yra 
                        unikali ir verta suspindėti. Sužinokite, kaip estetinės plombavimo procedūros gali pakeisti jūsų šypseną!</p>
                    </div>
                </a>


                <a href="{{ route('straipsniai.show', ['item' => 'protezavimo_sprendimai_jusu_sypsenai_ir_burnos_sveikatai']) }}" class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Protezavimas: 5 sprendimai jūsų šypsenai ir burnos sveikatai" 
                    src="{{ asset('assets/straipsniai/protezavimo_sprendimai_jusu_sypsenai_ir_burnos_sveikatai.webp') }}"  />

                    <div class="trendless-straipsnis-intro">
                        <h2>Protezavimas: 5 sprendimai jūsų šypsenai ir burnos sveikatai</h2>

                        <p>Prarasti ar stipriai pažeisti dantys – tai ne tik estetikos klausimas. Tai gali ženkliai pabloginti 
                            kramtymo funkciją, paveikti kalbą ir ilgainiui netgi keisti veido bruožus. Laimei, šiuolaikinė odontologija 
                            siūlo įvairius dantų protezus, kurie padeda atkurti prarastas galimybes ir vėl džiaugtis pilnaverčiu gyvenimu.</p>
                    </div>
                </a>


                <a href="{{ route('straipsniai.show', ['item' => 'odontologijos_pacientu_baimes_sprendimai']) }}" class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Kaip sprendžiame 5 dažniausias pacientų baimes?" 
                    src="{{ asset('assets/straipsniai/odontologijos_pacientu_baimes_sprendimai.webp') }}"  />

                    <div class="trendless-straipsnis-intro">
                        <h2>Kaip sprendžiame 5 dažniausias pacientų baimes?</h2>

                        <p>Vizitas pas odontologą daugeliui vis dar kelia šiurpuliukus. Net ir žinant apie 
                            šiuolaikinės odontologijos galimybes, baimės yra giliai įsišaknijusios. Laikas bėga, o 
                            netvarkomos dantų problemos ne tik progresuoja, bet ir kasdien didina nerimą.</p>
                    </div>
                </a>


                <a href="{{ route('straipsniai.show', ['item' => 'dantu_griezimas_nakti_tylus_priesas_jusu_sypsenai']) }}" class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Dantų griežimas naktį: tylus priešas jūsų šypsenai" 
                    src="{{ asset('assets/straipsniai/dantu_griezimas_nakti_tylus_priesas_jusu_sypsenai.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Dantų griežimas naktį: tylus priešas jūsų šypsenai</h2>

                        <p>Ar dažnai rytais pabundate su žandikaulio ar galvos, kaklo skausmu? 
                            Tai gali būti naktinio dantų griežimo, mediciniškai vadinamo bruksizmu, 
                            požymis. Daugelis žmonių net nesuvokia, kad griežia dantimis miegodami, 
                            tačiau reguliarus naktinis bruksizmas gali rimtai pakenkti jūsų dantų ir burnos sveikatai.</p>
                    </div>
                </a>


                <a href="{{ route('straipsniai.show', ['item' => 'neapsigaukite_paneigiame_populiariausius_mitus_apie_burnos_sveikata']) }}" class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Neapsigaukite! Paneigiame 5 populiariausius mitus apie burnos sveikatą" 
                    src="{{ asset('assets/straipsniai/neapsigaukite_paneigiame_populiariausius_mitus_apie_burnos_sveikata.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Neapsigaukite! Paneigiame 5 populiariausius mitus apie burnos sveikatą</h2>

                        <p>Sklando įvairių nuomonių ir įsitikinimų apie dantų sveikatą, tačiau ne visi jie yra teisingi. 
                            Tikėjimas klaidingais mitais gali lemti netinkamą burnos priežiūrą ir rimtesnes sveikatos problemas. 
                            Paneigsime mitus, kuriuos dažniausiai girdime iš savo pacientų.</p>
                    </div>
                </a>


                <a href="{{ route('straipsniai.show', ['item' => 'dantu_balinimo_juosteles_ar_trumpalaikis_rezultatas_neatsilieps_ilgalaike_zala']) }}" class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Dantų balinimo juostelės: ar trumpalaikis rezultatas neatsilieps ilgalaike žala?" 
                    src="{{ asset('assets/straipsniai/dantu_balinimo_juosteles_ar_trumpalaikis_rezultatas_neatsilieps_ilgalaike_zala.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Dantų balinimo juostelės: ar trumpalaikis rezultatas neatsilieps ilgalaike žala?</h2>

                        <p>Natūralu, kad daugelis ieško būdų, kaip pašviesinti savo dantis. Ir čia į pagalbą skuba įvairios priemonės, 
                            o viena populiariausių – dantų balinimo juostelės. Tačiau ar jos tikrai tokios veiksmingos, kaip žada reklamose?</p>
                    </div>
                </a>


                <a href="{{ route('straipsniai.show', ['item' => 'kaip_isvengti_skausmingu_vizitu_pas_odontologa']) }}" class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Kaip išvengti skausmingų vizitų pas odontologą?" 
                    src="{{ asset('assets/straipsniai/kaip_isvengti_skausmingu_vizitu_pas_odontologa.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Kaip išvengti skausmingų vizitų pas odontologą?</h2>

                        <p>Dažnai manoma, kad odontologo kabineto duris praverti reikia tik tada, kai suskausta dantį. 
                            Tačiau moderni odontologija remiasi principu, kad geriausias gydymas yra prevencija. 
                            Čia į pagalbą ateina burnos higienistas – specialistas, kurio pagrindinis tikslas yra padėti 
                            jums išvengti burnos ligų ir taip sumažinti poreikį lankytis pas odontologą dėl gydymo.</p>
                    </div>
                </a>


                <a href="{{ route('straipsniai.show', ['item' => 'tarpdanciu_valymas_siulas_irigatorius_kaip_issirinkti']) }}" class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Tarpdančių valymas: nuo siūlo iki irigatoriaus. Kaip išsirinkti tinkamiausią įrankį?" 
                    src="{{ asset('assets/straipsniai/tarpdanciu_valymas_siulas_irigatorius_kaip_issirinkti.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Tarpdančių valymas: nuo siūlo iki irigatoriaus. Kaip išsirinkti tinkamiausią įrankį?</h2>

                        <p>Dantų siūlas – nepakeičiama priemonė kasdienėje burnos higienoje. Tačiau, kaip išsirinkti tinkamiausią tarpdančių valymo įrankį, atitinkantį jūsų poreikius?</p>
                    </div>
                </a>


                <a href="{{ route('straipsniai.show', ['item' => 'alternatyvos_fluoridui_ka_rinktis_sveikai_sypsenai']) }}" class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Alternatyvos fluoridui: ką rinktis sveikai šypsenai?" 
                    src="{{ asset('assets/straipsniai/alternatyvos_fluoridui_ka_rinktis_sveikai_sypsenai.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Alternatyvos fluoridui: ką rinktis sveikai šypsenai?</h2>

                        <p>Nors fluoridas yra efektyvus ingredientas dantų priežiūroje, dėl įvairių priežasčių auga 
                            susidomėjimas alternatyvomis. Kiekvienas iš mūsų nusipelnė sveikos ir gražios šypsenos, 
                            tad apžvelkime, ką galite rasti parduotuvių lentynose be fluorido.</p>
                    </div>
                </a>


                <a href="{{ route('straipsniai.show', ['item' => 'dantu_klinika_kurioje_burnos_higiena_prilygsta_spa']) }}" class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Dantų klinika, kurioje burnos higiena prilygsta SPA: Vilniuje atidarytas „Trendless” butikas" 
                    src="{{ asset('assets/straipsniai/dantu_klinika_kurioje_burnos_higiena_prilygsta_spa.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Dantų klinika, kurioje burnos higiena prilygsta SPA: Vilniuje atidarytas „Trendless” butikas</h2>

                        <p>Ar kada pagalvojote, kad burnos higiena gali būti ne tik varginanti užduotis, bet malonumas? 
                            Pamirškite nejaukias dantų klinikas ir skubotas procedūras. Trendless atveria duris į butiką, kuriame 
                            jūsų šypsena suspindės iš naujo.</p>
                    </div>
                </a>


            </div>
        </div>

@endsection








