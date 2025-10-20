<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;

class TemplateController extends Controller
{
    /**
     * Display the landing page.
     */
    public function index(): View
    {
        return view('index');
    }
}
