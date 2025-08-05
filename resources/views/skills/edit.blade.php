<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Skill
        </h2>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8"> <!-- padding kiri-kanan -->
        <div class="max-w-3xl mx-auto bg-white shadow sm:rounded-lg p-6"> <!-- container -->
            <form action="{{ route('skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Skill</label>
                    <input type="text" name="nama" id="nama" value="{{ $skill->nama }}"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                <div>
                    <label for="logo" class="block text-sm font-medium text-gray-700 mb-1">Ganti Logo</label>
                    <input type="file" name="logo" id="logo"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                    @if ($skill->logo)
                        <img src="{{ asset('storage/' . $skill->logo) }}" class="w-20 mt-2 rounded shadow">
                    @endif
                </div>

                <div class="flex gap-4">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition">
                        Update
                    </button>
                    <a href="{{ route('skills.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md transition">
                        ← Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
