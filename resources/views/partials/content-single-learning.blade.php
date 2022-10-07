<!-- <div class="full-width">
    <div class="overflow-hidden">
        <div class="container" style="display: flex;
    flex-direction: row;margin-top:100px;">
            <div class="breadcrumb">
                @php get_breadcrumb(); @endphp
            </div>
            @include('partials.content-topics-stickynav')

            @include('partials.content-topics-main')
            @include('partials.content-related-topics')
        </div>
    </div>
</div> -->

<div class="full-width">
    <div class="overflow-hidden">
        <div class="container" style="display: flex;
    flex-direction: row;">

            <div class="stickynav" style="width:30%">
                <ul>

                    @if (have_rows('components'))
                    @while (have_rows('components')) @php the_row() @endphp
                    @php
                    $label = get_sub_field('menu_title');
                    $labelid = preg_replace("/[\s_]/", "-", $label);
                    $labelid = strtolower($labelid);
                    @endphp
                    <li><a href="#{{ $labelid }}">{{ $label }}</a></li>

                    @endwhile
                    @endif
                </ul>
            </div>

            <div class="article--content" style="width:60%;">

                @if (have_rows('components'))
                @while (have_rows('components')) @php the_row() @endphp


                @if (get_row_layout() == 'general_content')
                <!-- General content starts -->
                @php
                $title = get_sub_field('title');
                $content = get_sub_field('content', false, false);
                $label = get_sub_field('menu_title');
                $labelid = preg_replace("/[\s_]/", "-", $label);
                $labelid = strtolower($labelid);
                @endphp
                <div id="{{ $labelid }}">
                    <h2>{{ $title }}</h2>

                    {{ $content }}
                </div>
                <!-- General content ends -->
                @endif



                @if (get_row_layout() == 'video_block')
                <!-- video layout -->
                @php
                $video_thumbnail = get_sub_field('video_thumbnail');
                $image_alt = get_sub_field('image_alt');
                $video_caption = get_sub_field('video_caption');
                @endphp

                @if ($video_thumbnail)
                <div class="img">
                    <img src="{{ $video_thumbnail }}" alt="{{ $image_alt }}">
                </div>
                @endif
                <em>{{ $video_caption }}</em>
                <!-- video layout ends -->
                @endif





                @if (get_row_layout() == 'callout')
                @php
                $callout_img = get_sub_field('image');
                $image_alt = get_sub_field('image_alt');
                $title = get_sub_field('title');
                $text = get_sub_field('text',false,false);
                $button_text = get_sub_field('button_text');
                $button_link = get_sub_field('button_link');
                @endphp
                <!-- Call out section starts -->
                @if ($callout_img)
                <div class="img">
                    <img src="{{ $callout_img }}" alt="{{ $image_alt }}">
                </div>

                @endif
                <h2> {{ $title }} </h2>
                @if ($button_link)
                <a href="{{ $button_link }}" class="btn">{{ $button_text }}</a>
                @endif

                {{ $text }}

                <!-- Call out section ends -->
                @endif





                @endwhile
                @endif
            </div>
        </div>
    </div>
</div>
