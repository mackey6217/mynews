<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts = Profile::all()->sortByDesc('updated_at');
        $headline = $posts->shift();
        
        return view('profile.index', ['headline' => $headline, 'posts' => $posts]);
    }
}

    