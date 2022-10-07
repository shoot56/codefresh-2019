@php
$location = get_field( 'cf_job_location' );
$homeLinkUrl = site_url( 'careers' );
$homeLinkLabel = 'View All open positions';
@endphp

@component('components.hero-wrapper', ['class' => 'hero--s-career'])

  <a href="{{ esc_url( $homeLinkUrl ) }}" class="inline-block mb-6 font-bold text-sm">{{ sprintf( __( '%s', 'codefresh' ), $homeLinkLabel ) }}</a>
  <h1 class="text-xl md:text-4xl">{!! App::title() !!}</h1>
  @if ( $location )
    <div class="font-bold text-body-light">{{ sprintf( __( '%s', 'codefresh' ), $location ) }}</div>
  @endif
@endcomponent
