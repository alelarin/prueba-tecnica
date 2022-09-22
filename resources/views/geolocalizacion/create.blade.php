<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Geolocalización') }}
        </h2>
    </x-slot>

        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 mt-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('geolocalizacion.store') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-6">
                            <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número de teléfono: </label>
                            <input type="text" id="telefono" name="telefono"
                            maxlength="8" min="8" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="mb-6">
                            <label for="path" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Imágen: </label>
                            <input type="file" name="path"
                            id="path" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <input id="latitud" name="latitud" type="hidden" value="15.234580">
                        <input id="longitud" name="longitud" type="hidden" value="-43.510369">

                        <button type="submit" class=" bg-gray-800 border-transparent rounded-md font-semibold text-xs text-white uppercase
                        hover:bg-gray-700 py-2 px-4 focus:border-gray-900">Guardar</button>

                    </form>
                        <!-- boton para calcular posicion y devolver latitud, longitud -->
                       <!-- <button id="location" class=" border-transparent rounded-md font-semibold text-xs text-black uppercase">Geolocalizar</button>-->
                </div>
            </div>
        </div>

        <script>
            $('#location').click(fuction(){

                if(navigator.geolocation)
                    navigator.geolocation.getCurrentPosition(function(position){
                        console.log(position);
                    });
                else
                console.log("su navegador no soporta geolocalizacion");
            });
        </script>

</x-app-layout>
