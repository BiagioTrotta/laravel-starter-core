<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
     public function index()
    {
        $title = 'Gestione utente';

        $users = User::orderBy('created_at', 'desc')->get();

        return view('admin.users.index', compact('title','users'));
    }
}
