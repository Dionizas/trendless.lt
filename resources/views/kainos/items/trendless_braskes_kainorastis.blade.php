@extends('html.user')


@section('content')

    <div class="flex flex-col items-center justify-center min-h-screen pb-20">
        <div class="flex flex-col items-center justify-center w-full max-w-7xl p-4 mt-32 mx-auto text-center gap-y-8">

            <h1 class="text-4xl font-bold mb-12">Trendless Braškės kainoraštis</h1>

            <div class="w-full text-left trendless-kainorastis">

                <h2>Konsultacija</h2>
                <table>
                    <tbody>
                        <tr>
                            <td>Vienkartinių priemonių paketas (taikomas kiekvieno vizito metu)</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Gydytojo odontologo apžiūra, konsultacija (15 - 20 min.)</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td>Specialisto konsultacija, gydymo planavimas</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Nuskausminimas</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>Dentalinė rentgeno nuotrauka</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Galvos šoninė rentgenograma</td>
                            <td>34</td>
                        </tr>
                        <tr>
                            <td>3D nuotrauka (kompiuterinė tomografinė): abu žandikauliai</td>
                            <td>94</td>
                        </tr>
                        <tr>
                            <td>3D nuotrauka (kompiuterinė tomografinė): vienas žandikaulis</td>
                            <td>74</td>
                        </tr>
                        <tr>
                            <td>3D nuotrauka (kompiuterinė tomografinė): segmentinė</td>
                            <td>64</td>
                        </tr>
                        <tr>
                            <td>Pažyma (vaikams/nėščiosioms)</td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>Kanalo revizija mikroskopu</td>
                            <td>45</td>
                        </tr>
                    </tbody>
                </table>


                <h2>Plombavimas, estetika</h2>
                <table>
                    <tbody>
                        <tr>
                            <td>Laikina plomba</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>Danties plombavimas stiklojonomeru</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>Danties infiltravimas ICON (1 dantis)</td>
                            <td>72</td>
                        </tr>
                        <tr>
                            <td>Maža plomba</td>
                            <td>57</td>
                        </tr>
                        <tr>
                            <td>Vidutinė plomba</td>
                            <td>77</td>
                        </tr>
                        <tr>
                            <td>Didelė plomba</td>
                            <td>87</td>
                        </tr>
                        <tr>
                            <td>Funkcinis - anatominis danties plombavimas</td>
                            <td>122</td>
                        </tr>
                        <tr>
                            <td>Vakuuminė bruksizmo kapa</td>
                            <td>146</td>
                        </tr>
                        <tr>
                            <td>Akrilinė bruksizmo kapa</td>
                            <td>472</td>
                        </tr>
                        <tr>
                            <td>Vakuuminė trisluoksnė sporto kapa</td>
                            <td>254</td>
                        </tr>
                        <tr>
                            <td>Vakuuminė balinimo kapa</td>
                            <td>92</td>
                        </tr>
                        <tr>
                            <td>Koferdamas</td>
                            <td>5</td>
                        </tr>
                    </tbody>
                </table>


                <h2>Endodontija</h2>
                <table>
                    <tbody>
                        <tr>
                            <td>Danties sienelės atstatymas kompozitu prieš endodontinį gydymą</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>Kanalo paruošimas</td>
                            <td>65</td>
                        </tr>
                        <tr>
                            <td>Sudėtingos anatomijos kanalo valymas</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td>Kanalo paruošimas pergydant</td>
                            <td>87</td>
                        </tr>
                        <tr>
                            <td>Kanalo plombavimas gutaperča</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td>Kalcio hidroksido pakeitimas</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>Svetimkūnio, įkloto pašalinimas iš kanalo</td>
                            <td>90</td>
                        </tr>
                        <tr>
                            <td>Perforacijos uždengimas su MTA</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Vidinis danties balinimas (pirminis vizitas)</td>
                            <td>65</td>
                        </tr>
                        <tr>
                            <td>Vidinis danties balinimas (pakartotinis vizitas)</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>ZOE uždėjimas</td>
                            <td>13</td>
                        </tr>
                    </tbody>
                </table>


                <h2>Vaikų gydymas</h2>

                <table>
                    <tbody>
                        <tr>
                            <td>Psichologinis vaiko paruošimas</td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>Individualios burnos higienos mokymas</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>Pieninio danties kanalų paruošimas ir VAISTŲ UŽDĖJIMAS</td>
                            <td>31</td>
                        </tr>
                        <tr>
                            <td>Pieninio danties PULPOTOMIJA</td>
                            <td>43</td>
                        </tr>
                        <tr>
                            <td>Pieninio danties PLOMBAVIMAS (stiklo jonomerinė plomba)</td>
                            <td>36</td>
                        </tr>
                        <tr>
                            <td>Pieninio danties PLOMBAVIMAS (kompomerinė plomba)</td>
                            <td>57</td>
                        </tr>
                        <tr>
                            <td>Kanalų plombavimas besirezorbuojančiu užpildu</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>Pieninio danties šalinimas</td>
                            <td>43</td>
                        </tr>
                        <tr>
                            <td>Paslankaus pieninio danties šalinimas</td>
                            <td>31</td>
                        </tr>
                        <tr>
                            <td>Pieninio danties PULPEKTOMIJA (II vizitas)</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>MTA medžiagos panaudojimas</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>Danties vagelių hermetizavimas silantu (1 d.)</td>
                            <td>24</td>
                        </tr>
                    </tbody>
                </table>


                <h2>Protezavimas</h2>

                <table>
                    <tbody>
                        <tr>
                            <td>Protezo cementavimas</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>Seno protezo nuėmimas/išėmimas</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>Kulties ATSTATYMAS stiklo pluošto kaiščiu</td>
                            <td>117</td>
                        </tr>
                        <tr>
                            <td>Individualus šaukštas</td>
                            <td>43</td>
                        </tr>
                        <tr>
                            <td>atspaudas ALGINATINIS</td>
                            <td>18</td>
                        </tr>
                        <tr>
                            <td>atspaudas SILIKONINIS</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <td>MK vainikas iš Cr-Co</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>Cirkonio oksido pilnos anatomijos</td>
                            <td>399</td>
                        </tr>
                        <tr>
                            <td>IPS e.max presuota keramika</td>
                            <td>495</td>
                        </tr>
                        <tr>
                            <td>Cirkonio oksido stiklo keramika (sluoksniavimo technika)</td>
                            <td>540</td>
                        </tr>
                        <tr>
                            <td>Cirkonio oksido pilnos anatomijos ANT IMPLANTO</td>
                            <td>492</td>
                        </tr>
                        <tr>
                            <td>ALLon4 frezuota sija+kompozito laminatės</td>
                            <td>3800</td>
                        </tr>
                        <tr>
                            <td>Lanko atraminis protezas (karkasinis)</td>
                            <td>850</td>
                        </tr>
                        <tr>
                            <td>Lanko atraminis protezas su užraktais (karkasinis)</td>
                            <td>1300</td>
                        </tr>
                        <tr>
                            <td>Išimamas plokštelinis protezas</td>
                            <td>329</td>
                        </tr>
                        <tr>
                            <td>Išimamas plokštelinis protezas ant implantų (lokatorinė sistema)</td>
                            <td>660</td>
                        </tr>
                        <tr>
                            <td>Plastmasinis vainikas</td>
                            <td>87</td>
                        </tr>
                        <tr>
                            <td>Laikinas plastmasinis vainikas ant implanto</td>
                            <td>205</td>
                        </tr>
                        <tr>
                            <td>Laikinas hibridinis protezas ant 4 impl.</td>
                            <td>1499</td>
                        </tr>
                        <tr>
                            <td>Išimamo plokštelinio protezo pataisa/restauracija</td>
                            <td>65</td>
                        </tr>
                    </tbody>
                </table>

                <h2>Implantacija</h2>

                <table>
                    <tbody>
                        <tr>
                            <td>IMPLANTACIJA (Straumann ROXOLID)</td>
                            <td>659</td>
                        </tr>
                        <tr>
                            <td>IMPLANTACIJA (Straumann SLActive)</td>
                            <td>729</td>
                        </tr>
                        <tr>
                            <td>IMPLANTACIJA (MegaGen)</td>
                            <td>559</td>
                        </tr>
                        <tr>
                            <td>IMPLANTACIJA (Neodent)</td>
                            <td>499</td>
                        </tr>
                        <tr>
                            <td>Ortodontinių MINI implantų operacija (1 impl.)</td>
                            <td>198</td>
                        </tr>
                        <tr>
                            <td>Implanto preparavimas, poliravimas</td>
                            <td>145</td>
                        </tr>
                        <tr>
                            <td>Dantenų priauginimas estetinėje zonoje</td>
                            <td>117</td>
                        </tr>
                        <tr>
                            <td>Implanto atidengimas (implantacijos II stadija)</td>
                            <td>72</td>
                        </tr>
                        <tr>
                            <td>Gleivinės formavimo GALVUTĖS įsukimas </td>
                            <td>72</td>
                        </tr>
                        <tr>
                            <td>KAULO augmentacija (nuo)</td>
                            <td>180</td>
                        </tr>
                    </tbody>
                </table>


                <h2>Chirurgija</h2>

                <table>
                    <tbody>
                        <tr>
                            <td>Siuvimas</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>Šaknies REZEKCIJA (1 d.)</td>
                            <td>43</td>
                        </tr>
                        <tr>
                            <td>Radikali LOPO operacija (1 d.) </td>
                            <td>101</td>
                        </tr>
                        <tr>
                            <td>Hemisekcija</td>
                            <td>131</td>
                        </tr>
                        <tr>
                            <td>Incizija (1 procedūra)</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>Cistektomija (CISTOS operacija)</td>
                            <td>218</td>
                        </tr>
                        <tr>
                            <td>LIEŽUVIO/LŪPOS PASAITĖLIO plastika</td>
                            <td>87</td>
                        </tr>
                        <tr>
                            <td>Klinikinio vainiko PRAILGINIMAS su alveolinio kaulo reduk.</td>
                            <td>99</td>
                        </tr>
                        <tr>
                            <td>Biopsija (paėmimas ir ištyrimas VPC)</td>
                            <td>67</td>
                        </tr>
                        <tr>
                            <td>Retinuoto danties atidengimas ortodontijai</td>
                            <td>131</td>
                        </tr>
                        <tr>
                            <td>Poantkaulinio implanto šalinimas</td>
                            <td>293</td>
                        </tr>
                        <tr>
                            <td>Chirurginis kaulo konturavimas</td>
                            <td>189</td>
                        </tr>
                        <tr>
                            <td>Minkštųjų audinių augmentacija 1 danties srityje</td>
                            <td>293</td>
                        </tr>
                        <tr>
                            <td>Pūlinio atvėrimas</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>NESUDĖTINGAS nuolatinio danties šalinimas</td>
                            <td>43</td>
                        </tr>
                        <tr>
                            <td>Nuolatinio danties šalinimas</td>
                            <td>72</td>
                        </tr>
                        <tr>
                            <td>Išdygusio PROTINIO danties pašalinimas</td>
                            <td>87</td>
                        </tr>
                        <tr>
                            <td>SUDĖTINGAS nuolatinio danties šalinimas </td>
                            <td>101</td>
                        </tr>
                        <tr>
                            <td>Nuolatinio danties operacinis šalinimas</td>
                            <td>160</td>
                        </tr>
                        <tr>
                            <td>SUDĖTINGAS, neišdygusio nuolatinio danties operacinis šalinimas</td>
                            <td>189</td>
                        </tr>
                    </tbody>
                </table>


                <h2>Periodontologija</h2>

                <table>
                    <tbody>
                        <tr>
                            <td>Profesionali burnos HIGIENA (Dalinė)</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>Profesionali burnos higiena vaikams (iki 12 m.)</td>
                            <td>38</td>
                        </tr>
                        <tr>
                            <td>Profesionali burnos HIGIENA</td>
                            <td>69</td>
                        </tr>
                        <tr>
                            <td>Kiuretažas (1 d.)</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>Medikamentinis paradontinių kišenių praplovimas (1 d.)</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>Aplikacija fluoro (1 d.)</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>Danties kontūravimas, poliravimas</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>Danties preparavimas, poliravimas</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>Individualių burnos higienos priemonių parinkimas ir pritaikymas</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>KIURETAŽAS (1 ketv.)</td>
                            <td>117</td>
                        </tr>
                        <tr>
                            <td>Gingivektomija (1 d.)</td>
                            <td>43</td>
                        </tr>
                    </tbody>
                </table>





            </div>

        </div>
    </div>

@endsection