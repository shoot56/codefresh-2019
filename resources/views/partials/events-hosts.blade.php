@php $host_img = get_sub_field( 'img' ) @endphp

<div class="w-full md:w-1/2 px-4 mb-4">
  <div class="flex">
    <img src="{{ $host_img[ 'url' ] }}" alt="{{ $host_img[ 'alt' ] }}" class="lazyload w-12 h-12 rounded-full shadow mr-4 object-cover">
    <div>
      <div class="font-display font-bold mb-1 text-sm text-primary-dark">{{ get_sub_field( 'name' ) }}</div>
      <div class="text-xs text-body-light">{{ get_sub_field( 'title' ) }}</div>
    </div>
  </div>
</div>
