<?php

it('renders every public school page', function (string $routeName, string $text) {
    $this->get(route($routeName))->assertOk()->assertSee($text);
})->with([
    ['home', 'Growing bright minds, building kind hearts.'],
    ['about', 'About Smart Start'],
    ['programs', 'Purposeful learning pathways for each stage of childhood.'],
    ['activities', 'Learning comes alive'],
    ['teachers', 'Our Teachers'],
    ['news', 'School News'],
    ['stories', 'Stories that shape'],
    ['events', 'Join the experiences that bring our school community together.'],
    ['event-details', 'Moments that bring'],
    ['gallery', 'A glimpse of joyful learning, friendship and discovery at Smart Start.'],
    ['rankings', 'Student Rankings'],
    ['contact', 'A warm welcome starts here.'],
]);

it('uses real destinations for navigation and calls to action', function () {
    $this->get(route('programs'))
        ->assertSee('activities/#early-years', false)
        ->assertDontSee('href="#"', false);
});

it('redirects the legacy application page to contact', function () {
    $this->get(route('apply'))->assertRedirect('/contact');
});
