<div>
    {{-- <livewire:layouts.bottom-nav-lw> --}}
        <!-- Header Kosong (biar center focus ke konten) -->
        <section class="flex flex-col items-center justify-center h-screen bg-white px-6">

            <!-- Pesan sukses -->
            <h2 class="text-lg font-semibold text-primary-chinese-black mb-2">
                Yeayy, pembayaran berhasil!
            </h2>

            <!-- Ilustrasi -->
            <img src="{{ asset('images/payment/payment-success.png') }}" alt="success" class="h-72 my-3">

            <!-- Kartu detail pembayaran -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm w-full max-w-sm p-4">
                <p class="text-sm font-semibold text-monochrome-mono-06 mb-2">Penerima</p>

                <!-- Penerima -->
                <div class="flex items-center gap-3 mb-3">
                    <div
                        class="bg-primary-verdigris w-10 h-10 rounded-full flex items-center justify-center text-white font-bold">
                        IC
                    </div>
                    <div>
                        <p class="font-semibold text-primary-chinese-black text-sm">ITTS COFFEE</p>
                        <p class="text-xs text-monochrome-mono-06">Surabaya</p>
                    </div>
                </div>

                <div class="flex justify-between text-sm text-primary-chinese-black mb-1">
                    <span class="text-monochrome-mono-06">Tanggal</span>
                    <span>28 Juli 2025</span>
                </div>

                <div class="flex justify-between text-sm text-primary-chinese-black mb-1">
                    <span class="text-monochrome-mono-06">Waktu</span>
                    <span>10.30 WIB</span>
                </div>

                <div class="flex justify-between text-sm text-primary-chinese-black mb-1">
                    <span class="text-monochrome-mono-06">Metode</span>
                    <span>QR Code/QRIS</span>
                </div>

                <hr class="my-2">

                <div class="flex justify-between text-sm text-primary-chinese-black font-semibold">
                    <span>Total transfer</span>
                    <span class="text-primary-verdigris">Rp56.000</span>
                </div>
            </div>

            <!-- Tombol Selesai -->
            <a href="{{ route('pesanan') }}" class="fixed bottom-16 left-0 w-full px-4 pb-4 bg-white">
                <button
                    class="w-full max-w-sm mt-6 bg-primary-verdigris text-white font-semibold py-2 rounded-lg hover:opacity-90 transition">
                    Selesai
                </button>
            </a>
        </section>
</div>
