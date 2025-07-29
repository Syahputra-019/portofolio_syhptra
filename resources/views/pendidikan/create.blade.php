<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Pendidikan
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('pendidikan.store') }}">
    @csrf

    <label for="nama_sekolah" class="block font-medium text-sm text-gray-700">Nama sekolah</label>
    <input type="text" name="nama_sekolah" id="nama_sekolah"
        value="{{ old('nama_sekolah') }}"
        class="w-full border border-gray-300 rounded-md mb-4 px-3 py-2">

    <label for="jurusan" class="block font-medium text-sm text-gray-700">Jurusan</label>
    <input type="text" name="jurusan" id="jurusan"
        value="{{ old('jurusan') }}"
        class="w-full border border-gray-300 rounded-md mb-4 px-3 py-2">
    
    <label for="tahun" class="block font-medium text-sm text-gray-700">Tahun</label>
    <input type="text" name="tahun" id="tahun"
        value="{{ old('tahun') }}"
        class="w-full border border-gray-300 rounded-md mb-4 px-3 py-2">

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


