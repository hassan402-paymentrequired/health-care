<x-layout.authenticatedLayout>
    <!-- It is never too late to be wh at you might have been. - George Eliot -->

    <div class="flex w-full h-full">

        <div class="md:flex-[3] px-[100px] flex-1 pt-10 h-screen overflow-y-auto" style="scrollbar-width: none">

            <div class="flex mb-5">
                <img src={{ asset('asset/img/logo.png') }} alt="pic" class="h-full">
            </div>

            <div class="flex flex-col mb-5">
                <h2 class="text-3xl text-white font-bold">Welcome 👋</h2>
                <p class="text-sm text-[#ABB8C4] mt-2">Let's us know more about you</p>
            </div>
            {{-- begining of form input --}}
            <form action="/user/info" method="POST" class=" mt-8" enctype="multipart/form-data">
                @csrf
                {{-- begining of form personal section --}}
                <section class="w-full flex flex-col gap-5">
                    <x-heading-text>Personal</x-heading-text>

                    <x-form-input>
                        <div class="space-y-2">
                            <x-input-label for="name">Full name</x-input-label>
                            <div
                                class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6 text-[#CDE9DF]">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <x-text-input type="text" placeholder="Hassan the dev" name="full_name"
                                    value="{{ old('full_name') }}" />
                            </div>
                            @error('full_name')
                                <x-input-error :error="$message" />
                            @enderror
                        </div>
                    </x-form-input>

                    <div class="flex gap-3 items-center w-full">
                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Email address</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 text-[#CDE9DF]">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                    <x-text-input type="email" placeholder="example@gmail.com" name="email"
                                        value="{{ $user->email }}" />
                                </div>
                                @error('email')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Phone number</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 text-[#CDE9DF]">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                                    </svg>
                                    <x-text-input type="text" placeholder="+234" name="phone_number"
                                        value="{{ $user->phone_number }}" />
                                </div>
                                @error('phone_number')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                    </div>


                    <div class="flex gap-3 items-center w-full">
                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Date of birth</x-input-label>
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

                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Gender</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">

                                    <x-dropdown name="gender">
                                        <option value="-">-Any-</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </x-dropdown>
                                </div>
                                @error('gender')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                    </div>

                    <div class="flex gap-3 items-center w-full">
                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Address</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 text-[#CDE9DF]">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 0 1-.657.643 48.39 48.39 0 0 1-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 0 1-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 0 0-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 0 1-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 0 0 .657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 0 1-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 0 0 5.427-.63 48.05 48.05 0 0 0 .582-4.717.532.532 0 0 0-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 0 0 .658-.663 48.422 48.422 0 0 0-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 0 1-.61-.58v0Z" />
                                    </svg>
                                    <x-text-input type="text" placeholder="ex: lagos, Nigeria" name="address"
                                        value="{{ old('address') }}" />
                                </div>
                                @error('address')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Occupation</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 text-[#CDE9DF]">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                    </svg>
                                    <x-text-input type="text" placeholder="software developer"
                                        value="{{ old('occupation') }}" name="occupation" />
                                </div>
                                @error('occupation')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                    </div>


                    <div class="flex gap-3 items-center w-full">
                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Emergency contact name</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 text-[#CDE9DF]">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                    </svg>
                                    <x-text-input type="text" placeholder="Guadian name" name="contact-name"
                                        value="{{ old('contact-name') }}" />
                                </div>
                                @error('contact-name')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Emergency contact number</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 text-[#CDE9DF]">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                    </svg>

                                    <x-text-input type="text" placeholder="Guadian number" name="contact-number"
                                        value="{{ old('contact-number') }}" />
                                </div>
                                @error('contact-number')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                    </div>


                </section>



                {{-- medical section --}}
                <section class="w-full flex flex-col gap-5 mt-10">
                    <x-heading-text>Medical Information</x-heading-text>

                    <x-form-input>
                        <div class="space-y-2">
                            <x-input-label for="name">Primary care physician</x-input-label>
                            <div
                                class=" px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                <x-dropdown name="pysician">
                                    <option value="-Any-">-Any-</option>
                                    @foreach ($doctors as $doctor)
                                    <option value={{ $doctor->name }}>{{ $doctor->name }}</option>
                                    @endforeach
                                </x-dropdown>
                            </div>
                            @error('pysician')
                                <x-input-error :error="$message" />
                            @enderror
                        </div>
                    </x-form-input>

                    <div class="flex gap-3 items-center w-full">
                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Insurance policy number</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <x-text-input type="text" value="{{ old('insurance-policy') }}"
                                        placeholder="ex:29392abs" name="insurance-policy" />
                                </div>
                                @error('insurance-policy')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Insurance provider</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <x-text-input type="text" placeholder="ex:bluegross" name="insurance-provider"
                                        value="{{ old('insurance-provider') }}" />
                                </div>
                                @error('insurance-provider')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                    </div>

                    <div class="flex gap-3 items-center w-full">
                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Allergies (if any)</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <x-text-area rows="2" type="email" placeholder="Penicillin, cancer"
                                        name="allergies" valu="{{ old('allergies') }}" />
                                </div>
                                @error('allergies')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Current medications</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <x-text-area rows="2" placeholder="ex: Ibuprofen 200mg, Levothyroxine 50mcg"
                                        name="medications" valu="{{ old('medications') }}" />
                                </div>
                                @error('medications')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                    </div>

                    <div class="flex gap-3 items-center w-full">
                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Family medical history (if relevant)</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <x-text-area rows="2" type="email"
                                        placeholder="ex: Mother had breast cancer" name="family_medical"
                                        value="{{ old('family_medical') }}" />
                                </div>
                                @error('family_medical')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                        <x-form-input class="w-1/2">
                            <div class="space-y-2">
                                <x-input-label for="name">Past medical history</x-input-label>
                                <div
                                    class="flex px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                    <x-text-area rows="2" placeholder="ex: Asthma diagnosis in childhood"
                                        name="past_medical" value="{{ old('past_medical') }}" />
                                </div>
                                @error('past_medical')
                                    <x-input-error :error="$message" />
                                @enderror
                            </div>
                        </x-form-input>

                    </div>


                </section>

                {{-- Identification and Verfication section --}}
                <section class="w-full flex flex-col gap-5 mt-10">
                    <x-heading-text>Identification and Verfication</x-heading-text>

                    <x-form-input>
                        <div class="space-y-2">
                            <x-input-label for="name">Identification type</x-input-label>
                            <div
                                class=" px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                <x-dropdown name="identification_type">
                                    <option value="-">--Any--</option>
                                    <option value="bvn">BVN</option>
                                    <option value="nin">NIN</option>
                                    <option value="birth">Birth certificate</option>
                                    <option value="driver">Driver's lincense</option>
                                </x-dropdown>
                            </div>
                            @error('identification_type')
                                <x-input-error :error="$message" />
                            @enderror
                        </div>
                    </x-form-input>


                    <x-form-input>
                        <div class="space-y-2">
                            <x-input-label for="name">Identification Number</x-input-label>
                            <div
                                class=" px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                <x-text-input type="text" placeholder="ex 1234567" name="identification_Number"
                                    value="{{ old('identification_Number') }}" />
                            </div>
                            @error('identification_Number')
                                <x-input-error :error="$message" />
                            @enderror
                        </div>R
                    </x-form-input>


                    <x-form-input class="open" x-data="{ file: null, imageUrl: null }">
                        <div class="space-y-2">
                            <x-input-label for="name">Scanned Copy of Identification Document</x-input-label>
                            <div
                                class=" px-2 py-1 w-full h-full items-center justify-center bg-[#1A1D21] border rounded-md border-[#363A3D]">
                                <x-text-input type="file" class=" " name="scan_copy"
                                    @change="file = $event.target.files[0]" />
                                <div @click="showFile()"
                                    class="h-40 border-dashed rounded-md flex item-center justify-center w-full">
                                    <div class="flex flex-col gap-3 w-full h-full item-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="size-6 text-[#24AE7C] text-center ml-[50%]">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                                        </svg>
                                        <img x-bind:src="imageUrl" alt="">
                                        <p class="text-[#24AE7C] text-sm text-center">Click here to upload</p>
                                        <p class="text-gray-300 text-sm text-center">SVG, PNG, JPG or GIF (max.
                                            800x400px)</p>
                                    </div>
                                </div>
                            </div>
                            @error('scan_copy')
                                <x-input-error :error="$message" />
                            @enderror
                        </div>
                    </x-form-input>
                </section>

                {{-- Identification and Verfication section --}}
                <section class="w-full flex flex-col gap-5 mt-10 mb-5">
                    <x-heading-text>Consent and Privacy</x-heading-text>

                    <div class="flex flex-col space-y-4 w-full ">
                        <div class="flex items-center gap-3 w-full">
                            <input type="checkbox" name="health_condition" id="">
                            <x-check-box>I consent to receive treatment for my health condition.</x-check-box>
                        </div>
                        <div class="flex items-center gap-3 w-full">
                            <input type="checkbox" name="health_information" id="">
                            <x-check-box>I consent to the use and disclosure of my health information for treatment
                                purposes.</x-check-box>
                        </div>
                        <div class="flex items-center gap-3 w-full">
                            <input type="checkbox" name="privacy" id="">
                            <x-check-box>I acknowledge that I have reviewed and agree to the privacy
                                policy</x-check-box>
                        </div>
                    </div>
                </section>

                {{-- end of form input --}}
                <x-form-button type="submit" class="p-2 rounded-md mt-5 mb-5">Submit and continue</x-form-button>
            </form>

        </div>

        {{-- bg-back --}}
        <div class=" md:flex hidden">
            <img src={{ asset('asset/img/bg.png') }} alt="pic" class="h-full">
        </div>

    </div>
</x-layout.authenticatedLayout>
