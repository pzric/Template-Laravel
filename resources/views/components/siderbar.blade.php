<aside class="relative bg-sidebar h-full w-64 hidden sm:block shadow-xl">
    <div class="container mx-auto">
        <img src="{{ asset('logotipo nikken-02.png') }}" class="object-fill h-35 w-full">
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{route('dashboard')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('dashboard') ? 'active-nav-link' : '' }}">
            <i class="fas fa-chart-line mr-3"></i>
            Panel
        </a>
        @can ('gestion')
          <div x-cloak x-data="{Open: false}" class="cursor-pointer w-full">
              <a @click="Open = !Open" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is(['users*', 'benefited*', 'countries*', 'concept*', 'cost*', 'project*']) ? 'active-nav-link' : '' }}">
                  <i class="fas fa-tasks mr-3"></i>
                  Gestion
              </a>
              <div x-show="Open" @click.away="Open = false" class="p-2 relative w-full rounded-lg shadow-lg">
                @can ('users')
                  <a href="{{route('users.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('users*') ? 'active-nav-link' : '' }}">
                      <i class="fas fa-users mr-3"></i>
                      Usuarios
                  </a>
                @endcan
                @can ('benefited')
                  <a href="{{route('benefited.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('benefited*') ? 'active-nav-link' : '' }}">
                      <i class="fas fa-user-tag mr-3"></i>
                      Beneficiados
                  </a>
                @endcan
                @can ('countries')
                  <a href="{{route('countries.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('countries*') ? 'active-nav-link' : '' }}">
                      <i class="fas fa-globe-americas mr-3"></i>
                      Paises
                  </a>
                @endcan
                @can ('concept')
                  <a href="{{route('concept.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('concept*') ? 'active-nav-link' : '' }}">
                      <i class="fas fa-file-invoice mr-3"></i>
                      Concepto especifico
                  </a>
                @endcan
                @can ('concept')
                  <a href="{{route('cost.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('cost*') ? 'active-nav-link' : '' }}">
                      <i class="fas fa-coins mr-3"></i>
                      Centro de costos
                  </a>
                @endcan
                @can ('concept')
                  <a href="{{route('project.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('project*') ? 'active-nav-link' : '' }}">
                      <i class="fas fa-file-invoice mr-3"></i>
                      Proyecto
                  </a>
                @endcan
              </div>
          </div>
        @endcan
        @can ('budget')
          <div x-cloak x-data="{Open: false}" class="cursor-pointer w-full">
              <a @click="Open = !Open" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is(['reports*', 'authorizations']) ? 'active-nav-link' : '' }}">
                  <i class="fas fa-calculator mr-3"></i>
                  Presupuesto
              </a>
              <div x-show="Open" @click.away="Open = false" class="p-2 relative w-full rounded-lg shadow-lg">
                @can ('reports')
                  <a href="{{route('reports.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('reports*') ? 'active-nav-link' : '' }}">
                      <i class="fas fa-file-contract mr-3"></i>
                      Registro
                  </a>
                @endcan
                @can ('authorizations')
                  <a href="{{route('authorizations.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('authorizations') ? 'active-nav-link' : '' }}">
                      <i class="fas fa-clipboard-check mr-3"></i>
                      Autorizacion
                  </a>
                @endcan
              </div>
          </div>
        @endcan
        <div x-cloak x-data="{Open: false}" class="cursor-pointer w-full">
            <a @click="Open = !Open" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is(['income','budget']) ? 'active-nav-link' : '' }}">
                <i class="fas fa-chart-line mr-3"></i>
                Reportes
            </a>
            <div x-show="Open" @click.away="Open = false" class="p-2 relative w-full rounded-lg shadow-lg">
                <a href="{{route('budget')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('budget') ? 'active-nav-link' : '' }}">
                    <i class="fas fa-file-invoice mr-3"></i>
                    Presupuesto
                </a>
                <a href="{{route('income')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-3 pl-6 nav-item {{ request()->is('income') ? 'active-nav-link' : '' }}">
                    <i class="fas fa-file-invoice-dollar mr-3"></i>
                    Ingresos
                </a>
            </div>
        </div>
    </nav>
</aside>
