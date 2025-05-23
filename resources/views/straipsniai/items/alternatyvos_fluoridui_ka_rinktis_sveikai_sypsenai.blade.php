@extends('html.user')


@section('content')

        <div class="flex flex-col items-center justify-center min-h-screen pb-20">
            <div class="flex flex-col items-center justify-center w-full max-w-5xl p-4 mt-32 mx-auto text-center gap-y-8">

                <h1 class="text-4xl font-bold mb-12">Trendless straipsniai ir naujienos apie odontologiją</h1>

                <div class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="Alternatyvos fluoridui: ką rinktis sveikai šypsenai?" 
                    src="{{ asset('assets/straipsniai/alternatyvos_fluoridui_ka_rinktis_sveikai_sypsenai.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>Alternatyvos fluoridui: ką rinktis sveikai šypsenai?</h2>

                        <p>Nors fluoridas yra efektyvus ingredientas dantų priežiūroje, dėl įvairių priežasčių auga 
                            susidomėjimas alternatyvomis. Kiekvienas iš mūsų nusipelnė sveikos ir gražios šypsenos, 
                            tad apžvelkime, ką galite rasti parduotuvių lentynose be fluorido.</p>
                    </div>
                </div>


                <div class="trendless-straipsnis">

                    <h3>Hidroksiapatitas — veiksmingumu nenusileidžia fluoridui</h3>

                    <p>Hidroksiapatitas yra natūralus mineralas, sudarantis didžiąją dantų emalio dalį. Kaip ir fluoras, hidroksiapatitas padeda sumažinti apnašų kaupimąsi ir remineralizuoja dantų emalį.</p>

                    <p>Jei esate jautrūs fluoridui, dantų pasta su hidroksiapatitu gali būti puiki alternatyva. Ji tinka nėščiosioms, mažiems vaikams arba tiems, kuriems gresia didesnė dantų fluorozės rizika.</p>

                    <p>Tyrimai rodo, kad hidroksiapatitas gali būti veiksmingas karieso prevencijai, ypač esant ankstyvoms karieso stadijoms. (1)</p>

                    <p class="font-semibold">Kas geriau?</p>

                    <p>Kalbant apie dantų apsaugą ir emalio remineralizaciją hidroksiapatito ir fluorido dantų pastos yra lygiavertės. Tad jauskitės saugiai rinkdamiesi alternatyvą su hidroksiapatitu. Nei jūsų sveikata, nei dantys nuo jo nenukentės.</p>

                    <h3>Ar natūralios dantų pastos gali pakeisti fluoridą?</h3>

                    <p>Natūralios dantų pastos, kurių sudėtyje yra žolelių ekstraktų ir eterinių aliejų vis labiau populiarėja. Tiesa, augaliniai ingredientai naudingi mūsų sveikatai – arbatmedžio aliejus ir alavijas turi antimikrobinių savybių, kurios gali padėti palaikyti sveiką burnos mikroflorą. Tačiau natūralių ingredientų veiksmingumas karieso prevencijai nėra patvirtintas.</p>

                    <h3>Dantų miltelių efektyvumas</h3>

                    <p>Dantų milteliai, pagaminti iš natūralių mineralų, gali būti veiksminga alternatyva dantų pastai, ypač norint pašalinti apnašas ir balinti dėmes. Tačiau svarbu pasirinkti miltelius su tinkamu abrazyvumo lygiu, kad nepažeistumėte emalio.</p>

                    <p>Ar milteliai gali tapti fourido alternatyva? Deja, bet dantų milteliuose dažnai trūksta ėduonį stabdančių ingredientų, todėl, esant didesnei karieso rizikai, rekomenduojama rinktis dantų pastą su hidroksiapatitu.</p>

                    <h3>Ar jūsų naudojama dantų pasta tinkama?</h3>

                    <p>Trendless komanda padės išsirinkti tinkamiausias burnos priežiūros priemones pagal jūsų individualius poreikius. Tad jei liko neatsakytų klausimų – kviečiame vizitui pas mūsų patyrusius odontologus-gydytojus.</p>


                    <p class="text-right">
                        <a href="http://trendless.lt/" title="Trendless odontologijos klinikų gydytojai" class="hover:underline">
                            Trendless odontologijos klinikos
                        </a>
                    </p>

                    <div class="divider"></div>
                    <p class="text-sm text-gray-500">Šaltiniai:<br>
                    (1) <a href="https://pmc.ncbi.nlm.nih.gov/articles/PMC10393266/" target="_blank" class="hover:underline">Caries-preventing effect of a hydroxyapatite-toothpaste in adults: a 18-month double-blinded randomized clinical trial</a><br>
                    </p>



                </div>



            </div>
        </div>

@endsection



