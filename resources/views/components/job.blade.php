@props(['job'])

<div class="job">
  <a href="/jobs/{{ $job->id }}" class="job-holder">
    <div class="img">
      @if ($job->logo)
        <img src="{{ asset('storage/' . $job->logo) }}" alt="">
      @else
        <img src="{{ asset('img/default-company.png') }}" alt="">
      @endif
    </div>
    <div class="title">
      <h4>{{ $job->title }}</h4>
    </div>
    <div class="company">
      <h4>{{ $job->company }}</h4>
      <span>{{ $job->location }}</span>
    </div>
    <div class="description">
      <span>
        {{ $job->description }}
      </span>
    </div>
    <div class="time">{{ $job->created_at }}</div>

  </a>
  <ul class="tags">
    @foreach (explode(',', $job->tags) as $tag)
      <li class="btn"><a href="/jobs?tag={{ $tag }}">{{ $tag }}</a></li>
    @endforeach
  </ul>
</div>
