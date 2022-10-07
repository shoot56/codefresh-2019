@component('components.hero-wrapper', ['class' => 'hero--ent text-center'])
  <span class="title-top">
    {{ __('Codefresh enterprise edition', 'codefresh') }}
  </span>

  <h1 class="mb-4">{{ the_field('enterprise_title') }}</h1>
  <p class="mb-8">{{ the_field('enterprise_sub_title') }}</p>
  <a href="{{ esc_url(get_field('enterprise_button_1_url')) }}" class="btn btn-primary block md:inline-block mb-4 md:mb-0 md:mr-4">
    {{ get_field('enterprise_button_1_text') }}
  </a>
  <a href="{{ esc_url(get_field('enterprise_button_2_url')) }}" class="btn btn-secondary block md:inline-block">
    {{ get_field('enterprise_button_2_text') }}
  </a>
@endcomponent
