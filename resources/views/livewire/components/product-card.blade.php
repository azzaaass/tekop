<div class="flex-none relative p-2 w-[120px] shadow-lg rounded-lg bg-white cursor-pointer" wire:click="goToDetail">

    <!-- Favorite icon -->
    @if ($isFavorite)
        <img src="{{ asset('images/icon/loveActive.png') }}" alt="love active" wire:click.stop="toggleFavorite"
            class="absolute top-5 right-2 cursor-pointer">
    @else
        <img src="{{ asset('images/icon/love.png') }}" alt="love" wire:click.stop="toggleFavorite"
            class="absolute top-3 right-1 cursor-pointer">
    @endif

    <!-- Gambar produk -->
    <img src="{{ asset('images/product/' . $product['image']) }}" alt="{{ $product['name'] }}" class="pt-6 h-[130px] mx-auto">

    <!-- Nama & kategori -->
    @php
        use Illuminate\Support\Str;
    @endphp

    <p class="pt-2 font-semibold text-primary-chinese-black">
        {{ Str::limit($product['name'], 11, '..') }}
    </p>
    <p class="pt-1 text-xs text-monochrome-mono-05">{{ $product['category'] ?? '-' }}</p>

    <!-- Harga & add-to-cart -->
    <div class="pt-1 flex justify-between items-center">
        <p class="text-xs text-primary-chinese-black">
            Rp. {{ number_format($product['price'], 0, ',', '.') }}
        </p>
        <img wire:click.stop="addToCart" src="{{ asset('images/icon/addToCart.png') }}" alt="add to cart"
            class="cursor-pointer">
    </div>
</div>
