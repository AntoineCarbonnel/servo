<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class Homepage extends Controller
{
    /**
     * @description
     * Prompt landing page
     * @return Application|Factory|View
     */
    public function show()
    {
        return view('landingPage', ['title' => 'Servo']);
    }
}
