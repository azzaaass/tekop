<div>
    <!-- Header -->
    <header class="pt-3 pb-4 px-2 flex items-center gap-4">
        <a href="{{ route('signInNumber') }}">
            <img src="{{ asset('images/icon/chevron-left.png') }}" alt="back" class="w-[100%]">
        </a>
    </header>

    <!-- Konten -->
    <section class="flex flex-col items-center justify-center text-center p-6">
        <!-- Judul -->
        <h2 class="text-2xl font-bold text-primary-chinese-black mb-2">
            Verify your Mobile Number
        </h2>

        <!-- Subjudul -->
        <p class="text-sm text-monochrome-mono-06 mb-4">
            An 4–digit code has been sent to
            <span class="text-primary-verdigris font-medium">+6283214567920</span>
        </p>

        <!-- Ilustrasi -->
        <img src="{{ asset('images/verify.png') }}" alt="verify illustration" class="w-56 h-auto my-4">

        <!-- Input OTP -->
        <div class="flex justify-center gap-4 mt-6 mb-4">
            @for ($i = 0; $i < 4; $i++)
                <input type="text" maxlength="1"
                    class="w-12 h-14 border border-gray-300 rounded-lg text-center text-xl font-semibold text-primary-chinese-black focus:outline-none focus:ring-2 focus:ring-primary-verdigris">
            @endfor
        </div>

        <!-- Resend Link -->
        <p class="text-sm text-monochrome-mono-06 mb-6">
            Don’t receive code?
            <a href="#" class="text-primary-verdigris font-medium">Resend code</a>
        </p>

        <!-- Tombol Verify -->
        <button wire:click="verify"
            class="w-full max-w-sm bg-primary-verdigris text-white font-semibold py-2 rounded-lg hover:opacity-90 transition">
            Verify
        </button>
    </section>
</div>
