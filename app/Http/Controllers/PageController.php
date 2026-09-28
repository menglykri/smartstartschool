<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class PageController extends Controller
{
    public function home(): Response
    {
        return $this->staticPage('index.html');
    }

    public function show(string $page): Response
    {
        $allowedPages = [
            'about',
            'activities',
            'contact',
            'event-details',
            'events',
            'gallery',
            'news',
            'programs',
            'rankings',
            'stories',
            'teachers',
        ];

        abort_unless(in_array($page, $allowedPages, true), 404);

        return $this->staticPage("{$page}/index.html");
    }

    private function staticPage(string $relativePath): Response
    {
        $path = resource_path("static-site/{$relativePath}");

        abort_unless(is_file($path), 404);

        return response(file_get_contents($path))
            ->header('Content-Type', 'text/html; charset=UTF-8');
    }
}
