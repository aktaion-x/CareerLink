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
        <li>
          <a href="/jobs/create">Post a Job</a>
        </li>
        <li>
          <a href="/jobs">Jobs</a>
        </li>
        <li>
          <a href="/users/login">Login</a>
        </li>
        <li>
          <a href="/users/register">Get Started</a>
        </li>
        <li>
          <a href="/jobs/manage">Manage Posts</a>
        </li>
        <li class="btn">
          <a href="/users/logout">Logout</a>
        </li>
      </ul>
    </div>
  </div>
  <main>
    {{ $slot }}
  </main>
  <footer class="footer">
    <div class="footer-container">
      <p>Copyright &#169; Career Link</p>
    </div>
  </footer>
</body>

</html>
