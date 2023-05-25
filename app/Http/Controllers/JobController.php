<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller {
  public function index() {
    return view('jobs.index');
  }
  public function create() {
    return view('jobs.create');
  }
  public function show() {
    return view('jobs.show');
  }
  public function manage() {
    return view('jobs.manage');
  }
  public function edit() {
    return view('jobs.edit');
  }
}