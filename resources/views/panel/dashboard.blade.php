@extends('layouts.template')
@section('title', 'Panel')
@section('content')
<div>
  <x-siderbar attribute="value" />
</div>
<div class="w-full flex flex-col h-screen overflow-y-hidden">
  <x-nav attribute="value" />
  
</div>
@endsection
