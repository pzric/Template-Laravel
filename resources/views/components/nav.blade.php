<!-- Desktop Header -->
<header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
    <div class="w-1/2"></div>
    <div x-cloak x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
        <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
            <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
        </button>
        <div x-show="isOpen" @click.away="isOpen = false" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
            <a href="#" class="block px-4 py-2 account-link hover:text-white">Perfil</a>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <a href="#" onclick="this.closest('form').submit()" class="block px-4 py-2 account-link hover:text-white">Cerrar seccion</a>
            </form>
        </div>
    </div>
</header>
<!-- Mobile Header & Nav -->
<header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
    <div class="flex items-center justify-between">
        <a href="#" class="bg-white text-black font-bold text-xl p-4">Logo</a>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
        </button>
    </div>

    <!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <a href="index.html" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Panel
        </a>
        <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Gestion
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
            <i class="fas fa-user mr-3"></i>
            Perfil
        </a>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <a href="#" onclick="this.closest('form').submit()" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
              <i class="fas fa-sign-out-alt mr-3"></i>
              Cerrar seccion
            </a>
        </form>
    </nav>
</header>
