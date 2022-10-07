<div class="mb-6 mt-1">
  <div class="blog-topbar relative border-b border-light py-2 lg:py-1 overflow-hidden text-center lg:text-left lg:flex lg:items-center">
    <div class="blog-topbar__breadcrumb mb-3 lg:mb-0 text-xs font-bold font-display uppercase">
      <span>
        <a href="{{ esc_url(site_url('/')) }}" class="text-body-light hover:text-primary">
          {{ __('Home', 'codefresh') }}
        </a>
      </span>

      <i class="fas fa-chevron-right mx-1 align-baseline text-gray-500" style="font-size:8px;"></i>

      <span>
        <a href="{{ esc_url(site_url('blog/')) }}" class="text-body-light hover:text-primary">
          {{ __('Blog', 'codefresh') }}
        </a>
      </span>
    </div>

    <div class="blog-topbar__search mx-auto lg:ml-auto lg:mr-0 w-64">
      @include('partials.search-form')
    </div>
  </div>
</div>
