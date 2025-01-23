<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Acceso Denegado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    <h1 class="text-6xl font-bold text-red-500 mb-4">403</h1>
                    <p class="text-gray-700 text-lg mb-6">
                        Lo sentimos, no tienes permiso para acceder a esta página.
                    </p>
                    <a href="{{ url('/dashboard') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" style="background-color: #1E3A8A; color: white; text-align: center; padding: 0.5rem; border-radius: 0.375rem; border: none; cursor: pointer;">
                        Volver al Inicio
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
