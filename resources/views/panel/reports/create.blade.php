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
            <x-uploadfile attribute="value" />
            @livewire('form-reports')
        </div>
    </div>
    <script type="text/javascript">
        function resetview() {
            document.getElementById("viewFile").reset();
        };
        document.getElementById('fileInput').onchange = function() {
            document.getElementById('viewFile').innerHTML =
                document.getElementById('fileInput').files[0].name;
        };
        var fecha = new Date();
        var ano = fecha.getFullYear();
        let year = document.getElementById('date');
        year.addEventListener("change", function() {
          year.dispatchEvent(new Event('input'));
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
        function sumar() {
          var total = 0;
          var camp2= document.getElementById('valor2');
          var boton= document.getElementById('boton');
          var message= document.getElementById('messagevalidate');
          $(".monto").each(function() {
            if (isNaN(parseFloat($(this).val()))) {
              total += 0;
            } else {
              total += parseFloat($(this).val());
            }
          });
            if (total != camp2.value) {
                boton.style.display = 'none';
                message.style.display = 'inline';
              }else {
                boton.style.display = 'inline';
                message.style.display = 'none';
              }
        }
    </script>
</div>
@endsection
