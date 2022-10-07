@php
$date_now    = current_time( 'd-m-Y H:i' );
$event_start = get_field( 'date_time' );
$is_video    = isset( $_GET['video'] ) ? $_GET['video'] : false;
$is_gated    = get_field( 'gated_content' );
$thumbnail   = get_field( 'img' );
$current_url = "https:////".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
@endphp

<div class="full-width bg-oxford-blue-50">
    <div class="container">
        <ul class="list-none p-0 mb-0 text-sm -mx-2">
            <li class="font-display inline-block align-middle my-3 px-2">
                <a href="{{ esc_url( site_url( 'webcasts-on-demand/' ) ) }}" class="text-dark hover:text-primary">
                    {{ __( 'Webinars', 'codefresh' ) }}
                </a>
            </li>
            <li class="border-l border-light inline-block align-middle my-3 px-2">
                <a href="{{ esc_url( site_url( 'webcasts-on-demand/' ) ) }}" class="text-dark hover:text-primary">
                    <i class="fas fa-long-arrow-left"></i> {{ __( 'Back', 'codefresh' ) }}
                </a>
            </li>
        </ul>
    </div>
</div>

@if ( $is_video || ! $is_gated )
    <div class="full-width">
        <div class="event-video">
            <div class="event-video__loading" id="event-loading"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i></div>
            <div class="event-video__bg lazyload" @if ( $thumbnail ) style="background-image:url({{ $thumbnail }});" @endif></div>
            <div class="container">
                <div class="flex flex-wrap md:justify-center">
                    <div class="w-full">

                        @if ( ( $is_video && $is_video == true ) || !$is_gated )
                            <div class="embed-responsive event-video__video">
                                {!! App\video( get_field( 'video' ) ) !!}
                            </div>
                        @else

                            @if ( strtotime( $event_start ) < strtotime( $date_now ) && get_field( 'on_demand' ) )
                                {{-- Webinar --}}
                                <div class="flex flex-wrap -mx-3 items-center event-video__form">
                                    <div class="w-full lg:w-1/2 px-3">
                                        <h1>{{ __( 'Fill Out Your Details To Watch The Webinar', 'codefresh' ) }}</h1>
                                    </div>
                                    <div class="w-full lg:w-1/2 px-3">

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

                                    </div>
                                </div>

                            @elseif ( strtotime( $event_start ) < strtotime( $date_now ) && !get_field( 'on_demand' ))
                                {{-- Event Past --}}
                                <div class="flex flex-wrap -mx-3 items-center event-video__ended">
                                    <div class="w-full px-3 text-center">
                                        <h1 class="mb-1">{{ __( 'This Event has Ended', 'codefresh' ) }}</h1>
                                        <a href="{{ site_url('events') }}" class="btn btn-primary">{{ __( 'See Live Events', 'codefresh' ) }}</a>
                                    </div>
                                </div>

                            @else
                                {{-- Upcoming --}}
                                <div class="flex flex-wrap -mx-3 items-center event-video__upcoming">
                                    <div class="w-full px-3 text-center">
                                        <h1 class="mb-1">{{ __( 'This is an Upcoming Event', 'codefresh' ) }}</h1>
                                        <a href="{{ get_field( 'registration_link' ) }}" class="btn btn-primary">{{ __( 'Register Here', 'codefresh' ) }}</a>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
