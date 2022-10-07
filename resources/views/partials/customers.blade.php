@php
$customers = array(
	array(
		'logo' 	 => 'customers/tbs',
		'class' => 'h-8',
	),
	array(
		'logo' 	 => 'customers/goodpx',
		'class' => 'h-6',
	),
	array(
		'logo' 	 => 'customers/skillshare',
		'class' => 'h-10',
	),
	array(
		'logo' 	 => 'customers/sama',
		'class' => 'h-8',
	),
);
@endphp

<section class="container {{$class ?? ''}}">
	<div class="text-center relative lg:max-w-full lg:mx-auto">
		<span class="block text-center text-lg text-body-light font-display mb-6">
			{!! $title ?? '<span class="font-bold">Teams</span> that <span class="font-bold">love</span> Codefresh' !!}
		</span>
		<div class="text-body-light">
			@if ( $customers )
				@foreach ( $customers as $customer )
					@svg( $customer['logo'], 'inline-block mt-4 mx-4 w-auto ' . $customer['class'] )
				@endforeach
			@endif
		</div>
	</div>
</section>
