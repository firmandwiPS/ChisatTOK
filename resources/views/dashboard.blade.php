<x-app-layout>
    <div class="bg-gray-200 min-h-screen">
        <div class="container mx-auto py-10">
            <h1 class=" text-4xl font-bold mb-6 text-center ">Selamat Datang di Dashboard ChisatTOK</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
               
                <!-- Card: Tambah Pesanan -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold">Tambah Pesanan</h2>
                    <a href="{{ route('orders.create') }}" class="block mt-4 bg-green-500 text-white py-2 px-4 rounded-lg text-center hover:bg-green-600">
                        Tambah Pesanan
                    </a>
                </div>
                <!-- Card: Lihat Pesanan -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold">Daftar Pesanan</h2>
                    <a href="{{ route('orders.index') }}" class="block mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg text-center hover:bg-blue-600">
                        Lihat Pesanan
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
