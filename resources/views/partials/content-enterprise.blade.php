
@include('partials.customers-enterprise', ['title' => '<span class="font-bold">Enterprises</span> who <span class="font-bold">love</span> Codefresh', 'class' => 'my-4 my-lg-5'])
@include('partials.infra', ['wave' => true])

<section class="ent-poc my-10 lg:my-32">
  <div class="container">
    <h3 class="text-center font-weight-normal md:mb-8">
      Scale with Codefresh <span class="font-weight--heavy">enterprise POC</span>
    </h3>
      <div class="flex -mx-3 justify-center">
        <div class="ent-feats w-full md:w-2/3 mx-3 mb-4 lg:mb-10">
          @if (have_rows('enterprise_s3_bullet_points'))
            <div class="flex flex-wrap justify-center">
              @while (have_rows('enterprise_s3_bullet_points')) @php the_row() @endphp
                <div class="ent-feats w-full md:w-1/2">
                  <div class="p-4 lg:p-10">
                    <i class="fas fa-badge-check fa-lg text-primary mr-3 inline align-middle"></i><span class="font-bold font-display md:text-lg">{!! get_sub_field('s3_title') !!}</span>
                  </div>
                </div>
              @endwhile
            </div>
          @endif
        </div>
      </div>

      <div class="flex -mx-3">
        <div class="w-full mx-3 text-center">
          <a class="btn btn-primary btn-lg inline-block" href="{{ esc_url(site_url('scale-codefresh-enterprise-poc')) }}">Start 14-day POC</a>
        </div>
      </div>
  </div>
</section>

@include('partials.section-testimonials')
