<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Edit Portofolio</h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-3xl mx-auto px-4">
            <form action="{{ route('portofolio.update', $portofolio->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="judul" class="block font-medium">Judul</label>
                    <input type="text" name="judul" id="judul" value="{{ $portofolio->judul }}" class="w-full border px-4 py-2 rounded" required>
                </div>

                <div>
                    <label for="tahun" class="block font-medium">Tahun</label>
                    <input type="text" name="tahun" id="tahun" value="{{ $portofolio->tahun }}" class="w-full border px-4 py-2 rounded" required>
                </div>

                <div>
                    <label for="deskripsi" class="block font-medium">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full border px-4 py-2 rounded" required>{{ $portofolio->deskripsi }}</textarea>
                </div>

                <div>
                    <label for="gambar" class="block font-medium">Ganti Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="w-full border px-4 py-2 rounded">
                    @if ($portofolio->gambar)
                        <img src="{{ asset('storage/' . $portofolio->gambar) }}" class="w-32 mt-2">
                    @endif
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
            </form>
        </div>
    </div>
</x-app-layout>
