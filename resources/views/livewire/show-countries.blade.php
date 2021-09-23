  <div class="w-full overflow-x-hidden border-t flex flex-col">
      <div class="container mx-auto px-4 sm:px-8">
          <div class="text-right my-8">
              <a href="{{route('countries.create')}}" class="text-sm bg-green-500 hover:bg-green-700 text-white py-3 px-8 rounded focus:outline-none focus:shadow-outline">
                  <i class="fas fa-plus mr-3"></i>
                  Agregar pais
              </a>
          </div>
          <div class="content-end flex sm:flex-row flex-col">
              <div class="block relative">
                  <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                      <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                          <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                          </path>
                      </svg>
                  </span>
                  <input type="text" wire:model="search" id="search"
                    class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
              </div>
          </div>
          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
              <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                  <table class="min-w-full leading-normal">
                      <thead>
                          <tr>
                              <th wire:click="order('name')" class="text-center cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Pais
                              </th>
                              <th wire:click="order('rol')" class="text-center cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Moneda local
                              </th>
                              <th wire:click="order('start_date')" class="text-center cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Tipo de cambio actual
                              </th>
                              <th colspan="2" class="text-center cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Acciones
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          @if ($countries->count())
                          @foreach ($countries as $country)
                          <tr>
                              <td class="text-center px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      {{$country->pais}}
                                  </p>
                              </td>
                              <td class="text-center px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      {{$country->coin_type}}
                                  </p>
                              </td>
                              <td class="text-center px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      {{$country->current_change}}
                                  </p>
                              </td>
                              <td class="text-center border-b border-gray-200 bg-white text-sm">
                                  <div class="ml-2">
                                      <a class="text-sm bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" href="{{route('countries.edit', $country)}}">
                                          Modificar
                                      </a>
                                  </div>
                              </td>
                              <td class="border-b border-gray-200 bg-white text-sm">
                                  <form action="{{route('countries.destroy', $country)}}" method="POST">
                                      @csrf
                                      @method('delete')
                                      <button type="submit" class="m-2 text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                          Eliminar
                                      </button>
                                  </form>
                              </td>
                          </tr>
                          @endforeach
                          @else
                          <tr>
                              <td colspan="5" class="text-center px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <span>Sin registros</span>
                              </td>
                          </tr>
                          @endif
                      </tbody>
                  </table>
                  <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                      <span class="text-xs xs:text-sm text-gray-900">
                          Showing 1 to 4 of 50 Entries
                      </span>
                      <div class="inline-flex mt-2 xs:mt-0">
                          <button class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                              Prev
                          </button>
                          <button class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                              Next
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
