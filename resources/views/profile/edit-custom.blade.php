<!-- resources/views/profile/edit-custom.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Profil</h2>
    </x-slot>

    <div class="bg-white shadow p-6 rounded-lg max-w-xl mx-auto mt-8">
        @if (session('status'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('profile.update.custom') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block mb-1 font-medium">Foto Profil</label>
                <input type="file" name="profile_image" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Nama</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Bio / Quote</label>
                <textarea name="bio"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    rows="4">{{ old('bio', $user->bio) }}</textarea>
            </div>

            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-200">
                Simpan Perubahan
            </button>
            <a href="{{ route('profile.edit') }}" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded transition">
               Selesai
            </a>
        </form>
    </div>
</x-app-layout>
