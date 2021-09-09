<div class="-mx-3 md:flex mb-6">
    <div class="md:w-auto px-3">
        {!! Form::label('pais', 'Pais', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
        {!! Form::text('pais', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
    </div>
    <div class="md:w-auto px-3">
        {!! Form::label('coin_type', 'Moneda local', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
        {!! Form::text('coin_type', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
    </div>
    <div class="md:w-auto px-3">
        {!! Form::label('current_change', 'Tipo de cambio actual', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
        {!! Form::text('current_change', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
    </div>
</div>
