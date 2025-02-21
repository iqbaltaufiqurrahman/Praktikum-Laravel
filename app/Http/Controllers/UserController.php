<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index ()
    {
        $users = User::all();
        return view('muser', compact('users'));
        //return $users;
        //return view('muser');
    }
}
