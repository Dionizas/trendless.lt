@extends('html.user')


@section('content')

        <div class="flex flex-col items-center justify-center min-h-screen pb-20">
            <div class="flex flex-col items-center justify-center w-full max-w-5xl p-4 mt-32 mx-auto text-center gap-y-8">

                <h1 class="text-4xl font-bold mb-12">Trendless straipsniai ir naujienos apie odontologiją</h1>

                <div class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Protezavimas: 5 sprendimai jūsų šypsenai ir burnos sveikatai" 
                    src="{{ asset('assets/straipsniai/protezavimo_sprendimai_jusu_sypsenai_ir_burnos_sveikatai.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Protezavimas: 5 sprendimai jūsų šypsenai ir burnos sveikatai</h2>

                        <p>Prarasti ar stipriai pažeisti dantys – tai ne tik estetikos klausimas. Tai gali ženkliai pabloginti 
                            kramtymo funkciją, paveikti kalbą ir ilgainiui netgi keisti veido bruožus. Laimei, šiuolaikinė odontologija 
                            siūlo įvairius dantų protezus, kurie padeda atkurti prarastas galimybes ir vėl džiaugtis pilnaverčiu gyvenimu.</p>
                    </div>
                </div>


                <div class="trendless-straipsnis">

                    <p>Dantų protezai atlieka daug daugiau nei tik gražina šypseną. Jie padeda atkurti gebėjimą kramtyti, o tai svarbu tinkamam virškinimui. Be to, trūkstami dantys gali lemti žandikaulio kaulo nykimą ir kelti pavojų likusiems dantims.</p>

                    <p>Apžvelgsime penkis pagrindinius dantų protezų tipus, kad galėtumėte geriau suprasti galimus sprendimus.</p>

                    <h3>1. &nbsp; Dantų vainikėliai – pažeisto danties apsauga ir atkūrimas</h3>

                    <p>Vainikėlis – tai tarsi naujas apvalkalas pažeistam dančiui. Jie gali būti metaliniai arba pagaminti iš porceliano. Vainikėliai dažnai yra patikimas ilgalaikis sprendimas nuskilusiems, įskilusiems ar stipriai nudilusiems dantims. Tiesa, moksliniai tyrimai rodo, kad stipriai atstatytiems dantims išlieka didesnė gedimo rizika.</p>
                    
                    <p>Paprastai vainikėlio gamyba vyksta per du vizitus. Pirmojo metu paimamas dantų atspaudas, jei reikia, gydomos dantų ertmės, apšlifuojamas dantis ir uždedamas laikinas vainikėlis. Laboratorijoje pagaminus nuolatinį vainikėlį, antrojo vizito metu jis cementuojamas ant danties. „Trendless” klinikoje galime pasiūlyti ir vienos dienos vainikėlius.</p>
                    
                    <p>Tinkamai prižiūrimas vainikėlis gali tarnauti ilgai – net iki 15 metų ar daugiau. Dantį su vainikėliu reikia valyti taip pat, kaip ir kitus dantis. Vis dėlto, laikui bėgant vainikėlis gali įskilti ar nuskilti, o jį laikantis cementas gali tapti mažiau patvarus, sudarydamas sąlygas bakterijoms patekti ir infekuoti dantį.</p>

                    <h3>2. &nbsp; Dantų implantai – patikimas trūkstamų dantų pakaitalas</h3>

                    <p>Dantų implantas yra vienas iš būdų pakeisti prarastą dantį. Tai tarsi į žandikaulio kaulą įsriegiamas varžtelis, kuris vėliau prigyja, aplink jį susiformuojant naujam kauliniam audiniui.</p>

                    <p>Implantavimo procedūra paprastai apima:</p>

                    <ul>
                        <li>Sraigtinio implanto įsriegimą į žandikaulio kaulą.</li>
                        <li>Vėliau (kartais po kelių mėnesių, kai prigyja kaulas) pritvirtinama atrama, ant kurios bus dedamas vainikėlis.</li>
                        <li>Galiausiai prie atramos cementuojamas vainikėlis, atkartojantis gretimų dantų išvaizdą.</li>
                    </ul>

                    <p>Moksliniai tyrimai rodo, kad implantai dažnai yra patvarūs ir gali reikšmingai pagerinti gyvenimo kokybę. Vis dėlto, kaip ir bet kuri medicininė procedūra, implantavimas gali turėti tam tikrų komplikacijų, pavyzdžiui, atsilaisvinęs sraigtas, cemento gedimas, porceliano lūžis ar aplinkinių audinių problemos.</p>

                    <p>Sprendimas tarp implantų ir protezų dažnai priklauso nuo kainos ir žandikaulio kaulo būklės. Implantai gali būti brangesni, o jų įdėjimui reikalingas pakankamas kaulo kiekis.</p>

                    <h3>3. &nbsp; Dantų tiltai – tarpinis sprendimas tarp protezų ir implantų</h3>

                    <p>Jei trūksta vieno ar kelių dantų, dantų tiltas gali būti tinkamas sprendimas. Tiltas užpildo tarpą, likusį po prarastų dantų. Jis tvirtinamas prie gretimų natūralių dantų, kurie yra apšlifuojami, ir sudarytas iš vieno ar kelių dirbtinių dantų – tarpinių dantų. Kartais tiltas gali būti tvirtinamas ir prie implantų, siekiant didesnio stabilumo.</p>
                    <p>Dažnai tiltai gaminami iš porceliano, kad atrodytų kaip natūralūs dantys. Juos reikia reguliariai valyti šepetėliu ir siūlu, kartais naudojant specialias priemones siūlui įvesti tarp tilto ir dantenų.</p>
                    <p>Tilto gamybos procesas paprastai apima du vizitus:</p>
                    <ul>
                        <li>Pirmojo metu apšlifuojami atraminiai dantys ir paimamas burnos atspaudas. Gali būti pagamintas laikinas tiltas.</li>
                        <li>Antrojo vizito metu pritaikomas ir cementuojamas nuolatinis tiltas.</li>
                    </ul>

                    <p>Tinkamai pagamintas tiltas gali tarnauti ilgai, tačiau dažniausiai tikimasi, kad jis tarnaus 5–15 metų. Tilto kaina gali svyruoti priklausomai nuo tarpinių dantų skaičiaus ir kitų faktorių.</p>

                    <h3>4. &nbsp; Dantų protezai – išimami ir fiksuoti sprendimai</h3>

                    <p>Dantų protezai – tai prie dantenų priglundantys įtaisai, kurie atrodo ir veikia kaip natūralūs dantys. Jie gali būti pilni (keičiantys visus dantis) arba daliniai (keičiantys tik trūkstamus dantis). Protezai gali būti išimami (reikalaujantys kasdienio valymo) arba fiksuoti (pavyzdžiui, ant implantų).</p>

                    <p>Yra ir laikini daliniai protezai, kurie naudojami trumpą laiką, kol bus pagaminti nuolatiniai protezai.</p>

                    <h3>5. &nbsp; Dantų laminatės – estetinė dantų išvaizdos korekcija</h3>

                    <p>Laminatės – tai ploni, natūraliai atrodantys apvalkalai, kurie dengia natūralius dantis, pagerindami jų spalvą ir išvaizdą. Prieš dedant laminates, dažnai reikia šiek tiek nušlifuoti danties emalį ir paimti atspaudą. Laboratorijoje pagamintos laminatės vėliau cementuojamos prie dantų. Norint, kad laminatės laikytųsi, dantys turi būti pakankamai sveiki. Laminatės gali tarnauti 10–15 metų.</p>


                    <h3>Dantų protezų nauda</h3>

                    <ul>
                        <li>Pagerina dantų išvaizdą ir didina pasitikėjimą savimi.</li>
                        <li>Atkuria kramtymo funkciją ir leidžia mėgautis įvairiu maistu.</li>
                        <li>Palaiko žandikaulio kaulo sveikatą ir saugo likusius dantis.</li>
                        <li>Padeda išvengti dantenų ligų, susijusių su trūkstamais dantimis.</li>
                    </ul>

                    <p class="font-semibold">Kada reikėtų kreiptis į odontologą?</p>

                    <p>Jei praradote dantį ar turite trūkstamų dantų, kreipkitės į odontologą kuo greičiau. Ilgai nelaukiant, galima išvengti didesnių problemų, tokių kaip kaulo nykimas ir dantenų ligos. Taip pat kreipkitės, jei jūsų dantys yra įskilę, nuskilę, jautrūs, kraujuoja dantenos.</p>

                    <p>Dantų protezai gali būti reikšmingas sprendimas, atkuriantis ne tik jūsų šypseną, bet ir burnos sveikatą bei gyvenimo kokybę. Kreipkitės į Trendless specialistus — kartu rasime optimalų dantų protezavimo sprendimą, atitinkantį jūsų individualius poreikius ir biudžetą.</p>








                    <p class="text-right">
                        <a href="http://trendless.lt/" title="Trendless odontologijos klinikų gydytojai" class="hover:underline">
                            Trendless odontologijos klinikos
                        </a>
                    </p>

                </div>



            </div>
        </div>

@endsection