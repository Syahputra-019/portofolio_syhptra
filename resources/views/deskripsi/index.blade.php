<x-app-layout>
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md mt-10">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Daftar Deskripsi Tambahan</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($deskripsi->isEmpty())
        <p class="text-gray-500">Belum ada deskripsi tambahan.</p>
    @else
        <ul class="space-y-4">
            @foreach($deskripsi as $item)
                <li class="flex justify-between items-start bg-gray-50 p-4 rounded shadow-sm hover:shadow-md transition">
                    <div class="text-gray-700">{{ $item->deskripsi }}</div>
                    <form action="{{ route('deskripsi.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus deskripsi ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-1.5 rounded text-sm font-medium transition">
                            Hapus
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif

    <div class="mt-6">
        <a href="{{ route('tentangs.index') }}" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded transition">
            ← Kembali
        </a>
    </div>
</div>
</x-app-layout>
