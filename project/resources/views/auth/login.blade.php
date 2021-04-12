<x-guest-layout>
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center"
             style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Keep it special</h1>
                <p class="text-3xl my-4">Capture your personal memory in unique way, anywhere.</p>
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0"
             style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center"
                 style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
                <h1 class="my-6 text-4xl">
                    Login
                </h1>
                <div class="py-6 space-x-2">
                    <!-- login sociation-->
                    <span
                        class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white">f</span>
                    <span
                        class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white">G+</span>
                    <span
                        class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white">in</span>
                </div>
                <p class="text-gray-100">
                    or use email your account
                </p>
                <form method="POST" action="{{ route('login') }}" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    @csrf
                    <div class="pb-2 pt-4">
                        <input type="email" name="email" :value="old('email')" required autofocus placeholder="Email"
                               class="block w-full p-4 text-lg rounded-sm bg-black">
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="block w-full p-4 text-lg rounded-sm bg-black" type="password" name="password"
                               id="password" placeholder="Password" autocomplete="current-password" required>
                    </div>
                    @if (Route::has('password.request'))
                        <div class="text-right text-gray-400 hover:underline hover:text-gray-100">
                            <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                        </div>
                    @endif

                    <div class="px-4 pb-2 pt-4">
                        <button
                            class="uppercase block w-full p-4 text-lg rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none">
                            {{ __('Log in') }}
                        </button>
                    </div>

                    <div class="p-4 text-center right-0 left-0 flex justify-center space-x-4 mt-16 lg:hidden ">
                        <a href="#">

                        </a>
                        <a href="#">

                        </a>
                        <a href="#">

                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{--    <x-jet-authentication-card>--}}
    {{--        <x-slot name="logo">--}}
    {{--            <x-jet-authentication-card-logo/>--}}
    {{--        </x-slot>--}}

    {{--        <x-jet-validation-errors class="mb-4"/>--}}

    {{--        @if (session('status'))--}}
    {{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
    {{--                {{ session('status') }}--}}
    {{--            </div>--}}
    {{--        @endif--}}
    {{--        <form method="POST" action="{{ route('login') }}">--}}
    {{--            @csrf--}}

    {{--            <div>--}}
    {{--                <x-jet-label for="email" value="{{ __('Email') }}"/>--}}
    {{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"--}}
    {{--                             required autofocus/>--}}
    {{--            </div>--}}

    {{--            <div class="mt-4">--}}
    {{--                <x-jet-label for="password" value="{{ __('Password') }}"/>--}}
    {{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required--}}
    {{--                             autocomplete="current-password"/>--}}
    {{--            </div>--}}

    {{--            <div class="block mt-4">--}}
    {{--                <label for="remember_me" class="flex items-center">--}}
    {{--                    <x-jet-checkbox id="remember_me" name="remember"/>--}}
    {{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
    {{--                </label>--}}
    {{--            </div>--}}

    {{--            <div class="flex items-center justify-end mt-4">--}}
    {{--                @if (Route::has('password.request'))--}}
    {{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900"--}}
    {{--                       href="{{ route('password.request') }}">--}}
    {{--                        {{ __('Forgot your password?') }}--}}
    {{--                    </a>--}}
    {{--                @endif--}}

    {{--                <x-jet-button class="ml-4">--}}
    {{--                    {{ __('Log in') }}--}}
    {{--                </x-jet-button>--}}
    {{--                <x-jet-button class="ml-4">--}}
    {{--                    <a href="{{ url('authorized/google') }}">--}}
    {{--                        {{ __('by google') }}--}}
    {{--                    </a>--}}
    {{--                </x-jet-button>--}}
    {{--            </div>--}}
    {{--        </form>--}}
    {{--    </x-jet-authentication-card>--}}
</x-guest-layout>
