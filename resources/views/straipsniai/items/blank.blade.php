@extends('html.user')


@section('content')

        <div class="flex flex-col items-center justify-center min-h-screen pb-20">
            <div class="flex flex-col items-center justify-center w-full max-w-5xl p-4 mt-32 mx-auto text-center gap-y-8">

                <h1 class="text-4xl font-bold mb-12">Trendless straipsniai ir naujienos apie odontologiją</h1>

                <div class="trendless-straipsniai-item">
                    <img class="trendless-straipsnis-image" alt="ttttttttttttt" 
                    src="{{ asset('assets/straipsniai/iiiiiiiiiiiiiii.webp') }}" />

                    <div class="trendless-straipsnis-intro">
                        <h2>ttttttttttt</h2>

                        <p>xxxxxxx</p>
                    </div>
                </div>


                <div class="trendless-straipsnis">

                    xxx

                    <p class="text-right">
                        <a href="http://trendless.lt/" title="Trendless odontologijos klinikų gydytojai" class="hover:underline">
                            Trendless odontologijos klinikos
                        </a>
                    </p>

                </div>



            </div>
        </div>

@endsection