@extends('layouts.app')

@section('title')
Formulário de visitante
@endsection


@section('body')


    <div class="flex h-screen overflow-y-hidden text-gray-500 bg-white dark:bg-brand-dark-900 dark:text-white">

        <div class="flex flex-col flex-1 h-full overflow-hidden">

            @include('layouts.partials.header')
            <!-- Main content -->

            <main class="flex-1 max-h-full p-4 overflow-hidden overflow-y-scroll bg-brand-500">

                @if (auth()->id())
                    <div class="mt-20"
                        x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'description'}"
                        id="tab_wrapper">
                        <!-- The tabs navigation -->
                        <nav>
                            <ul class='flex justify-between cursor-pointer'>
                                <a class="px-4 py-2 mr-2 text-sm text-center text-indigo-100 bg-indigo-500 rounded-full sm:text-base"
                                    :class="{ 'active': tab === 'description' }"
                                    @click.prevent="tab = 'description'; window.location.hash = 'description'"
                                    href="#">Cadastrar</a>
                                <a class="px-4 py-2 text-sm text-blue-100 bg-blue-500 rounded-full sm:text-base"
                                    :class="{ 'active': tab === 'reviews' }"
                                    @click.prevent="tab = 'reviews'; window.location.hash = 'reviews'" href="#">Visualizar
                                    dados</a>
                            </ul>
                        </nav>

                        <!-- The tabs content -->
                        <div x-show="tab === 'description'">
                            @livewire('form')
                        </div>
                        <div x-show="tab === 'reviews'">
                            @livewire('view-table-visitors')
                        </div>

                    </div>
                @else
                    <div class="mt-32">
                        @livewire('form')
                    </div>
                @endif
            </main>
            <!-- Main footer -->
            <footer class="flex justify-center p-2 max-h-14">
                <div class="text-xs font-semibold text-center text-gray-500 dark:text-blue-gray-200">Vida e paz church &copy; 2022</div>
            </footer>
        </div>
    </div>

@endsection
