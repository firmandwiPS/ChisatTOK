<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - ChisatTOK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMaLOQ0JwEVtc+k9m9G8h7JcYJXT2Df4jfjcJh" crossorigin="anonymous">
</head>
<body class="shadow-custom bg-gray-200 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-blue-500 text-white text-center py-6">
            <h1 class="text-2xl font-bold">Daftar ke ChisatTOK</h1>
            <p class="text-sm mt-1">Isi form di bawah untuk membuat akun</p>
        </div>

        <!-- Form -->
        <div class="p-6">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Nama -->
                <div class="mb-4 relative">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <div class="flex items-center border rounded-lg mt-1 focus-within:ring-2 focus-within:ring-orange-300">
                        <i class="fas fa-user text-gray-400 p-2"></i>
                        <input type="text" name="name" id="name" required
                            class="w-full py-2 px-3 border-none focus:outline-none rounded-lg">
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-4 relative">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="flex items-center border rounded-lg mt-1 focus-within:ring-2 focus-within:ring-orange-300">
                        <i class="fas fa-envelope text-gray-400 p-2"></i>
                        <input type="email" name="email" id="email" required
                            class="w-full py-2 px-3 border-none focus:outline-none rounded-lg">
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-4 relative">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="flex items-center border rounded-lg mt-1 focus-within:ring-2 focus-within:ring-orange-300">
                        <i class="fas fa-lock text-gray-400 p-2"></i>
                        <input type="password" name="password" id="password" required
                            class="w-full py-2 px-3 border-none focus:outline-none rounded-lg">
                    </div>
                </div>

                <!-- Konfirmasi Password -->
                <div class="mb-4 relative">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                    <div class="flex items-center border rounded-lg mt-1 focus-within:ring-2 focus-within:ring-orange-300">
                        <i class="fas fa-lock text-gray-400 p-2"></i>
                        <input type="password" name="password_confirmation" id="password_confirmation" required
                            class="w-full py-2 px-3 border-none focus:outline-none rounded-lg">
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-2 bg-blue-500 text-white font-semibold rounded-lg hover:scale-105 transform transition-all duration-300">
                    Daftar
                </button>
            </form>

            <!-- Login Link -->
            <p class="text-sm text-center mt-4">
                Sudah punya akun? <a href="{{ route('login') }}" class="text-green-500 font-bold hover:underline">Login di sini</a>
            </p>
        </div>
    </div>
</body>
</html>
