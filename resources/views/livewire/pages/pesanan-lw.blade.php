<div>
    <livewire:layouts.bottom-nav-lw>
        <!-- Header -->
        <header class="pt-3 pb-4 px-2 flex items-center gap-4 shadow-md">
            <!-- Tombol back -->
            <a href="{{ url()->previous() }}" class="">
                <img src="{{ asset('images/icon/chevron-left.png') }}" alt="icon-left" class="w-[100%]">
            </a>
            <h2 class="text-2xl text-center font-bold text-primary-chinese-black">Pesanan</h2>
        </header>

        <!-- Info Delivery -->
        <section class="p-4 flex justify-between items-center border-b border-gray-200">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/delivery.png') }}" alt="delivery" class="w-10 h-10">
                <div>
                    <p class="font-semibold text-primary-chinese-black">Delivery</p>
                    <p class="text-xs text-monochrome-mono-06">Segera diantar ke lokasimu</p>
                </div>
            </div>
            <button class="border border-gray-300 text-xs rounded-full px-3 py-1 hover:bg-gray-100">Ubah</button>
        </section>

        <!-- Produk List -->
        <section class="p-3 space-y-3">
            <div class="flex justify-between items-center">
                <h3 class="font-semibold text-primary-chinese-black">Jumlah</h3>
                <p class="text-sm text-monochrome-mono-06">{{ count($productCarts) }} produk</p>
            </div>

            @foreach ($productCarts as $cart)
                <div class="flex justify-between items-center bg-white p-2 rounded-lg shadow-sm">
                    <!-- Left: Image + Info -->
                    <div class="flex items-center gap-3 w-[75%]">
                        <img class="w-16 h-16 object-cover rounded-lg"
                             src="{{ asset('images/product/' . $cart->product->image) }}" 
                             alt="{{ $cart->product->name }}">
                        <div class="flex-1">
                            <p class="font-semibold text-primary-chinese-black">{{ $cart->product->name }}</p>
                            <p class="text-sm text-primary-chinese-black">Rp {{ number_format($cart->product->price, 0, ',', '.') }}</p>

                            <!-- Counter -->
                            <div class="flex items-center gap-3 mt-2">
                                <button wire:click="decrementQuantity({{ $cart->id }})"
                                        class="w-6 h-6 flex items-center justify-center border border-gray-300 rounded-full text-lg text-primary-verdigris">–</button>
                                <span class="text-sm font-semibold text-primary-chinese-black">{{ $cart->quantity }}</span>
                                <button wire:click="incrementQuantity({{ $cart->id }})" 
                                        class="w-6 h-6 flex items-center justify-center border border-gray-300 rounded-full text-lg text-primary-verdigris">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Delete icon -->
                    <img src="{{ asset('images/icon/trash.png') }}" 
                         alt="delete"
                         wire:click="removeCart({{ $cart->id }})"
                         class="cursor-pointer w-5 h-5">
                </div>
            @endforeach
        </section>

        <!-- Total & Checkout -->
        <footer class="fixed bottom-16 left-0 w-full bg-white border-t border-gray-200 p-4">
            <div class="flex justify-between mb-2">
                <p class="font-semibold text-primary-chinese-black">Total</p>
                <p class="font-semibold text-primary-chinese-black">
                    Rp {{ number_format($total, 0, ',', '.') }}
                </p>
            </div>
            <button class="w-full bg-primary-verdigris text-white font-semibold py-2 rounded-lg hover:brightness-110 transition">
                Checkout
            </button>
        </footer>
    </livewire:layouts.bottom-nav-lw>
</div>
