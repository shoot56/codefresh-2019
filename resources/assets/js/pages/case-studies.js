import videojs from 'video.js';

jQuery( document ).ready( () => {

  // Video Player
  var opt = {
    autoplay: true,
    muted: true,
    fluid: true,
    preload: 'auto',
    loop: true,
  };

  videojs( 'cs-video--short', opt ).ready( function () {
    const player = this;
    player.play();
  } );

  videojs( 'cs-video--full', { fluid: true, controls: true } );

  jQuery( '.cf-video-btn' ).on( 'click', () => {
    videojs( 'cs-video--short' ).pause();
    videojs( 'cs-video--full' ).play();

    jQuery( '.fbx-instance' ).on( 'foobox.close', () => {
      videojs( 'cs-video--short' ).play();
      videojs( 'cs-video--full' ).pause();
    } );
  } );
} );