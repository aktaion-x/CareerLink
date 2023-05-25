<x-layout>
  {{-- <link rel="stylesheet" href="/css/jobs.css"> --}}
  <link rel="stylesheet" href="/css/manage.css">
  <div class="jobs-page">
    <div class="sidebar">
      <div class="sidebar-container">
        <div class="user">
          <div class="img">
            <img src="{{ asset('img/default-avatar.png') }}" alt="avatar">
          </div>
          <span class="name">John Duo</span>
        </div>
        <div class="posts-statistics">
          <div class="all-posts">
            Posts <span>20</span>
          </div>
          <div class="archived">
            Archived <span>5</span>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="header">
        <h2>Posts</h2>
        <span>Recent...</span>
      </div>
      <div class="jobs">
        <div class="job">
          <a href="/jobs/1" class="job-holder">
            <div class="img">
              <img src="{{ asset('img/default-company.png') }}" alt="">
            </div>
            <div class="title">
              <h4>Job Title</h4>
            </div>
            <div class="time">30+ days ago</div>
          </a>
          <ul class="tags">
            <li class="btn view">
              <form class="inline-form" action="/jobs/1" method="get">
                @csrf
                <button>View</button>
              </form>
            </li>
            <li class="btn edit">
              <form class="inline-form" action="/jobs/1/edit" method="get">
                @csrf
                <button>Edit</button>
              </form>
            </li>
            <li class="btn activate">
              <form class="inline-form" action="/jobs/archive/1" method="post">
                @csrf
                <button>Archive</button>
              </form>
            </li>
            <li class="btn delete">
              <form class="inline-form" action="/jobs/1" method="post">
                @csrf
                @method('DELETE')
                <button>Delete</button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</x-layout>
