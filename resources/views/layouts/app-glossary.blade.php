<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class($bodyClass ?? '') @endphp>
    @include('partials.bl-body-items')
    @php do_action('get_header', 'partials.new.header-glossary') @endphp
    @include('partials.new.header')

    <div class="glossary-banner-wrapper" role="document">
      @yield('banner')
    </div>

    <!-- begin 1 - 2 - 1 column layout -->
    <section class="container glossary-body">
      <div class="main-body">
        <main class="main {{ $mainClass ?? '' }}">
          @yield('content')
        </main>
          <!-- @if (App\display_sidebar())
            <aside class="sidebar">
              @include('partials.sidebar-'.get_post_type())
            </aside>
          @endif -->
      </div>

      <div class="left-sidebar">
        @yield('module-article-content')
      </div>

      <div class="right-sidebar">
        @yield('module-related-articles')
      </div>
    </section>
    <!-- end 1 - 2 - 1 column layout -->

    @yield('before_footer')

    @php do_action('get_footer') @endphp
    @include('partials.new.footer')
    @php wp_footer() @endphp
    @include('partials.bl-footer-items')
  </body>
</html>
