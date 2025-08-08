<x-app-layout>
<html lang="en" class="scroll-smooth">
    <div class="min-h-screen flex bg-gray-100">
        <!-- Tombol Toggle (Mobile Only) -->
        <div
            class="md:hidden flex items-center justify-between bg-[rgb(1,1,34)] text-white px-4 py-3 fixed top-0 left-0 right-0 z-50">
            <div class="flex items-center gap-3">
                <button id="toggleSidebar" class="text-2xl">☰</button>
                <span class="text-lg font-semibold">Dashboard</span>
            </div>
        </div>
        <!-- Sidebar -->
        <div id="sidebar"
            class="w-64 bg-[rgb(1,1,34)] text-white flex-col justify-between hidden md:flex md:fixed md:top-0 md:left-0 md:h-screen z-50">
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
                    <li><a href="#tentang" class="block hover:text-pink-300">Tentang Saya</a></li>
                    <li><a href="#pendidikan" class="block hover:text-pink-300">Pendidikan</a></li>
                    <li><a href="#skill" class="block hover:text-pink-300">Skill</a></li>
                    <li><a href="#portofolio" class="block hover:text-pink-300">Portofolio</a></li>
                </ul>
            </div>
            
            <div class="p-6 text-sm text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-white">Landing Page</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-300 hover:text-red-600">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
        <div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden md:hidden z-30"></div>
        <!-- Main Content -->
        <div class="flex-1 p-4 md:p-10 mt-[60px] md:mt-0 md:ml-64">

            <!-- TENTANG SAYA SECTION -->
            <div id="tentang" class="bg-white shadow rounded-lg p-8 mb-10">
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
                            <a href="{{ route('tentangs.edit') }}"
                                class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-500 transition">Edit</a>
                            <a href="{{ route('deskripsi.create') }}"
                                class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500 transition">Tambah</a>
                            <a href="{{ route('deskripsi.index') }}"
                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500 transition">Hapus</a>
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
            <div id="pendidikan" class="bg-white shadow rounded-lg p-8 mb-10">
                <div class="w-full max-w-2xl px-4">
                    <h2 class="text-3xl font-bold mb-6">Pendidikan</h2>

                    <div class="space-y-4">
                        @foreach ($pendidikans as $pendidikan)
                            <div
                                class="flex flex-col sm:flex-row sm:items-center sm:justify-between justify-between items-start 
                        {{ $loop->index == 0 ? 'bg-gray-400 text-black' : ($loop->index == 1 ? 'bg-gray-400 text-black' : 'bg-gray-400 text-black') }} 
                        border border-white p-4 rounded shadow">

                                <div class="font-medium sm:mb-0">
                                    {{ $pendidikan->nama_sekolah }}<br>
                                    {{ $pendidikan->jurusan }}
                                </div>
                                <div
                                    class="border 
                            {{ $loop->index == 0 ? 'border-white text-black' : 'border-white text-black' }} 
                            px-3 py-1 rounded text-sm font-bold ml-4 sm:justify-">
                                    {{ $pendidikan->tahun }}
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ route('pendidikan.edit', $pendidikan->id) }}"
                            class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-500 transition">Edit</a>

                        <a href="{{ route('pendidikan.create') }}"
                            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500 transition">Tambah</a>
                        <a href="{{ route('pendidikan.index') }}"
                            class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500 transition">Hapus</a>

                    </div>
                </div>
            </div>


            {{-- skill --}}
            <div id="skill" class="bg-white shadow rounded-lg p-8 mb-10">
                <div class="w-full max-w-4xl px-4">
                    <h2 class="text-3xl font-bold mb-6">Skills</h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach ($skills as $skill)
                            <div class="bg-gray-200 p-4 rounded shadow flex flex-col items-center text-center">
                                @if ($skill->logo)
                                    <img src="{{ asset('storage/' . $skill->logo) }}" alt="{{ $skill->nama }}"
                                        class="w-16 h-16 rounded-full mb-2">
                                @else
                                    <div
                                        class="w-16 h-16 rounded-full bg-gray-400 flex items-center justify-center mb-2">
                                        <span class="text-white text-sm">No Img</span>
                                    </div>
                                @endif

                                <p class="font-semibold text-lg">{{ $skill->nama }}</p>

                                <div class="flex space-x-2 mt-4">
                                    <a href="{{ route('skills.edit', $skill->id) }}"
                                        class="bg-gray-600 text-white px-3 py-1 rounded hover:bg-yellow-400">Edit</a>

                                    <form action="{{ route('skills.destroy', $skill->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus skill ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-500">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ route('skills.create') }}"
                            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500 transition">Tambah
                            Skill</a>
                    </div>
                </div>
            </div>

            {{-- portofolio --}}
            <div id="portofolio" class="bg-white shadow rounded-lg p-8 mb-10">
                <div class="w-full max-w-4xl px-4">
                    <h2 class="text-3xl font-bold mb-6">Portofolio</h2>

                    <div class="space-y-6">
                        @foreach ($portofolios as $portofolio)
                            <div
                                class="flex flex-col sm:flex-row sm:items-center sm:justify-between border border-gray-300 bg-gray-100 p-4 rounded shadow">
                                <div class="flex items-center gap-4">
                                    @if ($portofolio->gambar)
                                        <img src="{{ asset('storage/' . $portofolio->gambar) }}"
                                            alt="{{ $portofolio->nama }}" class="w-24 sm:w-32 rounded shadow">
                                    @endif
                                    <div>
                                        <h2 class="font-bold text-lg mb-2">{{ $portofolio->judul }}</h3>
                                            <h2 class="font-bold text-lg mb-2">{{ $portofolio->tahun }}</h3>
                                                <p class="text-sm text-gray-700 break-words">
                                                    {{ $portofolio->deskripsi }}</p>
                                    </div>
                                </div>
                                <div class="flex space-x-2 mt-4">
                                    <a href="{{ route('portofolio.edit', $portofolio->id) }}"
                                        class="bg-gray-600 text-white px-3 py-1 rounded hover:bg-yellow-400 transition text-sm">
                                        Edit
                                    </a>
                                    <form action="{{ route('portofolio.destroy', $portofolio->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-500 transition text-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ route('portofolio.create') }}"
                            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500 transition">
                            Tambah
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.getElementById('toggleSidebar');
            const closeButton = document.getElementById('closeSidebar');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');

            toggleButton.addEventListener('click', function() {
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
            closeButton.addEventListener('click', function() {
                sidebar.classList.add('hidden');
                overlay.classList.add('hidden');
            });

            // Jika klik di luar sidebar (overlay), tutup sidebar
            overlay.addEventListener('click', function() {
                sidebar.classList.add('hidden');
                overlay.classList.add('hidden');
            });
        });
    </script>

    <script>
        // Smooth scroll ke konten saat klik menu sidebar
        document.querySelectorAll('.scroll-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // cegah perilaku default anchor
                const targetId = this.getAttribute('href').substring(1);
                const targetEl = document.getElementById(targetId);

                if (targetEl) {
                    window.scrollTo({
                        top: targetEl.offsetTop - 70, // offset untuk header tetap (kalau ada)
                        behavior: 'smooth'
                    });

                    // Tutup sidebar di mobile
                    const sidebar = document.getElementById('sidebar');
                    const overlay = document.getElementById('overlay');
                    sidebar.classList.add('hidden');
                    overlay.classList.add('hidden');
                }
            });
        });
    </script>
</html>
</x-app-layout>
