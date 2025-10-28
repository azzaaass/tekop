<div>
    <livewire:layouts.bottom-nav-lw>
        <!-- Bagian Atas (Background + Foto) -->
        <div class="bg-secondary-green-02 rounded-b-xl flex flex-col items-center justify-center relative">
            <!-- Foto Profil -->
            <img src="{{ asset('images/profile/user.png') }}" alt="Profile Picture"
                class="w-24 h-24 mt-3 rounded-full object-cover border-4 border-white shadow-md">
            <p class="mt-2 mb-3 text-sm text-primary-chinese-black font-medium">Ubah foto</p>
        </div>

        <!-- Form -->
        <section class="p-4 mt-4 space-y-4">
            <!-- Nama -->
            <div>
                <label class="text-sm font-semibold text-primary-chinese-black">Nama Lengkap</label>
                <input type="text" value="M Ramadhani Arya S"
                    class="w-full bg-gray-100 rounded-lg px-3 py-2 mt-1 text-primary-chinese-black focus:outline-none focus:ring-2 focus:ring-primary-verdigris">
            </div>

            <!-- Email -->
            <div class="mt-2">
                <label class="text-sm font-semibold text-primary-chinese-black">Email</label>
                <input type="email" value="Ramadhaninarya@gmail.com"
                    class="w-full bg-gray-100 rounded-lg px-3 py-2 mt-1 text-primary-chinese-black focus:outline-none focus:ring-2 focus:ring-primary-verdigris">
            </div>

            <!-- Jenis Kelamin -->
            <div class="mt-2">
                <label class="text-sm font-semibold text-primary-chinese-black">Jenis Kelamin</label>
                <input type="text" value="Male"
                    class="w-full bg-gray-100 rounded-lg px-3 py-2 mt-1 text-primary-chinese-black focus:outline-none focus:ring-2 focus:ring-primary-verdigris">
            </div>

            <!-- Tanggal Lahir -->
            <div class="mt-2">
                <label class="text-sm font-semibold text-primary-chinese-black">Tanggal Lahir
                    <span class="text-xs text-monochrome-mono-06">(Dapatkan birthday gift khusus buat kamu)</span>
                </label>
                <input type="text" value="05 December 2001"
                    class="w-full bg-gray-100 rounded-lg px-3 py-2 mt-1 text-primary-chinese-black focus:outline-none focus:ring-2 focus:ring-primary-verdigris">
            </div>

            <!-- Tombol Simpan -->
            <section class="mt-5 mb-24">
                <button wire:click="logout"
                    class="w-full border border-alert-green text-alert-green font-semibold py-2 rounded-lg hover:bg-red-50 transition">
                    Simpan
                </button>
            </section>
        </section>
    </livewire:layouts.bottom-nav-lw>
</div>
