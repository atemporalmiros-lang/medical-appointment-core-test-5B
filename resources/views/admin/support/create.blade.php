<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'route' => route('admin.dashboard')
    ],
    [
        'name' => 'Soporte',
        'route' => route('admin.support.index')
    ],
    [
        'name' => 'Nuevo Ticket'
    ]
]">

    <x-slot name="title">
        Nuevo Ticket
    </x-slot>

    <div class="max-w-7xl mx-auto">
        <div class="bg-white border border-gray-200 shadow-sm sm:rounded-lg dark:bg-gray-800 dark:border-gray-700">
            <div class="px-8 py-6">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Reportar un problema</h2>
                <p class="mb-6 text-sm text-gray-500 dark:text-gray-400">Describe tu problema o duda y nuestro equipo de soporte se pondrá en contacto contigo.</p>
                
                <form action="{{ route('admin.support.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-6">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título del problema</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" class="bg-gray-50 border border-blue-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 shadow-sm" required>
                        @error('title')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción detallada</label>
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 shadow-sm" required>{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="flex justify-end space-x-3 pt-4">
                        <a href="{{ route('admin.support.index') }}" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Cancelar
                        </a>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Enviar Ticket
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
