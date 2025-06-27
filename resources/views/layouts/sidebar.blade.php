<!-- resources/views/layouts/sidebar.blade.php -->
<div class="w-64 flex-shrink-0 bg-gradient-to-b from-blue-900 to-blue-700 text-white min-h-screen p-4 flex flex-col shadow-xl">
    <!-- Logo / Judul Aplikasi -->
    <div class="flex-shrink-0 mb-10">
        <a href="{{ route('dashboard') }}" class="text-2xl font-extrabold tracking-wide text-white">
            📶 SPK Internet
        </a>
    </div>

    <!-- Menu Navigasi -->
    <nav class="flex-grow">
        <ul class="space-y-2">

            <!-- Dashboard -->
            <li>
                <a href="{{ route('dashboard') }}"
                   class="flex items-center gap-3 p-3 rounded-lg transition duration-200 hover:bg-blue-600 {{ request()->routeIs('dashboard') ? 'bg-blue-800 ring-2 ring-yellow-300' : '' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M3 12l2-2m0 0l7-7 7 7m-9 2v6m0 0h4m-4 0H7" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Judul Grup -->
            <li>
                <h3 class="px-2 pt-4 pb-2 text-xs text-gray-300 uppercase font-bold tracking-wider">Metode SAW</h3>
            </li>

            <!-- Data Kriteria -->
            <li>
                <a href="{{ route('kriteria.index') }}"
                   class="flex items-center gap-3 p-3 rounded-lg transition hover:bg-blue-600 {{ request()->routeIs('kriteria.*') ? 'bg-blue-800 ring-2 ring-yellow-300' : '' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Data Kriteria</span>
                </a>
            </li>

            <!-- Data Alternatif -->
            <li>
                <a href="{{ route('alternatif.index') }}"
                   class="flex items-center gap-3 p-3 rounded-lg transition hover:bg-blue-600 {{ request()->routeIs('alternatif.*') ? 'bg-blue-800 ring-2 ring-yellow-300' : '' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Paket Internet</span>
                </a>
            </li>

            <!-- Perhitungan SAW -->
            <li>
                <a href="{{ route('perhitungan.index') }}"
                   class="flex items-center gap-3 p-3 rounded-lg transition hover:bg-blue-600 {{ request()->routeIs('perhitungan.index') ? 'bg-blue-800 ring-2 ring-yellow-300' : '' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M3 10h11M9 21V3m0 18h12" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Perhitungan SAW</span>
                </a>
            </li>

            <!-- Grup Akun -->
            <li>
                <h3 class="px-2 pt-4 pb-2 text-xs text-gray-300 uppercase font-bold tracking-wider">Akun</h3>
            </li>

            <!-- Profil -->
            <li>
                <a href="{{ route('profile.edit') }}"
                   class="flex items-center gap-3 p-3 rounded-lg transition hover:bg-blue-600 {{ request()->routeIs('profile.edit') ? 'bg-blue-800 ring-2 ring-yellow-300' : '' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5.121 17.804A9.003 9.003 0 0112 15c2.21 0 4.21.805 5.879 2.136M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Profil</span>
                </a>
            </li>

            <!-- Logout -->
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="flex items-center gap-3 w-full p-3 rounded-lg transition hover:bg-red-600 text-red-200 hover:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-10V5a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2h6a2 2 0 002-2v-1" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Keluar</span>
                    </button>
                </form>
            </li>
        </ul>
    </nav>

    <!-- Footer Sidebar -->
    <div class="flex-shrink-0 pt-4 border-t border-blue-600 mt-6">
        <p class="text-xs text-blue-200 text-center">
            © {{ date('Y') }} SPK Paket Internet
        </p>
    </div>
</div>
