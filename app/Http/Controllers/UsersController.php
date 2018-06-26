<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  public function show($name)
  {
    $user = User::where('name', '[A-Za-z]+')->get();
    return view('tasks.index', compact('user'));
  }
}
