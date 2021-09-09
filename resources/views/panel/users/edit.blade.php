@extends('layouts.template')
@section('title', 'Panel')
@section('content')
<div>
    <x-siderbar attribute="value" />
</div>
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <x-nav attribute="value" />
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col m-5">
                {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}
                @include('panel.users.partials.form')
                {!! Form::submit('Actualizar usuario', ['class' => 'bg-green-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-green-500 transition duration-200 each-in-out']) !!}
                <!--<i class="fas fa-save mr-3"></i>SAVE</button>-->
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
