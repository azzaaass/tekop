<div>
    <!-- Header -->
    <header class="pt-3 pb-2 px-2 flex items-center gap-4">
        <a href="{{ route('login') }}">
            <img src="{{ asset('images/icon/chevron-left.png') }}" alt="back" class="w-[100%]">
        </a>
    </header>

    <!-- Konten -->
    <section class="flex flex-col items-center text-center px-6 pb-8">
        <!-- Ilustrasi -->
        <img src="{{ asset('images/register.png') }}" alt="sign up" class="w-60 h-auto mb-4">

        <!-- Judul -->
        <h2 class="text-2xl font-bold text-primary-verdigris">Create Account</h2>
        <p class="text-sm text-monochrome-mono-06 mb-6">Fill your information below</p>

        <!-- Form -->
        <form class="w-full max-w-sm space-y-4 text-left">
            <!-- Username -->
            <div>
                <label class="block text-sm font-medium text-primary-chinese-black mb-1">Username</label>
                <input type="text" placeholder="Enter your username"
                    class="w-full bg-gray-100 rounded-lg px-3 py-2 text-primary-chinese-black focus:outline-none focus:ring-2 focus:ring-primary-verdigris">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-primary-chinese-black mb-1">Email</label>
                <input type="email" placeholder="Enter your email"
                    class="w-full bg-gray-100 rounded-lg px-3 py-2 text-primary-chinese-black focus:outline-none focus:ring-2 focus:ring-primary-verdigris">
            </div>

            <!-- Number Phone -->
            <div>
                <label class="block text-sm font-medium text-primary-chinese-black mb-1">Number Phone</label>
                <input type="tel" placeholder="Enter your mobile number"
                    class="w-full bg-gray-100 rounded-lg px-3 py-2 text-primary-chinese-black focus:outline-none focus:ring-2 focus:ring-primary-verdigris">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-primary-chinese-black mb-1">Password</label>
                <input type="password" placeholder="Enter your password"
                    class="w-full bg-gray-100 rounded-lg px-3 py-2 text-primary-chinese-black focus:outline-none focus:ring-2 focus:ring-primary-verdigris">
            </div>

            <!-- Checkbox -->
            <div class="flex items-center gap-2 text-sm">
                <input type="checkbox" id="agree" class="accent-primary-verdigris">
                <label for="agree" class="text-primary-chinese-black">
                    Agree with <a href="#" class="text-primary-verdigris font-medium">Terms & Condition</a>
                </label>
            </div>

            <!-- Tombol Sign Up -->

        </form>
        <a href="{{ route('login') }}" class="w-full">
            <button
                class="mt-4 w-full bg-primary-verdigris text-white font-semibold py-2 rounded-lg hover:opacity-90 transition">
                Sign Up
            </button>
        </a>

        <!-- Link ke Sign In -->
        <p class="text-sm text-monochrome-mono-06 mt-4">
            Already have an account?
            <a href="{{ route('login') }}" class="text-primary-verdigris font-medium">Sign In</a>
        </p>
    </section>
</div>
