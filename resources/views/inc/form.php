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
