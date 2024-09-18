<x-layout.authenticatedLayout>

    <div class="w-full p-10">
        <div class="flex  w-full items-center justify-center mb-20">
            <img src={{ asset('asset/img/logo.png') }} alt="pic" class="">
        </div>

        {{-- animation --}}


        <div class="flex flex-col mb-5 gap-5 max-w-[612px] ml-[24%] items-center justify-center w-full">

            <span class="text-4xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-20 text-4xl text-[#4AC97E]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

            </span>

            <h1 class="text-4xl text-center font-bold text-white">Your <span class="text-[#4AC97E]">appointment
                    request</span> has been successfully submitted!</h1>

            <p class="text-xs text-[#ABB8C4]">We'll be in touch shortly to confirm.</p>

        </div>
        @inject('request', 'Illuminate\Http\Request')
        <div class="flex gap-5 items-center border-[#363A3D99] mb-10 justify-center border-t-[1px] border-b-[1px] mt-5 py-5">
            <p class="text-lg text-[#ABB8C4]">Requested appointment details:</p>
            <p class="text-xm text-[#ABB8C4]">{{ $request->query('doctor') }}</p>
            <p class="text-sm text-[#ABB8C4] flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                  </svg>
                  
                {{ $request->query('appointment') }}
            </p>
        </div>

        <div class="flex w-full items-center justify-center gap-3">

            <x-link href="/appointment/book" class="p-2 rounded-md mt-5">New appointment</x-link>
            <x-link href="/appointments" class="p-2 rounded-md mt-5 border border-green-400 bg-transparent">View appointments</x-link>
        </div>

    </div>

</x-layout.authenticatedLayout>
