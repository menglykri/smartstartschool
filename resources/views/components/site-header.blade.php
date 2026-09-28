@php
    $links = ['home' => 'Home', 'about' => 'About School', 'programs' => 'Programs', 'teachers' => 'Teachers', 'news' => 'News', 'events' => 'Events', 'gallery' => 'Gallery', 'rankings' => 'Rankings'];
@endphp
<header class="site-header sticky top-0 z-50 bg-white/95 shadow-sm backdrop-blur">
    <div class="bg-navy text-white">
        <div class="shell flex min-h-9 flex-wrap items-center justify-center gap-x-6 gap-y-1 py-2 text-center text-xs sm:justify-between">
            <span>📍 Phum Barach, Sangkat Svay Chrum, Krong Arey Ksat, Kandal Province</span>
            <span class="flex flex-wrap justify-center gap-4"><a href="tel:+85570366345">+855 70/085 366 345</a><a href="mailto:info@smartstart.edu.kh">info@smartstart.edu.kh</a></span>
        </div>
    </div>
    <div class="shell flex min-h-20 items-center justify-between gap-4 py-3">
        <a href="{{ route('home') }}" class="group flex shrink-0 items-center gap-3" aria-label="Smart Start home">
            <img class="h-14 w-14 object-contain transition duration-500 group-hover:-rotate-3 group-hover:scale-105" src="{{ asset('assets/logo-square.png') }}" alt="Smart Start school shield">
            <span><strong class="block text-xs font-black uppercase leading-tight text-brand sm:text-sm" data-i18n="brand">Smart Start<br>International School</strong><small class="block text-[10px] font-bold tracking-[.08em] text-pink sm:text-xs">Kindergarten & Primary</small></span>
        </a>
        <button id="menu-toggle" class="focus-ring rounded-xl border border-slate-200 p-3 lg:hidden" aria-expanded="false" aria-controls="main-nav" aria-label="Open navigation"><span class="block h-0.5 w-6 bg-navy"></span><span class="mt-1.5 block h-0.5 w-6 bg-navy"></span><span class="mt-1.5 block h-0.5 w-6 bg-navy"></span></button>
        <nav id="main-nav" class="nav-panel" aria-label="Main navigation">
            @foreach ($links as $route => $label)
                <a href="{{ route($route) }}" @class(['nav-link', 'active' => request()->routeIs($route)])>{{ $label }}</a>
            @endforeach
            <label class="sr-only" for="language-select">Language</label>
            <select id="language-select" class="focus-ring rounded-full border border-slate-200 bg-white px-3 py-2 text-sm font-bold text-navy" aria-label="Choose language">
                <option value="en">English</option><option value="km">ខ្មែរ</option><option value="zh">简体中文</option>
            </select>
            <a href="{{ route('contact') }}" class="btn btn-pink whitespace-nowrap" data-i18n="contact">Contact Now</a>
        </nav>
    </div>
</header>
