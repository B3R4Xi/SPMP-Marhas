<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
    {
     $this->middleware('admin');
     $this->middleware('auth'); 
    }
    
    public function index()
    {
        $users = User::get();
        return view('admin.profile',compact('users'));
    }
}
