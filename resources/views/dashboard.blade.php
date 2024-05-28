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
                <div class="banner__breadcrumb-inner">
                    <span>
                        <a href={{route('index')}}>Home</a>
                    </span><span>|</span><span>Dashboard</span>
                </div>
            </div>
        </div>

        @include('layouts.navigation')

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("Welcome " . Auth::user()->name . "!") }}
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam architecto tenetur omnis maiores eos adipisci repellat repudiandae dolorum ducimus animi dolor vel optio ipsa perferendis, similique vitae sed! In, expedita!</p>
                
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam architecto tenetur omnis maiores eos adipisci repellat repudiandae dolorum ducimus animi dolor vel optio ipsa perferendis, similique vitae sed! In, expedita!</p>
                
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam architecto tenetur omnis maiores eos adipisci repellat repudiandae dolorum ducimus animi dolor vel optio ipsa perferendis, similique vitae sed! In, expedita!</p>
                
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam architecto tenetur omnis maiores eos adipisci repellat repudiandae dolorum ducimus animi dolor vel optio ipsa perferendis, similique vitae sed! In, expedita!</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
