<header class="bg-blue-700">
    <div class="container flex items-center h-16">
     <a class="flex flex-col items-center justify-center bg-white bg-opacity-25 px-4 text-white cursor-pointer font-semibold h-full">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            
        </svg>
        <span>Categories</span>
        </a>
        <a href="/" class="mx-6">
                <x-jet-application-mark class="block h-9 w-auto"/>
        </a>
        @livewire('search')
        

  <!-- Settings Dropdown -->
  <div class="mx-6 relative">
      @auth
        <x-jet-dropdown align="right" width="48">
            <x-slot name="trigger">
        
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </button>
            
                @endif
            </x-slot>

            <x-slot name="content">
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Account') }}
                </div>

                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('Profile') }}
                </x-jet-dropdown-link>

            

                <div class="border-t border-gray-100"></div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-dropdown-link href="{{ route('logout') }}"
                            @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-dropdown-link>
                </form>
            </x-slot>
        </x-jet-dropdown>
       
            
        @else
        <x-jet-dropdown align="right" width="48"> 
            <x-slot name="trigger">
                <i class="fas fa-user-circle text-white text-3xl cursor-pointer"></i>
            </x-slot>
            <x-slot name="content">
                <x-jet-dropdown-link href="{{route('login')}}">
                    {{_('Login')}}
                </x-jet-dropdown-link>
                <x-jet-dropdown-link href="{{route('register')}}">
                    {{_('Register')}}
                </x-jet-dropdown-link>
            </x-slot>

        </x-jet-dropdown>
     


    @endauth
    
    
    
    </div> {{-- Este es el div del dropdow --}}
@livewire('dropdown-cart') 
</div> {{-- este es el div del container --}}

</header>

<div>
    <div class="py-12">
        <h1 class="text-orange-500">Hola mundo</h1>
        <x-jet-welcome/>
    </div>

</div>

