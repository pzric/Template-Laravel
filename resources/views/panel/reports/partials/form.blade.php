<div class="flex h-screen bg-gray-100 justify-center items-center" x-data="{ toggle: '0' }">
  <div class="relative rounded-full w-12 h-6 transition duration-200 ease-linear" :class="[toggle === '1' ? 'bg-green-400' : 'bg-gray-400']">
    <label for="toggle" class="absolute left-0 bg-white border-2 mb-2 w-6 h-6 rounded-full transition transform duration-100 ease-linear cursor-pointer" :class="[toggle === '1' ? 'translate-x-full border-green-400' : 'translate-x-0 border-gray-400']"></label>
    <input type="checkbox" id="toggle" name="toggle" class="appearance-none w-full h-full active:outline-none focus:outline-none" @click="toggle === '0' ? toggle = '1' : toggle = '0'">
  </div>
</div>

<div class="md:w-1/2 px-3">
    {!! Form::label('toggle', 'Estado', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
    <div class="block w-full bg-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded'">
        <label for="toggle" class="text-xls text-gray-700">Inactivo</label>
        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
            {!! Form::checkbox('toggle', null, null, ['class' => 'toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer']) !!}
            {!! Form::label(null, null, ['class' => 'toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer']) !!}
        </div>
        <label for="toggle" class="text-xls text-gray-700">Activo</label>
    </div>
</div>
