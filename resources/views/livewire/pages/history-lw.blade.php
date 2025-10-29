<div>
    <livewire:layouts.bottom-nav-lw>
        <!-- Header -->
        <header class="pt-3 pb-4 px-2 flex items-center gap-4 shadow-md">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/icon/chevron-left.png') }}" alt="back" class="w-[100%]">
            </a>
            <h2 class="text-2xl font-bold text-primary-chinese-black flex-1 text-center">Riwayat Pesanan</h2>
        </header>

        <section class="p-4 space-y-4">

            <!-- Detail Pesanan -->
            <div class="border border-gray-200 rounded-lg p-3">
                <div class="flex justify-between items-center mb-2">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/icon/document.png') }}" alt="doc" class="w-5 h-5">
                        <p class="text-sm font-semibold text-primary-chinese-black">Detail Pesanan</p>
                    </div>
                    <p class="text-xs text-monochrome-mono-06">28 Sep 2025, 10:30</p>
                </div>

                <div class="flex items-center gap-2 mt-3">
                    <img src="{{ asset('images/profile/user.png') }}" alt="user" class="w-5 h-5">
                    <p class="text-sm text-primary-chinese-black">M Ramadhani Arya S</p>
                </div>

                <div class="flex items-center gap-2 mt-2">
                    <img src="{{ asset('images/icon/store.png') }}" alt="store" class="w-5 h-5">
                    <p class="text-sm text-primary-chinese-black">Pickup di Counter Telkom Coffee Surabaya</p>
                </div>
            </div>

            <!-- Pesanan -->
            <div class="border border-gray-200 rounded-lg p-3">
                <div class="flex justify-between items-center mb-2">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/icon/pesanan.png') }}" alt="cart" class="w-5 h-5">
                        <p class="text-sm font-semibold text-primary-chinese-black">Pesanan</p>
                    </div>
                    <p class="text-xs text-monochrome-mono-06">2 Item</p>
                </div>

                <!-- Item 1 -->
                <div class="flex gap-4 mb-3">
                    <img src="{{ asset('images/product/vanilla-sakura-latte.png') }}" alt="product"
                        class="w-16 h-16 object-cover rounded-md">
                    <div class="flex-1">
                        <p class="font-semibold text-primary-chinese-black text-sm">Vanilla Sakura Latte</p>
                        <p class="text-xs text-monochrome-mono-06">Cold, Less Sweet, Less Ice</p>
                        <div class="flex justify-between items-center mt-1">
                            <p class="font-semibold text-primary-chinese-black">Rp18.000</p>
                            <p class="text-sm text-primary-chinese-black">x1</p>
                        </div>
                    </div>
                </div>

                <hr class="my-2">

                <!-- Item 2 -->
                <div class="flex gap-4">
                    <img src="{{ asset('images/product/matcha.png') }}" alt="product"
                        class="w-16 h-16 object-cover rounded-md">
                    <div class="flex-1">
                        <p class="font-semibold text-primary-chinese-black text-sm">Matcha</p>
                        <p class="text-xs text-monochrome-mono-06">Cold, Less Sweet, Less Ice</p>
                        <div class="flex justify-between items-center mt-1">
                            <p class="font-semibold text-primary-chinese-black">Rp15.000</p>
                            <p class="text-sm text-primary-chinese-black">x1</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detail Pembayaran -->
            <div class="border border-gray-200 rounded-lg p-3">
                <div class="flex items-center gap-2 mb-3">
                    <img src="{{ asset('images/icon/wallet.png') }}" alt="wallet" class="w-5 h-5">
                    <p class="text-sm font-semibold text-primary-chinese-black">Detail Pembayaran</p>
                </div>

                <div class="flex justify-between text-sm text-primary-chinese-black mb-1">
                    <span class="text-monochrome-mono-06">Total Harga</span>
                    <span>Rp33.000</span>
                </div>

                <hr class="my-2">

                <div class="flex justify-between items-center text-sm">
                    <div>
                        <p class="text-xs text-monochrome-mono-06">Transaksi ID 91110273120</p>
                        <div class="flex items-center gap-2 mt-1">
                            <img src="{{ asset('images/payment/qris.png') }}" alt="qris" class="w-10">
                            <p class="font-medium text-primary-chinese-black">QRIS</p>
                        </div>
                    </div>
                    <p class="font-semibold text-primary-chinese-black">Rp33.000</p>
                </div>
            </div>
        </section>

        <!-- Tombol -->
        <a href="{{ route('pesanan') }}" class="fixed bottom-16 left-0 w-full px-4 pb-4 bg-white">
            <button
                class="w-full bg-primary-verdigris text-white font-semibold py-2 rounded-lg hover:opacity-90 transition">
                Kembali Ke Home
            </button>
        </a>
</div>
