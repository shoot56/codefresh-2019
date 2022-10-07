import download from 'downloadjs';

const isVideoOn = document.querySelector( '.webinar-main' );

jQuery( document ).ready( () => {
  if ( isVideoOn ) {

    // Download resources
    const downloadButton = document.getElementById( 'webinarDownloadResources' ),
      fileUrl = downloadButton.getAttribute( 'data-file' );

    if ( downloadButton ) downloadButton.addEventListener( 'click', () => download( fileUrl ) );

    /* eslint-disable */
    // Google Analytics events / goals
    var player = false,
      hasPlayed = false,
      playing = false,
      hasLoaded = false;

    jQuery( function () {
      try {
        if ( hasLoaded === false ) {
          ga( 'send', 'event', 'Webinar', 'View', 'Thankyou', 1 );
          hasLoaded = true;
        }
      } catch ( err ) {
        console.log( 'ga load err' );
      }
    } );
  }
} );
