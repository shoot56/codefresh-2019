<div class="flex flex-wrap -mx-4 items-center">
  <div class="w-full lg:w-1/2 px-4">
    <div class="branch">
      <div class="branch-body lg:p-10">
        <h4>{!! $branch['name'] !!}</h4>

        <address class="mb-8">
          {!! $branch['full_address'] !!}
        </address>

        <a class="font-display font-bold bg-light rounded inline-block px-4 py-2 tracking-wide mb-3 lg:mb-4" href="tel:{{$branch['telephone']}}">
          <i class="fas fa-phone fa-sm mr-2"></i>
          <span>{{ $branch['telephone'] }}</span>
        </a>

        <div class="hidden lg:block">
          <a class="branch__maps-link" href="https://www.google.com/maps/place/{!! str_replace(' ', '+', $branch['full_address']) !!}/&#64;{{$branch['address']['lat']}},{{$branch['address']['lng']}},17z" target="_blank" rel="noopener noreferrer" arial-label="Open in Google Maps">
            Open in Google Maps <i class="fas fa-chevron-right fa-sm text-gray-700 ml-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="w-full lg:w-1/2 px-4">
    @if (!empty($branch['address']))
      <div class="acf-map">
        <div class="marker" data-lat="{{ $branch['address']['lat'] }}" data-lng="{{ $branch['address']['lng'] }}"></div>
      </div>

      <div class="text-center mt-1 md:hidden">
        <a class="text-sm hover:underline" href="https://www.google.com/maps/place/{!! str_replace(' ', '+', $branch['full_address']) !!}/&#64;{{$branch['address']['lat']}},{{$branch['address']['lng']}},17z" target="_blank" rel="noopener noreferrer" arial-label="Open in Google Maps">
          Open in Google Maps
        </a>
      </div>
    @endif
  </div>
</div>
