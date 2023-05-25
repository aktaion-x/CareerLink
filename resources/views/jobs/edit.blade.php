<x-layout>
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  <form action="/jobs" method="post">
    @csrf
    <div class="heading">
      <h1>Edit a Post</h1>
    </div>
    <div class="input-holder">
      <label for="title">Title:</label>
      <input type="text" name="title" id="title" value="{{ 'job->title' }}">
      @error('title')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="company">Company:</label>
      <input type="text" name="company" id="company" value="{{ 'job->company' }}">
      @error('company')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="{{ 'job->email' }}">
      @error('email')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="location">Location:</label>
      <input type="text" name="location" id="location" value="{{ 'job->location' }}">
      @error('location')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="tags">Fields (comma separated):</label>
      <input type="text" name="tags" id="tags" value="{{ 'job->tags' }}">
      @error('tags')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="website">Website:</label>
      <input type="text" name="website" id="website" value="{{ 'job->website' }}">
      @error('website')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="description">Description:</label>
      <textarea name="description" id="description">
              {{ 'job->description' }}
        </textarea>
      @error('description')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <div class="logo-holder">
        <label for="logo">Company Logo:</label>
        <img style="    height: 60px;
        width: fit-content;" src="{{ asset('img/default-company.png') }}"
          alt="">
      </div>
      <input type="file" accept="image/*" id="logo" name="logo">
      {{-- <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}" --}}
      @error('logo')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="btn">
      <button type="submit">Edit</button>
    </div>
  </form>
</x-layout>
