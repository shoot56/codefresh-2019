@extends('layouts.app-no-header-footer-with-classes', ['bodyClass' => 'bg-nk-blue-marine md:bg-split-horizontal-marine-light'])

@section('content')
    @while (have_posts()) @php the_post() @endphp
        @include('partials.content-single-ebooks')
    @endwhile
@endsection
