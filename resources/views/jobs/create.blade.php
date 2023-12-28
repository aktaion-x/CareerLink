<x-layout>
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  <form action="/jobs" method="post" enctype="multipart/form-data">
    @csrf
    <div class="heading">
      <h1>Post a Job</h1>
    </div>
    <div class="input-holder">
      <label for="title">Title:</label>
      <input type="text" name="title" id="title" value="{{ old('title') }}">
      @error('title')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="company">Company:</label>
      <input type="text" name="company" id="company" value="{{ old('company') }}">
      @error('company')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="{{ old('email') }}">
      @error('email')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="location">Location:</label>
      <input type="text" name="location" id="location" value="{{ old('location') }}">
      @error('location')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="tags">Fields (comma separated):</label>
      <input type="text" name="tags" id="tags" value="{{ old('tags') }}">
      @error('tags')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="website">Website:</label>
      <input type="text" name="website" id="website" value="{{ old('website') }}">
      @error('website')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="description">Description:</label>
      <textarea name="description" id="description">
            {{ old('description') }}
        </textarea>
      @error('description')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="logo">Company Logo:</label>
      <input type="file" accept="image/*" id="logo" name="logo" value="{{ old('logo') }}">
      @error('logo')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="btn">
      <button type="submit">Post</button>
    </div>
  </form>
</x-layout>
