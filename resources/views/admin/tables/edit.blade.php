<x-admin-layout>
    <x-slot name="header">
        <!-- Header untuk dashboard admin -->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <!-- Tombol untuk kembali ke indeks tabel -->
                <a href="{{ route('admin.tables.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Table Index</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <!-- Form untuk mengupdate tabel -->
                    <form method="POST" action="{{ route('admin.tables.update', $table->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                            <div class="mt-1">
                                <!-- Input untuk nama tabel -->
                                <input type="text" id="name" name="name" value="{{ $table->name }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest Number
                            </label>
                            <div class="mt-1">
                                <!-- Input untuk jumlah tamu -->
                                <input type="number" id="guest_number" name="guest_number"
                                    value="{{ $table->guest_number }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('guest_number')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <div class="mt-1">
                                <!-- Dropdown untuk memilih status tabel -->
                                <select id="status" name="status" class="form-multiselect block w-full mt-1">
                                    @foreach (App\Enums\TableStatus::cases() as $status)
                                        <option value="{{ $status->value }}" @selected($table->status->value == $status->value)>
                                            {{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('status')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <div class="mt-1">
                                <!-- Dropdown untuk memilih lokasi tabel -->
                                <select id="location" name="location" class="form-multiselect block w-full mt-1">
                                    @foreach (App\Enums\TableLocation::cases() as $location)
                                        <option value="{{ $location->value }}" @selected($table->location->value == $location->value)>
                                            {{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('location')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-6 p-4">
                            <!-- Tombol untuk submit form -->
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
