@php
global $post;
$date     = get_the_date();
$location = get_field( 'cf_job_location' );
$types    = wp_get_post_terms( $post->ID, 'types' );
$info = array(
  'posted_on' => (object) array(
    'title' => 'Posted On',
    'text' => $date,
  ),
  'location' => (object) array(
    'title' => 'Location',
    'text' => $location,
  ),
  'type' => (object) array(
    'title' => 'Work Type',
    'text' => $types,
  ),
);
@endphp

<div class="careers-sidebar-inner relative">

  <div class="mb-6 p-6 bg-white shadow-lg rounded-lg">
    <a href="#apply" class="btn btn-primary block mb-3">
      <i class="fas fa-envelope mr-2"></i> {{ __( 'Apply Now', 'codefresh' ) }}
    </a>
    <a href="#share" class="btn btn-outline-primary block flex">
      <span class="mr-3">{{ __( 'Share Now', 'codefresh' ) }}</span> <i class="fas fa-share-alt ml-auto"></i>
    </a>
  </div>

  <div class="mb-6 p-6 bg-white rounded-lg">
    @foreach ( $info as $key => $item )
      @if ( $item->text )
        <div class="mb-4">
          <div class="mb-1 font-bold text-sm">{{ __( $item->title, 'codefresh' ) }}</div>
          @if( $key !== 'type' )
            <div>{{ __( $item->text, 'codefresh' ) }}</div>
          @else
            @foreach ($item->text as $type)
              <div>{{ __( $type->name, 'codefresh' ) }}</div>
            @endforeach
          @endif
        </div>
      @endif
    @endforeach
  </div>

</div>
