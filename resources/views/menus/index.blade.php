<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <!-- Search form -->
        <div class="flex justify-center mb-6">
            <form action="{{ route('menus.index') }}" method="GET" class="flex w-full max-w-lg">
                <input type="text" name="query" value="{{ request()->input('query') }}" placeholder="Search menus..." class="p-2 border rounded-l w-full">
                <button type="submit" class="p-2 bg-yellow-800 text-white rounded-r">Search</button>
            </form>
        </div>

        <!-- Sort options -->
        <div class="flex justify-center mb-6">
            <form action="{{ route('menus.index') }}" method="GET" class="flex w-full max-w-lg">
                <input type="hidden" name="query" value="{{ request()->input('query') }}">
                <select name="sort" onchange="this.form.submit()" class="p-2 border rounded w-full">
                    <option value="asc" {{ request()->input('sort') == 'asc' ? 'selected' : '' }}>Price: Low to High</option>
                    <option value="desc" {{ request()->input('sort') == 'desc' ? 'selected' : '' }}>Price: High to Low</option>
                </select>
            </form>
        </div>

        <div class="grid lg:grid-cols-4 gap-y-6">
            @if(request()->has('query') && !empty(request()->query('query')))
                @if($menus->count() > 0)
                    @foreach ($menus as $menu)
                        <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                            <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
                            <div class="px-6 py-4">
                                <h4 class="mb-3 text-xl font-semibold tracking-tight text-yellow-800 uppercase">
                                    {{ $menu->name }}</h4>
                                <p class="leading-normal text-gray-700">{{ $menu->description }}.</p>
                            </div>
                            <div class="flex items-center justify-between p-4">
                                <span class="text-xl text-green-600">Rp {{ $menu->price }}</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No menus found for your search.</p>
                @endif
            @else
                @foreach ($menus as $menu)
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                        <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
                        <div class="px-6 py-4">
                            <h4 class="mb-3 text-xl font-semibold tracking-tight text-yellow-800 uppercase">
                                {{ $menu->name }}</h4>
                            <p class="leading-normal text-gray-700">{{ $menu->description }}.</p>
                        </div>
                        <div class="flex items-center justify-between p-4">
                            <span class="text-xl text-green-600">Rp {{ $menu->price }}</span>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</x-guest-layout>
