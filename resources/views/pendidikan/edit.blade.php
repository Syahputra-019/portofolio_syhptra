<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Data Pendidikan
        </h2>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                <div class="p-6 sm:p-8 text-gray-900">
                    <form method="POST" action="{{ route('pendidikan.update', $pendidikan->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="nama_sekolah" class="block font-medium text-sm text-gray-700 mb-1">Nama Sekolah</label>
                            <input type="text" name="nama_sekolah" id="nama_sekolah"
                                value="{{ old('nama_sekolah', $pendidikan->nama_sekolah ?? '') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                        </div>

                        <div class="mb-4">
                            <label for="jurusan" class="block font-medium text-sm text-gray-700 mb-1">Jurusan</label>
                            <input type="text" name="jurusan" id="jurusan"
                                value="{{ old('jurusan', $pendidikan->jurusan ?? '') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                        </div>

                        <div class="mb-6">
                            <label for="tahun" class="block font-medium text-sm text-gray-700 mb-1">Tahun</label>
                            <input type="text" name="tahun" id="tahun"
                                value="{{ old('tahun', $pendidikan->tahun ?? '') }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition w-full sm:w-auto">
                                Simpan
                            </button>
                            <a href="{{ route('tentangs.index') }}"
                                class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md transition w-full sm:w-auto text-center">
                                ← Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
