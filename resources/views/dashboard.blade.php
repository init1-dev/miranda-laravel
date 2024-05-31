<x-app-layout>
    @section('content')
        <div class="main">
            <div class="main__container">
                <div class="main__upper">
                    <p class="main__upper--text">THE ULTIMATE LUXURY</p>
                </div>

                <div class="main__middle">
                    <p class="main__middle--text">Dashboard</p>
                </div>
            </div>
            <div class="banner__breadcrumb">
                <div class="banner__breadcrumb-inner flex items-center justify-center">
                    <span>
                        <a href={{route('index')}}>Home</a>
                    </span>
                    <span>|</span>
                    @include('layouts.navigationUser')
                </div>
            </div>
        </div>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12" style="padding-top: 0;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("Welcome " . Auth::user()->name . "!") }}
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <a href={{route('orders')}}>
                            <button 
                                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                            >
                                <i class="fa-regular fa-bell"></i>
                                Your orders
                            </button>
                        </a>

                        <p class="mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam architecto tenetur omnis maiores eos adipisci repellat repudiandae dolorum ducimus animi dolor vel optio ipsa perferendis, similique vitae sed! In, expedita!</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
