@php
$enable_resources     = get_field( 'enable_resources' );
$resource_url         = get_field( 'resource_url' );
$resource_url_outside = get_field( 'resource_url_outside' );
$resource_is_local    = get_field( 'local' );
$git_repo             = get_field( 'git_repo' );
$calendly_url         = 'https://calendly.com/codefresh-live-demo-1/codefresh-online-meeting';
$email                = isset( $_GET['email'] ) ? $_GET['email'] : 'Unknown';
$name                 = isset( $_GET['fname'] ) ? $_GET['fname'] : 'Unknown';
$surname              = isset( $_GET['surname'] ) ? $_GET['surname'] : 'Unknown';
$company              = isset( $_GET['company'] ) ? $_GET['company'] : 'Unknown';
$scheduler            = isset( $_GET['scheduled-by'] ) ? $_GET['scheduled-by'] : 'Unknown';
$calendly_data_url    = add_query_arg( array(
    'email'      => $email,
    'a1'         => $company,
    'a2'         => $scheduler,
    'first_name' => $name,
    'last_name'  => $surname,
    'full_name'  => $name . ' ' . $surname,
    ), $calendly_url );
@endphp

<div class="flex flex-wrap -mx-3">
    <div class="webinar-main w-full lg:w-3/4 px-3 lg:order-last">
        <div class="lg:w-3/4 lg:mx-auto mb-12">
            <h1 class="mb-4 text-xl lg:text-4xl">
                {!! App::title() !!}
            </h1>
            @if ( $enable_resources )
                <h3 class="text-lg mt-12 mb-3 font-bold font-display">Resources:</h3>
                <ul class="list-none p-0 mb-6">
                    @if ( $resource_url || $resource_url_outside )
                        <li class="inline-block mr-1">
                            @if ( $resource_is_local )
                                <button id="webinarDownloadResources" class="btn btn-sm btn-outline-primary" data-file="{{ $resource_url }}">
                                    <i class="fas fa-presentation mr-1"></i>Download Slides
                                </button>
                            @else
                                <a href="{{ esc_url( $resource_url_outside ) }}" class="btn btn-sm btn-outline-primary" target="_blank" rel="noopener noreferrer" aria-label="Github Project">
                                    <i class="fas fa-presentation mr-1"></i>Get Slides
                                </a>
                            @endif
                        </li>
                    @endif
                    @if ( $git_repo )
                        <li class="inline-block">
                            <a href="{{ esc_url( $git_repo ) }}" class="btn btn-sm btn-outline-primary" target="_blank" rel="noopener noreferrer" aria-label="Github Project">
                                <i class="fab fa-github mr-1"></i>Git Repo
                            </a>
                        </li>
                    @endif
                </ul>
            @endif

            {!! get_field( 'sumary' ) !!}

            @if ( have_rows( 'hosts' ) )
                <div class="text-lg mt-12 mb-3 font-bold font-display">Presenters:</div>
                <div class="flex flex-wrap -mx-3">
                    @while ( have_rows( 'hosts' ) ) @php the_row() @endphp
                        @include( 'partials.events-hosts' )
                    @endwhile
                </div>
            @endif
        </div>
    </div>
    <aside class="w-full lg:w-1/4 px-3 lg:order-first">
        <div class="mb-3 mt-4 lg:mt-0">
            <h3 class="text-base">
                Share <i class="fas fa-share"></i>
            </h3>
            <div class="webinar-share relative">
                {!! do_shortcode( '[addtoany url="'. get_permalink() .'" title="'. get_the_title() .'"]' ) !!}
            </div>
            <?php /*
            <div class="flex flex-wrap">
                @if ( $email === 'Unknown' )
                    <div class="w-full">
                        <h3 class="mb-2 text-lg">New to Codefresh?</h3>
                        <a href="{{ esc_url( site_url( 'codefresh-signup' ) ) }}">
                        <i class="fas fa-arrow-right mr-1"></i>Create your <strong>free</strong> account here!
                        </a>
                    </div>
                @else
                    <div class="webinar-calendly w-full my-8 p-4 bg-oxford-blue-50 rounded-lg">
                        <p class="text-center">Schedule a FREE onboarding and<br> start making pipelines fast.</p>
                        {{-- Calendly inline widget begin --}}
                        <div class="calendly-inline-widget" data-url="{{ esc_url( $calendly_data_url ) }}" style="min-width:320px;height:580px;"></div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
                        {{-- Calendly inline widget end --}}
                    </div>
                @endif
                <div class="w-full my-8">
                    <p class="text-sm">Have a good idea for a future webinar?<br> Please share it with us!</p>
                    {!! gravity_form(32, false, false, false, '', false) !!}
                </div>
            </div>
            */?>
        </div>
    </aside>
</div>
