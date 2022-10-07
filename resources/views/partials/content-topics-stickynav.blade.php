<div class="stickynav" style="width:20%">
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