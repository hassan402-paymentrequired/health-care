<x-layout.authenticatedLayout>
    <div class="w-full h-full p-2">
        <x-nav />

        <div class="w-full p-10">
            @inject('request', 'Illuminate\Support\Facades\Auth')
            <div class="flex flex-col p-5">
                <h2 class="text-4xl text-white mb-5 font-bold">
                    welcome,
                    {{ Auth::user()->name }}
                </h2>
                <p class="text-sm text-[#ABB8C4]">View and manage your appointment</p>
            </div>

            {{-- appointment card --}}
            <div class="md:flex flex-row items-center gap-5 justify-evenly w-full mt-5 ">

                <div class="p-5 flex flex-col py-9 space-y-3 shadow-md shadow-gray-800 flex-1 rounded-md">

                    
                    <h2 class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" class="size-9 text-[#FFD147] font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                          </svg>
                          
                        <span class="text-white text-4xl font-bold">10</span>
                    </h2>

                    <p class="text-gray-500 text-sm font-semibold">Total number of pending appointments</p>
                </div>


               
                <div class="p-5 flex flex-col py-9 space-y-3 shadow-md shadow-gray-800 flex-1 rounded-md">

                    <h2 class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-8 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                        </svg>
                        <span class="text-white text-4xl font-bold">10</span>
                    </h2>

                    <p class="text-gray-500 text-sm">Total number of scheduled appointments</p>
                </div>


                
                <div class="p-5 flex flex-col py-9 space-y-3 shadow-md shadow-gray-800 flex-1 rounded-md">

                    <h2 class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9 text-red-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                          </svg>
                          
                        <span class="text-white text-4xl font-bold">10</span>
                    </h2>

                    <p class="text-gray-500 text-sm">Total number of canceled appointments</p>
                </div>


            </div>

            {{-- table --}}
            <div class="flex w-full">

                <x-table :appointments="$appointments"/>
            </div>

        </div>

    </div>


</x-layout.authenticatedLayout>
