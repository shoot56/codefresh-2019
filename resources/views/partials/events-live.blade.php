<div class="upcoming-events relative flex flex-wrap mb-4 p-6 bg-white border border-light rounded-xl shadow-card md:p-8 {{ PageEvents::className() }}">
  <span class="upcoming-event-tag absolute top-0 right-0 mt-6 mr-6 inline-block px-2 py-1 font-bold text-2xs leading-none uppercase rounded lg:mt-8 lg:mr-8"></span>
  <div class="relative mb-4 w-full md:w-auto">
    <div class="inline-block text-center mr-4">
      <div class="py-1 font-black text-2xs text-white leading-none tracking-wider rounded-t-xl border border-orange-600 bg-gradient-to-b from-orange-600 to-orange-700">
        {!! PageEvents::eventMonth() !!}
      </div>

      <div class="px-3 pt-0.5 pb-1.5 text-blue-dark leading-none rounded-b-xl bg-white shadow {{ PageEvents::isMultiDays() ? 'text-lg md:text-2xl md:pt-1.5 md:pb-2' : 'text-2xl md:text-4xl' }}">
        {!! PageEvents::eventDay() !!}
      </div>
    </div>
  </div>

  <div class="relative w-full md:flex-1">
    <h3 class="mb-3 text-base md:mr-32">
      <a href="{{ esc_url( PageEvents::registrationURL() ) }}" class="text-blue-dark hover:text-primary">
        {!! App::title() !!}
      </a>
    </h3>

    <p class="mb-3 text-sm text-oxford-blue-400">
      {!! get_field('excerpt') !!}
    </p>

    <div class="mb-6 text-xs text-oxford-blue-400 font-bold">
      {!! PageEvents::eventDuration() !!}
    </div>

    <a href="{{ esc_url( PageEvents::registrationURL() ) }}" class="btn btn-primary">
      {{ __('Register Here', 'codefresh') }}
    </a>
  </div>
</div>
