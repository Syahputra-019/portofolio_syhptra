<x-app-layout>
    <div class="bg-white shadow rounded-lg p-8 mb-10">
        <h2 class="text-3xl font-bold mb-6">Skills</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($skills as $skill)
                <div class="bg-gray-200 p-4 rounded flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        @if ($skill->logo)
                            <img src="{{ asset('storage/' . $skill->logo) }}" class="w-12 h-12 rounded-full"
                                alt="{{ $skill->nama }}">
                        @endif
                        <span class="font-semibold">{{ $skill->nama }}</span>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('skills.edit', $skill->id) }}"
                            class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                        <form action="{{ route('skills.destroy', $skill->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-6">
            <a href="{{ route('skills.create') }}"
                class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500">Tambah Skill</a>
        </div>
    </div>
</x-app-layout>
