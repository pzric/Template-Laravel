@extends('layouts.template')
@section('title', 'Panel')
@section('content')
<div>
    <x-siderbar attribute="value" />
</div>
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <x-nav attribute="value" />
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col m-5 divide-y-4 divide-black divide-opacity-25">
            <div>
                <form action="{{route('/reports/import')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="border border-dashed border-gray-500 w-full h-full p-10 text-center">
                        <p>Arrastra y suelta tu archivo en cualquier lugar o</p>
                        <label class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                            <span>Subir un archivo</span>
                            <input name="excel" id="fileInput" type="file" class="hidden" accept=".xlsx, .xls" />
                            <label for="excel" type="file"></label>
                        </label>
                    </div>
                    <h2>Tus archivos</h2>
                    <div class="relative" id="viewFile">
                    </div>
                    <footer class="flex justify-end pb-8 pt-4">
                        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-green-500 transition duration-200 each-in-out">
                            <i class="fas fa-file-upload mr-3"></i>
                            Subir ahora
                        </button>
                        <button type="button" onclick="myFunction()" class="bg-red-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-red-500 transition duration-200 each-in-out">
                            <i class="fas fa-window-close mr-3"></i>
                            Cancelar
                        </button>
                    </footer>
                </form>
            </div>
            <div>
                {!! Form::open(['route' => 'reports.store']) !!}
                @livewire('form-reports')
                {!! Form::submit('Guardar presupuesto', ['class' => 'bg-green-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-green-500 transition duration-200 each-in-out']) !!}
                <!--<i class="fas fa-save mr-3"></i>SAVE</button>-->
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function myFunction() {
            document.getElementById("viewFile").reset();
        };
        document.getElementById('fileInput').onchange = function() {
            document.getElementById('viewFile').innerHTML =
                '<img src="{{ asset('excel_logo_icon.png ') }}" width="50" height="50"/>' + document.getElementById('fileInput').files[0].name;
        };
        var fecha = new Date();
        var ano = fecha.getFullYear();
        document.getElementById('date').value = ano;
        document.getElementById('date').addEventListener("change", function() {
            let v = parseInt(this.value);
            if (v < ano) this.value = ano - 1;
            if (v == ano) this.value = ano;
            if (v > ano) this.value = ano + 1;
        });
    </script>
    @endsection
