<div class="w-64 h-screen bg-white border-r flex flex-col justify-between">
    <div>
        <!-- Logo -->
        <div class="flex items-center gap-3 px-6 py-5">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10">
            <div>
                <p class="font-bold text-primary-chinese-black leading-tight">TEKOP</p>
                <p class="text-xs text-monochrome-mono-06">Telkom Coffee Surabaya</p>
            </div>
        </div>

        <!-- Menu -->
        <nav class="mt-6 px-6 space-y-1">
            @php
                $menu = [
                    ['label' => 'Dashboard', 'route' => 'admin.dashboard'],
                    ['label' => 'Pesanan', 'route' => 'admin.pesanan'],
                    ['label' => 'Produk', 'route' => 'admin.produk'],
                    ['label' => 'Transaksi', 'route' => 'admin.transaksi'],
                    // ['label' => 'Pengaturan', 'route' => 'home'],
                ];
            @endphp

            @foreach ($menu as $item)
                <a href="{{ route($item['route']) }}"
                    class="flex items-center gap-3 px-6 py-2.5 rounded-lg transition 
                        {{ request()->routeIs($item['route']) 
                            ? 'bg-primary-verdigris text-white font-semibold' 
                            : 'text-primary-chinese-black hover:bg-gray-100' }}">
                    <span>{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>
    </div>

    <!-- Logout -->
    <div class="px-6 py-4 border-t">
        <a href="{{ route('admin.login') }}" 
           class="flex items-center gap-3 text-primary-chinese-black hover:text-primary-verdigris">
            <span>Keluar</span>
        </a>
    </div>
</div>
