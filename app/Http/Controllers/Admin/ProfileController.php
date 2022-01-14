<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index()
    {
        $users = User::get();
        return view('admin.profile', compact('users'));
    }
}
