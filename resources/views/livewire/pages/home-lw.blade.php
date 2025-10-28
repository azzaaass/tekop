<div>
    <livewire:layouts.bottom-nav-lw>

        <header class="flex justify-between items-center w-full p-6  rounded-b-xl bg-secondary-green-01">
            <div>
                <h2 class="text-2xl font-bold text-secondary-green-06">Welcome Arya 👋</h2>
                <p class="text-sm text-secondary-green-06">Let’s discover your perfect cup of coffee</p>
            </div>
            <div>
                <img src="{{ asset('images/icon/notification.png') }}" alt="">
            </div>
        </header>
        <section class="flex gap-3 overflow-x-scroll scrollbar-none p-3">
            <img src="{{ asset('images/banner/banner (1).png') }}" alt="banner-1" class="w-[90%] shadow-sm">
            <img src="{{ asset('images/banner/banner (2).png') }}" alt="banner-1" class="w-[90%] shadow-sm">
            <img src="{{ asset('images/banner/banner (3).png') }}" alt="banner-1" class="w-[90%] shadow-sm">
            <img src="{{ asset('images/banner/banner (4).png') }}" alt="banner-1" class="w-[90%] shadow-sm">
        </section>
        <section class="flex gap-3 justify-center overflow-x-scroll scrollbar-none p-3">
            <img src="{{ asset('images/button/delivery.png') }}" alt="banner-1" class="w-[45%] shadow-md">
            <img src="{{ asset('images/button/pick-up.png') }}" alt="banner-1" class="w-[45%] shadow-md">
        </section>
        <section class="p-3">
            <h2 class="mb-2">Rekomendasi</h2>
            <div class="w-full flex overflow-x-scroll gap-2">
                    @foreach ($products as $product)
                        <livewire:components.product-card :product="$product" :key="$product['id']" />
                    @endforeach
            </div>
        </section>
</div>
