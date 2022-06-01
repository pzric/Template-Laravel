<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
  <div class="container mx-auto cursor-pointer">
    <p class="text-3xl text-white text-center">Simple</p>
    <p class="text-3xl text-white text-center">Siderbar</p>
  </div>
  <nav class="text-white text-base font-semibold pt-3">
    <a href="{{route('panel')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('dashboard') ? 'active-nav-link' : '' }}">
      <i class="fas fa-chart-line mr-3"></i>
      Dashboard
    </a>
    <div x-cloak x-data="{Open: false}" class="cursor-pointer w-full">
      <a @click="Open = !Open" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('users*') ? 'active-nav-link' : '' }}">
        <i class="fa-solid fa-gears mr-3"></i>
        Gestion
      </a>
      <div x-show="Open" @click.away="Open = false" class="p-2 relative w-full rounded-lg shadow-lg">
        <a href="{{route('users.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('users*') ? 'active-nav-link' : '' }}">
          <i class="fa-solid fa-user-gear mr-3"></i>
          Usuarios
        </a>
      </div>
    </div>
  </nav>
</aside>
