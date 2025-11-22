<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Ekstrakurikuler Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-b from-blue-50 to-white min-h-screen text-gray-800 font-sans">
        <div class="relative overflow-hidden bg-gradient-to-br from-blue-700 via-blue-600 to-purple-700 text-white py-24 px-4 text-center">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500 opacity-20 rounded-full blur-3xl translate-x-1/3 translate-y-1/3 pointer-events-none"></div>
        <div class="relative z-10 max-w-5xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight tracking-tight">
                Info Ekstrakurikuler Sekolah
            </h1>
            <p class="text-lg md:text-xl mb-10 text-blue-100 font-light">
                Platform resmi informasi kegiatan ekstrakurikuler sekolah.
            </p>
            <a href="#katalog" class="inline-block bg-white text-blue-700 font-bold py-4 px-10 rounded-full hover:shadow-lg hover:scale-105 transition transform duration-300">
                Jelajahi Sekarang
            </a>
        </div>
    </div>

    <div id="katalog" class="max-w-6xl mx-auto px-4 py-16">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold text-gray-800 border-l-4 border-blue-600 pl-3">
                Katalog Ekskul
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse($ekskuls as $item)
            <div class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">

            <div class="h-52 bg-gray-200 relative overflow-hidden">
                @if($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}"
                        alt="{{ $item->nama_kegiatan }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                @else
                    <div class="flex items-center justify-center h-full text-gray-400 bg-gray-100">No Image</div>
                @endif

                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300"></div>
            </div>

            <div class="p-6 relative">
                <div class="absolute -top-5 right-4 bg-white p-1 rounded-lg shadow-sm">
                    <span class="bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1 rounded-md uppercase tracking-wide">
                        Kuota: {{ $item->kuota }}
                    </span>
                </div>

                <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">
                    {{ $item->nama_kegiatan }}
                </h3>

                <p class="text-gray-500 text-sm line-clamp-2 mb-4">
                    {{ $item->deskripsi }}
                </p>

                <a href="{{ route('ekskul.detail', $item->id) }}" class="w-full block text-center border-2 border-blue-600 text-blue-600 font-semibold py-2 rounded-xl hover:bg-blue-600 hover:text-white transition-all duration-300">
                    Lihat Detail
                </a>
            </div>
        </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <div class="inline-block p-4 rounded-full bg-gray-100 mb-4">
                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </div>
                <p class="text-gray-500">Belum ada data ekstrakurikuler yang diinput.</p>
                <p class="text-sm text-gray-400 mt-2">Silakan login ke Admin Panel untuk menambah data.</p>
            </div>
            @endforelse

        </div>
    </div>

    <footer class="bg-white border-t mt-12 py-8 text-center text-gray-500 text-sm">
        &copy; Pendidikan Digital 2025. Laravel 12 & Filament.
    </footer>

</body>
</html>
