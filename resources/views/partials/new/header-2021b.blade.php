@php
$announcement_tag = get_field('home_hero_cta_tag') ?? __('New', 'codefresh');
$acf_link         = get_field('home_hero_cta_link');
$link             = App\_link($acf_link);
@endphp

<style scoped>
  @media (max-width: 586px) {
    .top-margin {
      margin-top: unset !important;
    }
  }
</style>
<header class="header">
    <div class="w-full py-3 text-center" style="background: #142e4b; border-bottom: 1px solid #223b56; display: none;">
      <div class="container">
        <a
          <?php /*href="/argocon/" */?>
          href="https://codefresh.io/argocon/"
          target="_blank"
          rel="noreferrer"
          class="font-display mx-auto text-white text-sm nav-news-banner">
          <span class="inline-block bg-green-alpha rounded-pill px-2 text-green-light font-display font-black uppercase tracking-wider text-xs mr-2" style="line-height: 1.8;">New</span>
          <?php /*Connect and learn about GitOps with Argo at ArgoCon in San Francisco! Save the date Sept 19-22.
          @include('partials.svg.chevron-right') */?>
          Join Codefresh at ArgoCon 2022! Set up a time with our experts to see our new Hosted GitOps Platform.
        </a>
      </div>
    </div>

  @include('partials.new.header-insides')
</header>
