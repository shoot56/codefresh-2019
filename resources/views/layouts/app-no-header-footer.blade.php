<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class('no-header') @endphp>
    @include('partials.bl-body-items')
    @php do_action('get_header') @endphp
    @yield('hero')
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main asymm md:flex items-center">
          @yield('content')
        </main>
      </div>
    </div>
    @yield('before_footer')
    @php do_action('get_footer') @endphp
    @php wp_footer() @endphp
    @include('partials.bl-footer-items')
  </body>
</html>
