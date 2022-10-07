@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="flex flex-wrap -mx-4">
    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'codefresh') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php the_post() @endphp
      <div class="w-full md:w-1/2 px-4 mb-8">
        @include('partials.content')
      </div>
    @endwhile
  </div>

  {!! cf_pagination() !!}
@endsection

@section('before_footer')
  @include('partials.new.cta-banner')
@endsection