<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPK Pemilihan Paket Internet - PaketCerdas</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,600,700,800&display=swap" rel="stylesheet" />

    <!-- Styles and Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">

    <!-- Navbar Atas -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-gray-900 bg-opacity-95 shadow-md">
        <nav class="container mx-auto px-5 py-5 flex justify-between items-center">
            <a href="{{ route('landing') }}" class="text-2xl font-bold text-white tracking-wide">Mywebsite</a>
            <div class="flex space-x-2">
                <a href="#beranda"
                    class="text-gray-200 px-3 py-2 rounded hover:bg-blue-400 hover:text-gray-900 transition">Beranda</a>
                <a href="#layanan"
                    class="text-gray-200 px-3 py-2 rounded hover:bg-blue-400 hover:text-gray-900 transition">Layanan</a>
                <a href="#fitur"
                    class="text-gray-200 px-3 py-2 rounded hover:bg-blue-400 hover:text-gray-900 transition">Fitur</a>
                <a href="#kontak"
                    class="text-gray-200 px-3 py-2 rounded hover:bg-blue-400 hover:text-gray-900 transition">Kontak</a>
                <a href="{{ route('login') }}"
                    class="text-gray-200 px-3 py-2 rounded hover:text-blue-400 transition">Login</a>
                <a href="{{ route('register') }}"
                    class="bg-blue-400 text-gray-900 px-4 py-2 rounded font-semibold hover:bg-white transition">Daftar</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="pt-0"> <!-- padding top agar tidak ketutup navbar -->
        <!-- HERO SECTION -->
        <section id="beranda" class="relative w-full min-h-screen flex items-center justify-center">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/website.jpg') }}" alt="Background Website"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black opacity-50"></div>
            </div>
            <div
                class="relative z-10 flex flex-col items-center justify-center h-full text-white px-8 py-16 max-w-2xl text-center">
                <h1 class="text-4xl md:text-4xl font-extrabold leading-tight mb-6"
                    style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);">
                    Pemilihan Paket Internet Terbaik dengan Sistem Pendukung Keputusan
                </h1>
                <p class="mb-8 text-lg text-gray-200" style="text-shadow: 1px 1px 4px rgba(0,0,0,0.5);">
                    Aplikasi SPK ini membantu pengguna dalam menentukan pilihan paket internet secara tepat dan
                    objektif menggunakan metode SAW, berdasarkan kriteria seperti harga, kuota data, masa aktif,
                    kecepatan, dan bonus tambahan.
                </p>
                <a href="{{ route('dashboard') }}"
                    class="inline-block px-4 py-4 bg-blue-400 text-gray-900 font-bold text-lg rounded-lg shadow-xl hover:bg-blue-500 transition transform hover:scale-105 duration-300">
                    Langsung saja
                </a>
            </div>
        </section>

        <!-- LAYANAN -->
        <section id="layanan" class="bg-gray-900 text-white py-20">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-2">Layanan Utama Kami</h2>
                <p class="text-gray-300 mb-16 max-w-2xl mx-auto">Sistem Pendukung Keputusan kami hadir sebagai solusi
                    untuk memilih paket internet terbaik secara objektif dan efisien sesuai kebutuhan Anda.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <!-- Item Layanan 1 -->
                    <div class="flex flex-col items-center p-6 bg-gray-800 bg-opacity-80 rounded-xl shadow">
                        <svg class="w-12 h-12 text-blue-400 opacity-90 mb-4" fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Penilaian Objektif</h3>
                        <p class="text-gray-300">Paket internet dinilai berdasarkan berbagai kriteria seperti harga,
                            kuota, dan kecepatan secara objektif dan terstruktur.</p>
                    </div>
                    <!-- Item Layanan 2 -->
                    <div class="flex flex-col items-center p-6 bg-gray-800 bg-opacity-80 rounded-xl shadow">
                        <svg class="w-12 h-12 text-blue-400 opacity-90 mb-4" fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h12" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Analisis Data</h3>
                        <p class="text-gray-300">Sistem mengolah data dari berbagai penyedia layanan untuk memberikan
                            gambaran komparatif yang jelas dan akurat.</p>
                    </div>
                    <!-- Item Layanan 3 -->
                    <div class="flex flex-col items-center p-6 bg-gray-800 bg-opacity-80 rounded-xl shadow">
                        <svg class="w-12 h-12 text-blue-400 opacity-90 mb-4" fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Rekomendasi Terbaik</h3>
                        <p class="text-gray-300">Sistem memberikan rekomendasi paket internet terbaik dengan metode SAW
                            yang mempertimbangkan bobot dari setiap kriteria.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- FITUR -->
        <section id="fitur" class="bg-gray-900 text-white py-16">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-2">Fitur di SPK Pemilihan Paket Internet</h2>
                <p class="text-gray-300 max-w-2xl mx-auto">Fitur-fitur lengkap untuk membantu pengguna menentukan
                    pilihan paket internet yang paling sesuai secara efisien, cepat, dan berdasarkan data.</p>
            </div>
        </section>


        <!-- FOOTER -->
        <footer id="kontak" class="bg-gray-900 text-white py-10 border-t border-gray-800">
            <div class="container mx-auto px-6 text-center">
                <h3 class="text-2xl font-bold mb-4">Hubungi Kami</h3>
                <p class="text-gray-400 mb-4">Jika Anda memiliki pertanyaan tentang sistem atau ingin mencoba demo,
                    silakan hubungi kami.</p>
                <a href="mailto:info@paketinternet.com"
                    class="inline-block px-6 py-2 bg-blue-400 text-gray-900 font-semibold rounded-md hover:bg-blue-500 transition">info@paketinternet.com</a>
                <div class="mt-8 border-t border-gray-800 pt-6">
                    <p class="text-sm text-gray-500">© 2025 PaketCerdas. All rights reserved.</p>
                </div>
            </div>
        </footer>

    </main>
</body>

</html>