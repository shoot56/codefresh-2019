<div class="article--content" style="width:50%;">

    @if (have_rows('components'))
    @while (have_rows('components')) @php the_row() @endphp


    @if (get_row_layout() == 'general_content')
    <!-- General content starts -->
    @php
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $label = get_sub_field('menu_title');
    $labelid = preg_replace("/[\s_]/", "-", $label);
    $labelid = strtolower($labelid);
    @endphp
    <div id="{{ $labelid }}">
        <h2>{{ $title }}</h2>

        {!! $content !!}
    </div>
    <!-- General content ends -->
    @endif



    @if (get_row_layout() == 'video_block')
    <!-- video layout -->
    @php
    $video = get_sub_field('video');
    $video_caption = get_sub_field('video_caption');
    $label = get_sub_field('menu_title');
    $labelid = preg_replace("/[\s_]/", "-", $label);
    $labelid = strtolower($labelid);
    @endphp

    @if ($video)
    <div class="video" id="{{ $labelid }}">
        {!! $video !!}
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
    $text = get_sub_field('text');
    $button_text = get_sub_field('button_text');
    $button_link = get_sub_field('button_link');
    $label = get_sub_field('menu_title');
    $labelid = preg_replace("/[\s_]/", "-", $label);
    $labelid = strtolower($labelid);
    @endphp
    <!-- Call out section starts -->
    <div id="{{ $labelid }}">
        @if ($callout_img)
        <div class="img">
            <img src="{{ $callout_img }}" alt="{{ $image_alt }}">
        </div>

        @endif
        <h2> {{ $title }} </h2>
        @if ($button_link)
        <a href="{{ $button_link }}" class="btn">{{ $button_text }}</a>
        @endif

        {!! $text !!}

        <!-- Call out section ends -->
    </div>
    @endif

    @endwhile
    @endif
</div>