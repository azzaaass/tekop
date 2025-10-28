<div class="relative bg-white h-screen">
    <!-- Tombol back -->
    <a href="{{ route('home') }}" class="absolute left-4 top-4">
        <img src="{{ asset('images/icon/chevron-left.png') }}" alt="icon-left" class="w-[100%]">
    </a>

    <section class="p-3 flex flex-col justify-start h-screen">
        <!-- Nama produk -->
        <h2 class="text-2xl text-center font-bold text-primary-chinese-black">{{ $product->name }}</h2>

        <!-- Gambar produk -->
        <img src="{{ asset('images/product/' . $product->image) }}" alt="product-image" class="my-auto w-[80%] mx-auto">

        <!-- Deskripsi -->
        <p class="pt-3 text-sm text-primary-chinese-black">{{ $product->description }}</p>

        <hr class="my-2">

        <!-- Add-ons -->
        @foreach ($addOns as $addOnName => $addOnList)
            <h3 class="text-md font-semibold text-primary-chinese-black">{{ $addOnName }}</h3>
            @foreach ($addOnList as $addOn)
                <label class="flex items-center justify-between pt-3 text-sm text-primary-chinese-black cursor-pointer">
                    <span>{{ $addOn['name'] }}</span>
                    <input type="radio" name="addon_{{ $addOnName }}"
                        class="text-primary-verdigris focus:ring-primary-verdigris">
                </label>
            @endforeach
            <hr class="my-2">
        @endforeach

        <!-- Counter & Add To Cart -->
        <div class="mt-6 flex items-center justify-between">
            <!-- Counter -->
            <div class="flex items-center gap-4">
                <button wire:click="decrementQuantity"
                    class="w-8 h-8 flex items-center justify-center border border-gray-300 rounded-full text-xl text-primary-chinese-black hover:bg-gray-100">
                    –
                </button>
                <span class="text-lg font-semibold text-primary-chinese-black">{{ $quantity }}</span>
                <button wire:click="incrementQuantity"
                    class="w-8 h-8 flex items-center justify-center border border-gray-300 rounded-full text-xl text-primary-chinese-black hover:bg-gray-100">
                    +
                </button>
            </div>

            <!-- Tombol Add To Cart -->
            <button wire:click="addToCart"
                class="bg-primary-chinese-black text-white px-16 py-3 rounded-lg font-semibold shadow-md hover:brightness-110 transition">
                Add To Cart
            </button>
        </div>
    </section>
</div>
