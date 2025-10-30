<div class="bg-white">
    <section class="p-3 flex flex-col justify-center h-screen">
        <img src="{{ asset('images/coffee-login.png') }}" alt="">
        <h1 class="text-3xl font-bold text-primary-verdigris">Selamat datang di Telkom Coffee Surabaya App</h1>
        <p class="pt-3 text-sm text-primary-chinese-black">Ngopi santai buat mahasiswa dan staf kampus. Nikmati kopi
            berkualitas dengan harga bersahabat, pas untuk nemenin
            belajar, kerja, atau sekadar istirahat sejenak di tengah kesibukan kampus.</p>
        <div class="flex gap-3 pt-3 w-full justify-center">
            <div class="rounded-full w-4 h-4 bg-primary-verdigris"></div>
            <div class="rounded-full w-4 h-4 bg-primary-bright-gray"></div>
            <div class="rounded-full w-4 h-4 bg-primary-bright-gray"></div>
        </div>
        <a href="{{ route('login') }}">
            <button
                class="mt-3 w-full flex items-center justify-center px-6 py-2 bg-primary-verdigris text-white text-md rounded-xl shadow-lg">
                Sign In
            </button>
        </a>

        <a href="{{ route('register') }}">
            <button
                class="mt-3 w-full flex items-center justify-center px-6 py-1.5 text-primary-verdigris border-2 border-primary-verdigris text-md rounded-xl shadow-lg">
                I’m new, sign me up
            </button>
        </a>
        <p class="pt-3 text-sm text-primary-chinese-black">By logging in or registering, you agree to our <a
                href="#" class="text-primary-verdigris">Terms of service</a> and <a href="#"
                class="text-primary-verdigris">Privacy policy</a>.</p>
    </section>
</div>
