<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="container mx-auto">
    <!--<a href="logotipo nikken.png" class="bg-white text-black font-bold text-xl p-4">Logo</a>-->
    <img src="{{ asset('logotipo nikken-02.png') }}" class="object-fill h-35 w-full">
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{route('panel')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ request()->is('dashboard') ? 'active-nav-link' : '' }}">
            <i class="fas fa-chart-line mr-3"></i>
            Panel
        </a>
        <div x-data="{Open: false}" class="cursor-pointer w-full">
            <a @click="Open = !Open" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ request()->is('users*') ? 'active-nav-link' : '' }}">
                <i class="fas fa-tasks mr-3"></i>
                Gestion
            </a>
            <div x-show="Open" class="p-2 relative w-full rounded-lg shadow-lg">
                <a href="{{route('users.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ request()->is('users/show*') ? 'active-nav-link' : '' }}">
                    <i class="fas fa-users mr-3"></i>
                    Usuarios
                </a>
                <a href="{{route('countries.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ request()->is('countries*') ? 'active-nav-link' : '' }}">
                    <i class="fas fa-globe-americas mr-3"></i>
                    Paises
                </a>
            </div>
        </div>
        <div x-data="{Open: false}" class="cursor-pointer w-full">
            <a @click="Open = !Open" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ request()->is('reports*') ? 'active-nav-link' : '' }}">
                <i class="fas fa-calculator mr-3"></i>
                Presupuesto
            </a>
            <div x-show="Open" class="p-2 relative w-full rounded-lg shadow-lg">
                <a href="{{route('reports.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ request()->is('reports/show*') ? 'active-nav-link' : '' }}">
                  <i class="fas fa-file-contract mr-3"></i>
                  Registro
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-clipboard-check mr-3"></i>
                    Autorizacion
                </a>
            </div>
        </div>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="far fa-clipboard mr-3"></i>
            Reportes
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="far fa-edit mr-3"></i>
            Modificaciones
        </a>
    </nav>
</aside>
