<div id="search" class="search events-search relative flex flex-wrap items-center mt-6 lg:max-w-4xl lg:mx-auto">
  <div class="search__icon search__icon--search">
      <i class="fas fa-search text-oxford-blue-400"></i>
  </div>

  <div class="search__icon search__icon--clear">
      <i class="fas fa-times-circle text-blue-dark"></i>
  </div>

  <input
    type="text"
    id="search-events"
    class="search__input block w-full py-2 leading-normal bg-white border border-blue-100 rounded-pill lg:text-sm focus:outline-none focus:border-primary"
    style="padding-left: 2rem !important;"
    autocomplete="off"
    placeholder="{{ __('Search...', 'codefresh') }}">

  <div class="search__results w-full">
    <div class="search-results-inner absolute z-50 left-0 p-3 text-sm w-full bg-white rounded-xl shadow-md"></div>
  </div>
</div>
