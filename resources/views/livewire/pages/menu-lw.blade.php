<div>
    <livewire:layouts.bottom-nav-lw>
        <header class="w-full p-6  rounded-b-xl bg-secondary-green-01">
            <div class="mb-4 flex items-center bg-white rounded-lg px-3 ">
                <img src="{{ asset('images/icon/search.png') }}" alt="search icon" class="w-5 h-5 opacity-60 mr-2">
                <input type="text" placeholder="Search here..."
                    class="w-full text-sm text-primary-chinese-black placeholder:text-monochrome-mono-05 outline-none border-none focus:outline-none focus:ring-0">
            </div>

            <div class="flex gap-4">
                <p class="text-sm font-medium text-primary-white">Coffee</p>
                <p class="text-sm font-medium text-secondary-green-06">Non-coffee</p>
                <p class="text-sm font-medium text-secondary-green-06">Tea based</p>
                <p class="text-sm font-medium text-secondary-green-06">Mocktail</p>
                <p class="text-sm font-medium text-secondary-green-06">Snack</p>
            </div>
        </header>
        <section class="overflow-x-scroll p-3">
            @foreach ($products as $category => $productList)
                <h1 class="mt-4 mb-2 text-2xl font-bold">{{ $category }}</h1>
                <div class="w-full flex overflow-x-scroll gap-2">

                    @foreach ($productList as $product)
                        <livewire:components.product-card :product="$product" :key="$product['id']" />
                    @endforeach
                </div>
            @endforeach
        </section>
</div>
