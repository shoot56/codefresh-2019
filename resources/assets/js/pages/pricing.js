import 'ion-rangeslider';
import numeral from 'numeral';

const selectors = {
  pagePricing: 'body.pricing',
};

document.addEventListener( 'DOMContentLoaded', () => {
  const pagePricing = document.querySelector( selectors.pagePricing );

  if ( pagePricing ) {
    const basic = document.querySelector( '#basic .plan__price' ),
      pro = document.querySelector( '#pro .plan__price' ),
      basicPrice = document.querySelector( '#basicPrice' ),
      basicInputs = document.querySelectorAll( '.plan__input--basic' ),
      basicSteps = document.querySelector( '#totalSteps-basic' ),
      basicStepsSm = jQuery( '#basicSteps-sm' ),
      basicStepsMd = jQuery( '#basicSteps-md' ),
      basicStepsLg = jQuery( '#basicSteps-lg' ),
      basicRunner = jQuery( '#basicRunner' ),
      proPrice = document.querySelector( '#proPrice' ),
      proInputs = document.querySelectorAll( '.plan__input--pro' ),
      proSteps = document.querySelector( '#totalSteps-pro' ),
      proRunner = jQuery( '#proRunner' ),
      proStepsSm = jQuery( '#proSteps-sm' ),
      proStepsMd = jQuery( '#proSteps-md' ),
      proStepsLg = jQuery( '#proSteps-lg' );


    const currPrice = ( el ) => parseInt( el.attr( 'data-price' ) ) * el.prop( 'value' );
    const currPriceSm = ( el ) => parseInt( el.attr( 'data-price' ) ) * ( el.prop( 'value' ) - 1 );
    const stepPrice = ( el ) => parseInt( el.attr( 'data-price' ) );

    const currStep = ( curr, nd, rd, total ) => {
      const stepCurr = parseInt( curr ),
        stepNd = parseInt( nd.data( 'ionRangeSlider' ).old_from ),
        stepRd = parseInt( rd.data( 'ionRangeSlider' ).old_from );

      total.innerHTML = stepCurr + stepNd + stepRd;
    };

    const formatPriceBasic = ( plan, price ) => {
      if ( price > 0 ) {
        if ( plan.classList.contains( 'is-free' ) ) plan.classList.remove( 'is-free' );
        return numeral( price ).format( '0,0' );
      } else {
        if ( !plan.classList.contains( 'is-free' ) ) plan.classList.add( 'is-free' );
        return 'FREE';
      }
    };

    const formatPricePro = ( price ) => numeral( price ).format( '0,0' );

    const switchBilling = () => {
      const basicPriceSm = stepPrice( basicStepsSm ) * ( basicStepsSm.prop( 'value' ) - 1 ),
        basicPriceMd = stepPrice( basicStepsMd ) * basicStepsMd.prop( 'value' ),
        basicPriceLg = stepPrice( basicStepsLg ) * basicStepsLg.prop( 'value' ),
        proPriceSm = stepPrice( proStepsSm ) * proStepsSm.prop( 'value' ),
        proPriceMd = stepPrice( proStepsMd ) * proStepsMd.prop( 'value' ),
        proPriceLg = stepPrice( proStepsLg ) * proStepsLg.prop( 'value' );

      basicPrice.innerHTML = formatPriceBasic( basic, basicPriceSm + basicPriceMd + basicPriceLg );
      proPrice.innerHTML = formatPriceBasic( pro, proPriceSm + proPriceMd + proPriceLg );
    }

    const basicMontly = ( arr ) => {
      for ( let i = 0; i < arr.length; i++ ) {
        let el = arr[ i ];
        if ( i === 0 ) el.setAttribute( 'data-price', 29 );
        if ( i === 1 ) el.setAttribute( 'data-price', 69 );
        if ( i === 2 ) el.setAttribute( 'data-price', 199 );
      }
    }

    const basicAnnually = ( arr ) => {
      for ( let i = 0; i < arr.length; i++ ) {
        let el = arr[ i ];
        if ( i === 0 ) el.setAttribute( 'data-price', 19 );
        if ( i === 1 ) el.setAttribute( 'data-price', 49 );
        if ( i === 2 ) el.setAttribute( 'data-price', 139 );
      }
    }

    const proMontly = ( arr ) => {
      for ( let i = 0; i < arr.length; i++ ) {
        let el = arr[ i ];
        if ( i === 0 ) el.setAttribute( 'data-price', 49 );
        if ( i === 1 ) el.setAttribute( 'data-price', 129 );
        if ( i === 2 ) el.setAttribute( 'data-price', 389 );
      }
    }

    const proAnnually = ( arr ) => {
      for ( let i = 0; i < arr.length; i++ ) {
        let el = arr[ i ];
        if ( i === 0 ) el.setAttribute( 'data-price', 34 );
        if ( i === 1 ) el.setAttribute( 'data-price', 89 );
        if ( i === 2 ) el.setAttribute( 'data-price', 269 );
      }
    }

    // Switches
    const switchBtnRight = document.querySelector( '.switch-button-case.right' );
    const switchBtnLeft = document.querySelector( '.switch-button-case.left' );
    const activeBilledSwitch = document.querySelector( '.active--billed' );

    const switchLeft = () => {
      switchBtnRight.classList.remove( 'active-case' );
      switchBtnLeft.classList.add( 'active-case' );
      activeBilledSwitch.style.left = '1px';
      basicAnnually( basicInputs );
      proAnnually( proInputs );
      switchBilling();
    }

    const switchRight = () => {
      switchBtnRight.classList.add( 'active-case' );
      switchBtnLeft.classList.remove( 'active-case' );
      activeBilledSwitch.style.left = '50.3%';
      basicMontly( basicInputs );
      proMontly( proInputs );
      switchBilling();
    }

    switchBtnLeft.addEventListener( 'click', () => switchLeft(), false );
    switchBtnRight.addEventListener( 'click', () => switchRight(), false );

    // Range Sliders
    // Basic
    basicStepsSm.ionRangeSlider( {
      min: 0,
      max: 20,
      from: 0,
      hide_min_max: true,
      skin: 'round',
      onChange: ( data ) => currStep( data.from, basicStepsMd, basicStepsLg, basicSteps ),
      onFinish: ( data ) => {
        const instance = basicStepsSm.data( 'ionRangeSlider' ),
          md = currPrice( basicStepsMd ),
          lg = currPrice( basicStepsLg ),
          singleStepPrice = stepPrice( basicStepsSm ),
          price = singleStepPrice * ( data.from - 1 );

        basicPrice.innerHTML = formatPriceBasic( basic, price + md + lg );

        if ( data.from !== 0 ) {
          basicPrice.innerHTML = formatPriceBasic( basic, price + md + lg );
        } else {
          basicPrice.innerHTML = formatPriceBasic( basic, md + lg );
          instance.update( { from: 0 } );
        }
      },
      onUpdate: ( data ) => currStep( data.from, basicStepsMd, basicStepsLg, basicSteps ),
    } );

    basicStepsMd.ionRangeSlider( {
      min: 0,
      max: 20,
      from: 0,
      hide_min_max: true,
      skin: 'round',
      onChange: ( data ) => currStep( data.from, basicStepsSm, basicStepsLg, basicSteps ),
      onFinish: ( data ) => {
        const instance = basicStepsMd.data( 'ionRangeSlider' ),
          stepsSm = basicStepsSm.prop( 'value' ),
          stepsLg = basicStepsLg.prop( 'value' ),
          sm = currPriceSm( basicStepsSm ),
          lg = currPrice( basicStepsLg ),
          singleStepPrice = stepPrice( basicStepsMd ),
          price = singleStepPrice * data.from;

        basicPrice.innerHTML = formatPriceBasic( basic, price + sm + lg );

        if ( stepsSm == 0 && stepsLg == 0 && data.from == 0 ) {
          instance.update( { from: 1 } );
          basicPrice.innerHTML = formatPriceBasic( basic, singleStepPrice + sm + lg );
        }
      },
      onUpdate: ( data ) => currStep( data.from, basicStepsSm, basicStepsLg, basicSteps ),
    } );

    basicStepsLg.ionRangeSlider( {
      min: 0,
      max: 20,
      from: 0,
      hide_min_max: true,
      skin: 'round',
      onChange: ( data ) => currStep( data.from, basicStepsSm, basicStepsMd, basicSteps ),
      onFinish: ( data ) => {
        const instance = basicStepsLg.data( 'ionRangeSlider' ),
          stepsSm = basicStepsSm.prop( 'value' ),
          stepsMd = basicStepsMd.prop( 'value' ),
          sm = currPriceSm( basicStepsSm ),
          md = currPrice( basicStepsMd ),
          singleStepPrice = stepPrice( basicStepsLg ),
          price = singleStepPrice * data.from;

        basicPrice.innerHTML = formatPriceBasic( basic, price + sm + md );

        if ( stepsSm == 0 && stepsMd == 0 && data.from == 0 ) {
          instance.update( { from: 1 } );
          basicPrice.innerHTML = formatPriceBasic( basic, singleStepPrice + sm + md );
        }
      },
      onUpdate: ( data ) => currStep( data.from, basicStepsSm, basicStepsMd, basicSteps ),
    } );

    basicRunner.ionRangeSlider( {
      min: 0,
      max: 1,
      from: 1,
      hide_min_max: true,
      from_fixed: true,
      to_fixed: true,
      skin: 'round',
    } );

    // Pro
    proStepsSm.ionRangeSlider( {
      min: 0,
      max: 20,
      from: 1,
      hide_min_max: true,
      skin: 'round',
      onChange: ( data ) => currStep( data.from, proStepsMd, proStepsLg, proSteps ),
      onFinish: ( data ) => {
        const instance = proStepsSm.data( 'ionRangeSlider' ),
          stepsMd = proStepsMd.prop( 'value' ),
          stepsLg = proStepsLg.prop( 'value' ),
          md = currPrice( proStepsMd ),
          lg = currPrice( proStepsLg ),
          singleStepPrice = stepPrice( proStepsSm ),
          price = singleStepPrice * data.from;

        proPrice.innerHTML = formatPricePro( price + md + lg );

        if ( stepsMd == 0 && stepsLg == 0 && data.from == 0 ) {
          instance.update( { from: 1 } );
          proPrice.innerHTML = formatPricePro( singleStepPrice + md + lg );
        }
      },
      onUpdate: ( data ) => currStep( data.from, proStepsMd, proStepsLg, proSteps ),
    } );

    proStepsMd.ionRangeSlider( {
      min: 0,
      max: 20,
      from: 0,
      hide_min_max: true,
      skin: 'round',
      onChange: ( data ) => currStep( data.from, proStepsSm, proStepsLg, proSteps ),
      onFinish: ( data ) => {
        const instance = proStepsMd.data( 'ionRangeSlider' ),
          stepsSm = proStepsSm.prop( 'value' ),
          stepsLg = proStepsLg.prop( 'value' ),
          sm = currPrice( proStepsSm ),
          lg = currPrice( proStepsLg ),
          singleStepPrice = stepPrice( proStepsMd ),
          price = singleStepPrice * data.from;

        proPrice.innerHTML = formatPricePro( price + sm + lg );

        if ( stepsSm == 0 && stepsLg == 0 && data.from == 0 ) {
          instance.update( { from: 1 } );
          proPrice.innerHTML = formatPricePro( singleStepPrice + sm + lg );
        }

      },
      onUpdate: ( data ) => currStep( data.from, proStepsMd, proStepsLg, proSteps ),
    } );

    proStepsLg.ionRangeSlider( {
      min: 0,
      max: 20,
      from: 0,
      hide_min_max: true,
      skin: 'round',
      onChange: ( data ) => currStep( data.from, proStepsSm, proStepsMd, proSteps ),
      onFinish: ( data ) => {
        const instance = proStepsLg.data( 'ionRangeSlider' ),
          stepsSm = proStepsSm.prop( 'value' ),
          stepsMd = proStepsMd.prop( 'value' ),
          sm = currPrice( proStepsSm ),
          md = currPrice( proStepsMd ),
          singleStepPrice = stepPrice( proStepsLg ),
          price = singleStepPrice * data.from;

        proPrice.innerHTML = formatPricePro( price + sm + md );

        if ( stepsSm == 0 && stepsMd == 0 && data.from == 0 ) {
          instance.update( { from: 1 } );
          proPrice.innerHTML = formatPricePro( singleStepPrice + sm + md );
        }
      },
      onUpdate: ( data ) => currStep( data.from, proStepsMd, proStepsLg, proSteps ),
    } );

    proRunner.ionRangeSlider( {
      min: 0,
      max: 1,
      from: 1,
      hide_min_max: true,
      from_fixed: true,
      to_fixed: true,
      skin: 'round',
    } );

    // FAQ
    const chatBtn = document.getElementById( 'chatLink' );
    if ( chatBtn )
      chatBtn.addEventListener( 'click', ( e ) => {
        Intercom( 'show' ); // eslint-disable-line
        e.preventDefault();
      } );
  }
} );
