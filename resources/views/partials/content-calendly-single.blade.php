@php
$page_id  = $_GET['id'];
$email    = $_GET['email'];
$name     = $_GET['fname'];
$surname  = $_GET['surname'];
$company  = $_GET['company'];
$calendly = get_field( 'calendly_user' );
@endphp

<div class="asymm-header bg-white">
  <div class="container"><a href="{{ esc_url( site_url() ) }}"><img src="@asset('images/logo.svg')" alt="Codefresh"></a></div>
</div>
<section class="asymm-content">

  @if( isset( $page_id ) && get_field( 'show_calendly_message', $page_id ) )
    {{ get_field( 'calendly_text', $page_id ) }}
  @elseif( get_field( 'show_calendly_message') )
    <p class="text-center">We’ll let you know when your account is ready. In the meantime, schedule a time to meet with our experts so we can help you get up and running fast.</p>
  @endif

  {{-- Calendly inline widget begin --}}
  <div class="calendly-inline-widget" data-url="{{$calendly}}?email={{$email}}&a1={{$company}}&first_name={{$name}}&last_name={{$surname}}&full_name={{$name}}%20{{$surname}}" style="min-width:320px;height:580px;"></div>
  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
  {{-- Calendly inline widget end --}}
</section>
