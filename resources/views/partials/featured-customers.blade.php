@php
$customers = array(
	array(
		'logo' 	 => 'customers/tbs',
		'class' => 'h-6',
	),
	array(
		'logo' 	 => 'customers/goodpx',
		'class' => 'h-5',
	),
	array(
		'logo' 	 => 'customers/skillshare',
		'class' => 'h-8',
	),
	array(
		'logo' 	 => 'customers/sama',
		'class' => 'h-6',
	),
);
@endphp

@if ( $customers )
	@foreach ( $customers as $customer )
		@svg( $customer['logo'], 'inline-block mt-4 mr-4 w-auto ' . $customer['class'] )
	@endforeach
@endif
