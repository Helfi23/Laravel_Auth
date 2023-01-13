<x-guest-Layout>
    <form method="POST" action="/products/store">
        @csrf
        <div>
            <x-input-Label for="name" :value=" __('name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>
         <div class="mt-4">
            <x-input-Label for="price" :value="__('price')" />
            <x-text-input id="price" class="block mt-1 w-full"
                            type="number"
                            name="price"
                             required autocomplete="current-price" />
        </div>
         <div class="flex items-center mt-4">
            <x-primary-button class="ml-3">
                 Submit
            </x-primary-button>
        </div>
    </for>
</x-guest-Layout>
