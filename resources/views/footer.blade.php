@extends('Main')
@push('style')
    <style>
.footer-section {
    background: var(--bg);
    border-top: 1px solid #e2e8f0;
    padding: 40px 0 30px;
}

.footer-logo-name {
    color: #7367f0;
    font-weight: 700;
    font-size: 0.95rem;
    text-decoration: none;
}

.footer-copy {
    color: #94a3b8;
    font-size: 0.8rem;
    margin-bottom: 0;
}

.footer-powered {
    color:var(--bs-navcolor);
    font-size: 0.8rem;
    margin-bottom: 0;
}
    </style>
@endpush

@section('footer')
    <footer class="footer-section">
    <div class="container">
        <div class="d-flex align-items-center justify-content-evenly flex-wrap gap-5 me-5 footer-top">

            <div class="d-flex align-items-center gap-2">
                <div class="logo-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers w-4 h-4 text-white" aria-hidden="true"><path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z"></path><path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12"></path><path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17"></path></svg>
                </div>
                <span class="footer-logo-name">VisionText © 2026</span>
            </div> 
            <p class="footer-powered">Free favicon generator · No sign-up required · Built with React & Canvas API</p>
        </div>
@endsection
