@extends('html.user')


@section('content')

        <div class="flex flex-col items-center justify-center min-h-screen pb-20">
            <div class="flex flex-col items-center justify-center w-full max-w-2xl p-4 mt-32 mx-auto text-center">


                @if (session('success'))

                    <h1 class="text-4xl font-bold mb-12">🎉 Thank you! Your registration was successful.</h1>

                    <p class="mt-4 text-lg text-justify">
                        You have received a <b>10% discount</b> for professional dental hygiene - we will contact you shortly to arrange your appointment.
                    </p>


                    <p class="mt-4 text-lg text-justify font-bold">
                        📍 We look forward to seeing you at Trendless Dental Clinic, Balio Karvelio St. 14.<br>
                        🦷 A healthy smile starts with care!
                    </p>



                @else

                    <h1 class="text-4xl font-bold mb-12">Registration</h1>

                    <p class="mt-4 text-lg text-justify">
                        <b>Take care of your smile today!</b><br />
                        Register for professional dental hygiene at <b>Trendless Dental Clinic</b>, <b>Balio Karvelio St. 14</b>, and receive a 10% discount!
                    </p>


                    <div class="w-full flex justify-between text-lg mt-4">
                        <span>✅ Thorough care</span>
                        <span>✅ Experienced professionals</span>
                        <span>✅ Cozy atmosphere</span>
                    </div>

                    <p class="mt-4 text-lg text-center">
                        Limited availability - don't miss your chance!
                    </p>


                    <form method="post" action="{{ route('campain.7.post') }}" class="w-full max-w-xl mt-8 bg-white/60 rounded-2xl p-8 shadow-lg">
                        @csrf


                        <div class="grid grid-cols-1 gap-4 justify-start">
                            <div class="mb-2">
                                <label for="name" class="block font-semibold text-left mb-1">Your name</label>
                                @error('name')
                                    <div class="!text-red-500 text-sm mb-1">{{ $message }}</div>
                                @enderror
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full rounded-xl border border-[#C49B80] outline -outline-offset-2 outline-white/90 px-3 py-1.5 hover:border-[#819271] focus:border-[#819271] focus:ring-1 focus:ring-[#819271] transition-colors duration-200" placeholder="Enter your name">
                            </div>

                            <div class="mb-2">
                                @error('surname')
                                    <div class="!text-red-500 text-sm mb-1">{{ $message }}</div>
                                @enderror
                                <label for="surname" class="block font-semibold text-left mb-1">Your surname</label>
                                <input type="text" id="surname" name="surname" value="{{ old('surname') }}" required class="w-full rounded-xl border border-[#C49B80] outline -outline-offset-2 outline-white/90 px-3 py-1.5 hover:border-[#819271] focus:border-[#819271] focus:ring-1 focus:ring-[#819271] transition-colors duration-200" placeholder="Enter your surname">
                            </div>

                            <div class="mb-2">
                                @error('email')
                                    <div class="!text-red-500 text-sm mb-1">{{ $message }}</div>
                                @enderror
                                <label for="email" class="block font-semibold text-left mb-1">Your email</label>
                                <input type="email" id="email" name="email" required class="w-full rounded-xl border border-[#C49B80] outline -outline-offset-2 outline-white/90 px-3 py-1.5 hover:border-[#819271] focus:border-[#819271] focus:ring-1 focus:ring-[#819271] transition-colors duration-200" placeholder="Enter your email">
                            </div>

                            <div class="mb-2">
                                @error('phone')
                                    <div class="!text-red-500 text-sm mb-1">{{ $message }}</div>
                                @enderror
                                <label for="phone" class="block font-semibold text-left mb-1">Your phone</label>
                                <input type="tel" id="phone" name="phone" required class="w-full rounded-xl border border-[#C49B80] outline -outline-offset-2 outline-white/90 px-3 py-1.5 hover:border-[#819271] focus:border-[#819271] focus:ring-1 focus:ring-[#819271] transition-colors duration-200" placeholder="Enter your phone number">
                            </div>



                            <button type="submit" class="inline-block rounded border border-[#C49B80] outline -outline-offset-2 outline-white/50 bg-[#99AD87] text-white px-4 py-2 hover:bg-[#819271] hover:text-white">Get discount</button>






                        </div>
                    </form>

                @endif



            </div>
        </div>


<script type="module">
    $('form').on('submit', function(e) {
        if( $(this).hasClass('form-submitted') ){
            e.preventDefault();
            return;
        }
        $(this).addClass('form-submitted');
    });

</script>

@endsection


