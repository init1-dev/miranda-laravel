<x-modal name="delete-order" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <form method="post" action="{{ route('order.destroy') }}" class="p-6">
        @csrf
        @method('delete')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Are you sure you want to delete this order?') }}
            #<span x-text="data.id"></span>
        </h2>

        <input type="hidden" name="order_data" x-bind:value="JSON.stringify(data)">

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your order is deleted, all of its resources and data will be permanently deleted.') }}
        </p>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')" class="btn-op">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ms-3 btn-op">
                {{ __('Delete') }}
            </x-danger-button>
        </div>
    </form>
</x-modal>