<header class="bg-gray-700 text-white px-6 py-4 " x-data="{open: false}" x-cloak>
    <div class="flex justify-between items-center">
        <h1 class="font-bold tracking-widest uppercase">Laracasts</h1>
    
        <nav class="hidden md:flex">
            <x-nav-link route="home">Home</x-nav-link>
            <x-nav-link route="about">About</x-nav-link>
            <x-nav-link route="testimonials">Testimonials</x-nav-link>
            <x-nav-link route="contact">Contact</x-nav-link>
        </nav>
        
        <div class="md:hidden">
            <button @click="open = !open">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div class="hidden md:block">
            <x-dropdown alignment="right">
                <x-slot name="trigger">
                    <button>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRliA2JT0YIbu97lDimm03snXFN3LJx57tDjQ&usqp=CAU" alt="" class="rounded-full border border-white" width="50">
                    </button>
                </x-slot>
        
                <x-dropdown-link href="/">Account</x-dropdown-link>
                <x-dropdown-link href="/">Support</x-dropdown-link>
            </x-dropdown>
        </div>
    </div>
    

    {{-- Mobile menu --}}
    <nav x-show="open" class="mt-3">
        <x-mobile-nav-link route="home">Home</x-mobile-nav-link>
        <x-mobile-nav-link route="about">About</x-mobile-nav-link>
        <x-mobile-nav-link route="testimonials">Testimonials</x-mobile-nav-link>
        <x-mobile-nav-link route="contact">Contact</x-mobile-nav-link>
    </nav>
</header>