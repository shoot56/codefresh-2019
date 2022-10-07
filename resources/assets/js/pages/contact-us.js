/* eslint-disable no-undef */
jQuery( document ).ready( () => {
    const chatBtn = document.getElementById('chatLink');
    if(chatBtn)
      chatBtn.addEventListener('click', () => Intercom('show'));

    // Focus first field in the form
    jQuery(window).ready( () => {
      const firstNameField = jQuery('.name_first input');
      if( firstNameField.length )
        firstNameField.focus();
    } );

    /*
     *  newMap
     *
     *  This function will render a Google Map onto the selected jQuery element
     *
     *  @type	function
     *  @param	$el (jQuery element)
     *  @return	n/a
     */
    const newMap = $el => {
      const $markers = $el.find('.marker');
      const args = {
        icon: {
          path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
          strokeColor: 'yellow',
          scale: 3,
        },
        zoom: 16,
        center: new google.maps.LatLng(0, 0),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
        styles: [
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [
              {
                color: '#d6eee8',
              },
              {
                lightness: 17,
              },
            ],
          },
          {
            featureType: 'landscape',
            elementType: 'geometry',
            stylers: [
              {
                color: '#f5fcfa',
              },
              {
                lightness: 20,
              },
            ],
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.fill',
            stylers: [
              {
                color: '#ffffff',
              },
              {
                lightness: 17,
              },
            ],
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [
              {
                color: '#ffffff',
              },
              {
                lightness: 29,
              },
              {
                weight: 0.2,
              },
            ],
          },
          {
            featureType: 'road.arterial',
            elementType: 'geometry',
            stylers: [
              {
                color: '#ffffff',
              },
              {
                lightness: 18,
              },
            ],
          },
          {
            featureType: 'road.local',
            elementType: 'geometry',
            stylers: [
              {
                color: '#ffffff',
              },
              {
                lightness: 16,
              },
            ],
          },
          {
            featureType: 'poi',
            elementType: 'geometry',
            stylers: [
              {
                color: '#d6eee8',
              },
              {
                lightness: 21,
              },
            ],
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [
              {
                color: '#ceece5',
              },
              {
                lightness: 21,
              },
            ],
          },
          {
            elementType: 'labels.text.stroke',
            stylers: [
              {
                visibility: 'on',
              },
              {
                color: '#ffffff',
              },
              {
                lightness: 16,
              },
            ],
          },
          {
            elementType: 'labels.text.fill',
            stylers: [
              {
                saturation: 36,
              },
              {
                color: '#29434b',
              },
              {
                lightness: 40,
              },
            ],
          },
          {
            elementType: 'labels.icon',
            stylers: [
              {
                visibility: 'off',
              },
            ],
          },
          {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [
              {
                color: '#d6eee8',
              },
              {
                lightness: 19,
              },
            ],
          },
          {
            featureType: 'administrative',
            elementType: 'geometry.fill',
            stylers: [
              {
                color: '#c5dfd8',
              },
              {
                lightness: 20,
              },
            ],
          },
          {
            featureType: 'administrative',
            elementType: 'geometry.stroke',
            stylers: [
              {
                color: '#c5dfd8',
              },
              {
                lightness: 17,
              },
              {
                weight: 1.2,
              },
            ],
          },
        ],
      };

      /*
       *  addMarker
       *
       *  This function will add a marker to the selected Google Map
       *
       *  @type	function
       *  @param	$marker (jQuery element)
       *  @param	map (Google Map object)
       *  @return	n/a
       */
      const addMarker = ($marker, map) => {
        const latlng = new google.maps.LatLng(
          $marker.attr('data-lat'),
          $marker.attr('data-lng')
        );

        // Create marker
        var marker = new google.maps.Marker({
          position: latlng,
          map: map,
          icon: {
            url: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
          },
        });

        // Add to array
        map.markers.push(marker);

        // If marker contains HTML, add it to an infoWindow
        if ($marker.html()) {
          // Create info window
          var infowindow = new google.maps.InfoWindow({
            content: $marker.html(),
          });

          // Show info window when marker is clicked
          google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
          });
        }
      };

      /*
       *  centerMap
       *
       *  This function will center the map, showing all markers attached to this map
       *
       *  @type	function
       *  @param	map (Google Map object)
       *  @return	n/a
       */
      function centerMap(map) {
        const bounds = new google.maps.LatLngBounds();

        // Loop through all markers and create bounds
        $.each(map.markers, function(i, marker) {
          const latlng = new google.maps.LatLng(
            marker.position.lat(),
            marker.position.lng()
          );

          bounds.extend(latlng);
        });

        // Only 1 marker?
        if (map.markers.length == 1) {
          // Set center of map
          map.setCenter(bounds.getCenter());
          map.setZoom(16);
        } else {
          // Fit to bounds
          map.fitBounds(bounds);
        }
      }

      // Create map
      const map = new google.maps.Map($el[0], args);

      // Add a markers reference
      map.markers = [];

      // Add markers
      $markers.each(function() {
        addMarker($(this), map);
      });

      // Center map
      centerMap(map);

      // Return
      return map;
    };

    // Create maps
    $('.acf-map').each(function() {
      return newMap($(this));
    });
} );