@props(['eyebrow', 'title', 'text', 'image' => null])
<section class="page-hero {{ $image ? 'has-image' : '' }}" @if($image) style="--hero-image: url('{{ $image }}')" @endif>
    <div class="shell relative z-10 py-24 text-center text-white lg:py-32">
        <p class="eyebrow text-lime">{{ $eyebrow }}</p><h1 class="mt-4 text-4xl font-black tracking-tight sm:text-6xl">{{ $title }}</h1><p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-blue-100">{{ $text }}</p>
        <nav class="mt-6 text-sm text-blue-200" aria-label="Breadcrumb"><a href="{{ route('home') }}">Home</a><span class="mx-2">/</span><span class="text-white">{{ $title }}</span></nav>
    </div>
</section>
