<div class="pt-24 max-w-3xl mx-auto md:pt-32">
  @unless ($is_single)
    <h1 class="mb-0">{!! __('Job Openings', 'codefresh') !!}</h1>
  @endunless

  <div id="grnhse_app"></div>
  <script src="https://boards.greenhouse.io/embed/job_board/js?for=codefresh"></script>
</div>
