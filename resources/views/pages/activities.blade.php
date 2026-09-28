@extends('layouts.app')
@section('title', 'Learning Activities | Smart Start')
@section('content')
<x-page-hero eyebrow="Inside the learning" title="Explore. Create. Move. Belong." text="See how purposeful experiences turn every school day into an opportunity to grow." image="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1800&q=85" />
@php $programs = [
['early-years','Early Years','Learning starts with play','Purposeful play invites children to talk, test ideas, build independence, and make sense of their world. Calm routines and caring relationships give every child the confidence to explore.',['Sensory studio','Story circles','Outdoor discovery'],'photo-1560785496-3c9d27877182'],
['primary-school','Primary School','Foundations for fearless thinkers','Students build secure knowledge in literacy, mathematics, science, and humanities, then use it through discussion, investigation, and meaningful projects.',['Guided reading','Maths workshops','Inquiry projects'],'photo-1509062522246-3755977927d7'],
['language-pathways','Language Pathways','Many languages, one community','English anchors learning while Khmer and Chinese pathways deepen communication, identity, and cultural understanding through real conversation.',['English immersion','Khmer literacy','Mandarin conversation'],'photo-1503676260728-1c00da094a0b'],
['creative-arts','Creative Arts','Ideas made visible','Music, visual art, and drama help children interpret the world, express emotion, and develop the courage to share original ideas.',['Studio art','Music ensemble','Stage performance'],'photo-1513364776144-60967b0f800f'],
['sport-wellbeing','Sport & Wellbeing','Strong bodies, steady minds','Daily movement and a thoughtful wellbeing curriculum nurture coordination, resilience, teamwork, and healthy lifelong habits.',['Swimming','Team sports','Mindful moments'],'photo-1546519638-68e109498ffc'],
['future-skills','Future Skills','Designing tomorrow','STEAM challenges transform children from technology consumers into thoughtful makers, collaborators, and problem solvers.',['Coding','Robotics','Design challenges'],'photo-1531482615713-2afd69097998']]; @endphp
<nav class="sticky-tabs" aria-label="Program categories">
    <div class="shell">@foreach($programs as [$anchor,$title])<a href="#{{ $anchor }}">{{ $title }}</a>@endforeach</div>
</nav>
@foreach($programs as $index => [$anchor,$title,$heading,$text,$tags,$photo])
<section id="{{ $anchor }}" class="section {{ $index % 2 ? 'bg-soft' : '' }}">
    <div class="shell grid items-center gap-12 lg:grid-cols-2">
        <div class="image-frame h-[430px] {{ $index % 2 ? 'lg:order-2' : '' }}"><img loading="lazy" src="https://images.unsplash.com/{{ $photo }}?auto=format&fit=crop&w=1100&q=85" alt="Students taking part in {{ strtolower($title) }} activities"></div>
        <div>
            <p class="eyebrow text-pink">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }} · {{ $title }}</p>
            <h2 class="section-title mt-4">{{ $heading }}</h2>
            <p class="lead mt-6">{{ $text }}</p>
            <div class="mt-7 flex flex-wrap gap-2">@foreach($tags as $tag)<span class="tag">{{ $tag }}</span>@endforeach</div>
        </div>
    </div>
</section>
@endforeach
<x-cta title="See a Smart Start day for yourself" />
@endsection