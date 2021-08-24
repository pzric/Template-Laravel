@extends('layouts.template')
@section('title', 'Panel')
@section('content')
<div>
  <x-siderbar attribute="value" />
</div>
<div class="w-full flex flex-col h-screen overflow-y-hidden">
  <x-nav attribute="value" />
  <div class="w-full overflow-x-hidden border-t flex flex-col">
      <main class="w-full flex-grow p-6">
          <h1 class="text-3xl text-black pb-6">Hello</h1>
      </main>
  </div>
</div>

@endsection
