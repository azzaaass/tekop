<div class="bg-white h-screen">
    <section class="p-3 flex flex-col justify-start h-screen">
        <a href="{{ route('onBoard') }}"><img src="{{ asset('images/icon/chevron-left.png') }}" alt="icon-left" class="w-[7%]"></a>
        <img src="{{ asset('images/sign-in.png') }}" alt="sign-in-image" class="my-4 w-[70%] mx-auto">
        <h1 class="text-3xl font-bold text-primary-verdigris">Sign-In</h1>
        <p class="pt-3 text-sm text-primary-chinese-black">Welcome back, sign in to continue!</p>

        {{-- Username --}}
        <div class="mt-5">
            <label for="email" class="text-sm text-primary-chinese-black font-semibold">Email</label>
            <input type="email" wire:model="email" class="block mt-2 w-full p-2 rounded-md border-none bg-primary-bright-gray placeholder:text-sm" placeholder="Enter your username or email">
        </div>

        <div class="mt-3">
            <label for="password" class="text-sm text-primary-chinese-black font-semibold">Password</label>
            <input type="password" wire:model="password" class="block mt-2 w-full p-2 rounded-md border-none bg-primary-bright-gray placeholder:text-sm" placeholder="Enter your password">
        </div>

        <p class="mt-3"><a href="#" class="text-primary-verdigris text-sm">Forgot password?</a></p>

        <button
            class="mt-3 w-full flex items-center justify-center px-6 py-2 bg-primary-verdigris text-white text-md rounded-xl shadow-lg"
            wire:click="login">
            Sign In
        </button>
        <div class="relative flex py-3 items-center">
            <div class="flex-grow border-t border-gray-300"></div>
            <span class="flex-shrink mx-4 text-xs text-primary-chinese-black">OR</span>
            <div class="flex-grow border-t border-gray-300"></div>
        </div>
        <a href="{{ route('signInNumber') }}"
            class="w-full flex items-center justify-center px-6 py-1.5  text-primary-verdigris border-2 border-primary-verdigris text-md rounded-xl shadow-lg">
            Sign In with number
        </a>
        <p class="pt-3 text-sm text-primary-chinese-black text-center">Don't have an account? <a href="{{ route('register') }}"
                class="text-primary-verdigris">Sign Up</a>.</p>
    </section>
</div>
