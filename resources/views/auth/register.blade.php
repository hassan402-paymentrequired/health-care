<x-layout.guest>

    <div class="flex w-full relative">

        <div class="md:w-2/3 w-full  h-screen p-16">

            <form action="/" method="POST" class="p-12r">
                @csrf
                <h1 class="text-4xl tracking-wide mb-3 font-bold text-white">Hi there, 👋</h1>
                <p class="text-[#ABB8C4] text-lg">Get Started with Appointments .</p>

                <div class="flex flex-col gap-5 mt-10">

                    <x-form-input>
                        <div class="">
                        <x-input-label for="name">Full name</x-input-label>
                        <div class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#CDE9DF]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                              </svg>
                            <x-text-input type="text" placeholder="joe doe" name="name"/>
                        </div>
                        @error('name')
                        <x-input-error :error="$message"/>
                        @enderror
                    </div>    
                    </x-form-input>

                    <x-form-input>
                        <div>
                        <x-input-label for="name">Email address</x-input-label>
                        <div class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#CDE9DF]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                              </svg>                              
                            <x-text-input type="email" placeholder="example@gmail.com" name="email"/>
                        </div>
                        @error('email')
                        <x-input-error :error="$message"/>
                        @enderror
                    </div>
                    </x-form-input>

                    <x-form-input>
                        <div>
                        <x-input-label for="name">Phone number</x-input-label>
                        <div class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#CDE9DF]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                              </svg>                              
                            <x-text-input type="number" placeholder="+1" name="number"/>
                        </div>
                        @error('number')
                        <x-input-error :error="$message"/>
                        @enderror
                    </div>
                    </x-form-input>
                   
                   <x-form-button class="p-2 rounded-md">Get started</x-form-button>   
                </div>
            </form>

            <div class="flex justify-end w-full" x-data="{ 'showModal': false }">

                <button class="text-xs font-normal text-green-500 text-right mt-5"  @click="showModal = true">Admin</button>

                <div  x-show="showModal" class="absolute top-[30%] p-5 shadow-md shadow-green-300 left-[20%] w-1/3 justify-center items-center border" @click.away="showModal = false">

                    <h2 class="text-xl text-white font-bold">Admin passkey</h2>

                    <form action="/admin" method="post" class="w-full p-2 space-y-3 ">
                        <x-text-input class="border border-neutral-800 bg-gray-800 rounded"/>
                        <x-form-button type="submit" class=" text-xs p-2 rounded font-semibold text-white">Verify</x-form-button>
                    </form>

                </div>
            </div>

        </div>

        <div class="md:w-1/3 hidden md:flex h-screen">
            <img src={{ asset('asset/img/hero.png') }} alt="pic" class="h-full w-full">
        </div>

    </div>

</x-layout.guest>
