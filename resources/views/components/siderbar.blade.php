<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="#" class="bg-white text-black font-bold text-xl p-4">Logo</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Panel
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Gestion
        </a>
        <div x-data="{ isOpen: false }" class="relative w-full justify-end">
            <a @click="isOpen = !isOpen" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                Registro
            </a>
            <div x-show="isOpen" class="p-2 relative w-full rounded-lg shadow-lg">
                <a href="{{route('users.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-users mr-3"></i>
                    Usuarios
                </a>
                <a href="{{route('reports.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="far fa-sticky-note mr-3"></i>
                    Reportes
                </a>
            </div>
        </div>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Reportes
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Modificaciones
        </a>
    </nav>
</aside>
