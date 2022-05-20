<div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            {!! Form::label('user_code', 'Codigo de usuario', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::number('user_code', null, ['wire:model.defer' => 'user_code', 'min' => '0', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2']) !!}
            @error ('user_code')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('user_name', 'Nombre de usuario', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::text('user_name' ,null , ['wire:model.defer' => 'user_name', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2']) !!}
            @error ('user_name')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('user_password', 'Contraseña', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::password('user_password', ['wire:model.defer' => 'user_password', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2']) !!}
            @error ('user_password')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('password_confirm', 'Confirmar contraseña', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::password('password_confirm', ['wire:model.defer' => 'password_confirm', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2']) !!}
            @error ('password_confirm')<small class="text-red-700">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            {!! Form::label('user_email', 'Correo electronico', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::email('user_email', null, ['wire:model.defer' => 'user_email', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-2 px-2']) !!}
            @error ('user_email')<small class="text-red-700">{{$message}}</small>@enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('country_origin', 'Pais de origen', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('country_origin', $allcountries, null, ['wire:model' => 'country_origin', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('country_origin')<small class="text-red-700">{{$message}}</small>@enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('user_rol', 'Rol', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('user_rol', $rol, null, ['wire:model.defer' => 'user_rol', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('user_rol')<small class="text-red-700">{{$message}}</small>@enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('user_area', 'Area', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::select('user_area', $area, null, ['wire:model.defer' => 'user_area', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4', 'placeholder' => 'Selecciona una opcion']) !!}
            @error ('user_area')<small class="text-red-700">{{$message}}</small>@enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            {!! Form::label('start_date', 'Fecha de ingreso', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::date('start_date', null, ['wire:model.defer' => 'start_date', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4']) !!}
            @error ('start_date')<small class="text-red-700">{{$message}}</small>@enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('end_date', 'Fecha de salida', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::date('end_date', null, ['wire;model.defer' => 'end_date', 'class' => 'w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4']) !!}
            @error ('end_date')<small class="text-red-700">{{$message}}</small>@enderror
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
            {!! Form::number('cod_manager', null, ['wire:model.defer' => 'cod_manager', 'class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4']) !!}
            @error ('cod_manager')<small class="text-red-700">{{$message}}</small>@enderror
        </div>
        <div class="md:w-1/2 px-3">
            {!! Form::label('email_manager', 'Correo jefe inmediato', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            {!! Form::email('email_manager', null, ['wire:model.defer' => 'email_manager', 'class' => 'appearance-none w-full rounded-md text-grey-darker border border-gray-400 py-3 px-4']) !!}
            @error ('email_manager')<small class="text-red-700">{{$message}}</small>@enderror
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            {!! Form::label('countries', 'Paises alternos', ['class' => 'block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
            @if (is_iterable($countries))
              @foreach ($countries as $country)
              <div class="-mx-3 md:flex mb-6">
                  <div class="md:w-1/2 px-3">
                      {!! Form::checkbox('selctcountries[]', $country->id, false, ['wire:model.defer' => 'selctcountries', 'class' => 'mr-3']) !!}
                      {!! Form::label('countries', $country->country , ['class' => 'uppercase tracking-wide text-grey-darker text-xs font-bold mb-2']) !!}
                  </div>
              </div>
              @endforeach
            @endif
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-1/2 px-3">
          {!! Form::button('<i class="fas fa-save mr-3"></i>Guardar usuario', ['wire:click' => 'save()' ,'class' => 'bg-green-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-green-500 transition duration-200 each-in-out']) !!}
      </div>
    </div>
</div>
