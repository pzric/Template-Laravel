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
            <div id="opcion1" style="display: none">
              <!-- Modal Background -->
               <div class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0">
                   <!-- Modal -->
                   <div class="bg-white rounded-xl shadow-2xl p-6 w-full max-w-sm">
                       <!-- Title -->
                       <span class="font-bold block text-2xl mb-3">Lineal</span>
                       <!-- Some beer -->
                       <div class="grid grid-rows-3 grid-flow-col gap-4">
                         <div class="row-span-3">
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Enero
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Febrero
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Marzo
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Abril
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Mayo
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Junio
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                         </div>
                         <div class="row-span-3">
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Julio
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Agosto
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Septiembre
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Octubre
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Noviembre
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Diciembre
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                         </div>
                       </div>

                       <!-- Buttons -->
                       <div class="text-right space-x-5 mt-5">
                         <button onclick="cerrar()"class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-white focus:outline-none focus:ring-0 font-bold hover:bg-gren-200 focus:bg-indigo-50 focus:text-indigo bg-green-500 ">Guardar</button>
                         <button onclick="cerrar()"class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-white focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo bg-red-500">Cancel</button>
                       </div>
                   </div>
               </div>
            </div>
            <div id="opcion2" style="display: none">
              <!-- Modal Background -->
               <div class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0">
                   <!-- Modal -->
                   <div class="bg-white rounded-xl shadow-2xl p-6 w-full max-w-sm">
                       <!-- Title -->
                       <span class="font-bold block text-2xl mb-3">Distribuido</span>
                       <!-- Some beer -->
                       <div class="grid grid-rows-3 grid-flow-col gap-4">
                         <div class="row-span-3">
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Enero
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Febrero
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Marzo
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Abril
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Mayo
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Junio
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                         </div>
                         <div class="row-span-3">
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Julio
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Agosto
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Septiembre
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Octubre
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Noviembre
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                           <div class="md:flex md:items-center mb-6">
                             <div class="md:w-1/3">
                               <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                 Diciembre
                               </label>
                             </div>
                             <div class="md:w-2/3">
                               <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
                             </div>
                           </div>
                         </div>
                       </div>

                       <!-- Buttons -->
                       <div class="text-right space-x-5 mt-5">
                         <button onclick="cerrar()"class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-white focus:outline-none focus:ring-0 font-bold hover:bg-gren-200 focus:bg-indigo-50 focus:text-indigo bg-green-500 ">Guardar</button>
                         <button onclick="cerrar()"class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-white focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo bg-red-500">Cancel</button>
                       </div>
                   </div>
               </div>
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
            if (v < ano-2) Swal.fire({
                  icon: 'error',
                  title: 'Este año no está dentro del rango permitido',
                });
            if (v < ano) this.value = ano - 1;
            if (v == ano) this.value = ano;
            if (v > ano) this.value = ano + 1;
            if (v > ano+2) Swal.fire({
                  icon: 'error',
                  title: 'Este año no está dentro del rango permitido',
                });
        });
        function mostrar(id) {
          if (id == '1') {
            document.getElementById('opcion1').style.display = 'block';
          }
          if (id == '2') {
            document.getElementById('opcion2').style.display = 'block';
          }
        }
        function cerrar(){
          document.getElementById('opcion1').style.display = 'none';
          document.getElementById('opcion2').style.display = 'none';
        }
    </script>
</div>
@endsection
