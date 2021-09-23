<div>
    <div class="-mx-3 md:flex mb-6"> <!--date | coin-->
        <div class="md-1 px-3">
            {!! Form::label('date', 'Año de aplicacion', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::number('date',null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4']) !!}
            @error ('date') @enderror
        </div>
        <div class="md-1 px-3">
            {!! Form::label('coin', 'Tipo de cambio', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('coin',$number3, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
            @error ('coin') @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6"> <!--id_country | currency | number1 |number2 -->
        <div class="md:w-1/2 px-3" wire:model="count">
            {!! Form::label('payment_country', 'Pais de pago', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('id_country', $countries, null, ['class' => 'block w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('id_country') @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('currency', 'Moneda de gasto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('currency', $coin, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
            @error ('currency') @enderror
        </div>
        <div class="md:w-1/2 px-3" wire:model="conv">
            {!! Form::label('amount', 'Monto de gasto ML', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::number('number1', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'min' => '1']) !!}
            @error ('number1') @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('dollar_amount', 'Monto USD', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            @if (is_numeric($number3) && is_numeric($number4))
            {!! Form::number('number2', round(($number4/$number3),4), ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
            @else
            {!! Form::number('number2', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
            @endif
            @error ('number2') @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6"> <!--id_countryb | id_concept ! concep-->
        <div class="md:w-1/2 px-3" wire:model="beneficteds">
            {!! Form::label('beneficted_country', 'Pais beneficiado', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('id_countryb', $countries, null, ['class' => 'block w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('id_country') @enderror
        </div>
        <div class="md:w-1/2 px-3" wire:model="con">
            {!! Form::label('concept', 'Concepto especifico', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            @if (is_iterable($concept))
            {!! Form::select('id_concept', $concept, null, ['class' => 'block w-full text-grey-darker border-2 border-gray-400 py-3 px-4 py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion']) !!}
            @else
            {!! Form::select('id_concept', array('default' => 'Please select one option'), null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion', 'disabled']) !!}
            @endif
            @error ('id_concept') @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('concep', 'Concepto global', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('concep', $global_concept, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
            @error ('concep') @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6"> <!--description -->
        <div class="w-full px-3">
            {!! Form::label('description', 'Descripcion de gasto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::textarea('description', null, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 px-3 py-2', 'rows' => '2']) !!}
            @error ('description') @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6"> <!--calendar | cost | project -->
        <div class="md:w-1/2 px-3">
            {!! Form::label('accrual', 'Calendario para devegar', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('calendar', $devegar, null, ['class' => 'block w-full text-grey-darker border-2 border-gray-400 py-3 px-4 py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion', 'onChange' => 'mostrar(this.value)']) !!}
            @error ('calendar') @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('cost', 'Centro de costo', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('cost', $cost, null, ['class' => 'block w-full text-grey-darker border-2 border-gray-400 py-3 px-4 py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('cost') @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('project', 'Proyecto', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('project', $project, null, ['class' => 'block w-full text-grey-darker border-2 border-gray-400 py-3 px-4 py-3 px-4 pr-8 rounded', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('project') @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6"> <!--name_beneficted | user_area-->
        <div class="md:w-1/2 px-3" wire:model="area">
            {!! Form::label('name_beneficted', 'Usuario de servicio', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            @if (is_iterable($beneficteds))
            {!! Form::select('name_beneficted', $beneficteds, null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion']) !!}
            @else
            {!! Form::select('name_beneficted', array('default' => 'Please select one option'), null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4 m-1', 'placeholder' => 'Selecciona una opcion', 'disabled']) !!}
            @endif
            @error ('name_beneficted') @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('user_area', 'Area del usuario de servicio', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('user_area', $area_beneficted, ['class' => 'appearance-none w-full text-grey-darker border-2 border-gray-400 py-3 px-4', 'readonly']) !!}
            @error ('user_area') @enderror
        </div>
    </div>
</div>
