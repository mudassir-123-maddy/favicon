<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }

            .auth-bg {
                background: linear-gradient(135deg, #f5f4ff 0%, #eef0ff 50%, #f5f4ff 100%);
            }

            /* .auth-logo-box {
                width: 64px;
                height: 64px;
                border-radius: 18px;
                background: linear-gradient(to bottom right, #7567f8, #6B5CE7);
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 8px 20px rgba(115, 103, 240, 0.25);
            }

            .auth-card {
                border-radius: 16px;
                border: 1px solid rgba(115, 103, 240, 0.12);
                box-shadow: 0 10px 30px rgba(31, 26, 70, 0.08);
            } */
        </style>

    </head>
    <body class="text-gray-900 antialiased">
        @include('partials.auth-navbar')
        <div class="auth-bg min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div>
                <a href="/" class="auth-logo-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers w-4 h-4 text-white" aria-hidden="true">
                        <path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z"></path>
                        <path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12"></path>
                        <path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17"></path>
                    </svg>
                </a>
            </div>

            <div class="auth-card w-full sm:max-w-md mt-6 px-8 py-8 bg-white overflow-hidden">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>