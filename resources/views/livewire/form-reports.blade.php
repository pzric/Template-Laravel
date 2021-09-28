<div>
    <div class="-mx-3 md:flex mb-6">
        <!--date | coin-->
        {!! Form::number('users',auth()->user()->id, ['hidden']) !!}
        <div class="md-1 px-3">
            {!! Form::label('date', 'Año de aplicacion', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::number('date',null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
            @error ('date')
            @enderror
        </div>
        <div class="md-1 px-3">
            {!! Form::label('coin', 'Tipo de cambio', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('coin',$number3, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
            @error ('coin')
            @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <!--id_country | currency | number1 |number2 -->
        <div class="md:w-1/2 px-3" wire:model="count">
            {!! Form::label('payment_country', 'Pais de pago', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('id_country', $countries, null, ['class' => 'block w-full text-grey-darker border-2 border-gray-400 py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('id_country')
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('currency', 'Moneda de gasto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('currency', $coin, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
            @error ('currency')
            @enderror
        </div>
        <div class="md:w-1/2 px-3" wire:model="conv">
            {!! Form::label('amount', 'Monto de gasto ML', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::number('number1', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'min' => '1']) !!}
            @error ('number1')
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('dollar_amount', 'Monto USD', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            @if (is_numeric($number3) && is_numeric($number4))
            {!! Form::number('number2', round(($number4/$number3),4), ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
            @else
            {!! Form::number('number2', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
            @endif
            @error ('number2')
            @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <!--id_countryb | id_concept ! concep-->
        <div class="md:w-1/2 px-3" wire:model="beneficteds">
            {!! Form::label('beneficted_country', 'Pais beneficiado', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('id_countryb', $countries, null, ['class' => 'block w-full text-grey-darker border-2 border-gray-400 py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('id_country')
            @enderror
        </div>
        <div class="md:w-1/2 px-3" wire:model="con">
            {!! Form::label('concept', 'Concepto especifico', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            @if (is_iterable($concept))
            {!! Form::select('id_concept', $concept, null, ['class' => 'block w-full text-grey-darker border-2 border-gray-400 py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion']) !!}
            @else
            {!! Form::select('id_concept', array('default' => 'Please select one option'), null, ['class' => 'block w-full text-grey-darker border-2 border-gray-400 py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion', 'disabled']) !!}
            @endif
            @error ('id_concept')
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('concep', 'Concepto global', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('concep', $global_concept, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
            @error ('concep')
            @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <!--description -->
        <div class="w-full px-3">
            {!! Form::label('description', 'Descripcion de gasto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::textarea('description', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 px-3 py-2', 'rows' => '2']) !!}
            @error ('description')
            @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <!--calendar | cost | project -->
        <div class="md:w-1/2 px-3" wire:model="list">
            {!! Form::label('accrual', 'Calendario para devengar', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('calendar', $devegar, null, ['class' => 'block w-full text-grey-darker border-2 border-gray-400 py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion']) !!}
            <!--, 'onChange' => 'mostrar(this.value)'-->
            @error ('calendar')<small class="text-red-700">{{$message}}</small>@enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('cost', 'Centro de costo', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('cost', $cost, null, ['class' => 'block w-full text-grey-darker border-2 border-gray-400 py-3 px-4 py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('cost')
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('project', 'Proyecto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('project', $project, null, ['class' => 'block w-full text-grey-darker border-2 border-gray-400 py-3 px-4 py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('project')
            @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <!--name_beneficted | user_area-->
        <div class="md:w-1/2 px-3" wire:model="area">
            {!! Form::label('name_beneficted', 'Usuario de servicio', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            @if (is_iterable($beneficteds))
            {!! Form::select('name_beneficted', $beneficteds, null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
            @else
            {!! Form::select('name_beneficted', array('default' => 'Please select one option'), null, ['class' => 'block w-full text-grey-darker border-2 border-gray-400 py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion', 'disabled'])
            !!}
            @endif
            @error ('name_beneficted')
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('user_area', 'Area del usuario de servicio', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('user_area', $area_beneficted, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
            @error ('user_area')
            @enderror
        </div>
    </div>
    @if ($option == 1 || $option == 2 )
    <!-- Modal Background -->
    <div style="{{$viewform}}" class="fixed text-black flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0">
        <!-- Modal -->
        <div class="bg-white rounded-xl shadow-2xl p-6 w-full max-w-sm">
            <!-- Title -->
            <span class="font-bold block text-2xl mb-3">Lineal</span>
            <!-- Some beer -->
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
                            {!! Form::number('val1', $number4/12, ['class' => 'TotalNeto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                            {!! Form::number('val2', $number4/12, ['class' => 'TotalNeto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                            {!! Form::number('val3', $number4/12, ['class' => 'TotalNeto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                            {!! Form::number('val4', $number4/12, ['class' => 'TotalNeto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                            {!! Form::number('val5', $number4/12, ['class' => 'TotalNeto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                            {!! Form::number('val6', $number4/12, ['class' => 'TotalNeto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                          @elseif ($option == 2)
                            {!! Form::number('val1', $number4/12, ['onkeyup' => 'sumar();', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                            {!! Form::number('val2', $number4/12, ['onkeyup' => 'sumar();', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                            {!! Form::number('val3', $number4/12, ['onkeyup' => 'sumar();', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                            {!! Form::number('val4', $number4/12, ['onkeyup' => 'sumar();', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                            {!! Form::number('val5', $number4/12, ['onkeyup' => 'sumar();', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                            {!! Form::number('val6', $number4/12, ['onkeyup' => 'sumar();', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                          @endif
                        </div>
                    </div>
                </div>
                <div class="row-span-3">
                    <div class="md:flex md:items-center mb-6">
                      <div class="md:w-1/3">
                        {!! Form::label('val1', 'Julio', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                        {!! Form::label('val2', 'Agosto', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                        {!! Form::label('val3', 'Septiembre', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                        {!! Form::label('val4', 'Octubre', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                        {!! Form::label('val5', 'Noviembre', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                        {!! Form::label('val6', 'Diciembre', ['class' => 'block text-black font-bold md:text-right mb-1 md:mb-0 pr-4 py-1 px-1 my-2']) !!}
                      </div>
                      <div class="md:w-2/3">
                        @if ($option == 1)
                          {!! Form::number('val7', $number4/12, ['class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                          {!! Form::number('val8', $number4/12, ['class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                          {!! Form::number('val9', $number4/12, ['class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                          {!! Form::number('val10', $number4/12, ['class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                          {!! Form::number('val11', $number4/12, ['class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                          {!! Form::number('val12', $number4/12, ['class' => 'bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1', 'readonly']) !!}
                        @elseif ($option == 2)
                          {!! Form::number('val7', $number4/12, ['onkeyup' => 'sumar();', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                          {!! Form::number('val8', $number4/12, ['onkeyup' => 'sumar();', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                          {!! Form::number('val9', $number4/12, ['onkeyup' => 'sumar();', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                          {!! Form::number('val10', $number4/12, ['onkeyup' => 'sumar();', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                          {!! Form::number('val11', $number4/12, ['onkeyup' => 'sumar();', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                          {!! Form::number('val12', $number4/12, ['onkeyup' => 'sumar();', 'class' => 'monto bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 py-1 px-1 m-1']) !!}
                        @endif
                      </div>
                    </div>
                    <!-- Buttons -->
                    <div class="text-right space-x-5 mt-5">
                      <input name="valtotal" type="number" id="spTotal" class="">
                      {!! Form::button('Guardar', ['class' => 'bg-green-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-green-500 transition duration-200 each-in-out', 'wire:click' => 'form()']) !!}
                    </div>
                </div>
            </div>
            <span class="flex text-red-600">{{$message}}</span>
        </div>
        @endif
    </div>
