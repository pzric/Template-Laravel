  <div class="w-full flex flex-col h-screen overflow-x-hidden border-t">
      <x-nav attribute="value" />
      <div class="container mx-auto px-4">
          <h1 class="text-4xl py-6">Users</h1>
          <!-- Options -->
          <div class="mb-4 flex justify-between items-center">
              <!-- Search -->
              <div class="flex-1 pr-4">
                  <div class="relative md:w-1/3">
                      <input wire:model="search" type="search" class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium" placeholder="Search...">
                      <div class="absolute top-0 left-0 inline-flex items-center p-2">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                              <circle cx="10" cy="10" r="7" />
                              <line x1="21" y1="21" x2="15" y2="15" />
                          </svg>
                      </div>
                  </div>
              </div>
              <!-- Button -->
              <div>
                  <div class="shadow rounded-lg flex">
                      <div class="flex">
                          <button class="rounded-lg inline-flex items-center bg-green-600 hover:text-white hover:bg-green-400 focus:outline-none focus:shadow-outline text-white py-2 px-2 md:px-4">
                              <i class="fa-solid fa-user-plus w-6 h-6 mr-2 py-1"></i>
                              <span class="hidden md:block">New user</span>
                          </button>
                      </div>
                  </div>
              </div>
          </div>

          <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative mb-8">
              <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
                  <thead>
                      <tr class="text-left">
                          <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                              USER
                          </th>
                          <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                              ROL
                          </th>
                          <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                              EMAIL
                          </th>
                          <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                              CREATED AT
                          </th>
                          <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-2 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                              STATUS
                          </th>
                          <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-3 text-gray-600 font-bold tracking-wider uppercase text-xs">
                            ACTION
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                    @if ($users->count())
                      @foreach ($users as $user)
                        <tr>
                            <td class="border-dashed border-t border-gray-200">
                                <span class="text-gray-700 px-6 py-3 flex items-center">{{$user->user}}</span>
                            </td>
                            <td class="border-dashed border-t border-gray-200">
                                <span class="text-gray-700 px-6 py-3 flex items-center">{{$user->roles->pluck('name')->first()}}</span>
                            </td>
                            <td class="border-dashed border-t border-gray-200">
                                <span class="text-gray-700 px-6 py-3 flex items-center">{{$user->email}}</span>
                            </td>
                            <td class="border-dashed border-t border-gray-200">
                                <span class="text-gray-700 px-6 py-3 flex items-center">{{$user->created_at}}</span>
                            </td>
                            <td class="border-dashed border-t border-gray-200">
                              @if ($user->state === '1')
                                <span class="text-green-900 bg-green-100 rounded-full px-3 py-1">Active</span>
                              @else
                                <span class="text-red-900 bg-red-200 rounded-full px-3 py-1">Inactive</span>
                              @endif
                            </td>
                            <td class="border-dashed border-t border-gray-200">
                                <a href="#" class="mx-2">
                                  <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="#" class="mx-2">
                                  <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                      @endforeach
                    @else
                      <tr>
                          <td colspan="6" class="text-center text-2xl px-5 py-5 border-b border-gray-200 bg-white text-sm">
                              <span>Sin registros</span>
                          </td>
                      </tr>
                    @endif
                  </tbody>
              </table>
              <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row xs:justify-between">
                {{ $users->links() }}
              </div>
          </div>
      </div>
  </div>
