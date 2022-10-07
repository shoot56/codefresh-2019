
@unless ($newsletter_disabled)
<div class="modal position-bottom-right w-380 hidden md:block" id="newsletter">
  <div class="modal-dialog animated fast">
    <div class="modal-content text-center">
        <div class="modal-header align-self-center">
            <button type="button" class="close modal-close" aria-label="Close newsletter modal">
              <i class="fas fa-times fa-lg"></i>
            </button>
            <i class="fas fa-envelope-open-text fa-3x"></i>
        </div>
        <div class="modal-body">
          <div class="popup-title">{!! $newsletter_title !!}</div>
          <p class="popup-text">{!! $newsletter_body !!}</p>
          {!! App\hubspot_form() !!}
        </div>
    </div>
  </div>
</div>
@endunless
