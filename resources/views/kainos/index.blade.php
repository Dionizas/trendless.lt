@extends('html.user')


@section('content')

        <div class="flex flex-col items-center justify-center min-h-screen pb-20">
            <div class="flex flex-col items-center justify-center w-full max-w-7xl p-4 mt-32 mx-auto text-center gap-y-8">

                <h1 class="text-4xl font-bold mb-12">Trendless klinikų kainoraščiai</h1>


                <div class="w-full grid grid-cols-3 gap-8 mt-20 text-base md:text-xs lg:text-base">

                    <div class="col-span-3 md:col-span-1 bg-white/60 p-4 rounded-lg border border-[#C1C9AE] outline -outline-offset-2 outline-white shadow-xl">
                        <h2 class="text-xl font-bold text-left">Trendless Savanoriai kainoraštis</h2>
                        <div class="h-10 mt-4 mb-4">
                            <a href="{{ route('kainos.show', ['item' => 'trendless_savanoriai_kainorastis']) }}"
                            class="inline-block rounded border border-[#C49B80] outline -outline-offset-2 outline-white/50 bg-[#C1C9AE] text-white px-4 py-2 hover:bg-[#99AD87] hover:text-white">
                                Peržiūrėti
                            </a>
                        </div>
                    </div>


                    <div class="col-span-3 md:col-span-1 bg-white/60 p-4 rounded-lg border border-[#C1C9AE] outline -outline-offset-2 outline-white shadow-xl">
                        <h2 class="text-xl font-bold text-left">Trendless Braškės kainoraštis</h2>
                        <div class="h-10 mt-4 mb-4">
                            <a href="{{ route('kainos.show', ['item' => 'trendless_braskes_kainorastis']) }}"
                            class="inline-block rounded border border-[#C49B80] outline -outline-offset-2 outline-white/50
                            bg-[#C1C9AE] text-white px-4 py-2 hover:bg-[#99AD87] hover:text-white">
                                Peržiūrėti
                            </a>
                        </div>
                    </div>



                    <div class="col-span-3 md:col-span-1 bg-white/60 p-4 rounded-lg border border-[#C1C9AE] outline -outline-offset-2 outline-white shadow-xl">
                        <h2 class="text-xl font-bold text-left">Trendless Karvelio kainoraštis</h2>
                        <div class="h-10 mt-4 mb-4">
                            <a href="{{ route('kainos.show', ['item' => 'trendless_karvelio_kainorastis']) }}"
                            class="inline-block rounded border border-[#C49B80] outline -outline-offset-2 outline-white/50
                            bg-[#C1C9AE] text-white px-4 py-2 hover:bg-[#99AD87] hover:text-white">
                                Peržiūrėti
                            </a>
                        </div>
                    </div>

                </div>




            </div>
        </div>

@endsection








