<form role="search" method="get" class="search-form" action="{{ esc_url(home_url('/')) }}">
  <label for="s" aria-hidden="true" aria-label="Search the blog">
    <span class="screen-reader-text">{!! __('Search for:', 'codefresh') !!}</span>
    <input type="search" class="search-field" value name="s" placeholder="{{ __('Search the blog', 'codefresh') }}">
  </label>

  <button
    type="submit"
    class="search-submit"
    name="submit"
    value="{{ esc_attr_e('Search', 'codefresh') }}"
    aria-label="{{ __('Search the blog', 'codefresh') }}">
      <div class="events-search__icon"><i class="fas fa-search fa-sm"></i></div>
  </button>
</form>
