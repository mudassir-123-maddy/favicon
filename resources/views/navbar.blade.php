@extends('main')

@push('style')
<style>
    * {
        font-family: "Plus Jakarta Sans", sans-serif;
    }

    .mainnav {
        background-color: var(--bs-nav);
    }

    .nav-wrapper {
        border-bottom: var(--bs-card-border);
    }

    .nav-inner {
        width: 1000px;
        margin: 0 auto;
        display: flex;
        align-items: center;
    }

    .logo-box {
        width: 32px;
        height: 32px;
        min-width: 32px;
        background: linear-gradient(to bottom right, #7567f8, #6B5CE7);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .brand-name {
        color: #7367f0;
        font-weight: 900;
        font-size: 16px;
        text-decoration: none;
    }

    .navbar-nav .nav-link {
        color: var(--bs-navcolor);
        font-weight: 500;
        font-size: 0.875rem;
        padding: 4px 8px;
    }

    .navbar-nav .nav-link:hover {
        color: #7367f0;
    }

    .dark-btn {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        border: var(--bs-card-border);
        background: var(--bs-svg);
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
    }

    .btn-try {
        background: linear-gradient(to bottom right, #7567f8, #6B5CE7);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 8px 16px;
        font-size: 0.85rem;
        font-weight: 600;
        text-decoration: none;
        white-space: nowrap;
    }

    .btn-try:hover {
        opacity: 0.9;
        color: #fff;
    }

    .lang-dropdown {
        position: relative;
        display: inline-block;
        font-family: inherit;
        margin-right: 80px;
    }

    .lang-btn {
        display: flex;
        align-items: center;
        /* gap: 10px; */
        padding: 10px 18px;
        cursor: pointer;
        border: var(--border);
        background-color: var(--bg);
        border-radius: 10px;
        font-size: 14px;
        font-weight: 500;
        justify-content: space-between;
        transition: background 0.18s, border-color 0.18s, box-shadow 0.18s;
    }

    .nav-auth {
        display: flex;
        align-items: center;
        border-left: 1px solid var(--bs-card-border);
        position: absolute;
        right: 40px;
    }

    .btn-reg {
        color: #7367f0;
        font-weight: 600;
        font-size: 0.85rem;
        text-decoration: none;
        padding: 8px 18px;
        border: 1.5px solid #7367f0;
        border-radius: 8px;
        transition: background 0.18s ease, color 0.18s ease, transform 0.18s ease;
    }

    .btn-reg:hover {
        background: #7367f0;
        color: #fff;
        transform: translateY(-1px);
    }

    @media (max-width: 991px) {
        .nav-inner {
            width: 100%;
            padding: 0 16px;
            flex-wrap: wrap;
            justify-content: space-between;
        }
    }
</style>
@endpush
@section('navbar')
<div class="mainnav sticky-top">
    <nav class="navbar navbar-expand-lg py-1 nav-wrapper">
        <div class="nav-inner p-2 px-3 pe-0">

            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <div class="logo-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers w-4 h-4 text-white" aria-hidden="true">
                        <path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z"></path>
                        <path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12"></path>
                        <path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17"></path>
                    </svg>
                </div>
                <span class="brand-name">FaviGen</span>
            </a>

            <button class="navbar-toggler border-0" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto gap-4">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">{{ __('navbar.features') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#simple-process">{{ __('navbar.how_it_works') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">{{ __('navbar.faq') }}</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-1">
                    <a href="#" class="dark-btn" id="themeToggle">
                        <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 24 24" fill="none" stroke="#7367f0" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.985 12.486a9 9 0 1 1-9.473-9.472c.405-.022.617.46.402.803a6 6 0 0 0 8.268 8.268c.344-.215.825-.004.803.401"></path>
                        </svg>
                        <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 24 24" fill="none" stroke="#7367f0" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" style="display:none">
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"></path>
                        </svg>
                    </a>

                    <a href="{{route('login')}}" class="btn-try">{{ __('navbar.generate_free') }}</a>
                </div>
            </div>
            <div class="nav-auth">
                <!-- @guest

                @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-reg" style="cursor: pointer;">{{ __('navbar.logout') }}</button>
                </form>
                <span style="color: #3d4148ff; font-weight: 400; font-size: 1rem;">
                    {{ Auth::user()->name }}
                </span>
                @endguest -->
                <div class="lang-dropdown">
                    <div class="lang-btn" onclick="var m = document.getElementById('langMenu'); m.style.display = (m.style.display === 'none' || m.style.display === '') ? 'block' : 'none';">
                        {{ strtoupper(app()->getLocale()) }}
                        <svg width="12" height="12" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="lang-menu" id="langMenu" style="display:none; position:absolute; top:100%; left:0; background:#fff; border:1px solid #eee; border-radius:8px; box-shadow:0 6px 20px rgba(0,0,0,0.08); margin-top:6px; overflow:hidden; z-index:9999; min-width:140px;">
                        <a href="{{ url('/') }}" style="display:block; padding:10px 18px; font-size:14px; color:#333; text-decoration:none;">English</a>
                        <a href="{{ url('/ru') }}" style="display:block; padding:10px 18px; font-size:14px; color:#333; text-decoration:none;">Русский</a>
                        <a href="{{ url('/es') }}" style="display:block; padding:10px 18px; font-size:14px; color:#333; text-decoration:none;">Español</a>
                    </div>
                </div>
            </div>
    </nav>
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
    const themeToggle = document.getElementById('themeToggle');
    const moonIcon = document.getElementById('moonIcon');
    const sunIcon = document.getElementById('sunIcon');
    const html = document.documentElement;

    // Load saved theme on page load
    const savedTheme = localStorage.getItem('theme') || 'light';
    html.setAttribute('data-bs-theme', savedTheme);
    updateIcons(savedTheme);

    // Toggle on click
    themeToggle.addEventListener('click', function(e) {
        e.preventDefault(); // prevents # jump
        const current = html.getAttribute('data-bs-theme');
        const next = current === 'dark' ? 'light' : 'dark';

        html.setAttribute('data-bs-theme', next);
        localStorage.setItem('theme', next);
        updateIcons(next);
    });

    function updateIcons(theme) {
        if (theme === 'dark') {
            moonIcon.style.display = 'none';
            sunIcon.style.display = 'inline';
        } else {
            moonIcon.style.display = 'inline';
            sunIcon.style.display = 'none';
        }
    }
</script>
@endpush
@endsection