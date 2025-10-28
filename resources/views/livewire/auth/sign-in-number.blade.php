<div class="bg-white h-screen">
    <section class="p-3 flex flex-col justify-start h-screen">
        <a href="{{ route('onBoard') }}"><img src="{{ asset('images/icon/chevron-left.png') }}" alt="icon-left"
                class="w-[7%]"></a>
        <h1 class="mt-3 text-3xl font-bold text-primary-chinese-black">Sign-In</h1>
        <p class="pt-3 text-sm text-primary-chinese-black">Enter your registered phone number to sign in</p>

        {{-- Username --}}
        <div class="mt-5">
            <label for="username" class="text-sm text-primary-chinese-black font-semibold">Phone number</label>
            <div class="flex space-x-2 gap-2">
                <span class="p-2 rounded-md bg-primary-bright-gray text-sm">
                    +62
                </span>
                <input type="text" id="phone"
                    class="flex-1 p-2 rounded-md border-none bg-primary-bright-gray placeholder:text-sm"
                    placeholder="Enter your mobile number">
            </div>
        </div>

        <button
            class="mt-3 w-full flex items-center justify-center px-6 py-2 bg-primary-verdigris text-white text-md rounded-xl shadow-lg"
            wire:click="signIn">
            Continue
        </button>

    </section>
</div>
