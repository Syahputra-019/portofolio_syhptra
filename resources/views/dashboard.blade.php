<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    {{-- <div class="grid grid-cols-2 gap-4">
                        <div>
                            <h1>Tentang Saya</h1>
                            <h2>Syahputra Tirta Wijaya</h2>
                            <p>
                                
                            </p>
                        </div>
                        <div >
                            <img src="{{ URL('images/fotoprofile.jpg') }}" alt="" class="w-70 h-70 rounded-full object-cover mx-auto" />
                        </div>
                    </div> --}}
                    <div class="flex flex-col md:flex-row items-center justify-between p-6">
                        <!-- Konten Kiri (Judul, Subjudul, Konten) -->
                        <div class="md:w-1/2 md:pr-10 text-center md:text-left mb-6 md:mb-0">
                            <h2 class="text-3xl font-bold mb-2">Tentang Saya</h2>
                            <h3 class="text-xl text-gray-600 mb-4">Syahputra Tirta Wijaya</h3>
                            <p class="text-gray-700 mb-4">
                                Mahasiswa aktif Program Studi Teknologi Informasi di Fakultas Vokasi, 
                                Universitas Brawijaya. Memiliki pengalaman dalam pengembangan website, 
                                desain UI/UX, jaringan komputer, serta Internet of Things. 
                                Memiliki semangat belajar tinggi, jujur, bertanggung jawab, 
                                dan mampu bekerja dalam tim maupun individu.                            
                            </p>
                            <a href="#" class="inline-block bg-gray-600 text-white px-6 py-2 rounded-md hover:bg-gray-400 transition">
                            Edit
                            </a>
                        </div>

                        <!-- Gambar Kanan -->
                        <div class="md:w-1/2">
                            <img src="{{ URL('images/fotoprofile.jpg') }}" alt="Gambar Kanan"
                                class="w-50 h-50 rounded-full shadow-md w-[500px] h-[500px] object-cover mx-auto" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
