<x-app-layout>
  <div class="min-h-screen flex bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-[rgb(1,1,34)] text-white flex flex-col justify-between">
        <div class="p-6">
            <h2 class="text-2xl font-bold mb-6">Dashboard</h2>
            <ul class="space-y-4">
                <li><a href="#" class="block hover:text-pink-300">Tentang Saya</a></li>
                <li><a href="#" class="block hover:text-pink-300">Pendidikan</a></li>
                <li><a href="#" class="block hover:text-pink-300"></a></li>
                <li><a href="#" class="block hover:text-pink-300"></a></li>
            </ul>
        </div>
        <div class="p-6 text-sm text-gray-400">© 2025 Portofolio</div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-10">
        <h1 class="text-3xl font-bold mb-6">Edit Tentang Saya</h1>

        <!-- TENTANG SAYA SECTION -->
        <div class="bg-white shadow rounded-lg p-8 mb-10">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <!-- Konten Kiri -->
                <div class="md:w-1/2 md:pr-10 text-center md:text-left mb-6 md:mb-0">
                    <h2 class="text-2xl font-bold mb-2">Tentang Saya</h2>
                    @foreach ($tentang as $tentang)
                        <h3 class="text-xl text-gray-800 mb-4">{{ $tentang->nama }}</h3>
                        <p class="text-gray-700">{{ $tentang->deskripsi }}</p>
                        <br>
                        @if ($tentang->tambahan)
                            @foreach ($tentang->tambahan as $item)
                                <p class="text-gray-700"> {{ $item->deskripsi }}</p>
                            @endforeach
                        @endif
                    @endforeach

                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ route('tentangs.edit') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-500 transition">Edit</a>
                        <a href="{{ route('deskripsi.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500 transition">Tambah Deskripsi</a>
                        <a href="{{ route('deskripsi.index') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500 transition">Hapus Deskripsi</a>
                    </div>
                </div>

                <!-- Gambar Kanan -->
                <div class="md:w-1/2 flex justify-center">
                    <img src="{{ URL('images/fotoprofile.jpg') }}" alt="Foto Profil"
                        class="w-[300px] h-[300px] object-cover rounded-full shadow-md" />
                </div>
            </div>
        </div>

        <!-- Pendidikan -->
<div class="bg-white shadow rounded-lg p-8 mb-10">
        <div class="w-full max-w-2xl px-4">
            <h2 class="text-3xl font-bold mb-6">Pendidikan</h2>

            <div class="space-y-4">
            <!-- Kuliah -->
           @foreach($pendidikans as $pendidikan)
                <div class="flex justify-between items-start 
                    {{ $loop->index == 0 ? 'bg-teal-200 text-gray-800' : ($loop->index == 1 ? 'bg-gray-400 text-white' : 'bg-gray-200 text-black') }} 
                    border border-white p-4 rounded shadow">
                    
                    <div class="font-medium">
                        {{ $pendidikan->nama_sekolah }}<br>
                        {{ $pendidikan->jurusan }}
                    </div>
                    <div class="border 
                        {{ $loop->index == 0 ? 'border-teal-700 text-teal-800' : 'border-white text-black' }} 
                        px-3 py-1 rounded text-sm font-bold ml-4">
                        {{ $pendidikan->tahun }}
                    </div>
                </div>
            @endforeach
            
            </div>
            <div class="mt-6 flex flex-wrap gap-3">
                {{-- @foreach($pendidikans as $pendidikan) --}}
                <a href="{{ route('pendidikan.edit', $pendidikan->id) }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-500 transition">Edit</a>
                {{-- @endforeach --}}
                <a href="{{ route('pendidikan.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500 transition">Tambah</a>
                <a href="{{ route('pendidikan.index') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500 transition">Hapus</a>
                
            </div>
        </div>
        </div>


{{-- skill --}}
    </div>
</div>


</x-app-layout>
