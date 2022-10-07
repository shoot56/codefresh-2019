<!doctype html>
<html {!! get_language_attributes() !!} class="bg-oxford-blue-600">
  @include('partials.head')
  <body @php body_class($bodyClass ?? '') @endphp>
    @include('partials.bl-body-items')
    @php do_action('get_header') @endphp
    @include('partials.new.header-2021b')
    <div class="wrap bg-white" role="document">
      @yield('hero')
      @yield('before_content')
      <div class="content">
        <main class="main {{ $mainClass ?? '' }}">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar-'.get_post_type())
          </aside>
        @endif
      </div>
      @yield('before_footer')
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.new.footer')
    @php wp_footer() @endphp
    @include('partials.bl-footer-items')
  </body>
</html>
