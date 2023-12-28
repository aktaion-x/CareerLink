<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller {
  public function create() {
    return view('users.register');
  }
  public function login() {
    return view('users.login');
  }
  public function store(Request $request) {
    $formFields = $request->validate([
      'name' => ['required', 'min:3', 'max:25'],
      'email' => ['required', 'email', Rule::unique('users', 'email')],
      'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username')],
      'password' => ['required', 'confirmed', 'min:6',],
    ]);
    $formFields['password'] = bcrypt($formFields['password']);

    if ($request->hasFile('img')) {
      $formFields['img'] = $request->file('img')->store('users_img', 'public');
    }

    // create user
    $user = User::create($formFields);

    auth()->login($user);

    return redirect('/jobs')
      ->with('message', 'Account created and logged in!');
  }

  public function authenticate(Request $request) {
    $formFields = $request->validate([
      'username' => 'required',
      'password' => 'required'
    ]);
    if (auth()->attempt($formFields)) {
      $request->session()->regenerate();

      return redirect('/jobs')
        ->with('message', 'You are logged in');
    }

    return back()
      ->withErrors(['username' => 'Invalid credentials'])
      ->onlyInput('username');
  }

  public function logout(Request $request) {
    // dd(auth());
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/')
      ->with('message', 'You have been logged out');
  }
}