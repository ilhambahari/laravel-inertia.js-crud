<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
    {
    	$title = 'Home';
        return Inertia::render('Home', [
        	'title' => $title
        ]);
    }

    public function about()
    {
    	return Inertia::render('About');
    }
}
