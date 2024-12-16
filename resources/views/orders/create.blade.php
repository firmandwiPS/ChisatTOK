<x-app-layout>
    <div class="bg-gray-100 min-h-screen">
        <div class="container mx-auto py-10">
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-6">
                <h1 class="text-2xl font-bold text-center mb-6">Pilih Pesanan</h1>

                <!-- Card Pilihan Produk -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1: Topi Sekolah -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('images/topi.webp') }}" alt="" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">Topi Sekolah</h3>
                            <p class="text-sm text-gray-500 mb-4">Topi sekolah berkualitas tinggi untuk siswa.</p>
                            <button type="button" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600"
                                onclick="selectProduct('Topi Sekolah', 25000)">Pesan</button>
                        </div>
                    </div>

                    <!-- Card 2: Gemper Sekolah -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('images/gesper.jpeg') }}" alt="" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">Gesper Sekolah</h3>
                            <p class="text-sm text-gray-500 mb-4">Gesper sekolah nyaman dan trendy untuk siswa.</p>
                            <button type="button" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600"
                                onclick="selectProduct('Gemper Sekolah', 15000)">Pesan</button>
                        </div>
                    </div>

                    <!-- Card 3: Produk Lainnya (Contoh) -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('images/dasi.jpeg') }}" alt="Dasi sekolah" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">Dasi Sekolah</h3>
                            <p class="text-sm text-gray-500 mb-4">Dasi sekolah membuat kamu manjdi rapih.</p>
                            <button type="button" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600"
                                onclick="selectProduct('Produk Lainnya', 20000)">Pesan</button>
                        </div>
                    </div>
                </div>

                <!-- Form Input Pesanan -->
                <div class="mt-6 bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-semibold mb-4">Detail Pesanan</h2>
                    <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-4">
                            <!-- Nama Pesanan -->
                            <div>
                                <label for="name" class="block text-sm font-medium">Pesanan</label>
                                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200" required>
                            </div>

                            <!-- Jumlah -->
                            <div>
                                <label for="quantity" class="block text-sm font-medium">Jumlah</label>
                                <input type="number" name="quantity" id="quantity" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200" required>
                            </div>

                            <!-- Harga -->
                            <div>
                                <label for="price" class="block text-sm font-medium">Harga</label>
                                <input type="number" name="price" id="price" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200" readonly required>
                            </div>

                            

                            <!-- Submit Button -->
                            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 mt-4">Simpan Pesanan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function selectProduct(name, price) {
            document.getElementById('name').value = name;
            document.getElementById('price').value = price;
        }

        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                const previewImage = document.getElementById('preview');
                previewImage.src = reader.result;
                previewImage.classList.remove('hidden');
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</x-app-layout>
