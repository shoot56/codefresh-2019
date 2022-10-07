@php
$sections = get_field('sections');
@endphp

<article @php post_class('h-full overflow-hidden text-center md:text-left') @endphp>

  @if( $sections )
    @foreach ( $sections as $section )
      <div id="{!! $section['section_name_without_spaces'] !!}" class="{!! $section['section_name_without_spaces'] !!} {!! $section['background_color'] !!}@if ( $section['show_separator'] ) has-separator relative @endif">
        @if ( $section['background_image'] )
          {!! $section['background_image'] !!}
        @endif
        <section class="@if ( $section['omit_wrappers'] ) @else container md:grid grid-cols-{!! $section['column_count'] !!} gap-{!! $section['grid_gap_size'] !!} {!! $section['inner_wrap_modifiers'] !!} @endif">
          @if ( $section['show_featured_case_studies'] )
            @if ( $section['hide_case_study_logos'] )
              @include('partials.new.featured-case-studies-without-ticker')
            @elseif ( $section['static_logos'] )
              @include('partials.new.featured-case-studies-static')
            @else
              @include('partials.new.featured-case-studies')
            @endif
          @endif


          @if ( $section['show_argo_case_studies'] )
            @include('partials.new.featured-case-studies-argo')
          @endif
          @if ( $section['show_integrations'] )
            @include('partials.integrations-2021b')
          @endif


          {!! $section['content'] !!}
        </section>
      </div>
      @if ( $section['show_separator'] )
        <div class="separator-container {!! $section['separator_background'] !!}">
          <img src="{!! $section['separator_image'] !!}" />
        </div>
      @endif
    @endforeach
  @endif

</article>
