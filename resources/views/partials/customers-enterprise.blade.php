@php
$customers = [
	[
    'logo' 	 => 'customers/arm',
		'class' => 'h-6 customer-logo',
  ],
	[
    'logo' 	 => 'customers/steelcase',
		'class' => 'h-6 customer-logo',
  ],
];
@endphp

<section class="container {{ $class ?? '' }}">
	<div class="text-center relative lg:max-w-full lg:mx-auto">
		<h3 class="block text-center text-lg text-body-light font-display font-normal mb-8">
		{!!$title ?? '<span class="font-bold">Teams</span> that <span class="font-bold">love</span> Codefresh'!!}
		</h3>

		<div class="flex flex-wrap align-center justify-center opacity-75">
			@if($customers)
				@foreach($customers as $customer)
					@svg($customer['logo'], 'inline-block mx-8 my-4 w-auto ' . $customer['class'])
				@endforeach
			@endif
		</div>
	</div>
</section>
