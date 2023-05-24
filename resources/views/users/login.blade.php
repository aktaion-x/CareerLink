<x-layout>
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  <form action="/users/login" method="post">
    @csrf
    <div class="heading" style="margin-bottom: 30px">
      <h1>Login</h1>
    </div>
    <div class="input-holder">
      <label for="username">Username:</label>
      <input type="text" name="username" value="{{ old('username') }}">
      @error('username')
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
    <div class="btn">
      <button type="submit">Login</button>
    </div>
    <div class="suggestions">
      <a href="/users/register">Don't have an account? Register</a>
    </div>
  </form>
</x-layout>
