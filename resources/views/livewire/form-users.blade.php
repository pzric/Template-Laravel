<div>
    <div class="-mx-3 md:flex mb-6" wire:ignore>
        <!--name|password|password_confirm-->
        <div class="md:w-1/2 px-3">
            {!! Form::label('code', 'Codigo de usuario', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('code', null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2']) !!}
            @error ('code')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('name', 'Nombre de usuario', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('name', null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2']) !!}
            @error ('name')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('password', 'Contraseña', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::password('password', ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2']) !!}
            @error ('password')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('password_confirm', 'Confirmar contraseña', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::password('password_confirm', ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2']) !!}
            @error ('password_confirm')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <!--email|rol|area-->
        <div class="md:w-1/2 px-3" wire:ignore>
            {!! Form::label('email', 'Correo electronico', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::email('email', null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2']) !!}
            @error ('email')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('country_origin', 'Pais de origen', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('country_origin', $allcountries, null, ['wire:model' => 'country_origin', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('country_origin')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
        <div class="md:w-1/2 px-3" wire:ignore>
            {!! Form::label('rol', 'Rol', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('rol', $rol, null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4']) !!}
            @error ('rol')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
        <div class="md:w-1/2 px-3" wire:ignore>
            {!! Form::label('area', 'Area', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('area', $area, null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4']) !!}
            @error ('area')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <!--start_date|end_date|toggle -->
        <div class="md:w-1/2 px-3">
            {!! Form::label('start_date', 'Fecha de ingreso', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::date('start_date', \Illuminate\Support\Carbon::now(), ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4']) !!}
            @error ('start_date')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('end_date', 'Fecha de salida', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::date('end_date', null, ['class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4']) !!}
            @error ('end_date')<small class="text-red-700">{{$message}}</small>
            @enderror
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
    <div class="-mx-3 md:flex mb-6">
        <!--cod_manager|email_manager-->
        <div class="md:w-1/2 px-3">
            {!! Form::label('cod_manager', 'Codigo jefe inmediato', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('cod_manager', null, ['class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4']) !!}
            @error ('cod_manager')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('email_manager', 'Correo jefe inmediato', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('email_manager', null, ['class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4']) !!}
            @error ('email_manager')
            <small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            {!! Form::label('countries', 'Paises alternos', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            @foreach ($countries as $country)
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3">
                    {!! Form::checkbox('countries[]', $country->id, false, ['class' => 'mr-3']) !!}
                    {!! Form::label('countries', $country->pais , ['class' => 'uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
