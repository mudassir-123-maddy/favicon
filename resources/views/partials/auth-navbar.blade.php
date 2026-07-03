<style>
    .auth-nav {
        background-color: #ffffff;
        border-bottom: 1px solid rgba(115, 103, 240, 0.1);
    }

    .auth-nav-inner {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
        padding: 16px 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .auth-nav-brand {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
    }

    .auth-nav-logo {
        width: 32px;
        height: 32px;
        min-width: 32px;
        background: linear-gradient(to bottom right, #7567f8, #6B5CE7);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .auth-nav-name {
        color: #7367f0;
        font-weight: 900;
        font-size: 16px;
        font-family: "Plus Jakarta Sans", sans-serif;
    }

    .auth-nav-back {
        color: #6b7280;
        font-weight: 500;
        font-size: 0.875rem;
        text-decoration: none;
        font-family: "Plus Jakarta Sans", sans-serif;
        transition: color 0.18s ease;
    }

    .auth-nav-back:hover {
        color: #7367f0;
    }
</style>

<nav class="auth-nav">
    <div class="auth-nav-inner">
        <a href="/" class="auth-nav-brand">
            <div class="auth-nav-logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z"></path>
                    <path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12"></path>
                    <path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17"></path>
                </svg>
            </div>
            <span class="auth-nav-name">FaviGen</span>
        </a>

        <a href="{{ url('/') }}"  class="auth-nav-back">&larr; Back to Home</a>
    </div>
</nav>