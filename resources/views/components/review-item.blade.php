@php
namespace App;

$head_shot = $head_shot ?? 0;
$author    = $author ?? '';
$job_title = $job_title ?? '';
$company   = $company ?? '';
$heading   = $heading ?? '';
@endphp

@if ( $quote || $slot )
    <div class="codefresh-review w-full">
        <div class="grid gap-4 h-full items-stretch bg-oxford-blue-50 rounded-2xl md:grid-cols-2">
                <div class="p-8 bg-primary rounded-t-2xl rounded-bl-2xl rounded-br-4xl md:p-12 md:grid-span-2">
                    <div class="mb-4">
                        {!! file_get_contents( asset_path( 'images/5-star-rating.svg' ) ) !!}
                    </div>
                    <div class="font-display font-black text-xl text-dark-heading md:text-4xl">“{!! $heading !!}”</div>
                    <div class="mt-8 flex items-center">
                        <div class="w-12">
                            <div class="relative aspect-ratio-square">
                                {!! wp_get_attachment_image( $head_shot, 'thumbnail', false, array( 'class' => 'img-full rounded-full bg-white' ) ) !!}
                            </div>
                        </div>
                        <div class="ml-2 font-display font-bold text-lg text-white">{{ $author }}</div>
                    </div>
                </div>
            <div class="md:grid-span-2">
                <blockquote class="lead text-dark-heading p-8 md:pr-20">
                    &ldquo;{!! $quote ?? $slot !!}&rdquo;
                </blockquote>
            </div>
        </div>
    </div>
@endif
