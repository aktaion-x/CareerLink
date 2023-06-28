<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller {
  public function index() {
    return view('jobs.index', [
      'jobs' => Job::latest()
        ->filter(request(['tag', 'search']))
        ->simplePaginate(3)
    ]);
  }
  public function create() {
    return view('jobs.create');
  }
  public function show(Job $job) {
    return view('jobs.show', ['job' => $job]);
  }
  public function manage() {
    // dd(auth()->user()->jobs()->get());
    return view('jobs.manage', ['jobs' => auth()->user()->jobs()->get()])
      ->with('message', 'asdasd');
  }
  public function edit(Job $job) {
    if ($job->user_id !== auth()->id()) {
      abort(403, 'Unauthorized Action');
    }
    return view('jobs.edit', ['job' => $job]);
  }
  public function store(Request $request) {
    $formFields = $request->validate([
      'title' => ['required', 'min:3'],
      'company' => ['required', 'min:3'],
      'email' => ['required', 'email'],
      'location' => ['required'],
      'website' => ['required'],
      'tags' => ['required'],
      'description' => ['required', 'min:5']
    ]);

    if ($request->hasFile('logo')) {
      $formFields['logo'] = $request->file('logo')->store('companies_logo', 'public');
    }
    $formFields['user_id'] = auth()->id();

    Job::create($formFields);

    return redirect('/jobs')->with('message', 'Post have been created');
  }
  public function update(Request $request, Job $job) {
    if ($job->user_id !== auth()->id()) {
      abort(403, 'Unauthorized Action');
    }
    $formFields = $request->validate([
      'title' => ['required', 'min:3'],
      'company' => ['required', 'min:3'],
      'email' => ['required', 'email'],
      'location' => ['required'],
      'website' => ['required'],
      'tags' => ['required'],
      'description' => ['required', 'min:5']
    ]);
    if ($request->hasFile('logo')) {
      $formFields['logo'] = $request->file('logo')->store('companies_logo', 'public');
    }
    $job->update($formFields);

    return redirect("/jobs/$job->id")
      ->with('message', 'Post have been updated!');
  }
  public function destroy(Job $job) {
    if ($job->user_id !== auth()->id()) {
      abort(403, 'Unauthorized Action');
    }

    $job->delete();

    return redirect('/jobs')
      ->with('message', 'Post have been deleted');
  }
  public function archive(Job $job) {
    if ($job->user_id !== auth()->id()) {
      dd($job->user_id, auth()->id());
      abort(403, 'Unauthorized Action');
    }
    $job->update(['active' => false]);

    return redirect("/jobs/$job->id")
      ->with('message', 'Post have been archived!');

  }
  public function activate(Job $job) {
    if ($job->user_id !== auth()->id()) {
      abort(403, 'Unauthorized Action');
    }
    $job->update(['active' => true]);

    return redirect("/jobs/$job->id")
      ->with('message', 'Post have been activated!');
  }
}