<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/careerlink_logo.ico">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Career Link</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
  <div class="nav">
    <div class="nav-container">
      <div class="logo">
        <a href="/">
          <img src="{{ asset('img/careerlink_logo.png') }}" alt="Logo">
        </a>
      </div>
      <ul class="links">
        @auth
          <li>
            <a href="/jobs/create">Post a Job</a>
          </li>
        @endauth
        <li>
          <a href="/about">About</a>
        </li>
        <li>
          <a href="/jobs">Jobs</a>
        </li>
        @auth
          <li>
            <a href="/jobs/manage">Manage Posts</a>
          </li>
        @endauth
        @auth
          <li class="btn logout">
            <form class="inline-form" action="/users/logout" method="post">
              @csrf
              <button>Logout</button>
            </form>
          </li>
        @else
          <li>
            <a href="/users/login">Login</a>
          </li>
          <li>
            <a href="/users/register">Get Started</a>
          </li>
        @endauth
        <div id="dropdown-bars" class="dropdown-bars">
          <i class="fa-solid fa-bars"></i>
        </div>
      </ul>

    </div>
  </div>
  <div id="links-box" class="links-box">
    @auth
      <li>
        <a href="/jobs/create">Post a Job</a>
      </li>
    @endauth
    <li>
      <a href="/about">About</a>
    </li>
    <li>
      <a href="/jobs">Jobs</a>
    </li>
    @auth
      <li>
        <a href="/jobs/manage">Manage Posts</a>
      </li>
    @endauth
    @auth
    @else
      <li>
        <a href="/users/login">Login</a>
      </li>
      <li>
        <a href="/users/register">Get Started</a>
      </li>
    @endauth
  </div>

  <main>
    {{ $slot }}
  </main>
  <footer class="footer">
    <div class="footer-container">
      <p>Copyright &#169; Career Link</p>
    </div>
  </footer>
  <x-flash-message />
  <script src="/js/main.js"></script>
</body>

</html>
