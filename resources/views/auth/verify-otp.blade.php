<x-guest-layout>
    <div class="mb-6 text-center">
        <h1 class="text-2xl font-extrabold text-gray-900">Verify your email</h1>
        <p class="text-sm text-gray-500 mt-1">We sent a 6-digit code to <strong>{{ $email }}</strong></p>
    </div>

    @if (session('status'))
        <div class="mb-4 p-4 rounded-lg bg-green-50 border border-green-200 text-sm text-green-700">
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

    <form method="POST" action="{{ route('otp.verify.submit') }}">
        @csrf
        <div>
            <x-input-label for="otp" value="Verification Code" />
            <input id="otp" name="otp" type="text" maxlength="6"
                class="block mt-1 w-full rounded-lg border-gray-300 text-center text-2xl tracking-[0.5em] font-bold focus:border-[#7367f0] focus:ring-[#7367f0]"
                placeholder="------" autofocus required>
        </div>

        <button type="submit" class="w-full mt-6 px-6 py-2.5 rounded-lg text-white text-sm font-semibold transition hover:opacity-90" style="background: linear-gradient(to bottom right, #7567f8, #6B5CE7);">
            Verify Email
        </button>
    </form>

    <form method="POST" action="{{ route('otp.resend') }}" class="mt-4 text-center">
        @csrf
        <button type="submit" class="text-sm text-[#7367f0] hover:underline">
            Didn't get a code? Resend
        </button>
    </form>
</x-guest-layout>