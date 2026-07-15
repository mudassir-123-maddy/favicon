<x-guest-layout>
    <div class="text-center mb-6">
        <div class="mx-auto mb-4 flex items-center justify-center" style="width: 64px; height: 64px; border-radius: 16px; background: linear-gradient(135deg, #7567f8 0%, #6B5CE7 100%); box-shadow: 0 8px 20px rgba(115, 103, 240, 0.25);">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z"></path>
                    <path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12"></path>
                    <path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17"></path>
                </svg>
        </div>
        <h1 class="text-2xl font-extrabold text-gray-900">{{ __('Forgot your password?') }}</h1>
        <p class="text-sm text-gray-500 mt-2 leading-relaxed">
            {{ __('No worries, we\'ll send you reset instructions to your email.') }}
        </p>
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="mb-4 p-4 rounded-lg bg-green-50 border border-green-200 text-sm text-green-700 text-center">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-4 p-4 rounded-lg bg-red-50 border border-red-200">
            <ul class="text-sm text-red-600 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email Address')"/>
            <x-text-input id="email" class="block mt-4 w-full rounded-lg border-gray-300 focus:border-[#7367f0] focus:ring-[#7367f0]"
                type="email" name="email" :value="old('email')" required autofocus placeholder="Please Enter your Email" />
        </div>

        <button type="submit" class="w-full mt-6 px-6 py-3 rounded-lg text-white text-sm font-semibold transition hover:opacity-90" style="background: linear-gradient(135deg, #7567f8 0%, #6B5CE7 100%);">
            {{ __('Send Reset Link') }}
        </button>

        <p class="text-center text-sm text-gray-500 mt-6">
            <a href="{{ route('login') }}" class="font-semibold text-[#7367f0] hover:underline inline-flex items-center gap-1">
                <svg fill="#7367f0" height="16px" width="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="7.168000000000001"></g><g id="SVGRepo_iconCarrier"> <polygon points="213.3,205.3 213.3,77.3 0,248 213.3,418.7 213.3,290.7 512,290.7 512,205.3 "></polygon> </g></svg> {{ __('Back to login') }}
            </a>
        </p>
    </form>
</x-guest-layout>