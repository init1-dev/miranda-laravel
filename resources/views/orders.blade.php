<x-app-layout>
    @section('content')
        <div class="main">
            <div class="main__container">
                <div class="main__upper">
                    <p class="main__upper--text">THE ULTIMATE LUXURY</p>
                </div>

                <div class="main__middle">
                    <p class="main__middle--text">Orders</p>
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
                    <div class="p-6">
                        <a href={{route('dashboard')}}>
                            <button 
                                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                            >
                                <i class="fa-solid fa-house"></i>
                            </button>
                        </a>

                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', { name: 'create-order' })"
                        >{{ __('NEW ORDER ') }}<i class="fa-solid fa-plus"></i></button>
                    </div>
                    <div class="p-2 lg:p-6 text-gray-900">
                        <table class="mt-6 table-auto container mx-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Room</th>
                                    <th class="px-4 py-2">Order</th>
                                    <th class="px-4 py-2">Description</th>
                                    <th class="px-4 py-2">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td class="px-4 py-2 text-center">{{ $order->room->room_number }}</td>
                                    <td class="px-4 py-2 text-center">{{ $order->type }}</td>
                                    <td class="px-4 py-2 text-center">{{ $order->description }}</td>
                                    <td class="px-4 py-2 text-center">
                                        <button
                                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                                            x-data="{ 
                                                id: {{ $order->id }}, 
                                                room_id: '{{ $order->room_id }}',
                                                type: '{{ $order->type }}',
                                                description: '{{ $order->description }}'
                                            }"
                                            x-on:click.prevent="$dispatch(
                                                'open-modal',
                                                {
                                                    name: 'update-order',
                                                    data: {
                                                        id: id,
                                                        room_id: room_id,
                                                        type: type,
                                                        description: description
                                                    }
                                                }
                                            )"
                                        >
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>

                                        <button
                                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow"
                                            x-data="{ 
                                                id: {{ $order->id }}, 
                                                room_id: '{{ $order->room_id }}',
                                                type: '{{ $order->type }}',
                                                description: '{{ $order->description }}'
                                            }"
                                            x-on:click.prevent="$dispatch(
                                                'open-modal',
                                                {
                                                    name: 'delete-order',
                                                    data: {
                                                        id: id,
                                                        room_id: room_id,
                                                        type: type,
                                                        description: description
                                                    }
                                                }
                                            )"
                                        >
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('orders.createOrderModal')
        @include('orders.updateOrderModal')
        @include('orders.deleteOrderModal')
    @endsection
</x-app-layout>
