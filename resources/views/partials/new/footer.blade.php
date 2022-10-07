@php $sm = get_field('social_media', 'option'); @endphp

<footer class="footer new-footer relative pt-4 bg-oxford-blue md:pt-8">
  <div class="container">
    <div class="footer-widgets grid grid-gap md:grid-cols-6">
      @php dynamic_sidebar('sidebar-footer-1') @endphp
      @php dynamic_sidebar('sidebar-footer-2') @endphp
      @php dynamic_sidebar('sidebar-footer-3') @endphp
      @php dynamic_sidebar('sidebar-footer-4') @endphp
      <div class="col-span-2">@php dynamic_sidebar('sidebar-footer-5') @endphp</div>
    </div>
  </div>

  <div class="h-px bg-gradient-to-r from-transparent via-blue to-transparent opacity-25"></div>

  <div class="py-4 bg-oxford-blue-600">
    <div class="container">
      <div class="grid gap-4 justify-center items-center md:grid-cols-3 lg:grid-cols-5">
        <img src="@asset('images/footer/google-cloud-platform.svg')" alt="Google Cloud Platform partner" class="mx-auto opacity-50">
        <img src="@asset('images/footer/microsoft-azure.svg')" alt="Microsoft Azure" class="mx-auto opacity-50">
        <img src="@asset('images/footer/docker-member.svg')" alt="Docker member" class="mx-auto opacity-50">
        <img src="@asset('images/footer/soc2.svg')" alt="SOC 2 Type 2 Compliant" class="mx-auto opacity-50">
        <img src="@asset('images/footer/microsoft-for-startups.svg')" alt="Microsoft for Startups Award" class="mx-auto opacity-50">
      </div>
    </div>
  </div>
</footer>
