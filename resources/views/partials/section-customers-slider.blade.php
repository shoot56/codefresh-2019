<div class="full-width overflow-hidden">
  <div class="customer-slider relative mx-auto my-10">
    <div class="absolute flex flex-row flex-nowrap">
      @for ($i = 0; $i < 2; $i++)
        <div class="customer-slider__list flex flex-wrap justify-around items-center">
          @foreach ($customers_carousel as $customer)
            {!! wp_get_attachment_image($customer['customer_logo'], 'medium', false, ['class' => 'not-auto max-h-10 max-w-8 my-4 mx-6 md:my-6 md:mx-16']) !!}
          @endforeach
        </div>
      @endfor
    </div>
  </div>
</div>
