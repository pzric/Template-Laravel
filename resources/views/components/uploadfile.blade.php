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
    @error ('excel')
    <div class="text-red-700">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @enderror
    <h2>Tus archivos</h2>
    <div class="relative" id="viewFile">
    </div>
    <footer class="flex justify-end pb-8 pt-4">
        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-green-500 transition duration-200 each-in-out">
            <i class="fas fa-file-upload mr-3"></i>
            Subir ahora
        </button>
        <button type="button" onclick="resetview()" class="bg-red-600 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-red-500 transition duration-200 each-in-out">
            <i class="fas fa-window-close mr-3"></i>
            Cancelar
        </button>
    </footer>
</form>
