<div>
  <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
          {!! Form::label('pais', 'Pais', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
      </div>
      <div class="md:w-2/3">
        {!! Form::text('pais', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
        @error ('pais')<small class="text-red-700">{{$message}}</small>@enderror
      </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
        {!! Form::label('coin_type', 'Moneda local', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
    </div>
    <div class="md:w-2/3">
        {!! Form::text('coin_type', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
        @error ('coin_type')<small class="text-red-700">{{$message}}</small>@enderror
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
        {!! Form::label('current_change', 'Tipo de cambio actual', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
    </div>
    <div class="md:w-2/3">
        {!! Form::number('current_change', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
        @error ('current_change')<small class="text-red-700">{{$message}}</small>@enderror
    </div>
  </div>
</div>
