<x-app-layout>
  <div class="min-h-screen flex bg-gray-100">
    <!-- Tombol Toggle (Mobile Only) -->
<div class="md:hidden flex items-center justify-between bg-[rgb(1,1,34)] text-white px-4 py-3 fixed top-0 left-0 right-0 z-50">
  <div class="flex items-center gap-3">
    <button id="toggleSidebar" class="text-2xl">☰</button>
    <span class="text-lg font-semibold">Dashboard</span>
  </div>
</div>
    <!-- Sidebar -->
    <div id="sidebar" class="w-64 bg-[rgb(1,1,34)] text-white flex-col justify-between hidden md:flex absolute md:static z-50 h-full md:h-auto">
        <div class="p-6">
            <!-- Header Sidebar: Dashboard + Tombol Panah -->
        <div class="flex items-center justify-between px-2 pt-6 pb-4 md:block">
        <h2 class="text-2xl font-bold">Dashboard</h2>

        <!-- Tombol panah hanya tampil di mobile -->
        <button id="closeSidebar" class="md:hidden text-white text-2xl focus:outline-none">
            &larr;
        </button>
        </div>

            <ul class="space-y-4">
                <li><a href="#" class="block hover:text-pink-300">Tentang Saya</a></li>
                <li><a href="#" class="block hover:text-pink-300">Pendidikan</a></li>
                <li><a href="#" class="block hover:text-pink-300"></a></li>
                <li><a href="#" class="block hover:text-pink-300"></a></li>
            </ul>
        </div>
        <div class="p-6 text-sm text-gray-400">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-gray-400 hover:text-red-600">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
    <div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden md:hidden z-30"></div>
    <!-- Main Content -->
    <div class="flex-1 p-4 md:p-10 mt-[60px] md:mt-0">

        <!-- TENTANG SAYA SECTION -->
        <div class="bg-white shadow rounded-lg p-8 mb-10">
            <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-6">
                <!-- Konten Kiri -->
                <div class="md:w-1/2 md:pr-10 text-center md:text-left">
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

                    <div class="mt-6 flex flex-wrap gap-3 justify-center md:justify-start">
                        <a href="{{ route('tentangs.edit') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-500 transition">Edit</a>
                        <a href="{{ route('deskripsi.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500 transition">Tambah</a>
                        <a href="{{ route('deskripsi.index') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500 transition">Hapus</a>
                    </div>
                </div>

                <!-- Gambar Kanan -->
                <div class="md:w-1/2 flex justify-center mb-6 md:mb-0">
                    <img src="{{ URL('images/fotoprofile.jpg') }}" alt="Foto Profil"
                        class="w-40 h-40 md:w-[300px] md:h-[300px] object-cover rounded-full shadow-md" />
                </div>
            </div>
        </div>

        <!-- Pendidikan -->
        <div class="bg-white shadow rounded-lg p-8 mb-10">
            <div class="w-full max-w-2xl px-4">
                <h2 class="text-3xl font-bold mb-6">Pendidikan</h2>

                <div class="space-y-4">
                @foreach($pendidikans as $pendidikan)
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between justify-between items-start 
                        {{ $loop->index == 0 ? 'bg-gray-400 text-black' : ($loop->index == 1 ? 'bg-gray-400 text-black' : 'bg-gray-400 text-black') }} 
                        border border-white p-4 rounded shadow">
                        
                        <div class="font-medium sm:mb-0">
                            {{ $pendidikan->nama_sekolah }}<br>
                            {{ $pendidikan->jurusan }}
                        </div>
                        <div class="border 
                            {{ $loop->index == 0 ? 'border-white text-black' : 'border-white text-black' }} 
                            px-3 py-1 rounded text-sm font-bold ml-4 sm:justify-">
                            {{ $pendidikan->tahun }}
                        </div>
                    </div>
                @endforeach
                
                </div>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ route('pendidikan.edit', $pendidikan->id) }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-500 transition">Edit</a>

                    <a href="{{ route('pendidikan.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500 transition">Tambah</a>
                    <a href="{{ route('pendidikan.index') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500 transition">Hapus</a>
                    
                </div>
            </div>
        </div>


{{-- skill --}}
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
      const toggleButton = document.getElementById('toggleSidebar');
      const closeButton = document.getElementById('closeSidebar');
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('overlay');

      toggleButton.addEventListener('click', function () {
        const isHidden = sidebar.classList.contains('hidden');
        if (isHidden) {
          sidebar.classList.remove('hidden');
          overlay.classList.remove('hidden');
        } else {
          sidebar.classList.add('hidden');
          overlay.classList.add('hidden');
        }
      });

          // Tutup sidebar via tombol panah
      closeButton.addEventListener('click', function () {
      sidebar.classList.add('hidden');
      overlay.classList.add('hidden');
    });

      // Jika klik di luar sidebar (overlay), tutup sidebar
      overlay.addEventListener('click', function () {
        sidebar.classList.add('hidden');
        overlay.classList.add('hidden');
      });
    });
  </script>

</x-app-layout>
