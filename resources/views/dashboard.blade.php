<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-blue-700 dark:text-yellow-300 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-white via-blue-50 to-blue-100 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Sambutan -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-xl mb-8 border dark:border-gray-700">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Selamat datang, {{ Auth::user()->name }}! 👋</h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Anda sedang menggunakan <strong>SPK Pemilihan Paket Internet</strong> dengan metode <strong>SAW</strong>.
                        Sistem ini membantu Anda memilih paket terbaik berdasarkan kriteria seperti harga, kuota, dan kecepatan.
                    </p>
                </div>
            </div>

            <!-- Shortcut Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Data Kriteria -->
                <a href="{{ route('kriteria.index') }}"
                   class="group p-6 bg-blue-100 dark:bg-blue-900 rounded-xl shadow hover:shadow-lg transition transform hover:-translate-y-1 duration-300">
                    <div class="flex items-center">
                        <div class="bg-blue-500 text-white p-3 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-blue-900 dark:text-white">Data Kriteria</h4>
                            <p class="text-sm text-blue-700 dark:text-blue-200">Kelola bobot & kategori penilaian paket.</p>
                        </div>
                    </div>
                </a>

                <!-- Data Alternatif -->
                <a href="{{ route('alternatif.index') }}"
                   class="group p-6 bg-green-100 dark:bg-green-900 rounded-xl shadow hover:shadow-lg transition transform hover:-translate-y-1 duration-300">
                    <div class="flex items-center">
                        <div class="bg-green-500 text-white p-3 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <path d="M15 7a3 3 0 11-6 0 3 3 0 016 0zM4 17a4 4 0 014-4h8a4 4 0 014 4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-green-900 dark:text-white">Paket Internet</h4>
                            <p class="text-sm text-green-700 dark:text-green-200">Masukkan data Telkomsel, XL, Indosat, dll.</p>
                        </div>
                    </div>
                </a>

                <!-- Perhitungan SAW -->
                <a href="{{ route('perhitungan.index') }}"
                   class="group p-6 bg-yellow-100 dark:bg-yellow-900 rounded-xl shadow hover:shadow-lg transition transform hover:-translate-y-1 duration-300">
                    <div class="flex items-center">
                        <div class="bg-yellow-500 text-white p-3 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <path d="M9 17v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm6 0V9a2 2 0 012-2h2a2 2 0 012 2v8a2 2 0 01-2 2h-2a2 2 0 01-2-2z" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-yellow-900 dark:text-white">Perhitungan SAW</h4>
                            <p class="text-sm text-yellow-700 dark:text-yellow-200">Lihat hasil akhir ranking paket terbaik.</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>
