<x-layout>
  <link rel="stylesheet" href="/css/job.css">
  <div class="job">
    <div class="job-holder">
      <div class="img">
        <img src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('img/default-company.png') }}" alt="">
      </div>
      <div class="title">
        <h4>{{ $job->title }}</h4>
      </div>
      <div class="company">
        <h4>{{ $job->company }}</h4>
        <span>{{ $job->location }}</span>
      </div>
      <div class="contact">
        <div class="email">Email: <span>{{ $job->email }}</span></div>
        <div class="website">Website: <span><a target="_blank" href="http://google.com">{{ $job->website }}</a></span>
        </div>
      </div>
      <div class="description">
        <span>{{ $job->description }}</span>
      </div>
      <div class="time">{{ $job->created_at }}</div>

    </div>
    <ul class="tags">
      <ul>
        @if (auth()->user())
          @if (auth()->user()->id === $job->user_id)
            <li class="btn edit">
              <form class="inline-form" action="/jobs/edit/{{ $job->id }}" method="get">
                @csrf
                <button>Edit</button>
              </form>
            </li>
          @endif
        @endif
        @if (auth()->user() && auth()->user()->id === $job->user_id)
            @if ($job->active == 1)
            <li class="btn archive">
            <form class="inline-form" action="/jobs/archive/{{ $job->id }}" method="post">
                @csrf
                @method('PUT')
                <button>Archive</button>
            </form>
            </li>
            @elseif ($job->active == 0)
                <li class="btn active">
                <form class="inline-form" action="/jobs/activate/{{ $job->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <button>Activate</button>
                </form>
                </li>
            @endif
            <li class="btn delete">
              <form class="inline-form" action="/jobs/{{ $job->id }}" method="post">
                @csrf
                @method('DELETE')
                <button>Delete</button>
              </form>
            </li>
        @endif
      </ul>
      @php
        $tags = explode(',', $job->tags);
      @endphp
      <ul>
        @foreach ($tags as $tag)
          <li class="btn"><a href="/jobs?tag={{ $tag }}">{{ $tag }}</a></li>
        @endforeach
      </ul>
    </ul>
  </div>
</x-layout>
