<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $ekskul->nama_kegiatan }} - Detail Premium</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Poppins', 'sans-serif'] }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-800 antialiased selection:bg-blue-500 selection:text-white">

    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-200 rounded-full blur-3xl opacity-30 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-200 rounded-full blur-3xl opacity-30 translate-x-1/3 translate-y-1/3"></div>
    </div>

    <nav class="fixed top-0 w-full z-50 transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-white/20 shadow-sm">
        <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center gap-2 text-gray-600 hover:text-blue-600 transition group">
                <div class="p-2 bg-gray-100 rounded-full group-hover:bg-blue-50 transition">
                    <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </div>
                <span class="font-medium">Kembali</span>
            </a>
            <span class="text-sm font-bold tracking-wide text-blue-600 bg-blue-50 px-3 py-1 rounded-full border border-blue-100">
                Info Ekstrakurikuler Sekolah
            </span>
        </div>
    </nav>

    <main class="pt-28 pb-20 px-6">
        <div class="max-w-5xl mx-auto">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

                <div class="lg:col-span-5">
                    <div class="sticky top-28">
                        <div class="group relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
                            <div class="aspect-[4/5] bg-gray-200">
                                @if($ekskul->gambar)
                                    <img src="{{ asset('storage/' . $ekskul->gambar) }}" alt="{{ $ekskul->nama_kegiatan }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                                @else
                                    <div class="flex flex-col items-center justify-center h-full text-gray-400 bg-gray-100">
                                        <svg class="w-16 h-16 mb-2 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <span class="text-sm font-medium">No Image Available</span>
                                    </div>
                                @endif
                            </div>

                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-60"></div>

                            <div class="absolute bottom-6 left-6 text-white">
                                {{-- <p class="text-sm opacity-90 font-light mb-1">Status Pendaftaran</p> --}}
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                                    <span class="font-semibold tracking-wide">Ekskul Tersedia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7">

                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-2">
                        {{ $ekskul->nama_kegiatan }}
                    </h1>
                    <div class="w-20 h-1.5 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full mb-8"></div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-10">
                        <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300">
                            <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <p class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Pembina</p>
                            <p class="font-bold text-gray-800 truncate">{{ $ekskul->pembina }}</p>
                        </div>

                        <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300">
                            <div class="w-10 h-10 rounded-full bg-purple-50 flex items-center justify-center text-purple-600 mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <p class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Jadwal</p>
                            <p class="font-bold text-gray-800 truncate">{{ $ekskul->jadwal }}</p>
                        </div>

                        <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300">
                            <div class="w-10 h-10 rounded-full bg-green-50 flex items-center justify-center text-green-600 mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <p class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Kuota</p>
                            <p class="font-bold text-gray-800">{{ $ekskul->kuota }} Siswa</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 mb-8 p-4 bg-orange-50 rounded-xl border border-orange-100 text-orange-800">
                        <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <div>
                            <span class="font-bold block">Lokasi Latihan:</span>
                            <span class="text-sm opacity-90">{{ $ekskul->lokasi }}</span>
                        </div>
                    </div>

                    <div class="prose prose-blue max-w-none text-gray-600 leading-relaxed">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Tentang Kegiatan Ini</h3>
                        <p class="whitespace-pre-line text-lg font-light">
                            {{ $ekskul->deskripsi }}
                        </p>
                    </div>

                    {{-- <div class="mt-12 pt-8 border-t border-gray-100">
                        <button onclick="alert('Silakan hubungi pembina untuk mendaftar!')" class="w-full group relative bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-5 px-8 rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                            <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000 ease-in-out"></div>

                            <span class="relative flex items-center justify-center gap-3 text-lg">
                                Daftar Sekarang
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </span>
                        </button>
                        <p class="text-center text-sm text-gray-400 mt-4">Pastikan Anda memenuhi syarat sebelum mendaftar.</p>
                    </div> --}}

                </div>
            </div>
        </div>
    </main>

</body>
</html>
