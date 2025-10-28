<div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200">
  <div class="grid h-full max-w-lg grid-cols-5 mx-auto font-medium">
    
    <!-- HOME -->
    <a href="{{ route('home') }}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
      @if (request()->routeIs('home'))
        <img src="{{ asset('images/icon/homeActive.png') }}" alt="Home Active" class="w-6 h-6 mb-1">
      @else
        <img src="{{ asset('images/icon/home.png') }}" alt="Home" class="w-6 h-6 mb-1">
      @endif
      <span class="text-sm {{ request()->routeIs('home') ? 'text-primary-verdigris' : 'text-monochrome-mono-05' }}">Home</span>
    </a>

    <!-- MENU -->
    <a href="{{ route('menu') }}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
      @if (request()->routeIs('menu'))
        <img src="{{ asset('images/icon/menuActive.png') }}" alt="Menu Active" class="w-6 h-6 mb-1">
      @else
        <img src="{{ asset('images/icon/menu.png') }}" alt="Menu" class="w-6 h-6 mb-1">
      @endif
      <span class="text-sm {{ request()->routeIs('menu') ? 'text-primary-verdigris' : 'text-monochrome-mono-05' }}">Menu</span>
    </a>

    <!-- FAVORITE -->
    <a href="{{ route('favorite') }}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
      @if (request()->routeIs('favorite'))
        <img src="{{ asset('images/icon/favoriteActive.png') }}" alt="Favorite Active" class="w-6 h-6 mb-1">
      @else
        <img src="{{ asset('images/icon/favorite.png') }}" alt="Favorite" class="w-6 h-6 mb-1">
      @endif
      <span class="text-sm {{ request()->routeIs('favorite') ? 'text-primary-verdigris' : 'text-monochrome-mono-05' }}">Favorite</span>
    </a>

    <!-- PESANAN -->
    <a href="{{ route('pesanan') }}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
      @if (request()->routeIs('pesanan'))
        <img src="{{ asset('images/icon/pesananActive.png') }}" alt="Pesanan Active" class="w-6 h-6 mb-1">
      @else
        <img src="{{ asset('images/icon/pesanan.png') }}" alt="Pesanan" class="w-6 h-6 mb-1">
      @endif
      <span class="text-sm {{ request()->routeIs('pesanan') ? 'text-primary-verdigris' : 'text-monochrome-mono-05' }}">Pesanan</span>
    </a>

    <!-- PROFILE -->
    <a href="{{ route('profile') }}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
      @if (request()->routeIs('profile'))
        <img src="{{ asset('images/icon/profileActive.png') }}" alt="Profile Active" class="w-6 h-6 mb-1">
      @else
        <img src="{{ asset('images/icon/profile.png') }}" alt="Profile" class="w-6 h-6 mb-1">
      @endif
      <span class="text-sm {{ request()->routeIs('profile') ? 'text-primary-verdigris' : 'text-monochrome-mono-05' }}">Profile</span>
    </a>
  </div>
</div>
