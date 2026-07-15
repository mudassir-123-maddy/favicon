<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }

            .split-wrap {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #f3f4f8;
                padding: 24px;
            }

            .split-card {
                width: 100%;
                max-width: 900px;
                min-height: 520px;
                background: #ffffff;
                border-radius: 24px;
                box-shadow: 0 20px 50px rgba(31, 26, 70, 0.15);
                display: flex;
                overflow: hidden;
                position: relative;
            }

            .split-panel {
                flex: 0 0 42%;
                background: linear-gradient(135deg, #7567f8 0%, #6B5CE7 100%);
                color: #fff;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
                padding: 48px 36px;
                position: relative;
                border-radius: 24px;
                z-index: 2;
            }
            .split-panel h2 {
                font-size: 28px;
                font-weight: 800;
                margin-bottom: 12px;
            }

            .split-panel p {
                font-size: 14px;
                color: rgba(255,255,255,0.85);
                margin-bottom: 28px;
                line-height: 1.6;
            }

            .split-panel a.ghost-btn {
                border: 1.5px solid #fff;
                color: #fff;
                background: transparent;
                padding: 10px 36px;
                border-radius: 8px;
                font-weight: 700;
                font-size: 13px;
                letter-spacing: 0.5px;
                text-decoration: none;
                transition: background 0.18s ease, color 0.18s ease;
            }

            .split-panel a.ghost-btn:hover {
                background: #fff;
                color: #6B5CE7;
            }

            .split-form {
                flex: 1;
                display: flex;
                flex-direction: column;
                justify-content: center;
                padding: 48px 56px;
                z-index: 1;
            }

            .split-form h1 {
                font-size: 24px;
                font-weight: 800;
                color: #1f2937;
                margin-bottom: 24px;
                text-align: center;
            }

            @media (max-width: 768px) {
                .split-card {
                    flex-direction: column;
                }
                .split-panel.panel-right,
                .split-panel.panel-left {
                    margin: 0;
                    border-radius: 24px 24px 0 0;
                }
                .split-form {
                    padding: 36px 28px;
                }
            }
        </style>
    </head>
    <body>
        <div class="split-wrap">
            <div class="split-card">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>