@php
$date_now    = current_time( 'd-m-Y H:i' );
$is_video    = isset( $_GET['video'] ) ? $_GET['video'] : false;
$event_start = get_field( 'date_time' );
$is_gated    = get_field( 'gated_content' );
$bg_banner   = get_field( 'banner' );
$thumbnail   = get_field( 'img' );
$bg = '';
if ( $bg_banner ) {
    $bg = $bg_banner;
} elseif ( $thumbnail ) {
    $bg = $thumbnail;
}
$current_url = $current_url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
@endphp

{{-- Display LP with form instead of video. --}}
@if ( ! $is_video && $is_gated )
    <div class="webinar full-width pt-4 pb-20 md:pt-4 md:pb-12 bg-oxford-blue-50">
        <div class="container">
            <div class="webinar__container">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full lg:w-1/2 xl:w-3/5 px-4">
                        <header
                            class="webinar__header lazyload"
                            @if ( $bg ) style="background-image:url({{ $bg }});" @endif
                        >
                        </header>
                        <main class="webinar__info">

                            <div class="webinar__sumary">
                                <h1 class="webinar__title">{!! App::title() !!}</h1>
                                {!! get_field( 'sumary' ) !!}
                            </div>

                            <hr class="webinar__breakLine">

                            <h4 class="webinar__info-title">This webinar may include:</h4>
                            <ul class="list-unstyled">
                                <li class="webinar__includes">
                                    <i class="fas fa-presentation"></i>
                                    <span>Slide Deck</span>
                                </li>
                                <li class="webinar__includes">
                                    <i class="fas fa-video"></i>
                                    <span>Full Video</span>
                                </li>
                                <li class="webinar__includes">
                                    <i class="fab fa-github"></i>
                                    <span>Github Project</span>
                                </li>
                            </ul>

                            <hr class="webinar__breakLine">

                            <div class="webinar-hosts">
                                @if( have_rows( 'hosts' ) )
                                <h4 class="webinar__info-title">Presenters:</h4>
                                <div class="flex flex-wrap -mx-4">
                                    @while( have_rows( 'hosts' ) ) @php the_row() @endphp
                                        @include( 'partials.events-hosts' )
                                    @endwhile
                                </div>
                                @endif
                            </div>
                        </main>
                    </div>

                    {{-- Form --}}
                    <div class="w-full lg:w-1/2 xl:w-2/5 px-4 lg:flex items-center">
                        <div class="webinar__form">
                            @if ( strtotime( $event_start ) < strtotime( $date_now ) && get_field( 'on_demand' ) ) {{-- Event is active --}}

                                <h2 class="webinar__form__title">Fill Out Your Details To Watch The Webinar</h2>

                                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                                @if ( strpos($_SERVER[REQUEST_URI], '?') )
                                    <script>
                                    hbspt.forms.create({
                                        region: "na1", 
                                        portalId: "5054647", 
                                        formId: "9ea297bf-a824-43ac-a8b5-291054085091", 
                                        onFormReady: function($form) {
                                            populateFormUrl();
                                        },
                                        redirectUrl: "<?php echo $current_url; ?>&video=1"
                                    });
                                    </script>
                                @else
                                    <script>
                                    hbspt.forms.create({
                                        region: "na1", 
                                        portalId: "5054647", 
                                        formId: "9ea297bf-a824-43ac-a8b5-291054085091", 
                                        onFormReady: function($form) {
                                            populateFormUrl();
                                        },
                                        redirectUrl: "<?php echo $current_url; ?>?video=1"
                                    });
                                    </script>
                                @endif


                            @elseif ( strtotime( $event_start ) < strtotime( $date_now ) && !get_field( 'on_demand' ) ) {{-- Event has Pasted --}}

                                <div class="flex flex-wrap -mx-3 items-center event-video__ended">
                                    <div class="w-full text-center">
                                        <h2 class="webinar__form__title mb-1">This Event has Ended</h2>
                                        <a href="{{ esc_url( site_url('events') ) }}" class="btn btn-primary">See Live Events</a>
                                    </div>
                                </div>

                            @else {{-- Is an upcoming event --}}

                                <div class="flex flex-wrap -mx-3 items-center event-video__upcoming">
                                    <div class="w-full text-center">
                                        <h2 class="webinar__form__title mb-1">This is an Upcoming Event</h2>
                                        <a href="{{ get_field( 'registration_link' ) }}" class="btn btn-primary">Register Here</a>
                                    </div>
                                </div>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

{{-- Display video if the form has been submited or content has been unblocked by the editor. --}}
@if( $is_video || ! $is_gated )
    @include( 'partials.webinar-info' )
@endif
