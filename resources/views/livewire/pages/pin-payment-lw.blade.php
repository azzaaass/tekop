<div>
    {{-- <livewire:layouts.bottom-nav-lw> --}}
        <!-- Header -->
        <header class="pt-4 pb-6 px-3 flex items-center gap-4">
            <a href="{{ route('confirmPayment') }}">
                <img src="{{ asset('images/icon/chevron-left.png') }}" alt="icon-left" class="w-[100%]">
            </a>
        </header>
        <h2 class="text-2xl font-bold text-primary-chinese-black flex-1 text-center">Masukkan PIN</h2>

        <!-- Input PIN Indicator -->
        <section class="flex flex-col items-center mt-6">
            <div class="flex gap-3 mb-4">
                @for ($i = 0; $i < 6; $i++)
                    <div class="w-5 h-5 bg-monochrome-mono-05 rounded-full"></div>
                @endfor
            </div>
            <hr class="w-3/4 my-3 border-gray-300">
        </section>

        <!-- Keypad -->
        <section class="mt-6 flex flex-col items-center gap-4">
            <div class="grid grid-cols-3 gap-6 text-2xl font-semibold text-primary-chinese-black">
                <button class="p-3">1</button>
                <button class="p-3">2</button>
                <button class="p-3">3</button>

                <button class="p-3">4</button>
                <button class="p-3">5</button>
                <button class="p-3">6</button>

                <button class="p-3">7</button>
                <button class="p-3">8</button>
                <button class="p-3">9</button>

                <button class="p-3 text-sm text-monochrome-mono-06">Lupa?</button>
                <button class="p-3">0</button>
                <button class="p-3">
                    <img src="{{ asset('images/icon/backspace.png') }}" alt="delete" class="h-4 mx-auto">
                </button>
            </div>
        </section>

        <!-- Tombol Lanjutkan -->
        <a href="{{ route('paymentSuccess') }}" class="fixed bottom-16 left-0 w-full px-4 pb-4 bg-white"
            wire:click='selesai'>
            <button
                class="w-full bg-primary-verdigris text-white font-semibold py-2 rounded-lg hover:opacity-90 transition">
                Lanjutkan
            </button>
        </a>
</div>
