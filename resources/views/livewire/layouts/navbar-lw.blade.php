<div class="flex justify-between items-center px-6 py-4 bg-white border-b shadow-sm">
    <!-- Search -->
    <div class="flex items-center bg-gray-100 px-6 py-1.5 border border-gray-200 rounded-xl w-1/3">
        <img src="{{ asset('images/icon/search.png') }}" class="w-4 h-4 mr-2" alt="search">
        <input type="text" placeholder="Cari Informasi" 
               class="bg-transparent w-full rounded-md text-sm focus:ring-0 border-none text-primary-chinese-black">
    </div>

    <!-- User Info -->
    <div class="flex items-center gap-3">
        <div class="text-right">
            <p class="text-sm font-semibold text-primary-chinese-black">Budiono</p>
            <p class="text-xs text-monochrome-mono-06">Admin</p>
        </div>
        <img src="{{ asset('images/profile/user.png') }}" class="w-10 h-10 rounded-full object-cover" alt="user">
    </div>
</div>
