<x-layout>
  {{-- <link rel="stylesheet" href="/css/jobs.css"> --}}
  {{-- {{ $jobs }} --}}
  @php
    $activeJobs = [];
    $archivedJobs = [];
    foreach ($jobs as $job) {
        if ($job['active'] == 1) {
            $activeJobs[] = $job;
        } else {
            $archivedJobs[] = $job;
        }
    }
    // dd($activeJobs);
  @endphp
  <link rel="stylesheet" href="/css/manage.css">
  <div class="jobs-page">
    <div class="sidebar">
      <div class="sidebar-container">
        <div class="user">
          <div class="img">
            <img
              src="{{ auth()->user()->img ? asset('storage/' . auth()->user()->img) : asset('img/default-avatar.png') }}"
              alt="avatar">
          </div>
          <span class="name">{{ auth()->user()->name }}</span>
        </div>
        <div class="posts-statistics">
          <div class="all-posts">
            Posts <span>{{ count($jobs) }}</span>
          </div>
          <div class="archived">
            Archived <span>{{ count($archivedJobs) }}</span>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="header">
        <h2>Posts</h2>
        <span>{{ count($jobs) == 0 ? 'No posts to show!' : 'Recent...' }}</span>
      </div>
      <div class="jobs">
        @foreach ($activeJobs as $job)
          <div class="job">
            <a href="/jobs/{{ $job->id }}" class="job-holder">
              <div class="img">
                <img src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('img/default-company.png') }}"
                  alt="company image">
              </div>
              <div class="title">
                <h4>{{ $job->title }}</h4>
              </div>
              <div class="time">{{ $job->created_at }}</div>
            </a>
            <ul class="tags">
              <li class="btn view">
                <form class="inline-form" action="/jobs/{{ $job->id }}" method="get">
                  @csrf
                  <button>View</button>
                </form>
              </li>
              <li class="btn edit">
                <form class="inline-form" action="/jobs/{{ $job->id }}/edit" method="get">
                  @csrf
                  <button>Edit</button>
                </form>
              </li>
              <li class="btn archive">
                <form class="inline-form" action="/jobs/archive/{{ $job->id }}" method="post">
                  @csrf
                  <button>Archive</button>
                </form>
              </li>
              <li class="btn delete">
                <form class="inline-form" action="/jobs/{{ $job->id }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button>Delete</button>
                </form>
              </li>
            </ul>
          </div>
        @endforeach
      </div>
      <div class="archived jobs">
        @foreach ($archivedJobs as $job)
          <div class="job">
            <a href="/jobs/{{ $job->id }}" class="job-holder">
              <div class="img">
                <img src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('img/default-company.png') }}"
                  alt="company image">
              </div>
              <div class="title">
                <h4>{{ $job->title }}</h4>
              </div>
              <div class="time">{{ $job->created_at }}</div>
            </a>
            <ul class="tags">
              <li class="btn view">
                <form class="inline-form" action="/jobs/{{ $job->id }}" method="get">
                  @csrf
                  <button>View</button>
                </form>
              </li>
              <li class="btn edit">
                <form class="inline-form" action="/jobs/{{ $job->id }}/edit" method="get">
                  @csrf
                  <button>Edit</button>
                </form>
              </li>
              <li class="btn archive">
                <form class="inline-form" action="/jobs/archive/{{ $job->id }}" method="post">
                  @csrf
                  <button>Archive</button>
                </form>
              </li>
              <li class="btn delete">
                <form class="inline-form" action="/jobs/{{ $job->id }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button>Delete</button>
                </form>
              </li>
            </ul>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</x-layout>
