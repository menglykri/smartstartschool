<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request): RedirectResponse
    {
        $request->validated();

        return to_route('contact')->with('status', 'Thank you! Our admissions team will contact you within one school day.');
    }
}
