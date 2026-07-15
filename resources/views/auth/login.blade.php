<x-auth-split-layout>
    <div class="split-panel panel-left">
        <h2>{{ __('Welcome Back!') }}</h2>
        <p>{{ __("Enter your personal details and start your journey with us") }}</p>
        <a href="{{ route('register') }}" class="ghost-btn">{{ __('SIGN UP') }}</a>
    </div>

    <div class="split-form">
        <h1>{{ __('Sign In') }}</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 rounded-lg bg-red-50 border border-red-200">
                <ul class="text-sm text-red-600 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                    placeholder="{{ __('Email') }}"
                    class="w-full rounded-lg bg-gray-100 border-none px-4 py-3 text-sm focus:ring-2 focus:ring-[#7367f0]">
            </div>

            <div class="mb-4">
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    placeholder="{{ __('Password') }}"
                    class="w-full rounded-lg bg-gray-100 border-none px-4 py-3 text-sm focus:ring-2 focus:ring-[#7367f0]">
            </div>

            <div class="flex items-center justify-between mb-4 text-sm">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="rounded border-gray-300 text-[#7367f0] focus:ring-[#7367f0]">
                    <span class="ms-2 text-gray-500">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-gray-500 hover:text-[#7367f0]">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>

            <button type="submit"
                class="w-full py-3 rounded-lg text-white text-sm font-bold tracking-wide"
                style="background: linear-gradient(135deg, #7567f8 0%, #6B5CE7 100%);">
                {{ __('SIGN IN') }}
            </button>
        </form>
    </div>
</x-auth-split-layout>