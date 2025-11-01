<div class="flex min-h-screen bg-[#F8F9FB]">
    <!-- Sidebar -->
    <livewire:layouts.sidebar-lw />

    <!-- Main -->
    <div class="flex-1 flex flex-col">
        <!-- Navbar -->
        <livewire:layouts.navbar-lw />

        <!-- Content -->
        <main class="p-6 space-y-6">
            <h1 class="text-2xl font-bold text-primary-chinese-black">Dashboard</h1>

            <!-- Cards -->
            <div class="grid grid-cols-4 gap-4">
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <p class="text-sm text-monochrome-mono-06">Total Penjualan</p>
                    <h2 class="text-2xl font-bold text-primary-chinese-black mt-1">Rp 27.800.000</h2>
                    <p class="text-sm text-green-500 mt-1">+9.5% dari bulan lalu</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <p class="text-sm text-monochrome-mono-06">Jumlah Transaksi</p>
                    <h2 class="text-2xl font-bold text-primary-chinese-black mt-1">520</h2>
                    <p class="text-sm text-green-500 mt-1">+2.1% dari minggu lalu</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <p class="text-sm text-monochrome-mono-06">Rata-rata Transaksi</p>
                    <h2 class="text-2xl font-bold text-primary-chinese-black mt-1">Rp 53.461</h2>
                    <p class="text-sm text-red-500 mt-1">-1.2% dari kemarin</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <p class="text-sm text-monochrome-mono-06">Produk Terlaris Harian</p>
                    <h2 class="text-xl font-bold text-primary-chinese-black mt-1">Caramel Latte</h2>
                    <p class="text-sm text-green-500 mt-1">Terjual 145 cup</p>
                </div>
            </div>

            <!-- Grafik Penjualan -->
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-primary-chinese-black">Grafik Penjualan</h3>
                    <select class="text-sm border border-gray-200 rounded-md px-2 py-1">
                        <option>Tahun ini</option>
                        <option>Tahun lalu</option>
                    </select>
                </div>
                <img src="{{ asset('images/admin/chart.png') }}" alt="chart" class="w-[80%  ] rounded-md">
            </div>
        </main>
    </div>
</div>
