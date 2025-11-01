<div class="flex min-h-screen bg-[#F8F9FB]" x-data="{ showModal: false, showInvoice: false, order: {} }" x-cloak>
    <!-- Sidebar -->
    <livewire:layouts.sidebar-lw />

    <!-- Main -->
    <div class="flex-1 flex flex-col">
        <!-- Navbar -->
        <livewire:layouts.navbar-lw />

        <!-- Content -->
        <main class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-primary-chinese-black">Daftar Pesanan</h1>
                <div class="flex items-center gap-2">
                    <button
                        class="bg-white border border-gray-200 px-3 py-1.5 rounded-lg text-sm flex items-center gap-2 hover:bg-gray-50">
                        <img src="{{ asset('images/icon/filter.png') }}" class="w-4" alt=""> Filter
                    </button>
                    <button
                        class="bg-red-100 text-red-500 border border-red-200 px-3 py-1.5 rounded-lg text-sm hover:bg-red-200/50">
                        Hapus Filter
                    </button>
                </div>
            </div>

            <!-- Filter Row -->
            <div class="flex gap-4 mb-4">
                <select class="text-sm border border-gray-300 rounded-lg px-3 py-2 focus:ring-primary-verdigris">
                    <option>Waktu</option>
                </select>
                <select class="text-sm border border-gray-300 rounded-lg px-3 py-2 focus:ring-primary-verdigris">
                    <option>Tipe Pesanan</option>
                </select>
                <select class="text-sm border border-gray-300 rounded-lg px-3 py-2 focus:ring-primary-verdigris">
                    <option>Status Pesanan</option>
                </select>
            </div>

            <!-- Table -->
            <div class="bg-white rounded-xl shadow-sm overflow-x-auto">
                <table class="w-full text-sm text-left text-primary-chinese-black">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 font-semibold">ID</th>
                            <th class="px-6 py-3 font-semibold">Pesanan</th>
                            <th class="px-6 py-3 font-semibold">Pembeli</th>
                            <th class="px-6 py-3 font-semibold">Waktu</th>
                            <th class="px-6 py-3 font-semibold">Tipe Pesanan</th>
                            <th class="px-6 py-3 font-semibold">Alamat Pengiriman</th>
                            <th class="px-6 py-3 font-semibold">Status</th>
                            <th class="px-6 py-3 font-semibold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($orders as $order)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-3">{{ $order['id'] }}</td>
                                <td class="px-6 py-3">{{ $order['product'] }}</td>
                                <td class="px-6 py-3">{{ $order['buyer'] }}</td>
                                <td class="px-6 py-3">{{ $order['time'] }}</td>
                                <td class="px-6 py-3">{{ $order['type'] }}</td>
                                <td class="px-6 py-3">{{ $order['address'] ?? '-' }}</td>
                                <td class="px-6 py-3">
                                    @if ($order['status'] === 'Pending')
                                        <span
                                            class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded text-xs font-medium">Pending</span>
                                    @elseif ($order['status'] === 'Diproses')
                                        <span
                                            class="bg-purple-100 text-purple-600 px-2 py-1 rounded text-xs font-medium">Diproses</span>
                                    @elseif ($order['status'] === 'Dibatalkan')
                                        <span
                                            class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs font-medium">Dibatalkan</span>
                                    @else
                                        <span
                                            class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs font-medium">Selesai</span>
                                    @endif
                                </td>
                                <td class="px-6 py-3 text-center">
                                    <button x-on:click="showModal = true; order = {{ json_encode($order) }}"
                                        class="bg-gray-100 hover:bg-primary-verdigris hover:text-white p-2 rounded-md transition">
                                        <img src="{{ asset('images/icon/open.png') }}" class="w-4" alt="detail">
                                    </button>
                                </td>
                            </tr>
                        @
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- SIDE MODAL -->
    <div x-show="showModal" class="fixed inset-0 flex justify-end bg-black/30 backdrop-blur-sm z-50 transition"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

        <div x-show="showModal" class="bg-white w-[400px] h-full shadow-2xl p-6 overflow-y-auto relative"
            x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">

            <!-- Header -->
            <button @click="showModal = false"
                class="absolute right-4 top-4 text-gray-400 hover:text-gray-700 text-xl">✕</button>

            <h3 class="text-lg font-semibold text-primary-chinese-black mb-1">
                Order ID: <span x-text="order.id"></span>
            </h3>
            <p class="text-sm text-gray-500 mb-4">
                <span x-text="order.time"></span> •
                <template x-if="order.status === 'Pending'">
                    <span class="inline-block bg-yellow-100 text-yellow-600 text-xs px-2 py-0.5 rounded">Pending</span>
                </template>
                <template x-if="order.status === 'Diproses'">
                    <span class="inline-block bg-purple-100 text-purple-600 text-xs px-2 py-0.5 rounded">Diproses</span>
                </template>
                <template x-if="order.status === 'Selesai'">
                    <span class="inline-block bg-green-100 text-green-600 text-xs px-2 py-0.5 rounded">Selesai</span>
                </template>
                <template x-if="order.status === 'Dibatalkan'">
                    <span class="inline-block bg-red-100 text-red-600 text-xs px-2 py-0.5 rounded">Dibatalkan</span>
                </template>
            </p>

            <!-- Informasi Pesanan -->
            <div class="border rounded-lg p-3 mb-4">
                <p class="font-medium text-sm mb-2">Informasi Pesanan</p>
                <p class="text-sm font-semibold" x-text="order.buyer"></p>
                <div class="flex justify-between text-sm text-gray-600 mt-1">
                    <p>Tipe: <span x-text="order.type"></span></p>
                    <p x-text="order.address"></p>
                </div>
            </div>

            <!-- Item Pesanan -->
            <div class="border rounded-lg p-3 mb-4">
                <p class="font-medium text-sm mb-2">Item Pesanan</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/product/americano.png') }}" class="w-10 h-10 rounded-md"
                            alt="">
                        <div>
                            <p class="font-medium text-sm text-primary-chinese-black" x-text="order.product"></p>
                            <p class="text-xs text-gray-500">1 item</p>
                        </div>
                    </div>
                    <p class="text-sm font-medium text-primary-chinese-black">Rp 12.000</p>
                </div>
            </div>

            <!-- Pembayaran -->
            <div class="border rounded-lg p-3 mb-4">
                <p class="font-medium text-sm mb-2">Pembayaran</p>
                <div class="flex justify-between text-sm">
                    <p>Metode Pembayaran</p>
                    <p class="font-medium">ShopeePay</p>
                </div>
                <div class="flex justify-between text-sm text-gray-600 mt-1">
                    <p>Biaya Admin</p>
                    <p>Rp 2.000</p>
                </div>
                <div class="flex justify-between text-sm font-semibold mt-2 border-t pt-2">
                    <p>Total</p>
                    <p>Rp 14.000</p>
                </div>
            </div>

            <!-- Tombol Dinamis -->
            <template x-if="order.status === 'Pending'">
                <div class="flex gap-3 mt-6">
                    <button class="flex-1 border border-red-400 text-red-500 py-2 rounded-md hover:bg-red-50"
                        @click="alert('Pesanan ditolak!'); showModal = false">
                        Tolak Pesanan
                    </button>
                    <button class="flex-1 bg-primary-verdigris text-white py-2 rounded-md hover:opacity-90"
                        @click="order.status = 'Diproses'; alert('Pesanan diterima!'); showModal = false">
                        Terima Pesanan
                    </button>
                </div>
            </template>

            <template x-if="order.status === 'Diproses'">
                <div class="flex gap-3 mt-6">
                    <button class="flex-1 border border-gray-300 text-gray-600 py-2 rounded-md hover:bg-gray-50"
                        @click="showInvoice = true">
                        Cetak Invoice
                    </button>
                    <button class="flex-1 bg-primary-verdigris text-white py-2 rounded-md hover:opacity-90"
                        @click="order.status = 'Selesai'; alert('Pesanan selesai!'); showModal = false">
                        Pesanan Selesai
                    </button>
                </div>
            </template>

            <template x-if="order.status === 'Selesai'">
                <div class="flex gap-3 mt-6">
                    <button class="flex-1 border border-gray-300 text-gray-600 py-2 rounded-md hover:bg-gray-50"
                        @click="showInvoice = true">
                        Cetak Invoice
                    </button>
                </div>
            </template>
        </div>
    </div>

    <!-- MODAL INVOICE -->
    <div x-show="showInvoice" class="fixed inset-0 flex justify-center items-center bg-black/40 backdrop-blur-sm z-50"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak>
        <div class="bg-white rounded-xl shadow-lg w-[520px] p-6 relative">
            <button @click="showInvoice = false"
                class="absolute right-4 top-3 text-gray-200 hover:text-red-600 text-xl">
                ✕
            </button>

            <!-- Header -->
            <div
                class="bg-primary-verdigris text-white rounded-t-lg -mx-6 -mt-6 px-6 py-3 flex justify-start items-center">
                <img src="{{ asset('images/logo-tekop.png') }}" class="h-6" alt="">
                {{-- <span class="text-sm font-semibold pl-6">Invoice</span> --}}
            </div>

            <!-- Body -->
            <div class="mt-4 space-y-3 text-sm text-gray-700">
                <p><span class="font-semibold">Order ID:</span> TC00001</p>
                <p class="text-gray-500 text-xs">10 Jul 2025, 09:30</p>

                <div class="flex justify-between border-t pt-2">
                    <div>
                        <p class="font-semibold text-primary-chinese-black">Dikirim kepada:</p>
                        <p>Eleanor Pena – Delivery</p>
                        <p class="text-xs text-gray-500">Jl. Soekarno-Hatta No. 222</p>
                    </div>
                    <div class="text-right">
                        <p class="font-semibold text-primary-chinese-black">Dari:</p>
                        <p>Tekop Surabaya</p>
                        <p class="text-xs text-gray-500 w-[160px]">
                            Jl. Waringin No. 56, Wonokromo<br>Surabaya, Jawa Timur 60241
                        </p>
                    </div>
                </div>

                <p class="font-semibold pt-2">Metode Pembayaran:</p>
                <p>Shopee Pay</p>

                <!-- Tabel Item -->
                <table class="w-full mt-2 text-sm border-t border-b">
                    <thead>
                        <tr class="text-left text-gray-600">
                            <th class="py-2">No</th>
                            <th>Item</th>
                            <th class="text-right">Qty</th>
                            <th class="text-right">Harga</th>
                            <th class="text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-1">1</td>
                            <td>Americano (Ice)</td>
                            <td class="text-right">1</td>
                            <td class="text-right">Rp 12.000</td>
                            <td class="text-right">Rp 12.000</td>
                        </tr>
                    </tbody>
                </table>

                <div class="pt-3 space-y-1 text-sm">
                    <div class="flex justify-between"><span>Subtotal</span><span>Rp 12.000</span></div>
                    <div class="flex justify-between text-gray-600"><span>Pajak & Biaya Layanan</span><span>Rp
                            2.000</span></div>
                    <div class="flex justify-between border-t font-semibold pt-1"><span>Grand Total</span><span>Rp
                            14.000</span></div>
                </div>

                <p class="text-xs text-gray-400 mt-4 text-center">
                    Terima kasih telah melakukan pembelian. Harap simpan invoice ini dengan baik.
                </p>

                <button
                    class="w-full bg-primary-verdigris text-white py-2 rounded-md mt-3 flex items-center justify-center gap-2 hover:opacity-90">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                    </svg>
                    Unduh Invoice
                </button>
            </div>
        </div>
    </div>

</div>
