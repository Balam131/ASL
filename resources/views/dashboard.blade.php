@section('title', 'Dashboard')
<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="container shadow: bg-white flex justify-center">
        <div class="row">
            <div class="col-sm-12">
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 flex justify-center">

                        <a href="{{ route('Tarea.create') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="{{ asset('Sources/anadir.png') }}" alt="" width="40px"
                                    height="50px">

                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Crea Nueva Tarea</h2>

                        </a>

                    </div>
                </div>
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">

                        <a href="{{ route('Tarea.index') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="{{ asset('Sources/ver.png') }}" alt="" width="40px" height="50px">

                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Listar tareas</h2>

                        </a>

                    </div>
                </div>
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">

                        <a href="{{ route('Tarea.asis') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="{{ asset('Sources/ver.png') }}" alt="" width="40px" height="50px">

                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Asistencia</h2>

                        </a>

                    </div>
                </div>
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">

                        <a href="{{ route('Asis.list') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="{{ asset('Sources/ver.png') }}" alt="" width="40px" height="50px">

                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Lista de Asistencia</h2>

                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
