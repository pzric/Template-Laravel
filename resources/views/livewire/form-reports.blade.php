<div>
    <div class="-mx-3 md:flex mb-6">
        {!! Form::number('users',auth()->user()->id, ['wire:model' => 'users', 'hidden']) !!}
        <div class="md:w-1/6 px-3">
            {!! Form::label('date', 'Año de aplicacion', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::number('date', null, ['wire:model.lazy' =>'date', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2']) !!}
            @error ('date')<span class="text-red-600 text-sm">{{$message}}</span>@enderror
        </div>
        <div class="md:w-1/6 px-3">
            {!! Form::label('currency_value', 'Tipo de cambio', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('currency_value', $currency_value, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2', 'readonly']) !!}
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            {!! Form::label('payment country', 'Pais de pago', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('payment_country', $countries, null, ['wire:model' =>'payment_country', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('payment_country')<span class="text-red-600 text-sm">{{$message}}</span>@enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('currency', 'Moneda de gasto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('currency', $currency, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2 m-1', 'readonly']) !!}
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('amount_value', 'Monto de gasto ML', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::number('amount_value', null, ['wire:model' => 'amount_value', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2 m-1', 'min' => '1']) !!}
            @error ('amount_value')<span class="text-red-600 text-sm">{{$message}}</span>@enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('dollar_amount', 'Monto USD', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            @if (is_numeric($dollar_amount))
            {!! Form::number('dollar_amount', $dollar_amount, ['wire:model' => 'dollar_amount', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2 m-1', 'readonly']) !!}
            @else
            {!! Form::number('dollar_amount', null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2 m-1', 'readonly']) !!}
            @endif
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            {!! Form::label('country_benefited', 'Pais beneficiado', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('country_benefited', $countries, null, ['wire:model' =>'country_benefited', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
          @error ('country_benefited')<span class="text-red-600 text-sm">{{$message}}</span> @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('specific_concept', 'Concepto especifico', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            @if (is_iterable($concept))
            {!! Form::select('specific_concept', $concept, null, ['wire:model' =>'specific_concept', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
            @else
            {!! Form::select('specific_concept', array('default' => 'Selecciona una opcion'), null, ['wire:model' =>'specific_concept', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion', 'disabled']) !!}
            @endif
            @error ('specific_concept')<span class="text-red-600 text-sm">{{$message}}</span> @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('global_concept', 'Concepto global', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('global_concept', $global_concept, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2 m-1', 'readonly']) !!}
            @error ('concep')
            @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="w-full px-3">
            {!! Form::label('expense_description', 'Descripcion de gasto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::textarea('expense_description ', null, ['wire:model' => 'expense_description', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'rows' => '2']) !!}
            @error ('expense_description')<span class="text-red-600 text-sm">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            {!! Form::label('calendar_id', 'Calendario para devengar', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('calendar_id', array('1' => 'Lineal', '2' => 'Distribuido'), null, ['wire:model' => 'calendar', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('calendar')<span class="text-red-600 text-sm">{{$message}}</span>@enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('cost_id', 'Centro de costo', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('cost_id', array('1' => 'Costo1', '2' => 'Costo2'), null, ['wire:model' => 'cost_id', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('cost_id')<span class="text-red-600 text-sm">{{$message}}</span>@enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('project_id', 'Proyecto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('project_id', array('1' => 'Proyecto1', '2' => 'Proyecto2'), null, ['wire:model' => 'project_id', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('project_id')<span class="text-red-600 text-sm">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            {!! Form::label('service_user', 'Usuario de servicio', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            @if (is_iterable($beneficteds))
              {!! Form::select('service_user', $beneficteds, null, ['wire:model' => 'service_user', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
            @else
              {!! Form::select('service_user', array('default' => 'Please select one option'), null, ['wire:model' => 'service_user', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion', 'disabled']) !!}
            @endif
            @error ('service_user')<span class="text-red-600 text-sm">{{$message}}</span>@enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('user_area', 'Area del usuario de servicio', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('user_area', $user_area, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'readonly']) !!}
        </div>
    </div>
    @if ($option == 1 || $option == 2 )
      <div style="{{$form}}" class="fixed text-black flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0">
          <div class="bg-white rounded-xl shadow-2xl p-6 w-full max-w-sm">
              <span class="font-bold block text-2xl mb-3">Calendario para devengar</span>
              <div class="grid grid-rows-3 grid-flow-col gap-4">
                  <div class="row-span-3">
                      <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/3">
                              {!! Form::label('val1', 'Enero', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                              {!! Form::label('val2', 'Febreo', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                              {!! Form::label('val3', 'Marzo', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                              {!! Form::label('val4', 'Abril', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                              {!! Form::label('val5', 'Mayo', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                              {!! Form::label('val6', 'Junio', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                          </div>
                          <div class="md:w-2/3">
                            @if ($option == 1)
                              {!! Form::number('val1', $val1, ['wire:model.defer' => 'val1', 'class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                              {!! Form::number('val2', $val2, ['wire:model.defer' => 'val2', 'class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                              {!! Form::number('val3', $val3, ['wire:model.defer' => 'val3', 'class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                              {!! Form::number('val4', $val4, ['wire:model.defer' => 'val4', 'class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                              {!! Form::number('val5', $val5, ['wire:model.defer' => 'val5', 'class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                              {!! Form::number('val6', $val6, ['wire:model.defer' => 'val6', 'class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                            @elseif ($option == 2)
                              {!! Form::number('val1', null, ['wire:model.defer' => 'val1', 'onkeyup' => 'sumar()', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                              {!! Form::number('val2', null, ['wire:model.defer' => 'val2', 'onkeyup' => 'sumar()', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                              {!! Form::number('val3', null, ['wire:model.defer' => 'val3', 'onkeyup' => 'sumar()', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                              {!! Form::number('val4', null, ['wire:model.defer' => 'val4', 'onkeyup' => 'sumar()', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                              {!! Form::number('val5', null, ['wire:model.defer' => 'val5', 'onkeyup' => 'sumar()', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                              {!! Form::number('val6', null, ['wire:model.defer' => 'val6', 'onkeyup' => 'sumar()', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                            @endif
                          </div>
                      </div>
                  </div>
                  <div class="row-span-3">
                      <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/3">
                              {!! Form::label('val7', 'Julio', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                              {!! Form::label('val8', 'Agosto', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                              {!! Form::label('val9', 'Septiembre', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                              {!! Form::label('val10', 'Octubre', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                              {!! Form::label('val11', 'Noviembre', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                              {!! Form::label('val12', 'Diciembre', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                          </div>
                          <div class="md:w-2/3">
                            @if ($option == 1)
                              {!! Form::number('val7', $val7, ['wire:model.defer' => 'val7', 'class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                              {!! Form::number('val8', $val8, ['wire:model.defer' => 'val8', 'class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                              {!! Form::number('val9', $val9, ['wire:model.defer' => 'val9', 'class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                              {!! Form::number('val10', $val10, ['wire:model.defer' => 'val10', 'class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                              {!! Form::number('val11', $val11, ['wire:model.defer' => 'val11', 'class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                              {!! Form::number('val12', $val12, ['wire:model.defer' => 'val12', 'class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                            @elseif ($option == 2)
                              {!! Form::number('val7', null, ['wire:model.defer' => 'val7', 'onkeyup' => 'sumar()', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                              {!! Form::number('val8', null, ['wire:model.defer' => 'val8', 'onkeyup' => 'sumar()', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                              {!! Form::number('val9', null, ['wire:model.defer' => 'val9', 'onkeyup' => 'sumar()', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                              {!! Form::number('val10', null, ['wire:model.defer' => 'val10', 'onkeyup' => 'sumar()', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                              {!! Form::number('val11', null, ['wire:model.defer' => 'val11', 'onkeyup' => 'sumar()', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                              {!! Form::number('val12', null, ['wire:model.defer' => 'val12', 'onkeyup' => 'sumar()', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                            @endif
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row-span-3">
                    <div class="text-right space-x-5 mt-5">
                      <div class="md:w-full">
                        @if ($option == 1)
                            <button type="button" wire:click="form()" class="bg-green-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-green-500 transition duration-200 each-in-out">Guardar</button>
                        @elseif ($option == 2)
                          <span id="messagevalidate" style="display: none;" class="text-red-600 text-sm">La suma total debe ser igual al monto de gasto</span>
                          <input type="number" id="valor1" class="border-2 border-black" onhashchange="habilitar()" hidden>
                          <input type="number" id="valor2" class="border-2 border-black" value="{{$amount_value}}" hidden>
                          <button type="button" id="boton" wire:click="form()" class="bg-green-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-green-500 transition duration-200 each-in-out" style="display: none;">Guardar</button>
                        @endif
                        <button type="button" wire:click="form()" class="bg-red-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-red-500 transition duration-200 each-in-out">Cancelar</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    @endif
    <div>
        {!! Form::button('<i class="fas fa-save mr-2"></i>Guardar presupuesto', ['wire:click' =>'save', 'class' => 'bg-green-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-green-500 transition duration-200 each-in-out']) !!}
    </div>
</div>
