<x-layout>
  {{-- name/thumbnail/tagsFilter/search/
jobs --}}
  <link rel="stylesheet" href="{{ asset('css/jobs.css') }}">
  <script src="{{ asset('js/main.js') }}">
    // const description = document.querySelector('.job .description');
  </script>
  <div class="jobs-page">
    <div class="sidebar">
      <div class="sidebar-container">
        <div class="user">
          <div class="img">
            <img src="{{ asset('img/default-avatar.png') }}" alt="avatar">
          </div>
          <span class="name">John Duo</span>
        </div>
        <div class="search">
          <form action="/jobs" method="get">
            <h3>Search</h3>
            @csrf
            <input type="text" name="search" />
            <div class="btn">
              <button><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
            </div>
          </form>
        </div>
        <div class="filter">
          <form action="/jobs" method="get">
            <h3>Tags</h3>
            @csrf
            <div class="checkbox-holder">
              <div class="checkbox">
                <input type="checkbox" name="web_devolper" id="web_devolper">
                <label for="web_devolper">Web Devolper</label>
              </div>
              <div class="checkbox">
                <input type="checkbox" name="uiux_designer" id="uiux_designer">
                <label for="uiux_designer">UI-UX Designer</label>
              </div>
              <div class="checkbox">
                <input type="checkbox" name="graphic_designer" id="graphic_designer">
                <label for="graphic_designer">Graphic Designer</label>
              </div>
              <div class="checkbox">
                <input type="checkbox" name="digital_marketing" id="digital_marketing">
                <label for="digital_marketing">Digital Marketing</label>
              </div>
              <div class="checkbox">
                <input type="checkbox" name="human_resources" id="human_resources">
                <label for="human_resources">Human Resources</label>
              </div>
            </div>
            <div class="btn">
              <button>Filter</button>
            </div>
          </form>
        </div>

      </div>
    </div>
    <div class="content">
      <div class="header">
        <h2>Jobs</h2>
        <span>Recent...</span>
      </div>
      <div class="jobs">
        @for ($i = 0; $i < 10; $i++)
          <div class="job">
            <a href="/jobs/1" class="job-holder">
              <div class="img">
                <img src="{{ asset('img/default-company.png') }}" alt="">
              </div>
              <div class="title">
                <h4>Job Title</h4>
              </div>
              <div class="company">
                <h4>Company Name</h4>
                <span>Location, Amman</span>
              </div>
              <div class="description">
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                  the
                  industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                  into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                  release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                  software like Aldus PageMaker including versions of Lorem Ipsum.
                </span>
              </div>
              <div class="time">30+ days ago</div>

            </a>
            <ul class="tags">
              <li class="btn"><a href="/jobs/{{ 'tag' }}">Tag</a></li>
              <li class="btn"><a href="/jobs/{{ 'tag' }}">Tag</a></li>
              <li class="btn"><a href="/jobs/{{ 'tag' }}">Tag</a></li>
              <li class="btn"><a href="/jobs/{{ 'tag' }}">Tag</a></li>
            </ul>
          </div>
          <div class="job">
            <a href="/jobs/1" class="job-holder">
              <div class="img">
                <img src="{{ asset('img/default-company.png') }}" alt="">
              </div>
              <div class="title">
                <h4>Job Title</h4>
              </div>
              <div class="company">
                <h4>Company Name</h4>
                <span>Location, Amman</span>
              </div>
              <div class="description">
                <span>standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                  into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                  release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                  software like Aldus PageMaker including versions of Lorem Ipsum.
                </span>
              </div>
              <div class="time">30+ days ago</div>

            </a>
            <ul class="tags">
              <li class="btn"><a href="/jobs/{{ 'tag' }}">Tag</a></li>
              <li class="btn"><a href="/jobs/{{ 'tag' }}">Tag</a></li>
              <li class="btn"><a href="/jobs/{{ 'tag' }}">Tag</a></li>
              <li class="btn"><a href="/jobs/{{ 'tag' }}">Tag</a></li>
            </ul>
          </div>
        @endfor
      </div>
    </div>
  </div>
</x-layout>
