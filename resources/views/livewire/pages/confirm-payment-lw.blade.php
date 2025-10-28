<div>
    {{-- <livewire:layouts.bottom-nav-lw> --}}
        <!-- Header -->
        <header class="pt-3 pb-4 px-2 flex items-center gap-4 shadow-md">
            <a href="{{ route('paymentMethod') }}">
                <img src="{{ asset('images/icon/chevron-left.png') }}" alt="icon-left" class="w-[100%]">
            </a>
            <h2 class="text-2xl text-center font-bold text-primary-chinese-black flex-1">
                Konfirmasi Pembayaran
            </h2>
        </header>

        <!-- Konten -->
        <section class="p-4">
            <!-- Card Tujuan -->
            <div class="flex items-center justify-between bg-secondary-green-02 rounded-lg p-3 shadow-sm">
                <div class="flex items-center gap-3">
                    <div
                        class="bg-primary-verdigris w-10 h-10 rounded-full flex items-center justify-center text-white font-bold">
                        IC
                    </div>
                    <div>
                        <p class="font-semibold text-primary-chinese-black text-sm">ITTS COFFEE</p>
                        <p class="text-xs text-monochrome-mono-06">Surabaya</p>
                    </div>
                </div>
            </div>

            <!-- Nominal -->
            <div class="text-center mt-8">
                <p class="text-3xl font-semibold text-primary-verdigris">Rp{{ $total }}</p>
            </div>

            <hr class="my-5">

            <!-- Pilih Sumber Uang -->
            <div>
                <p class="text-sm font-semibold text-primary-chinese-black mb-3">Pilih sumber uang</p>

                <label
                    class="flex items-center justify-between border border-primary-verdigris rounded-lg p-3 cursor-pointer hover:bg-gray-50 transition">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/payment/blu-card.png') }}" alt="Blu Card" class="w-14 h-10 object-contain">
                        <div>
                            <p class="text-xs text-monochrome-mono-06">Total Saldo</p>
                            <p class="text-sm font-semibold text-primary-chinese-black">Rp200.000</p>
                        </div>
                    </div>
                    <input type="radio" name="wallet" checked class="w-5 h-5 accent-primary-verdigris">
                </label>
            </div>
        </section>

        <!-- Tombol Lanjutkan -->
        <a href="{{ route('pinPayment') }}" class="fixed bottom-16 left-0 w-full px-4 pb-4 bg-white">
            <button
                class="w-full bg-primary-verdigris text-white font-semibold py-2 rounded-lg hover:opacity-90 transition">
                Lanjutkan
            </button>
        </a>
    </livewire:layouts.bottom-nav-lw>
</div>
