<div class="sidebar">
  <div class="sidebar-container">
    <div class="user">
      <div class="img">

        @if (auth()->user())
          @if (auth()->user()->img)
            <img src="{{ asset('storage/' . auth()->user()->img) }}" alt="">
          @else
            <img src="{{ asset('img/default-avatar.png') }}" alt="avatar">
          @endif
        @else
          <img src="{{ asset('img/default-avatar.png') }}" alt="">
        @endif

      </div>
      <span class="name">{{ auth()->user() ? auth()->user()->username : 'Guest' }}</span>
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
    {{-- <div class="filter">
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
    </div> --}}

  </div>
</div>
