<div class="flex min-h-screen bg-[#F8F9FB]" x-data="{ showExportModal: false, showDetailModal: false, selectedOrder: {} }" x-cloak>

    <!-- Sidebar -->
    <livewire:layouts.sidebar-lw />

    <!-- Main -->
    <div class="flex-1 flex flex-col">
        <livewire:layouts.navbar-lw />

        <main class="p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-primary-chinese-black">Daftar Transaksi</h1>
                <button @click="showExportModal = true"
                    class="bg-primary-verdigris text-white px-4 py-2 rounded-md text-sm hover:opacity-90 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Export Laporan
                </button>
            </div>

            <!-- Filter -->
            <div class="flex items-center gap-2 mb-4">
                <button class="border rounded-md px-3 py-1.5 text-sm text-gray-700 flex items-center gap-2">
                    <i class="ri-filter-3-line"></i> Filter: Waktu
                </button>
                <button class="border rounded-md px-3 py-1.5 text-sm text-gray-700">Metode Bayar</button>
                <button class="border rounded-md px-3 py-1.5 text-sm text-gray-700">Status Pesanan</button>
                <button class="text-red-500 text-sm flex items-center gap-1">
                    <i class="ri-refresh-line"></i> Hapus Filter
                </button>
            </div>

            <!-- Table -->
            <div class="bg-white rounded-xl shadow-sm">
                <table class="w-full text-sm">
                    <thead class="border-b text-gray-600">
                        <tr class="text-left">
                            <th class="py-3 px-4">ID</th>
                            <th class="py-3 px-4">Pesanan</th>
                            <th class="py-3 px-4">Pembeli</th>
                            <th class="py-3 px-4">Waktu</th>
                            <th class="py-3 px-4">Metode Bayar</th>
                            <th class="py-3 px-4">Status</th>
                            <th class="py-3 px-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $o)
                            <tr class="border-b hover:bg-gray-50 transition">
                                <td class="py-3 px-4">{{ $o['id'] }}</td>
                                <td class="py-3 px-4">{{ $o['item'] }}</td>
                                <td class="py-3 px-4">{{ $o['buyer'] }}</td>
                                <td class="py-3 px-4">{{ $o['time'] }}</td>
                                <td class="py-3 px-4">{{ $o['method'] }}</td>
                                <td class="py-3 px-4">
                                    @if ($o['status'] === 'Selesai')
                                        <span
                                            class="bg-green-100 text-green-700 px-3 py-1 rounded-md text-xs font-semibold">Selesai</span>
                                    @elseif($o['status'] === 'Diproses')
                                        <span
                                            class="bg-purple-100 text-purple-700 px-3 py-1 rounded-md text-xs font-semibold">Diproses</span>
                                    @elseif($o['status'] === 'Ditolak')
                                        <span
                                            class="bg-red-100 text-red-700 px-3 py-1 rounded-md text-xs font-semibold">Ditolak</span>
                                    @endif
                                </td>
                                {{-- <td class="py-3 px-4">
                                <button 
                                    @click="selectedOrder = {{ json_encode($o) }}; showDetailModal = true"
                                    class="text-gray-600 hover:text-primary-verdigris">
                                    <i class="ri-edit-2-line"></i>tst
                                </button>
                            </td> --}}
                                <td class="px-6 py-3 text-center">
                                    <button
                                        x-on:click="
                                        showDetailModal = true; 
                                        selectedOrder = {
                                            ...{{ json_encode($o) }},
                                            image: '{{ asset('/images/product') }}/' + '{{ $o['image'] }}'
                                        }"
                                        class="bg-gray-100 hover:bg-primary-verdigris hover:text-white p-2 rounded-md transition">
                                        <img src="{{ asset('images/icon/open.png') }}" class="w-4" alt="detail">
                                    </button>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="p-4 flex justify-between text-sm text-gray-500">
                    <span>Showing 1–8 of 78</span>
                    <div class="flex gap-1">
                        <button class="border px-2 py-1 rounded">‹</button>
                        <button class="border px-2 py-1 rounded">›</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- 🧾 MODAL EXPORT -->
    <div x-show="showExportModal"
        class="fixed inset-0 bg-black/30 backdrop-blur-sm flex justify-center items-center z-50" x-transition>
        <div class="bg-white w-[400px] rounded-xl shadow-lg p-6 relative">
            <button @click="showExportModal = false"
                class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-xl">✕</button>
            <h2 class="text-xl font-semibold mb-1 text-primary-chinese-black">Pilih Opsi Export Laporan</h2>
            <p class="text-sm text-gray-500 mb-4">Pilih format laporan yang sesuai dengan kebutuhan Anda.</p>

            <div class="flex gap-2">
                <button class="flex-1 bg-primary-verdigris text-white py-2 rounded-md hover:opacity-90">
                    Download PDF
                </button>
                <button
                    class="flex-1 border border-primary-verdigris text-primary-verdigris py-2 rounded-md hover:bg-primary-verdigris hover:text-white">
                    Download Excel
                </button>
            </div>
        </div>
    </div>

    <!-- 🧾 MODAL DETAIL TRANSAKSI -->
    <div x-show="showDetailModal" class="fixed inset-0 bg-black/30 backdrop-blur-sm flex justify-end items-center z-50"
        x-transition>
        <div class="bg-white w-[400px] rounded-l-xl shadow-lg p-6 h-full overflow-y-auto relative">
            <button @click="showDetailModal = false"
                class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-xl">✕</button>

            <h2 class="text-lg font-semibold mb-2">Order ID: <span x-text="selectedOrder.id"></span></h2>
            <p class="text-sm text-gray-500 mb-4" x-text="selectedOrder.time"></p>

            <div class="border-t pt-3 space-y-3">
                <div>
                    <h3 class="font-semibold text-gray-700 mb-1">Informasi Pemesan</h3>
                    <p class="text-sm text-gray-600" x-text="selectedOrder.buyer"></p>
                </div>

                <div>
                    <h3 class="font-semibold text-gray-700 mb-1">Pesanan</h3>
                    <div class="flex items-center gap-3 border rounded-md p-2">
                        <img :src="selectedOrder.image" class="w-12 h-12 rounded-md object-cover">
                        <div>
                            <p class="text-sm font-semibold" x-text="selectedOrder.item"></p>
                            <p class="text-xs text-gray-500" x-text="'Rp ' + selectedOrder.price"></p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="font-semibold text-gray-700 mb-1">Pembayaran</h3>
                    <p class="text-sm text-gray-600">Metode: <span x-text="selectedOrder.method"></span></p>
                    <p class="text-sm text-gray-600">Status: <span x-text="selectedOrder.status"></span></p>
                    <p class="text-sm text-gray-600">Total: Rp <span x-text="selectedOrder.price"></span></p>
                </div>
            </div>

            <div class="mt-6">
                <button class="w-full bg-primary-verdigris text-white py-2 rounded-md hover:opacity-90">
                    Cetak Invoice
                </button>
            </div>
        </div>
    </div>
</div>
