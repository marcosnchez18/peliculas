<x-app-layout>
    <div class="relative overflow-x-auto w-3/4 mx-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>



                    <th class="px-6 py-3">
                        Título
                    </th>

                    <th class="px-6 py-3">
                        Número de entradas
                    </th>




                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">


                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $pelicula->titulo }}
                    </td>

                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {!! $pelicula->cantidad_entradas() !!}
                    </td>







                </tr>
            </tbody>
        </table>
        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('peliculas.index') }}">
                <x-secondary-button class="ms-4">
                    Volver
                    </x-primary-button>
            </a>
        </div>
    </div>
</x-app-layout>
