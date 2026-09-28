@extends('layouts.app')
@section('title', 'About Our School | Smart Start')
@section('content')
<x-page-hero eyebrow="Our school" title="Small beginnings. Bright futures." text="A welcoming international community built around the belief that every child deserves to be known, challenged, and celebrated." image="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1800&q=85" />
<section class="section">
    <div class="shell grid items-center gap-14 lg:grid-cols-2">
        <div>
            <p class="eyebrow text-pink">Our story</p>
            <h2 class="section-title mt-4">Created for curious young minds</h2>
            <p class="lead mt-6">Smart Start began with a simple vision: bring the warmth of a close-knit school together with the ambition of an excellent international education. Today, families from across Phnom Penh learn and grow together on one joyful campus.</p>
            <p class="mt-5 leading-8 text-muted">Our approach is intentionally personal. Teachers notice the quiet breakthroughs, encourage big questions, and partner closely with parents through every stage.</p>
        </div>
        <div class="image-frame h-[480px]"><img loading="lazy" src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=1100&q=85" alt="Bright and welcoming school classroom"></div>
    </div>
</section>
<section class="section bg-soft">
    <div class="shell">
        <div class="text-center">
            <p class="eyebrow text-pink">What guides us</p>
            <h2 class="section-title mt-4">Values children can live</h2>
        </div>
        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-4">@foreach([['Curiosity','Ask boldly and keep discovering.'],['Kindness','Care for people and our world.'],['Courage','Try, reflect, and try again.'],['Belonging','Every voice makes us stronger.']] as [$title,$text])<article class="card p-7">
                <div class="mb-5 h-2 w-14 rounded-full bg-lime"></div>
                <h3 class="text-xl font-black text-navy">{{ $title }}</h3>
                <p class="mt-3 text-muted">{{ $text }}</p>
            </article>@endforeach</div>
    </div>
</section>
<section class="section">
    <div class="shell">
        <p class="eyebrow text-pink">Our journey</p>
        <h2 class="section-title mt-4">Growing thoughtfully</h2>
        <div class="mt-12 grid gap-8 border-l-2 border-blue-100 pl-8 md:grid-cols-3 md:border-l-0 md:border-t-2 md:pl-0 md:pt-8">@foreach([['2014','Our first Early Years class opened with 28 learners.'],['2019','Primary School and multilingual pathways expanded.'],['Today','A diverse community of learners from 18 nationalities.']] as [$year,$text])<div class="relative"><span class="absolute -left-[2.55rem] top-1 h-4 w-4 rounded-full bg-pink ring-4 ring-white md:-top-10 md:left-0"></span><strong class="text-3xl font-black text-royal">{{ $year }}</strong>
                <p class="mt-3 leading-7 text-muted">{{ $text }}</p>
            </div>@endforeach</div>
    </div>
</section>
<x-cta title="Your family's story can start here" />
@endsection