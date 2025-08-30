<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class MultiController extends Controller
{
    public function admin(): Response
    {
        return Inertia::render('Admin/Users');
    }

    public function superAdmin(): Response
    {
        return Inertia::render('SuperAdmin/System');
    }
}
