<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
            <h2 class="text-2xl font-semibold mb-4">Tambah Deskripsi Tambahan</h2>
            <form action="{{ route('deskripsi.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    {{-- <label for="tentang_id" class="block text-gray-700 font-medium">Pilih Tentang</label> --}}
                    <select name="tentang_id" id="tentang_id" class="hidden">
                        @foreach ($tentangs as $tentang)
                            <option value="{{ $tentang->id }}">{{ $tentang->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="block text-gray-700 font-medium">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full border-gray-300 rounded mt-1" required></textarea>
                </div>

                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500">
                    Simpan
                </button>
                <a href="{{ route('tentangs.index') }}" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded transition">
                    ← Kembali
                </a>
            </form>
        </div>
    </div>
</x-app-layout>
