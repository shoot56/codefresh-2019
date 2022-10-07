<div class="py-4 -mx-4 md:mx-0">
  <div role="alert" class="hero-notification hero-notification--{{ $ctaColor ?? 'green' }} relative p-4 md:p-2 items-center text-light leading-none md:rounded-full flex md:inline-flex overflow-hidden">
    <span class="flex rounded-full uppercase px-2 py-1 text-xs font-bold mr-3">{{ __('New', 'codefresh') }}</span>
    <span class="font-bold font-display mr-2 text-left flex-auto">
      {!! $message ?? '' !!} <span class="iconFix" style="width: 2.25em;"><i class="fas fa-arrow-right ml-2"></i></span>
    </span>
  </div>
</div>
