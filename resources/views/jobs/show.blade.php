<x-layout>
  {{-- <link rel="stylesheet" href="/css/jobs.css"> --}}
  <link rel="stylesheet" href="/css/job.css">
  <div class="job">
    <div class="job-holder">
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
      <div class="contact">
        <div class="email">Email: <span>jonduo@mail.com</span></div>
        <div class="website">Website: <span>http://asd.com</span></div>
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

    </div>
    <ul class="tags">
      <ul>
        <li class="btn edit">
          <form class="inline-form" action="/jobs/1" method="post">
            @csrf
            @method('PUT')
            <button>Edit</button>
          </form>
        </li>
        <li class="btn archive">
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
      <ul>
        <li class="btn"><a href="/jobs/{{ 'tag' }}">Tag</a></li>
        <li class="btn"><a href="/jobs/{{ 'tag' }}">Tag</a></li>
        <li class="btn"><a href="/jobs/{{ 'tag' }}">Tag</a></li>
      </ul>
    </ul>
  </div>
</x-layout>
