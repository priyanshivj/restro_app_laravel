<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-5 gap-y-6">
            @foreach ($category->menus as $menu)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
                    <div class="px-2 py-2">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                            {{ $menu->name }}</h4>
                        <p class="leading-normal text-gray-700">
                            {{ $menu->description }}
                        </p>
                        <span class="text-xl text-green-600">${{ $menu->price }}</span>
                    </div>
                    </div>
            @endforeach

        </div>
    </div>
</x-guest-layout>
`