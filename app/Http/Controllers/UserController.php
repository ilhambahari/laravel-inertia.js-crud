<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
    	$title = 'User';
    	$users = User::orderBy('id', 'DESC')->get();
        return Inertia::render('User/Index', [
        	'title' => $title,
        	'users' => $users,
        ]);
    }

    public function show(User $user)
    {
    	// $user = User::find($id);
    	$title = 'Profile';
    	return Inertia::render('User/Detail', [
    		'title' => $title,
    		'user' => $user
    	]);
    }

    public function create()
    {
    	$title = 'Tambah User';
    	return Inertia::render('User/Create', [
    		'title' => $title
    	]);
    }

    public function store(Request $request)
    {
    	User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
    	]);

    	return Redirect::route('user.index');
    }
}
