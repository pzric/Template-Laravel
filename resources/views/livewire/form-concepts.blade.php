<div>
  <div class="-mx-3 md:flex mb-2">
    <div class="md-3 px-3">
        {!! Form::label('country', 'Pais', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
        {!! Form::label('account', 'Cuenta contable', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
        {!! Form::label('specific_concept', 'Nombre concepto especifico', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
        {!! Form::label('global_concept', 'Concepto globla o del gasto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
        {!! Form::label('TBCode', 'TBCode', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
        {!! Form::label('indice', 'Indice', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
        {!! Form::label('area', 'Area', ['class' => 'block uppercase tracking-wide text-grey-darker text-xls py-4']) !!}
    </div>
      <div class="md:w-1/2 px-3">
        <div wire:model="count">
          {!! Form::select('country', $countries, null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
        </div>
        <div wire:model="body">
          @if (is_iterable($pais))
            {!! Form::select('account', $pais, null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
          @else
            {!! Form::select('account', array('default' => 'Please select one option'), null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion', 'disabled']) !!}
          @endif
        </div>
          {!! Form::text('specific_concept', null, ['class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1']) !!}
          {!! Form::text('global_concept', $global_concept, ['class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'readonly']) !!}
          {!! Form::text('TBCode', $code, ['class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'readonly']) !!}
          {!! Form::text('indice', $indi, ['class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'readonly']) !!}
          {!! Form::text('area', $area, ['class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'readonly']) !!}
      </div>
  </div>
</div>
