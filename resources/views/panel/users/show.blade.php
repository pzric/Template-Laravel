@extends('layouts.template')
@section('title', 'Panel')
@section('content')
<div>
    <x-siderbar attribute="value" />
</div>
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <x-nav attribute="value" />
    @livewire('show-users')
</div>
@if (session('delet') == 'ok')
  <script type="text/javascript">
  Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
  )
  </script>
@endif
@endsection
