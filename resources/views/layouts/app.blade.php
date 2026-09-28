<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0b2d67">
    <meta name="description" content="@yield('description', 'Smart Start International School — joyful, globally minded learning in Phnom Penh.')">
    <title>@yield('title', 'Smart Start International School')</title>
    <link rel="icon" href="{{ asset('assets/logo-square.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@400;600;700&family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body data-page="{{ Route::currentRouteName() }}" class="bg-white text-ink antialiased">
    <a href="#main-content" class="skip-link">Skip to content</a>
    <x-site-header />
    <main id="main-content">@yield('content')</main>
    <x-site-footer />
    <button id="scroll-top" class="scroll-top" type="button" aria-label="Scroll back to top" title="Back to top">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 19V5M6.5 10.5 12 5l5.5 5.5" /></svg>
    </button>
</body>
</html>
