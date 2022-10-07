<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class($bodyClass ?? '') @endphp>
    @include('partials.bl-body-items')
    @php do_action('get_header', 'partials.new.header-glossary') @endphp
    @include('partials.new.header')

    <div class="glossary-index-banner-wrapper" role="document">
      @yield('banner')
    </div>

    <!-- begin 1 - 2 - 1 column layout -->
    <section class="container glossary-index-body">

      <div class="left-sidebar">
        @yield('module-clusters')
        <!-- @yield('module-clusters-mobile') -->

      </div>
      <div class="main-body">
        <main class="main {{ $mainClass ?? '' }}">
          @yield('content')
        </main>
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
