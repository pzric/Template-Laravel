<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="container mx-auto cursor-pointer">
      <p class="text-3xl text-white text-center">Simple</p>
      <p class="text-3xl text-white text-center">Siderbar</p>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{route('panel')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ request()->is('dashboard') ? 'active-nav-link' : '' }}">
            <i class="fas fa-chart-line mr-3"></i>
            Dashboard
        </a>
        <a href="{{route('users.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item {{ request()->is('users*') ? 'active-nav-link' : '' }}">
            <i class="fas fa-users mr-3"></i>
            Usuarios
        </a>
        <div x-data="{Open: false}" class="cursor-pointer w-full">
            <a @click="Open = !Open" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fa-solid fa-circle mr-3"></i>
                Level 1
            </a>
            <div x-show="Open" class="p-2 relative w-full rounded-lg shadow-lg">
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fa-solid fa-circle-notch mr-3"></i>
                    Level 2
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fa-solid fa-circle-notch mr-3"></i>
                    Level 2
                </a>
            </div>
        </div>
    </nav>
</aside>
