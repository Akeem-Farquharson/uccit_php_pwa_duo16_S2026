<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UCC IT Web App')</title>

    {{-- PWA Manifest and Meta Tags --}}
    @PwaHead

    <style>
        body {
            /* Default background for most pages */
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url("{{ asset('images/UCC.jpg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Email FAB Styles (Requirement 2.e) */
        .fab {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #FFD700; /* UCC Gold */
            color: #003366; /* UCC Blue */
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.5);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: transform 0.2s ease;
        }

        .fab:hover {
            transform: scale(1.1);
        }

        /* Small fix for mobile view to ensure content doesn't get hidden behind FAB */
        .container, .main-wrapper {
            padding-bottom: 100px;
        }
    </style>

    {{-- Hook for page-specific CSS --}}
    @yield('extra-css')
</head>
<body>

    {{-- Main Activity Content --}}
    @yield('content')

    {{-- Floating Action Button (Tapping sends email to HOD) --}}
    <a href="mailto:oosbourne@ucc.edu.jm" class="fab" title="Email HOD">
        📧
    </a>

    {{-- PWA Service Worker Registration --}}
    @RegisterServiceWorkerScript
</body>
</html>
