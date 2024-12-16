<x-app-layout>
    <div class="bg-gray-100 min-h-screen">
        <div class="container mx-auto py-10">
            <h1 class="text-3xl font-bold text-center mb-6">Daftar Pesanan</h1>
            <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
                <table class="w-full table-auto border-collapse">
                    <thead class="bg-gray-200 text-left">
                        <tr>
                            <th class="px-4 py-2 border">Nama Pesanan</th>
                            <th class="px-4 py-2 border">Jumlah</th>
                            <th class="px-4 py-2 border">Harga</th>
                            <th class="px-4 py-2 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-2 border">{{ $order->name }}</td>
                                <td class="px-4 py-2 border">{{ $order->quantity }}</td>
                                <td class="px-4 py-2 border">Rp{{ number_format($order->price, ) }}</td>
                                <td class="px-4 py-2 border">
                                    <form action="{{ route('orders.destroy', $order) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-6 text-center">
                <a href="{{ route('orders.create') }}"
                    class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Tambah Pesanan Baru</a>
            </div>
        </div>
    </div>
</x-app-layout>
