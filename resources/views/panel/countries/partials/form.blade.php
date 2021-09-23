<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
        {!! Form::label('pais', 'Pais', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
    </div>
    <div class="md:w-2/3">
      {!! Form::text('pais', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
    </div>
    <div class="md:w-1/3">
        {!! Form::label('coin_type', 'Moneda local', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
    </div>
    <div class="md:w-2/3">
        {!! Form::text('coin_type', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
    </div>
    <div class="md:w-1/3">
        {!! Form::label('current_change', 'Tipo de cambio actual', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
    </div>
    <div class="md:w-2/3">
        {!! Form::text('current_change', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
    </div>
</div>
