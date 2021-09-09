@extends('layouts.template')
@section('title', 'Login')
@section('content')
<div class="w-full flex flex-wrap">
    <!-- Login Section -->
    <div class="w-full md:w-1/2 flex flex-col">
        <div class="flex justify-center md:pl-6 md:-mb-24">
            <img src="{{ asset('logotipo nikken-02.png') }}" class="object-contain h-28">
        </div>
        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <p class="text-center text-3xl">Bienvenido.</p>
            <form class="flex flex-col pt-3 md:pt-8" method="post" action="{{route('home')}}">
                @csrf
                <div class="flex flex-col pt-4">
                    <label for="email" class="text-lg">Correo</label>
                    <input type="email" required autofocus name="email" value="{{ old('email') }}" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none
                    focus:shadow-outline">
                    @error ('email') {{$message}}
                    @enderror
                </div>
                <div class="flex flex-col pt-4">
                    <label for="password" class="text-lg">Contraseña</label>
                    <input type="password" required name="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    @error ('password') {{$message}}
                    @enderror
                </div>
                <div class="pt-4">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Recordar contraseña</label>
                </div>
                <input type="submit" value="Iniciar seccion" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
            </form>
        </div>
    </div>
    <!-- Image Section -->
    <div class="w-1/2 shadow-2xl">
        <img class="object-cover w-full h-screen hidden md:block" src="https://picsum.photos/200/300/?blur=2">
    </div>
</div>
@endsection
