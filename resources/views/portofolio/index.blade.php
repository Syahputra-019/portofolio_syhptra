<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Data Portofolio</h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-5xl mx-auto px-4 space-y-4">
            <a href="{{ route('portofolio.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah</a>
            @foreach ($portofolios as $item)
                <div class="bg-white p-4 shadow rounded flex flex-col sm:flex-row sm:justify-between items-start sm:items-center">
                    <div>
                        <h3 class="text-lg font-bold">{{ $item->judul }}</h3>
                        <p class="text-sm text-gray-600">{{ $item->tahun }}</p>
                        <p class="mt-2">{{ $item->deskripsi }}</p>
                        @if ($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="w-32 mt-2">
                        @endif
                    </div>
                    <div class="mt-3 sm:mt-0 space-x-2">
                        <a href="{{ route('portofolio.edit', $item->id) }}" class="text-blue-500">Edit</a>
                        <form method="POST" action="{{ route('portofolio.destroy', $item->id) }}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="text-red-500">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
