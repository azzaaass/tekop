<div>
    <livewire:layouts.bottom-nav-lw>
        <header class="pt-3 pb-4 px-2 flex items-center gap-4 shadow-md">
            <!-- Tombol back -->
            <a href="{{ route('pesanan') }}">
                <img src="{{ asset('images/icon/chevron-left.png') }}" alt="icon-left" class="w-[100%]">
            </a>
            <h2 class="text-2xl text-center font-bold text-primary-chinese-black">Metode Pembayaran</h2>
        </header>

        <section class="p-4 space-y-3">
            @foreach ($payments as $method)
                <label class="flex items-center justify-between bg-white p-3 rounded-lg shadow-sm cursor-pointer hover:bg-gray-50 transition">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/payment/' . $method['icon']) }}" alt="{{ $method['name'] }}" class="w-10 h-10">
                        <span class="text-primary-chinese-black font-medium">{{ $method['name'] }}</span>
                    </div>
                    <input type="radio" name="payment" value="{{ $method['name'] }}" class="w-5 h-5 accent-primary-verdigris">
                </label>
            @endforeach
        </section>
         <!-- Tombol Payment -->
        <a href="{{ route('confirmPayment') }}" class="fixed bottom-16 left-0 w-full px-4 pb-4 bg-white">
            <button
                class="w-full bg-primary-verdigris text-white font-semibold py-2 rounded-lg hover:opacity-90 transition">
                Payment
            </button>
        </a>
</div>
