<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-8 space-y-6">

            {{-- SECTION: Foto + Nama + Bio --}}
            <div class="flex flex-col items-center text-center">
                {{-- Foto Profil --}}
                <img
                    src="{{ $user->profile_image ? asset('storage/'.$user->profile_image) : asset('images/default.jpg') }}"
                    alt="Foto Profil"
                    class="w-40 h-40 rounded-full object-cover shadow mb-4 space-y-8"
                />

                {{-- Nama --}}
                <h3 class="text-2xl font-bold text-gray-800">
                    {{ $user->name }}
                </h3>

                {{-- Bio / Quote --}}
                <p class="mt-2 text-gray-600 italic">
                    {{ $user->bio ?? 'Belum ada bio.' }}
                </p>
            </div>

            {{-- Tombol Edit --}}
            <div class="text-center">
                <a
                    href="{{ route('profile.edit.custom') }}"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition"
                >
                    Edit
                </a>
                
            </div>

        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
