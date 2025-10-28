<div class="">
    <livewire:layouts.bottom-nav-lw>
        <header class="pt-3 pb-4 px-2 flex items-center gap-4 shadow-md">
            <!-- Tombol back -->
            <a href="{{ route('home') }}" class="">
                <img src="{{ asset('images/icon/chevron-left.png') }}" alt="icon-left" class="w-[100%]">
            </a>
            <h2 class="text-2xl text-center font-bold text-primary-chinese-black">Favorite Anda</h2>
        </header>
        <section>
            @foreach ($productFavorites as $index => $productFavorite)
                <div class="m-2 flex justify-between rounded-lg bg-primary-white">
                    <div class="flex items-center gap-4">
                        <img class="w-[30%]" src="{{ asset('images/product/' . $productFavorite->product->image) }}" alt="">
                        <div>
                            <p class="font-semibold text-primary-chinese-black text-lg">{{ $productFavorite->product->name }}</p>
                            <p class="text-primary-chinese-black text-lg">Rp. {{ $productFavorite->product->price }}</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <img src="{{ asset('images/icon/loveActive.png') }}" alt="love active"
                            wire:click.stop="toggleFavorite({{ $productFavorite->product->id }})" class=" cursor-pointer" width="25">
                    </div>
                </div>
            @endforeach
        </section>
</div>