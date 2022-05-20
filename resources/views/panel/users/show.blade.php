@extends('layouts.template')
@section('title', 'Panel')
@section('content')
<div>
    <x-siderbar attribute="value" />
</div>
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <x-nav attribute="value" />
    <h1 class="m-3 text-3xl">Users</h1>
    @livewire('show-users')
</div>
@if (session('delet') == 'ok')
  <script type="text/javascript">
  Swal.fire(
    'Borrado!',
    'El usuario a sido borrado.',
    'success'
  )
  </script>
@endif
@endsection
