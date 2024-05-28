<x-modal name="create-order" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
        @csrf
        @method('post')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('NEW ORDER') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Please fill all fields to create a new order.') }}
        </p>

        <div class="form-control">

            <label for="room_id">Select room:</label>
            <select id="room_id" name="room_id" class="w-full h-full rounded-md border-0 bg-transparent text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm mt-1 block w-3/4 mb-4">
                <option>Room 1</option>
                <option>Room 2</option>
                <option>Room 3</option>
            </select>

            <label for="type">Select type:</label>
            <select id="type" name="type" class="w-full h-full rounded-md border-0 bg-transparent text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm mt-1 block w-3/4 mb-4">
                <option>Food</option>
                <option>Drink</option>
                <option>Services</option>
            </select>

            <label for="description">Description:</label>
            <textarea name="description" id="description" cols="30" rows="10" class="w-full h-full rounded-md border-0 bg-transparent text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm mt-1 block w-3/4 mb-4"></textarea>

            {{-- <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" /> --}}
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')" class="btn-op">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ms-3 btn-op">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>