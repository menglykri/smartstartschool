@extends('layouts.app')
@section('title', 'Events | Smart Start')
@section('content')
<x-page-hero eyebrow="School calendar" title="Moments that bring us together" text="Join welcoming mornings, cultural celebrations, sporting festivals, and practical parent workshops." />
@php $events=[['family-welcome','14','Oct','Family Welcome Morning','Community','8:30–10:30 AM','Early Years Courtyard'],['culture-day','25','Oct','International Culture Day','Celebration','9:00 AM–2:00 PM','Whole Campus'],['sports-festival','08','Nov','Primary Sports Festival','Sport','8:00 AM–12:00 PM','School Field'],['parent-workshop','21','Nov','Parent Learning Workshop','Parents','5:30–7:00 PM','Learning Hub']]; @endphp
<section class="section bg-soft"><div class="shell grid gap-6 md:grid-cols-2">@foreach($events as [$anchor,$day,$month,$title,$category,$time,$place])<a href="{{ route('event-details') }}#{{ $anchor }}" class="card group flex gap-5 p-6 reveal"><div class="flex h-24 w-20 shrink-0 flex-col items-center justify-center rounded-2xl bg-navy text-white transition group-hover:-translate-y-1"><strong class="text-3xl">{{ $day }}</strong><span class="text-xs font-black uppercase tracking-wider text-lime">{{ $month }}</span></div><div><span class="tag">{{ $category }}</span><h2 class="mt-3 text-xl font-black text-navy">{{ $title }}</h2><p class="mt-2 text-sm text-muted">{{ $time }} · {{ $place }}</p><span class="mt-4 inline-block font-black text-pink">View activities →</span></div></a>@endforeach</div></section>
<x-cta title="Join the Smart Start community" />
@endsection
