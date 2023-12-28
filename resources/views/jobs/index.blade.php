<x-layout>
  <link rel="stylesheet" href="{{ asset('css/jobs.css') }}">
  <div class="jobs-page">
    <x-sidebar />
    <div class="content">
      <div class="header">
        <h2>Jobs</h2>
        <span>{{ count($jobs) == 0 ? 'No posts to show!' : 'Recent...' }}</span>
      </div>
      <div class="jobs">
        @foreach ($jobs as $job)
          <x-job :job="$job" />
        @endforeach
        <div class="mt-6 p-4">
          {{ $jobs->links() }}
        </div>
      </div>
    </div>
  </div>
</x-layout>
