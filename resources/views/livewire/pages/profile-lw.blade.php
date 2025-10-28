<div>
    <livewire:layouts.bottom-nav-lw>
        <!-- Header -->
        <header class="pt-3 pb-4 px-2 flex justify-center shadow-sm">
            <h2 class="text-2xl font-bold text-primary-chinese-black">Profile</h2>
        </header>

        <!-- Section: User Info -->
        <section class="p-3">
            <div class="flex items-center justify-between bg-secondary-green-02 rounded-lg p-3 shadow-sm">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/profile/user.png') }}" 
                         alt="User Photo" 
                         class="w-14 h-14 rounded-full object-cover">
                    <div>
                        <p class="font-semibold text-primary-chinese-black text-sm">M Ramadhani Arya Syahputra</p>
                        <p class="text-xs text-primary-chinese-black opacity-70">Ramadhaninarya@gmail.com</p>
                    </div>
                </div>
                <a href="{{ route('editProfile') }}">
                    <img src="{{ asset('images/icon/chevron-right.png') }}" alt="arrow" class="w-4 h-4">
                </a>
            </div>
        </section>

        <!-- Section: Menu List -->
        <section class="px-4 mt-3 divide-y divide-gray-200 bg-white">
            <a href="#" class="flex justify-between items-center py-3 text-primary-chinese-black">
                <span>Pusat Bantuan</span>
                <img src="{{ asset('images/icon/chevron-right.png') }}" alt=">" class="w-4 h-4">
            </a>
            <a href="#" class="flex justify-between items-center py-3 text-primary-chinese-black">
                <span>Pengaturan</span>
                <img src="{{ asset('images/icon/chevron-right.png') }}" alt=">" class="w-4 h-4">
            </a>
            <a href="#" class="flex justify-between items-center py-3 text-primary-chinese-black">
                <span>Syarat dan Kententuan</span>
                <img src="{{ asset('images/icon/chevron-right.png') }}" alt=">" class="w-4 h-4">
            </a>
            <a href="#" class="flex justify-between items-center py-3 text-primary-chinese-black">
                <span>Kebijakan Privasi</span>
                <img src="{{ asset('images/icon/chevron-right.png') }}" alt=">" class="w-4 h-4">
            </a>
            <a href="#" class="flex justify-between items-center py-3 text-primary-chinese-black">
                <span>Pengaturan Bahasa</span>
                <img src="{{ asset('images/icon/chevron-right.png') }}" alt=">" class="w-4 h-4">
            </a>
            <a href="#" class="flex justify-between items-center py-3 text-primary-chinese-black">
                <span>Kontak Kami</span>
                <img src="{{ asset('images/icon/chevron-right.png') }}" alt=">" class="w-4 h-4">
            </a>
            <a href="#" class="flex justify-between items-center py-3 text-primary-chinese-black">
                <span>Media Sosial</span>
                <img src="{{ asset('images/icon/instagram.png') }}" alt="instagram" class="w-5 h-5">
            </a>
        </section>

        <!-- Section: Logout -->
        <section class="px-4 mt-5 mb-24">
            <button wire:click="logout"
                    class="w-full border border-red-500 text-red-500 font-semibold py-2 rounded-lg hover:bg-red-50 transition">
                Log Out
            </button>
        </section>
    </livewire:layouts.bottom-nav-lw>
</div>
