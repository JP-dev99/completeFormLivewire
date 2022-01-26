@extends('layouts.app')


@section('body')


<div class="flex h-screen overflow-y-hidden bg-white dark:bg-brand-dark-900 text-gray-500 dark:text-white" >

    <div class="flex flex-col flex-1 h-full overflow-hidden">

    @include('layouts.partials.header')
    <!-- Main content -->

        <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll bg-brand-500">

            @livewire('form')
        </main>
        <!-- Main footer -->
        <footer class="flex items-center justify-between flex-shrink-0 p-2 max-h-14">
            <div class="text-xs font-semibold text-gray-500 dark:text-blue-gray-200">&copy; 2021</div>
        </footer>
    </div>
</div>

@endsection

