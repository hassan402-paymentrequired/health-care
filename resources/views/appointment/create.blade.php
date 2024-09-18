<x-layout.authenticatedLayout>
    <div class="w-full flex h-screen">

        <div class="flex flex-1 p-10 md:w-2/3 flex-col">

            <div class="flex mb-5 ">
                <img src={{ asset('asset/img/logo.png') }} alt="pic" class="">
            </div>

            <form action="/appointment/book" method="POST" class="" enctype="multipart/form-data">
                @csrf
                <h1 class="text-4xl tracking-wide mb-3 font-bold text-white">Hi there, 👋</h1>
                <p class="text-[#ABB8C4] text-base">Request a new appointment in 10 seconds</p>

                <div class="flex flex-col gap-5 mt-10">

                    <x-form-input>
                        <div class="gap-3 flex flex-col">
                            <x-input-label for="name">Doctor</x-input-label>
                            <x-dropdown class="p-2" name="doctor">
                                <option value="-any">--Any--</option>
                                @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->name }}">{{ $doctor->name }}</option>
                                @endforeach
                            </x-dropdown>
                            @error('doctor')
                                <x-input-error :error="$message" />
                            @enderror
                        </div>
                    </x-form-input>

                    <div class="flex gap-3 items-center w-full">
                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="comment">Additional comments/notes</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <x-text-area class="resize-none" rows="3" type="email"
                                        placeholder="ex: Prefer afternoon appointments, if possible" name="comment" value="{{ old('comment') }}" />
                                </div>
                                @error('comment')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Reason for appointment</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <x-text-area class="resize-none" rows="3"
                                        placeholder="ex: Annual montly check-up" name="reason"
                                        value="{{ old('reason') }}" />
                                </div>
                                @error('reason')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                    </div>

                    <x-form-input class="w-full">
                        <div class="space-y-2 text-sm">
                            <x-input-label for="name">Expected appointment date</x-input-label>
                            <div
                                class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6 text-[#CDE9DF]">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                                </svg>
                                <x-text-input type="date" name="date" />
                            </div>
                            @error('date')
                                <x-input-error :error="$message" />
                            @enderror
                        </div>
                    </x-form-input>



                    <x-form-button class="p-2 rounded-md">Get started</x-form-button>
                </div>
            </form>

        </div>

        {{-- heror --}}
        <div class=" md:flex hidden md:w-1/3">
            <img src={{ asset('asset/img/illustration.png') }} alt="pic" class="h-full w-full">
        </div>
    </div>
</x-layout.authenticatedLayout>
