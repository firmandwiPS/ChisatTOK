<x-app-layout>
    <div class="bg-gradient-to-b from-gray-100 to-gray-300 min-h-screen">
        <div class="container mx-auto py-10 px-4">
            <h1 class="text-4xl font-extrabold mb-8 text-center text-gray-800">
                Selamat Datang di Dashboard
                <span class="text-orange-500">{{ Auth::user()->name }}</span>!!
            </h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Card: Tambah Pesanan -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 text-green-500 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <h2 class="ml-4 text-xl font-semibold text-gray-700">Tambah Pesanan</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Buat pesanan baru untuk produk yang Anda inginkan.</p>
                    <a href="{{ route('orders.create') }}" class="inline-block bg-green-500 text-white py-2 px-4 rounded-lg text-center hover:bg-green-600 transition">
                        Tambah Pesanan
                    </a>
                </div>

                <!-- Card: Lihat Pesanan -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 text-blue-500 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h2 class="ml-4 text-xl font-semibold text-gray-700">Daftar Pesanan</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Lihat daftar semua pesanan Anda yang telah dibuat.</p>
                    <a href="{{ route('orders.index') }}" class="inline-block bg-blue-500 text-white py-2 px-4 rounded-lg text-center hover:bg-blue-600 transition">
                        Lihat Pesanan
                    </a>
                </div>

                <!-- Contoh Kartu Baru (Opsional) -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow-100 text-yellow-500 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 8v.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
                            </svg>
                        </div>
                        <h2 class="ml-4 text-xl font-semibold text-gray-700">Informasi Penting</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Tetap terhubung untuk mendapatkan informasi terbaru mengenai pesanan Anda.</p>
                    <a href="#" class="inline-block bg-yellow-500 text-white py-2 px-4 rounded-lg text-center hover:bg-yellow-600 transition">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
