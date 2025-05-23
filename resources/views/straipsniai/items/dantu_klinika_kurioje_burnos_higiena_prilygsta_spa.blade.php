@extends('html.user')


@section('content')

        <div class="flex flex-col items-center justify-center min-h-screen pb-20">
            <div class="flex flex-col items-center justify-center w-full max-w-5xl p-4 mt-32 mx-auto text-center gap-y-8">

                <h1 class="text-4xl font-bold mb-12">Trendless straipsniai ir naujienos apie odontologiją</h1>

                <div class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Dantų klinika, kurioje burnos higiena prilygsta SPA: Vilniuje atidarytas „Trendless” butikas" 
                    src="{{ asset('assets/straipsniai/dantu_klinika_kurioje_burnos_higiena_prilygsta_spa.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Dantų klinika, kurioje burnos higiena prilygsta SPA: Vilniuje atidarytas „Trendless” butikas</h2>

                        <p>Ar kada pagalvojote, kad burnos higiena gali būti ne tik varginanti užduotis, bet malonumas? 
                            Pamirškite nejaukias dantų klinikas ir skubotas procedūras. Trendless atveria duris į butiką, kuriame 
                            jūsų šypsena suspindės iš naujo.</p>
                    </div>
                </div>


                <div class="trendless-straipsnis">

                    <p>Įsivaizduokite. Jūs įžengiate į ramybės oazę, kurioje švelnus eterinių aliejų kvapas ir raminanti muzika nukelia jus į kitą pasaulį. Čia nėra vietos skubėjimui ir nerimui, tik individualus dėmesys ir rūpestis. Ir be abejonės, jus pasitinka patyrę specialistai, kurie atlieka profesionalią burnos higieną, naudodami naujausias technologijas ir aukščiausios kokybės priemones.</p>

                    <h3>Jūsų šypsena nusipelno daugiau nei tik greito valymo, jūs nusipelnėte prabangaus ritualo.</h3>

                    <p>Trendless butike jūsų laukia ne tik procedūra, o patirtis. Mūsų kuriama SPA atmosfera, personalizuotos dantų priežiūros priemonės ir apmokymai, kaip tinkamai prižiūrėti dantis namuose, padės jums atrasti naują požiūrį į burnos higieną.</p>

                    <h3>Kaip dažnai atlikti profesionalią burnos higieną?</h3>

                    <p>Lankytis pas higienistą rekomenduojama bent du kartus per metus. Tačiau kai kuriems žmonėms, pavyzdžiui, sergantiems dantenų ligomis ar nešiojantiems breketus, gali prireikti dažnesnių vizitų.</p>

                    <p>Apsilankymas pas burnos higienistą yra profilaktinė priemonė, padedanti išvengti sunkesnių dantų ir dantenų ligų. Sveika šypsena – investicija į ilgalaikę sveikatą.</p>

                    <h3>5 priežastys nusišypsoti arba kodėl profesionali burnos higiena būtina?</h3>

                    <p>Deja, net ir kruopščiai prižiūrint dantis namuose nepavyksta išvengti dantų ligų. Štai kodėl profesionali burnos higiena yra tokia svarbi.</p>

                    <ol class="marker:font-semibold">
                        <li><span class="font-semibold">Pašalina dantų akmenis ir apnašas</span>
                            <ul class="!mb-0">
                                <li><span class="font-semibold">Dantų akmenys</span> – tai sukietėjusios apnašos, kurios negali būti pašalintos įprastu dantų valymu. Dantų akmenys kaupiasi ant dantų ir po dantenomis, sukeldami dantenų uždegimą ir ligas.</li>
                                <li><span class="font-semibold">Apnašos</span> — tai minkštos, lipnios bakterijų sankaupos, kurios susidaro ant dantų. Apnašos gali sukelti ėduonį ir dantenų ligas.</li>
                            </ul>
                            Vizito metu higienistas specialiais instrumentais pašalina dantų akmenis ir apnašas, taip užkertant kelią dantų ligų vystymuisi.
                        </li>
                        <li><span class="font-semibold">„Atšviežina” burnos kvapą</span><br>
                            Pašalinus apnašas ir akmenis, burnos kvapas tampa gaivesnis ir malonesnis.
                        </li>
                        <li><span class="font-semibold">Pagerina bendrą sveikatą</span><br>
                            Profesionalios burnos higienos metu pašalinamos bakterijos ir toksinai, kurie gali sukelti ne tik dantų, bet ir kitas sveikatos problemas.
                        </li>
                        <li><span class="font-semibold">Individualios rekomendacijos</span><br>
                            Higienistas įvertins jūsų burnos būklę ir suteiks individualias rekomendacijas, kaip tinkamai prižiūrėti dantis namuose, kokias priemones naudoti.
                        </li>
                    </ol>

                    <h3>Nuo paskutinio vizito praėjo daugiau nei pusė metų? Kviečiame pasimatyti.</h3>

                    <p>Jei jums burnos higiena varginantis užsiėmimas, atraskite šią procedūrą iš naujo ir atsipalaiduokite Trendless. Mūsų tikslas, jog iš butiko išeitumėte blizgančia ir plačia šypsena.</p>

                    <p>Laukiame jūsų nuo kovo 31 d.</p>





                    <div class="w-full xl:w-1/3 bg-white/60 p-4 rounded-lg border border-[#C1C9AE] outline -outline-offset-2 outline-white shadow-xl mb-8">
                        <h2 class="text-xl font-bold text-left">Trendless Karvelio</h2>
                        <div class="h-32 text-left pt-4">
                            Adresas: <a href="https://maps.app.goo.gl/bqxf6khEXjN1NzpV8">B. Karvelio g. 14, Vilnius</a><br>
                            Telefonas: <a href="tel:+37064481181">+370 644 81181</a><br>
                            El. paštas: <a href="mailto:b@trendless.lt">b@trendless.lt</a><br>
                            Darbo laikas: I-V 9:00-20:00
                        </div>

                        <div class="h-10 mt-4 mb-8 text-center">
                            <a href="https://serveonline.lt/29e38c39-aefb-4837-8e82-a2fcc05c1250/company" class="inline-block rounded border border-[#C49B80] outline -outline-offset-2 outline-white/50
                            bg-[#C1C9AE] text-white px-4 py-2 hover:bg-[#99AD87] hover:text-white">
                                Registruotis vizitui
                            </a>
                        </div>

                        <div class="h-60 md:h-40 mt-4 -mx-4 -mb-4 rounded-b-lg overflow-hidden">
                            <a href="https://maps.app.goo.gl/bqxf6khEXjN1NzpV8">
                                <img src="http://127.0.0.1:8000/assets/bg/karvelio.jpg" alt="Trendless Karvelio" class="w-full h-full object-cover grayscale
                                hover:grayscale-0 hover:scale-150 transition-transform duration-500">
                            </a>
                        </div>

                    </div>




                    

                    <p class="text-right">
                        <a href="http://trendless.lt/" title="Trendless odontologijos klinikų gydytojai" class="hover:underline">
                            Trendless odontologijos klinikos
                        </a>
                    </p>

                </div>



            </div>
        </div>

@endsection