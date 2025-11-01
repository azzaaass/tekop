<div>
    <!-- Background -->
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center"
        style="background-image: url('{{ asset('images/admin/bg-login.png') }}');">

        <!-- Card -->
        <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
            <!-- Judul -->
            <h2 class="text-center text-2xl font-bold text-primary-chinese-black mb-2">
                Masuk ke Akun Admin
            </h2>
            <p class="text-center text-sm text-monochrome-mono-06 mb-6">
                Diharapkan untuk memasukkan informasi yang benar untuk melanjutkan.
            </p>

            <!-- Form -->
            <div class="space-y-4">
                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-primary-chinese-black mb-1">Email</label>
                    <input type="email" placeholder="Masukkan email"
                        class="w-full border border-gray-200 rounded-lg bg-gray-100 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary-verdigris">
                </div>

                <!-- Password -->
                <div>
                    <div class="flex justify-between items-center">
                        <label class="block text-sm font-medium text-primary-chinese-black">Kata Sandi</label>
                        <a href="#" class="text-xs text-primary-verdigris font-medium hover:underline">Lupa Kata
                            Sandi?</a>
                    </div>
                    <input type="password" placeholder="Masukkan kata sandi"
                        class="w-full border border-gray-200 rounded-lg bg-gray-100 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary-verdigris mt-1">
                </div>

                <!-- Remember me -->
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="remember" class="accent-primary-verdigris">
                    <label for="remember" class="text-sm text-primary-chinese-black">Ingat Kata Sandi</label>
                </div>

                <br>
                <!-- Tombol Login -->
                <a href="{{ route('admin.dashboard') }}">
                    <button type="submit"
                        class="w-full bg-primary-verdigris text-white font-semibold py-2 rounded-lg hover:opacity-90 transition">
                        Masuk
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
