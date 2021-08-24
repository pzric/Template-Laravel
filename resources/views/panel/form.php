<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-5 mx-5">
  <div class="mx-3 mb-6">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
      You have a file
    <hr></label>
    <div class="border border-dashed border-gray-500 relative">
        <input type="file" multiple class="cursor-pointer relative block opacity-0 w-full h-full p-20 z-50">
        <div class="text-center p-10 absolute top-0 right-0 left-0 m-auto">
            <p class="text-lg text-blue-700">Drop files to upload or</p>
            <button type="button" class="border border-gray-500 bg-gray-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-teal-600 focus:outline-none focus:shadow-outline">
              Upload a file
            </button>
        </div>
    </div>
  </div>
  <div class="mx-3 mb-6">
    <button id="submit" class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
    Upload now
  </button>
  </div>
  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-5" for="grid-first-name">
    Or
  <hr></label>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="">
        Año de aplicacion
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="" type="date">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
        Pais de pago
      </label>
      <div class="relative">
        <select class="block w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
          <option>Mexico</option>
          <option>Chile</option>
          <option>Peru</option>
        </select>
      </div>
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="">
        Moneda de gasto
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="" type="text">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="">
        Monto de gasto
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="" type="text">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="">
        Monto ML/USD
      </label>
      <input class="appearance-none block w-full border border-grey-lighter rounded py-3 px-4" id="" type="text" disabled>
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="">
        Calendario para devengar
      </label>
      <input class="appearance-none block w-full border border-grey-lighter rounded py-3 px-4" id="" type="text">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="">
        Pais beneficiado
      </label>
      <input class="appearance-none block w-full border border-grey-lighter rounded py-3 px-4" id="" type="text">
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="">
        Proyecto
      </label>
      <input class="appearance-none block w-full border border-grey-lighter rounded py-3 px-4" id="" type="text">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="">
        Centro de costo
      </label>
      <input class="appearance-none block w-full border border-grey-lighter rounded py-3 px-4" id="" type="text">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="">
        Usuario de servicio
      </label>
      <input class="appearance-none block w-full border border-grey-lighter rounded py-3 px-4" id="" type="text">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="">
        Area de usuario de servicio
      </label>
      <input class="appearance-none block w-full border border-grey-lighter rounded py-3 px-4" id="" type="text">
    </div>
  </div>
  <button type="button" class="bg-blue-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-blue-500 transition duration-200 each-in-out">SAVE</button>
</div>
</div>


<div class="w-full overflow-x-hidden border-t flex flex-col">
  <div class="container mx-auto px-4 sm:px-8">
      <div class="py-3">
          <div>
            <a class="btn btn-primary" href="#" icon="fas fa-key">Agregar usuario</a>
          </div>
          <div class="my-2 flex sm:flex-row flex-col">
              <div class="flex flex-row mb-1 sm:mb-0">
                  <div class="relative">
                      <select class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                          <option>5</option>
                          <option>10</option>
                          <option>20</option>
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                          </svg>
                      </div>
                  </div>
                  <div class="relative">
                      <select
                        class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                          <option>All</option>
                          <option>Active</option>
                          <option>Inactive</option>
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                          </svg>
                      </div>
                  </div>
              </div>
              <div class="block relative">
                  <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                      <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                          <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                          </path>
                      </svg>
                  </span>
                  <input placeholder="Search"
                    class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
              </div>
          </div>
          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
              <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                  <table class="min-w-full leading-normal">
                      <thead>
                          <tr>
                              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  User
                              </th>
                              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Rol
                              </th>
                              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Created at
                              </th>
                              <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                  Status
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                            alt="" />
                                      </div>
                                      <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                              Vera Carpenter
                                          </p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      Jan 21, 2020
                                  </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                      <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                      <span class="relative">Activo</span>
                                  </span>
                              </td>
                          </tr>
                          <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                            alt="" />
                                      </div>
                                      <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                              Blake Bowman
                                          </p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      Jan 01, 2020
                                  </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                      <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                      <span class="relative">Activo</span>
                                  </span>
                              </td>
                          </tr>
                          <tr>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full" src="https://images.unsplash.com/photo-1540845511934-7721dd7adec3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                            alt="" />
                                      </div>
                                      <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                              Dana Moore
                                          </p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">
                                      Jan 10, 2020
                                  </p>
                              </td>
                              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                  <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                      <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                      <span class="relative">Inactive</span>
                                  </span>
                              </td>
                          </tr>
                          <tr>
                              <td class="px-5 py-5 bg-white text-sm">
                                  <div class="flex items-center">
                                      <div class="flex-shrink-0 w-10 h-10">
                                          <img class="w-full h-full rounded-full" src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                            alt="" />
                                      </div>
                                      <div class="ml-3">
                                          <p class="text-gray-900 whitespace-no-wrap">
                                              Alonzo Cox
                                          </p>
                                      </div>
                                  </div>
                              </td>
                              <td class="px-5 py-5 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                              </td>
                              <td class="px-5 py-5 bg-white text-sm">
                                  <p class="text-gray-900 whitespace-no-wrap">Jan 18, 2020</p>
                              </td>
                              <td class="px-5 py-5 bg-white text-sm">
                                  <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                      <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                      <span class="relative">Inactive</span>
                                  </span>
                              </td>
                          </tr>
                      </tbody>
                  </table>
                  <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
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
</div>
