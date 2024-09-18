<div class="flex items-center justify-betweeny-  w-full px-10 py-2 h-20 bg-[#1A1D21] rounded-md">
    <div>
        <img src={{ asset('asset/img/logo.png') }} alt="pic" >
    </div>

    @inject('request', 'Illuminate\Support\Facades\Auth')
    <div class="flex items-center gap-2 justify-end w-full">

        <button class="text-white bg-green-500 focus:ring-2 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown">
            {{ Auth::user()->name }}
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                    </path></svg>
        </button>

    
        
            <!-- Dropdown menu -->
            <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown">
                <div class="px-4 py-3">
                <span class="block text-sm">{{ Auth::user()->name }}</span>
                <span class="block text-sm font-medium text-gray-900 truncate">{{ Auth::user()->email }}</span>
                </div>
                <ul class="py-1" aria-labelledby="dropdown">
               
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="text-sm hover:bg-gray-100 text-gray-700 block w-full">Sign out</button>
                    </form>
                </li>
                </ul>
            </div>
        
        </div>
    
</div>

<script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>