    {{-- <link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <link rel="stylesheet" href={{ asset('css/fontawesome.css') }}>
    
    @include('components/sidebar') --}}
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="pt-5 mx-auto" style="width: 95%">
            @if (session()->has('message'))
                <div class='alert alert-danger'>
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>