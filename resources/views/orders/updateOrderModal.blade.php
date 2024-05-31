<x-modal name="update-order" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <form method="post" action="{{ route('order.update') }}" class="p-6">
        @csrf
        @method('patch')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('UPDATE ORDER') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Please fill all of these fields you want to update.') }}
        </p>

        <div class="form-control">

            <label for="type">Select type:</label>
            <select id="type" name="type" class="w-full h-full rounded-md border-0 bg-transparent text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm mt-1 block w-3/4 mb-4" x-bind:value="data.type">
                <option selected hidden>Pick one</option>
                @foreach($types as $type)
                    <option value="{{ $type }}">{{ $type }}</option>
                @endforeach
            </select>

            <label for="description">Description:</label>
            <textarea name="description" id="description" cols="30" rows="10" class="w-full h-full rounded-md border-0 bg-transparent text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm mt-1 block w-3/4 mb-4" x-bind:value="data.description"></textarea>

            <input type="hidden" name="id" x-bind:value="data.id">

            {{-- <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" /> --}}
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')" class="btn-op">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ms-3 btn-op">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>