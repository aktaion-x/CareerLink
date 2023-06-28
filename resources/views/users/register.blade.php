<x-layout>
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  <form action="/users/register" method="post" enctype="multipart/form-data">
    @csrf
    <div class="heading">
      <h1>Register</h1>
    </div>
    <div class="input-holder">
      <label for="email">Email:</label>
      <input type="email" name="email" value="{{ old('email') }}">
      @error('email')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="username">Username:</label>
      <input type="text" name="username" value="{{ old('username') }}">
      @error('username')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="name">Name:</label>
      <input type="text" name="name" value="{{ old('name') }}">
      @error('name')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="password">Password:</label>
      <input type="password" name="password" value="{{ old('password') }}">
      @error('password')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="password_confirmation">Password Confirmation:</label>
      <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
      @error('password_confirmation')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-holder">
      <label for="thumbnail">Thumbnail:</label>
      <input type="file" accept="image/*" name="img" value="{{ old('thumbnail') }}">
      @error('thumbnail')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>
    <div class="btn">
      <button type="submit">Register</button>
    </div>
    <div class="suggestions">
      <a href="/users/login">Already have an account? Login</a>
    </div>
  </form>
</x-layout>
