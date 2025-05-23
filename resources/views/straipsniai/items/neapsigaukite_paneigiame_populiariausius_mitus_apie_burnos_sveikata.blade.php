@extends('html.user')


@section('content')

        <div class="flex flex-col items-center justify-center min-h-screen pb-20">
            <div class="flex flex-col items-center justify-center w-full max-w-5xl p-4 mt-32 mx-auto text-center gap-y-8">

                <h1 class="text-4xl font-bold mb-12">Trendless straipsniai ir naujienos apie odontologiją</h1>

                <div class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Neapsigaukite! Paneigiame 5 populiariausius mitus apie burnos sveikatą" 
                    src="{{ asset('assets/straipsniai/neapsigaukite_paneigiame_populiariausius_mitus_apie_burnos_sveikata.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Neapsigaukite! Paneigiame 5 populiariausius mitus apie burnos sveikatą</h2>

                        <p>Sklando įvairių nuomonių ir įsitikinimų apie dantų sveikatą, tačiau ne visi jie yra teisingi. 
                            Tikėjimas klaidingais mitais gali lemti netinkamą burnos priežiūrą ir rimtesnes sveikatos problemas. 
                            Paneigsime mitus, kuriuos dažniausiai girdime iš savo pacientų.</p>
                    </div>
                </div>


                <div class="trendless-straipsnis">

                    <h3>Mitas Nr. 1: „Pas odontologą reikia eiti tik tada, kai atsiranda problemų, pasireiškia skausmas.”</h3>

                    <p>Tai vienas pavojingiausių mitų! Daugelis burnos sveikatos problemų ankstyvosiose stadijose yra besimptomės. Laukdami skausmo, jūs praleidžiate galimybę užkirsti kelią rimtesnėms ligoms arba jas gydyti anksti, kai intervencija yra minimali. Reguliarūs profilaktiniai patikrinimai (bent kartą per metus) leidžia odontologui pastebėti ankstyvuosius karieso, dantenų ligų ar net burnos vėžio požymius, atlikti profesionalų valymą ir suteikti individualių patarimų.</p>

                    <p><span class="font-semibold">Atminkite:</span> Reguliarūs vizitai pas odontologą – tai investicija į jūsų ilgalaikę burnos sveikatą ir gražią šypseną!</p>

                    <h3>Mitas Nr. 2: „Kuo stipriau valysiu dantis, tuo jie bus švaresni.”</h3>

                    <p>Priešingai, per stiprus dantų valymas gali būti žalingas! Intensyvus šveitimas kietu šepetėliu gali pažeisti dantenų liniją, sukelti dantenų recesiją (atsitraukimą), padidinti dantų jautrumą ir netgi pažeisti dantų emalį. Rekomenduojama naudoti minkštą šepetėlį ir švelniais, sukamaisiais judesiais valyti dantis bent du kartus per dieną po dvi minutes. Svarbiau yra technika, o ne jėga.</p>

                    <p><span class="font-semibold">Svarbu žinoti:</span> Švelnus ir kruopštus valymas yra daug efektyvesnis nei stiprus šveitimas!</p>

                    <h3>Mitas Nr. 3: „Kariesą sukelia tik saldumynų valgymas.”</h3>

                    <p>Nors cukrus ir saldūs produktai tikrai prisideda prie karieso vystymosi, jie nėra vienintelė priežastis. Kariesą sukelia bakterijos, kurios burnoje skaido angliavandenius (įskaitant cukrų, bet ir krakmolą, esantį duonoje, bulvėse, makaronuose). Dėl šių bakterijų susidaro rūgštys, kurios ardo dantų emalį. Taigi, norint išvengti karieso, svarbu ne tik riboti saldumynų vartojimą, bet ir kruopščiai valyti dantis du kartus per dieną, naudoti tarpdančių siūlą bei reguliariai lankytis profesionaliai burnos higienai.</p>

                    <p><span class="font-semibold">Nepamirškite:</span> Kariesas gali atsirasti net ir nevalgant saldumynų!</p>

                    <h3>Mitas Nr. 4: „Balinimas gadina dantų emalį.”</h3>

                    <p>Ir taip, ir ne. Jei dantų balinimo procedūros atliekamos atsakingai, laikantis gydytojo nurodymų, dantų emalis paprastai nenukenčia. Šiuolaikinės profesionalios priemonės atitinka griežtus ES reikalavimus ir yra saugios emaliui. Vis dėlto, svarbu balinti dantis prižiūrint specialistui – tik taip bus parinktos tinkamos priemonės ir jų kiekis. Namuose naudojamos balinimo priemonės gali būti efektyvios ir saugios, tačiau būtina jas naudoti saikingai ir prieš tai pasitarti su burnos higienistu ar odontologu, kuris įvertins, ar jūsų dantis apskritai galima balinti. Atminkite, kad nuolatinis ir per dažnas balinimas gali pakenkti emaliui, todėl balta šypsena reikėtų džiaugtis su saiku.</p>
                    
                    <p><span class="font-semibold">Būkite ramūs:</span> Profesionalus dantų balinimas yra saugus jūsų šypsenai!</p>

                    <p>Daugiau apie dantų balinimą skaitykite mūsų straipsnį: [TODO] fffffffffff</p>

                    <h3>Mitas Nr. 5: „Šaknų kanalų gydymas yra labai skausmingas.”</h3>

                    <p>Šis mitas yra pasenęs! Šiuolaikinė odontologija yra gerokai pažengusi, o šaknų kanalų gydymas šiandien dažniausiai yra neskausminga procedūra. Vietinės anestezijos dėka, pacientai nejaučia skausmo gydymo metu. Priešingai, šaknų kanalų gydymas yra skirtas pašalinti infekciją ir skausmą, kurį sukelia pažeistas danties nervas. Po procedūros galimas nedidelis diskomfortas, tačiau jį galima lengvai numalšinti vaistais nuo skausmo.</p>
                    
                    <p><span class="font-semibold">Nebijokite:</span> Šaknų kanalų gydymas skirtas jums padėti, o ne sukelti skausmą!</p>

                    <div class="divider"></div>

                    <p>Neleiskite klaidingiems įsitikinimams pakenkti jūsų sveikatai. Reguliarūs profilaktiniai patikrinimai mūsų klinikoje padės išvengti daugelio problemų. Tad galėsite džiaugtis sveika bei gražia šypsena ilgus metus. Jei turite daugiau klausimų ar norite užsiregistruoti vizitui, susisiekite. Mažiau mitų, daugiau šypsenų!</p>


                    <p class="text-right">
                        <a href="http://trendless.lt/" title="Trendless odontologijos klinikų gydytojai" class="hover:underline">
                            Trendless odontologijos klinikos
                        </a>
                    </p>

                </div>



            </div>
        </div>

@endsection