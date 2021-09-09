<div>
  <div class="-mx-3 md:flex mb-6">
      <div class="md:w-1/2 px-3">
          {!! Form::label('username', 'Usuario de servicio', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
          {!! Form::text('username', auth()->user()->name, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'disabled']) !!}
      </div>
      <div class="md:w-1/2 px-3">
          {!! Form::label('user_area', 'Area del usuario de servicio', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
          {!! Form::text('user_area', auth()->user()->area, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'disabled']) !!}
      </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
      <div class="md:w-1/2 px-3">
          {!! Form::label('date', 'Año de aplicacion', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
          {!! Form::number('date',null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
      </div>
      <div class="md:w-1/2 px-3">
          {!! Form::label('concep', 'Concepto especifico', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
          {!! Form::text('concep', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
      </div>
      <div class="md:w-1/2 px-3">
          {!! Form::label('concep', 'Concepto global', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
          {!! Form::text('concep', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'disabled']) !!}
      </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3" wire:model = "count">
      {!! Form::label('payment_country', 'Pais de pago', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
      {!! Form::select('id_country', $allcountries, null, ['class' => 'block w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded']) !!}
    </div>
    <div class="md:w-1/2 px-3">
      {!! Form::label('currency', 'Moneda de gasto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
      {!! Form::text('currency', $coin, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
    </div>
    <div class="md:w-1/2 px-3" wire:model = "conv">
      {!! Form::label('amount', 'Monto de gasto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
      {!! Form::number('number1', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'min' => '1']) !!}
    </div>
    <div class="md:w-1/2 px-3">
        {!! Form::label('dollar_amount', 'Monto ML/USD', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
      {!! Form::number('number2', $number3*$number4, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3">
      {!! Form::label('payment_country', 'Pais de beneficiado', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
      {!! Form::select('id_country', $allcountries, null, ['class' => 'block w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded']) !!}
    </div>
    <div class="md:w-1/2 px-3">
        {!! Form::label('accrual', 'Calendario para devegar', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
        {!! Form::number('accrual', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
    </div>
    <div class="md:w-1/2 px-3">
        {!! Form::label('description', 'Descripcion de gasto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
        {!! Form::text('description', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3">
        {!! Form::label('cost', 'Centro de costo', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
        {!! Form::select('cost', $cost, null, ['class' => 'block w-full  text-grey-darker border-2 border-gray-400 py-3 px-4 py-3 px-4 pr-8 rounded']) !!}
    </div>
    <div class="md:w-1/2 px-3">
        {!! Form::label('project', 'Proyecto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
        {!! Form::select('project', $project, null, ['class' => 'block w-full  text-grey-darker border-2 border-gray-400 py-3 px-4 py-3 px-4 pr-8 rounded']) !!}
    </div>
  </div>
</div>
