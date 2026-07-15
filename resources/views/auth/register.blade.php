<x-auth-split-layout>
    <div class="split-form">
        <h1>{{ __('Create Account') }}</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 rounded-lg bg-red-50 border border-red-200">
                <ul class="text-sm text-red-600 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                    placeholder="{{ __('Name') }}"
                    class="w-full rounded-lg bg-gray-100 border-none px-4 py-3 text-sm focus:ring-2 focus:ring-[#7367f0]">
            </div>

            <div class="mb-4">
                <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                    placeholder="{{ __('Email') }}"
                    class="w-full rounded-lg bg-gray-100 border-none px-4 py-3 text-sm focus:ring-2 focus:ring-[#7367f0]">
            </div>

            <div class="mb-4">
                <input id="password" type="password" name="password" required autocomplete="new-password"
                    placeholder="{{ __('Password') }}"
                    class="w-full rounded-lg bg-gray-100 border-none px-4 py-3 text-sm focus:ring-2 focus:ring-[#7367f0]">
            </div>

            <div class="mb-6">
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                    placeholder="{{ __('Confirm Password') }}"
                    class="w-full rounded-lg bg-gray-100 border-none px-4 py-3 text-sm focus:ring-2 focus:ring-[#7367f0]">
            </div>

            <button type="submit"
                class="w-full py-3 rounded-lg text-white text-sm font-bold tracking-wide"
                style="background: linear-gradient(135deg, #7567f8 0%, #6B5CE7 100%);">
                {{ __('SIGN UP') }}
            </button>
        </form>
    </div>

    <div class="split-panel panel-right">
        <h2>{{ __('Hello, Friend!') }}</h2>
        <p>{{ __('Enter your personal details to use all of site features') }}</p>
        <a href="{{ route('login') }}" class="ghost-btn">{{ __('SIGN IN') }}</a>
    </div>
</x-auth-split-layout>