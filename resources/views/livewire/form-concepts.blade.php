<div class="row-span-6">
  <div class="md:flex md:items-center">
      <div class="md:w-2/6">
        {!! Form::label('country', 'Pais', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
      </div>
      <div class="md:w-4/6" wire:model="count">
        {!! Form::select('country', $countries, null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
      </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-2/6">
          {!! Form::label('account', 'Cuenta contable', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
    </div>
    <div class="md:w-4/6" wire:model="body">
      @if (is_iterable($pais))
       {!! Form::select('account', $pais, null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
     @else
       {!! Form::select('account', array('default' => 'Please select one option'), null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion', 'disabled']) !!}
     @endif
    </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-2/6">
        {!! Form::label('specific_concept', 'Nombre concepto especifico', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
    </div>
    <div class="md:w-4/6">
      {!! Form::text('specific_concept', null, ['class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1']) !!}
      @error ('specific_concept')<small class="text-red-700">{{$message}}</small> @enderror
    </div>
  </div>
  <div class="md:flex md:items-center">
      <div class="md:w-1/3">
        {!! Form::label('global_concept', 'Concepto globla o del gasto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
      </div>
      <div class="md:w-2/3">
        {!! Form::text('global_concept', $global_concept, ['class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'readonly']) !!}
        @error ('global_concept')<small class="text-red-700">{{$message}}</small> @enderror
      </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3">
        {!! Form::label('TBCode', 'TBCode', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
    </div>
    <div class="md:w-2/3">
      {!! Form::text('TBCode', $code, ['class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'readonly']) !!}
      @error ('TBCode')<small class="text-red-700">{{$message}}</small> @enderror
    </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3">
      {!! Form::label('indice', 'Indice', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
    </div>
    <div class="md:w-2/3">
      {!! Form::text('indice', $indi, ['class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'readonly']) !!}
      @error ('indice')<small class="text-red-700">{{$message}}</small> @enderror
    </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3">
      {!! Form::label('area', 'Area', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
    </div>
    <div class="md:w-2/3">
      {!! Form::text('area', $area, ['class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'readonly']) !!}
      @error ('area')<small class="text-red-700">{{$message}}</small> @enderror
    </div>
  </div>
</div>
