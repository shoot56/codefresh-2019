<div class="team-grid w-2/3 mx-auto">
  @if (!$team->have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'codefresh') }}
    </div>
  @endif

  @while ($team->have_posts()) @php $team->the_post() @endphp
    @component('components.card-team')@endcomponent
  @endwhile
  @php wp_reset_postdata() @endphp

  <div class="h-full p-4 md:p-12 rounded-lg shadow-lg bg-white text-center">
    <div class="w-9/12 mx-auto mb-4">
      <a href="{{ esc_url(site_url('careers')) }}">
        <div class="relative aspect-ratio-square overflow-hidden rounded-full bg-oxford-blue-50">
          <i class="fas fa-plus text-primary text-4xl team-join-icon"></i>
        </div>
      </a>
    </div>

    <div class="font-display font-bold mb-2 text-lg">
      {{ __('Are you ready?', 'codefresh')}}
    </div>

    <div class="text-body-light">
      <a href="{{ esc_url(site_url('careers')) }}">
        {{ __('Join us', 'codefresh') }}
      </a>
    </div>
  </div>
</div>
