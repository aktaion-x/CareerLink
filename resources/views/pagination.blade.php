@if ($paginator->hasPages())
  <nav>
    <ul class="pagination">
      {{-- Previous Page Link --}}
      @if ($paginator->onFirstPage())
        <li class="disabled" aria-disabled="true">
          <span>@lang('pagination.previous')</span>
        </li>
      @else
        <li>
          <a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
        </li>
      @endif

      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
        <li>
          <a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
        </li>
      @else
        <li class="disabled" aria-disabled="true">
          <span>@lang('pagination.next')</span>
        </li>
      @endif
    </ul>
  </nav>
@endif
<style>
  ul.pagination {
    display: flex;
    justify-content: space-between;
    max-width: 75%;
    padding: 0 20px;
    margin: 20px 0 50px;
  }

  ul.pagination li {
    border: 2px solid var(--primary-color);
    padding: 8px 12px;
    border-radius: 0.5rem;
    background-color: var(--primary-color);
    cursor: default;
  }

  ul.pagination li span,
  ul.pagination li a {
    color: var(--white-color);
    font-weight: 600;
  }

  ul.pagination li.disabled {
    opacity: .8;
  }
</style>
<script>
  const paginationLis = document.querySelectorAll('ul.pagination li');
  const separators = /[«»]/;
  paginationLis.forEach(li => {
    if (li.querySelector('span')) {
      li.querySelector('span').innerText = li.querySelector('span').innerText.split(separators).join('')
    }
    if (li.querySelector('a')) {
      li.querySelector('a').innerText = li.querySelector('a').innerText.split(separators).join('')
    }
  })
</script>
