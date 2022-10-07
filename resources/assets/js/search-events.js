class Search {
  constructor( target ) {
    this.target = target;
    this.searchBox = $( `${ this.target }` );
    this.resultsWrapper = $( `${ this.target } .search__results` );
    this.resultsDiv = $( `${ this.target } .search-results-inner` );
    this.searchIcon = $( `${ this.target } .search__icon--search` );
    this.searchField = $( `${ this.target } .search__input` );

    this.clearIcon = $( `${ this.target } .search__icon--clear` );

    this.window = $( window );
    this.isSpinnerVisible = false;
    this.isClearVisible = false;
    this.isSearchOn = false;
    this.maxPosts = 30;
    this.IconSearch = '<i class="fas fa-search"></i>';
    this.IconSpiner = '<i class="fas fa-spinner-third fa-spin"></i>';
    this.previousValue;
    this.typingTimer;
    this.events();
  }

  events () {
    this.searchField.on( 'keyup', this.typingLogic.bind( this ) );
    this.searchField.on( 'keydown', this.navStart.bind( this ) );
    this.window.on( 'keydown', this.navList.bind( this ) );
    this.window.on( 'keyup', this.closeSearchEsc.bind( this ) );
    this.clearIcon.on( 'click', this.clear.bind( this ) );
    this.window.on( 'click', this.closeResults.bind( this ) );
  }

  closeSearchEsc ( e ) {
    if ( e.keyCode == 27 ) {
      if ( this.isSearchOn ) {
        this.clear();
      }
    }
  }

  navList ( e ) {

    if ( [ 38, 40 ].indexOf( e.keyCode ) == -1 ) {
      return;
    }

    switch ( e.keyCode ) {

      case 40: // Key down
        e.preventDefault();
        e.stopPropagation();

        if ( !$( '.search__minilist li:last a' ).is( ':focus' ) ) {
          $( ':focus' ).parent().next().find( 'a' ).focus();
        } else {
          this.searchField.focus();
        }
        break;

      case 38: // Key up
        e.preventDefault();
        e.stopPropagation();

        if ( !$( '.search__minilist li:first a' ).is( ':focus' ) ) {
          $( ':focus' ).parent().prev().find( 'a' ).focus();
        } else {
          this.searchField.focus();
        }
        break;
    }
  }

  navStart ( e ) {
    const minilist = $( '.search__minilist' );

    if ( [ 38, 40 ].indexOf( e.keyCode ) == -1 ) {
      return;
    }

    if ( this.isSearchOn ) {
      if ( this.searchField.is( ':focus' ) ) {
        switch ( e.keyCode ) {
          case 40: // Key down
            e.preventDefault();
            e.stopPropagation();

            minilist.children().first().find( 'a' ).focus();
            break;
          case 38: // Key up
            e.preventDefault();
            e.stopPropagation();

            minilist.children().last().find( 'a' ).focus();
            break;
        }
      }
    }
  }

  typingLogic () {
    if ( this.searchField.val() != this.previousValue ) {

      clearTimeout( this.typingTimer );

      if ( this.searchField.val() ) {

        if ( !this.isSpinnerVisible ) {
          this.searchIcon.html( this.IconSpiner );
          this.isSpinnerVisible = true;
        }
        this.typingTimer = setTimeout( this.getResults.bind( this ), 200 );

      } else {
        this.searchIcon.html( this.IconSearch );
        this.isSpinnerVisible = false;
        this.resultsWrapper.removeClass( 'block' );
      }

      if ( !this.isClearVisible ) {
        this.clearIcon.addClass( 'block' );
        this.isClearVisible = true;
      }

      if ( this.isClearVisible && this.searchField.val() === '' ) {
        this.clearIcon.removeClass( 'block' );
        this.isClearVisible = false;
      }
    }
    this.previousValue = this.searchField.val();
  }

  getResults () {
    const query = this.searchField.val();
    const r = new XMLHttpRequest();
    r.open( 'POST', ajax_object.ajax_url ); // eslint-disable-line no-undef
    r.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded;' );
    r.onreadystatechange = () => {
      if ( r.readyState !== 4 || r.status !== 200 ) {
        return;
      }

      // Render list
      this.resultsDiv.html( r.responseText );
      this.searchIcon.html( this.IconSearch );
      this.isSpinnerVisible = false;
      this.isSearchOn = true;
      this.resultsWrapper.addClass( 'block' );
    };
    r.send( 'action=cf_search_events&query=' + query );
  }

  closeResults ( e ) {
    if (
      this.isSearchOn &&
      !e.target.classList.contains( 'search__icon--clear' ) &&
      !e.target.classList.contains( 'search__input' ) &&
      !e.target.classList.contains( 'btn-search' ) ||
      !e.target.tagName.toLowerCase() === 'a'
    ) {
      $( '.search__results' ).removeClass( 'block' );
    }
  }

  clear () {
    $( '.search__results' ).removeClass( 'block' );
    this.isClearVisible = false;
    this.searchField.val( '' );
    this.searchField.focus();
    this.clearIcon.removeClass( 'block' );
  }

  failedToFetchPosts () {
    this.resultsWrapper.addClass( 'block' );
    this.resultsDiv.html( '<span class="search__no-results">Something went wrong. Please try again :(</span>' );
    this.searchIcon.html( this.IconSearch );
    this.isSpinnerVisible = false;
  }
}

new Search( '#search' );
