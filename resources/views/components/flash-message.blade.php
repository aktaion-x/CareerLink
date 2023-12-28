@if (session()->has('message'))
  <div class="fixed-message">
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('.fixed-message').classList.add('active')
        setTimeout(() => {
          document.querySelector('.fixed-message').classList.remove('active')
        }, 3000)
        setTimeout(() => {
          document.querySelector('.fixed-message').classList.add('inactive')
        }, 4000)
      })
    </script>
    <p>{{ session('message') }}</p>
  </div>
@endif
