{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Tentang Saya</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <form method="POST" action="{{ route('tentangs.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700">Nama</label>
                        <input type="text" name="nama" value="{{ $tentang->nama }}" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="w-full border rounded px-3 py-2" required>{{ $tentang->deskripsi }}</textarea>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
                        Simpan Perubahan
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout> --}}

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Tentang Saya
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('tentangs.update', $data->nama) }}">
                    @csrf
                    @method('PUT') 

                        <textarea name="deskripsi" rows="5" class="w-full border border-gray-300 rounded-md">{{ old('deskripsi', $data->deskripsi ?? '') }}</textarea>
                        <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
                        {{-- <button href="{{ route('dashboard') }}" type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Kembali</button> --}}
                    {{-- </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Tentang Saya
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('tentangs.update', $data->id) }}">
                        @csrf
                        @method('PUT')

                        {{-- Field Nama --}}
                        <label for="nama" class="block font-medium text-sm text-gray-700">Nama</label>
                        <input type="text" name="nama" id="nama"
                            value="{{ old('nama', $data->nama ?? '') }}"
                            class="w-full border border-gray-300 rounded-md mb-4 px-3 py-2">

                        {{-- Field Deskripsi --}}
                        <label for="deskripsi" class="block font-medium text-sm text-gray-700">Deskripsi</label>
                        <textarea name="deskripsi" rows="5"
                            class="w-full border border-gray-300 rounded-md">{{ old('deskripsi', $data->deskripsi ?? '') }}</textarea>

                        <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
                        <a href="{{ route('tentangs.index') }}" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded transition">
                            ← Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


