<div class="-mx-3 md:flex mb-6">
  <div class="md:w-1/2 px-3">
      {!! Form::label('name', 'Nombre de usuario', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
      {!! Form::text('name', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
  </div>
  <div class="md:w-1/2 px-3">
      {!! Form::label('area', 'Area', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
      {!! Form::select('area', $area, null, ['class' => 'block w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded']) !!}
  </div>
  <div class="md:w-1/2 px-3">
    {!! Form::label('country_origin', 'Pais de origen', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
    {!! Form::select('country_origin', $namecountries, null, ['class' => 'block w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion']) !!}
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
</div>
