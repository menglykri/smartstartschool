<?php

it('accepts a valid admissions enquiry', function () {
    $this->post(route('contact.store'), [
        'name' => 'Sophea Chan',
        'email' => 'parent@example.com',
        'phone' => '+855 12 345 678',
        'child_age' => 6,
        'message' => 'We would like to arrange a school visit.',
    ])->assertRedirect(route('contact'))->assertSessionHas('status');
});

it('shows errors for an invalid admissions enquiry', function () {
    $this->post(route('contact.store'), [
        'email' => 'not-an-email',
        'child_age' => 18,
    ])->assertSessionHasErrors(['name', 'email', 'phone', 'child_age', 'message']);
});
