<div class="flex min-h-screen bg-[#F8F9FB]" x-data="{ showAddModal: false, showEditModal: false, product: {}, newProduct: { img: '', name: '', price: '', description: '', category: '', available: true } }" x-cloak>

    <!-- Sidebar -->
    <livewire:layouts.sidebar-lw />

    <!-- Main -->
    <div class="flex-1 flex flex-col">
        <livewire:layouts.navbar-lw />

        <main class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-primary-chinese-black">Daftar Produk</h1>
                <button @click="showAddModal = true"
                    class="bg-primary-verdigris text-white px-4 py-2 rounded-md text-sm hover:opacity-90 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Produk
                </button>
            </div>

            <!-- Grid Produk -->
            <div class="grid grid-cols-4 gap-4">
                @foreach ($products as $p)
                    <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition p-3">
                        <img src="{{ asset('/images/product/' . $p['image']) }}" class="h-44 object-fit rounded-md"
                            alt="">
                        <div class="mt-2">
                            <span
                                class="inline-block text-xs px-2 py-0.5 rounded bg-gray-100 text-gray-600">{{ $p['category'] }}</span>
                            <h3 class="font-semibold text-primary-chinese-black mt-1">{{ $p['name'] }}</h3>
                            <p class="text-sm text-gray-500 mt-1 line-clamp-2">{{ $p['description'] }}</p>
                            <p class="font-semibold mt-2">Rp {{ number_format($p['price'], 0, ',', '.') }}</p>
                            <button
                                @click="product = { 
                                    ...{{ json_encode($p) }}, 
                                    img: '{{ asset('/images/product') }}/' + '{{ $p['image'] }}' 
                                }; showEditModal = true"
                                class="mt-2 w-full bg-primary-verdigris text-white text-sm py-1.5 rounded-md hover:opacity-90">
                                Edit Produk
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-6 text-sm text-gray-500 flex justify-between">
                <span>Showing 1–8 of 78</span>
                <div class="flex items-center gap-2">
                    <button class="px-2 py-1 border rounded-lg text-gray-400">‹</button>
                    <button class="px-2 py-1 border rounded-lg text-gray-700">›</button>
                </div>
            </div>
        </main>
    </div>

    <!-- ✨ MODAL TAMBAH PRODUK -->
    <div x-show="showAddModal" class="fixed inset-0 bg-black/30 backdrop-blur-sm flex justify-center items-center z-50"
        x-transition>
        <div class="bg-white w-[500px] rounded-xl shadow-lg p-6 relative overflow-y-auto max-h-[90vh]">
            <button @click="showAddModal = false"
                class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-xl">✕</button>
            <h2 class="text-xl font-semibold mb-4 text-primary-chinese-black">Tambah Produk</h2>

            <!-- Gambar Produk -->
            <div class="flex items-center gap-4 mb-4">
                <template x-if="newProduct.img">
                    <img :src="newProduct.img" class="w-20 h-20 rounded-md object-cover border">
                </template>
                <template x-if="!newProduct.img">
                    <div class="w-20 h-20 rounded-md bg-gray-100 flex items-center justify-center text-gray-400">No Img
                    </div>
                </template>
                <button class="bg-black text-white text-sm px-3 py-1.5 rounded-md">⬆ Upload</button>
            </div>

            <!-- Harga -->
            <div class="mb-3">
                <label class="text-sm text-gray-600">Harga Produk</label>
                <input type="text" x-model="newProduct.price" placeholder="Contoh: Rp12.000"
                    class="w-full border rounded-md px-3 py-2 text-sm" />
            </div>

            <!-- Nama -->
            <div class="mb-3">
                <label class="text-sm text-gray-600">Nama Produk</label>
                <input type="text" x-model="newProduct.name" placeholder="Nama produk..."
                    class="w-full border rounded-md px-3 py-2 text-sm" />
            </div>

            <!-- Deskripsi -->
            <div class="mb-3">
                <label class="text-sm text-gray-600">Deskripsi Produk</label>
                <textarea x-model="newProduct.description" placeholder="Tuliskan deskripsi produk..." rows="3"
                    class="w-full border rounded-md px-3 py-2 text-sm resize-none"></textarea>
            </div>

            <!-- Kategori -->
            <div class="mb-3">
                <label class="text-sm text-gray-600 block mb-1">Kategori Produk</label>
                <div class="grid grid-cols-2 gap-2 text-sm">
                    <template x-for="cat in ['Coffee','Non-Coffee','Tea','Snack']">
                        <label class="border rounded-md px-3 py-2 flex items-center justify-between cursor-pointer"
                            :class="newProduct.category === cat ? 'border-primary-verdigris text-primary-verdigris' : ''"
                            @click="newProduct.category = cat">
                            <span x-text="cat"></span>
                        </label>
                    </template>
                </div>
            </div>

            <!-- Ketersediaan -->
            <div class="mb-6">
                <label class="text-sm text-gray-600 block mb-1">Ketersediaan Produk</label>
                <div class="flex gap-3 text-sm">
                    <label class="border rounded-md px-3 py-2 flex items-center gap-2 cursor-pointer"
                        :class="newProduct.available ? 'border-primary-verdigris text-primary-verdigris' : ''"
                        @click="newProduct.available = true">
                        <div class="w-4 h-4 rounded-full border flex items-center justify-center">
                            <div x-show="newProduct.available" class="w-2 h-2 bg-primary-verdigris rounded-full"></div>
                        </div>
                        Tersedia
                    </label>
                    <label class="border rounded-md px-3 py-2 flex items-center gap-2 cursor-pointer"
                        :class="!newProduct.available ? 'border-red-400 text-red-500' : ''"
                        @click="newProduct.available = false">
                        <div class="w-4 h-4 rounded-full border flex items-center justify-center">
                            <div x-show="!newProduct.available" class="w-2 h-2 bg-red-400 rounded-full"></div>
                        </div>
                        Tidak Tersedia
                    </label>
                </div>
            </div>

            <!-- Tombol -->
            <div class="flex justify-end gap-2">
                <button @click="showAddModal = false"
                    class="border border-gray-300 text-gray-600 px-4 py-2 rounded-md text-sm hover:bg-gray-50">Batal</button>
                <button class="bg-primary-verdigris text-white px-4 py-2 rounded-md text-sm hover:opacity-90"
                    @click="alert('Produk baru berhasil ditambahkan!'); showAddModal = false">
                    Tambah Produk
                </button>
            </div>
        </div>
    </div>

    <!-- ✨ MODAL EDIT PRODUK -->
    <div x-show="showEditModal" class="fixed inset-0 bg-black/30 backdrop-blur-sm flex justify-center items-center z-50"
        x-transition>
        <div class="bg-white w-[500px] rounded-xl shadow-lg p-6 relative overflow-y-auto max-h-[90vh]">
            <button @click="showEditModal = false"
                class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-xl">✕</button>
            <h2 class="text-xl font-semibold mb-4 text-primary-chinese-black">Edit Produk</h2>

            <!-- Gambar Produk -->
            <div class="flex items-center gap-4 mb-4">
                <img :src="product.img" class="w-20 h-20 rounded-md object-cover border">
                <button class="bg-black text-white text-sm px-3 py-1.5 rounded-md">⬆ Upload</button>
            </div>

            <!-- Harga -->
            <div class="mb-3">
                <label class="text-sm text-gray-600">Harga Produk</label>
                <input type="text" x-model="product.price" class="w-full border rounded-md px-3 py-2 text-sm" />
            </div>

            <!-- Nama -->
            <div class="mb-3">
                <label class="text-sm text-gray-600">Nama Produk</label>
                <input type="text" x-model="product.name" class="w-full border rounded-md px-3 py-2 text-sm" />
            </div>

            <!-- Deskripsi -->
            <div class="mb-3">
                <label class="text-sm text-gray-600">Deskripsi Produk</label>
                <textarea x-model="product.description" rows="3"
                    class="w-full border rounded-md px-3 py-2 text-sm resize-none"></textarea>
            </div>

            <!-- Kategori -->
            <div class="mb-3">
                <label class="text-sm text-gray-600 block mb-1">Kategori Produk</label>
                <div class="grid grid-cols-2 gap-2 text-sm">
                    <template x-for="cat in ['Coffee','Non-Coffee','Tea','Snack']">
                        <label class="border rounded-md px-3 py-2 flex items-center justify-between cursor-pointer"
                            :class="product.category === cat ? 'border-primary-verdigris text-primary-verdigris' : ''"
                            @click="product.category = cat">
                            <span x-text="cat"></span>
                        </label>
                    </template>
                </div>
            </div>

            <!-- Ketersediaan -->
            <div class="mb-6">
                <label class="text-sm text-gray-600 block mb-1">Ketersediaan Produk</label>
                <div class="flex gap-3 text-sm">
                    <label class="border rounded-md px-3 py-2 flex items-center gap-2 cursor-pointer"
                        :class="product.available ? 'border-primary-verdigris text-primary-verdigris' : ''"
                        @click="product.available = true">
                        <div class="w-4 h-4 rounded-full border flex items-center justify-center">
                            <div x-show="product.available" class="w-2 h-2 bg-primary-verdigris rounded-full"></div>
                        </div>
                        Tersedia
                    </label>
                    <label class="border rounded-md px-3 py-2 flex items-center gap-2 cursor-pointer"
                        :class="!product.available ? 'border-red-400 text-red-500' : ''"
                        @click="product.available = false">
                        <div class="w-4 h-4 rounded-full border flex items-center justify-center">
                            <div x-show="!product.available" class="w-2 h-2 bg-red-400 rounded-full"></div>
                        </div>
                        Tidak Tersedia
                    </label>
                </div>
            </div>

            <!-- Action -->
            <div class="flex justify-end gap-2">
                <button @click="showEditModal = false"
                    class="border border-gray-300 text-gray-600 px-4 py-2 rounded-md text-sm hover:bg-gray-50">Batal</button>
                <button class="bg-primary-verdigris text-white px-4 py-2 rounded-md text-sm hover:opacity-90">Simpan
                    Perubahan</button>
            </div>
        </div>
    </div>
</div>
