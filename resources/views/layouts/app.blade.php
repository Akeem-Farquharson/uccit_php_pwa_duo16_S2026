<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UCC IT App')</title>

    {{-- PWA Manifest and Meta Tags --}}
    @PwaHead

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('extra-css')
</head>
<body>

    <!-- TOP BANNER -->
    <header class="top-banner">
        <button class="menu-toggle" onclick="toggleSidebar()">
            <i class="bi bi-list"></i>
        </button>

        <div class="banner-logo-card">
            <img src="{{ asset('images/logo.png') }}" alt="UCC IT Department" class="banner-logo">
        </div>
    </header>

    <!-- SIDEBAR -->
    <aside id="sidebar" class="sidebar collapsed">
        <div class="sidebar-nav">

            <a href="{{ url('/') }}" class="nav-item">
                <i class="bi bi-house-door-fill nav-icon"></i>
                <span class="nav-label">Home</span>
            </a>

            <a href="{{ url('/directory') }}" class="nav-item">
                <i class="bi bi-people-fill nav-icon"></i>
                <span class="nav-label">Faculty</span>
            </a>

            <a href="{{ url('/courses') }}" class="nav-item">
                <i class="bi bi-book-fill nav-icon"></i>
                <span class="nav-label">Courses</span>
            </a>

            <a href="{{ url('/admissions') }}" class="nav-item">
                <i class="bi bi-mortarboard-fill nav-icon"></i>
                <span class="nav-label">Admissions</span>
            </a>

            <a href="{{ url('/socials') }}" class="nav-item">
                <i class="bi bi-globe-americas nav-icon"></i>
                <span class="nav-label">Socials</span>
            </a>

        </div>

        <!-- SIDEBAR FOOTER -->
        <div class="sidebar-footer">
            <a href="mailto:ithod@ucc.edu.jm?subject=UCC%20IT%20Department%20Inquiry" class="email-fab">
                <i class="bi bi-envelope-fill email-fab-icon"></i>
                <span class="email-fab-label">Email HOD</span>
            </a>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main id="main-content" class="main-content collapsed">
        @yield('content')
    </main>

    <!-- INSTALL BUTTON -->
    <button id="customInstallBtn" class="pwa-install-btn" type="button">
        <i class="bi bi-download"></i>
        <span>Install App</span>
    </button>

    <!-- SCRIPTS -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const main = document.getElementById('main-content');

            sidebar.classList.toggle('collapsed');
            main.classList.toggle('collapsed');
        }

        let deferredPrompt;
        const installBtn = document.getElementById('customInstallBtn');

        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            installBtn.style.display = 'inline-flex';
        });

        installBtn.addEventListener('click', async () => {
            if (!deferredPrompt) return;

            deferredPrompt.prompt();
            await deferredPrompt.userChoice;
            deferredPrompt = null;
            installBtn.style.display = 'none';
        });

        window.addEventListener('appinstalled', () => {
            installBtn.style.display = 'none';
            deferredPrompt = null;
        });
    </script>

    {{-- PWA Service Worker --}}
    @RegisterServiceWorkerScript

</body>
</html>