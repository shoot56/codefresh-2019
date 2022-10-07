@php
$main_quote	   = get_field( 'cs_main_heading' );
$excerpt 	   = get_field( 'cs_excerpt' );
$info_list     = get_field( 'cs_sidebar_list' );
$hero_image    = get_field( 'cs_hero_image' );
$img_id		   = get_field( 'cs_customer_logo' );
$logo_height   = get_field( 'cs_customer_logo_size' );
$inline_styles = App\generate_inline_styles( array( 'height' => $logo_height . 'px;' ) );
@endphp

<div class="flex flex-wrap mb-10 -mx-4 lg:mx-0 lg:mb-16">
    <div class="w-full lg:w-1/4">
        <div class="cs-header-info flex flex-col w-full h-full justify-end py-10 lg:bg-oxford-blue-50">
            <div class="mx-4 lg:mx-0">
                <div class="text-line-decor mb-12 font-bold text-sm text-dark-heading uppercase tracking-widest">
                    {{ __( 'Case studies', 'codefresh' ) }}
                </div>
                {!! wp_get_attachment_image( $img_id, 'medium', false, array(
                    'class' => 'w-auto',
                    'style' => $inline_styles,
                ) ) !!}
            </div>
        </div>
    </div>
	<div
        class="w-full lg:w-3/4 cs-header-image bg-no-repeat bg-cover bg-center bg-oxford-blue-50 lazyload -mt-1"
        style="background-image:url({{ $hero_image['url'] }});"
    ></div>
</div>

<div class="row">
    <article @php post_class('col w-full lg:w-3/5 lg:pr-32') @endphp>
        <div class="mt-8 mb-20">
            <h1 class="text-3xl text-dark-heading md:text-5xl">{!! $main_quote !!}</h1>
            <p class="lead font-bold text-oxford-blue-400">{!! $excerpt !!}</p>
        </div>
        @if( have_rows( 'cs_content_blocks' ) )
            @while( have_rows( 'cs_content_blocks' ) ) @php the_row() @endphp

                @php $title = get_sub_field( 'title' ) @endphp

                    @if ( get_row_layout() == 'content' )
                        <section class="mb-20">
                            @if ( $title )
                            <h2 class="text-2xl">
                                @component( 'components.text-gradient' )
                                    {!! $title !!}
                                @endcomponent
                            </h2>
                            @endif
                            {!! get_sub_field( 'content' ) !!}
                        </section>
                    @endif
            @endwhile
        @endif
        <footer>
            <div class="mb-8 p-4 bg-oxford-blue-50 rounded-xl md:p-6 lg:hidden">
                <h3 class="mb-4 text-xl">
                    @component( 'components.text-gradient' )
                        {{ __( 'Share.', 'codefresh' ) }}
                    @endcomponent
                </h3>
                {!! do_shortcode( '[addtoany buttons="facebook,linkedin,twitter"]' ) !!}
            </div>
        </footer>
    </article>
    <aside class="col w-full lg:w-2/5 lg:pl-12 lg:sticky top-30 self-start order-first lg:order-last">
        @if ( $info_list )
            <div class="cs-info-list mb-8 p-4 rounded-xl md:p-6">
                <ul>
                    @foreach ( $info_list as $item )
                        <li class="flex my-4 font-display">
                            <div class="w-1/2 font-bold text-dark-heading">{!! $item['title'] !!}</div>
                            <div class="w-1/2 text-oxford-blue-400">{!! $item['description'] !!}</div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="hidden mb-8 p-4 bg-oxford-blue-50 rounded-xl md:p-6 lg:block">
            <h3 class="mb-4 text-xl">
                @component( 'components.text-gradient' )
                    {{ __( 'Share.', 'codefresh' ) }}
                @endcomponent
            </h3>
            {!! do_shortcode( '[addtoany buttons="facebook,linkedin,twitter"]' ) !!}
        </div>
    </aside>
</div>
