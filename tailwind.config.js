const { setBlockTracking } = require('vue');

module.exports = {
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
    ],
    options: {
      safelist: [
        /^hidden/,
        /^absolute/,
        /^align-/,
        /^bg-/,
        /^bl-/,
        /^block/,
        /^border-/,
        /^bottom/,
        /^-bottom/,
        /^btn-bl-/,
        /^col-span-/,
        /^content-/,
        /^fixed/,
        /^flex/,
        /^float-/,
        /^font-/,
        /^from-/,
        /^gap/,
        /^grayscale/,
        /^grid/,
        /^h-/,
        /^inline/,
        /^inline-block/,
        /^items-/,
        /^left/,
        /^-left/,
        /^m-/,
        /^mb-/,
        /^ml-/,
        /^mr-/,
        /^mt-/,
        /^mx-/,
        /^my-/,
        /^-mb-/,
        /^-ml-/,
        /^-mr-/,
        /^-mt-/,
        /^-mx-/,
        /^-my-/,
        /^max-/,
        /^min-/,
        /^order/,
        /^opacity-/,
        /^overflow-/,
        /^p-/,
        /^pb-/,
        /^pl-/,
        /^pr-/,
        /^pt-/,
        /^px-/,
        /^py-/,
        /^place-/,
        /^relative/,
        /^right/,
        /^-right/,
        /^rounded/,
        /^self-/,
        /^shadow-/,
        /^static/,
        /^text-/,
        /^top/,
        /^-top/,
        /^to-/,
        /^transform/,
        /^translate-/,
        /^-translate-/,
        /^via-/,
        /^w-/,
        /^z-/,
        /^md:hidden/,
        /^md:absolute/,
        /^md:align-/,
        /^md:bg-/,
        /^md:block/,
        /^md:border-/,
        /^md:bottom/,
        /^md:-bottom/,
        /^md:btn-bl-/,
        /^md:col-span-/,
        /^md:content-/,
        /^md:fixed/,
        /^md:flex/,
        /^md:float-/,
        /^md:font-/,
        /^md:from-/,
        /^md:gap/,
        /^md:grayscale/,
        /^md:grid/,
        /^md:h-/,
        /^md:inline/,
        /^md:inline-block/,
        /^md:items-/,
        /^md:left/,
        /^md:-left/,
        /^md:m-/,
        /^md:mb-/,
        /^md:ml-/,
        /^md:mr-/,
        /^md:mt-/,
        /^md:mx-/,
        /^md:my-/,
        /^md:-mb-/,
        /^md:-ml-/,
        /^md:-mr-/,
        /^md:-mt-/,
        /^md:-mx-/,
        /^md:-my-/,
        /^md:max-/,
        /^md:min-/,
        /^md:order/,
        /^md:opacity-/,
        /^md:overflow-/,
        /^md:p-/,
        /^md:pb-/,
        /^md:pl-/,
        /^md:pr-/,
        /^md:pt-/,
        /^md:px-/,
        /^md:py-/,
        /^md:place-/,
        /^md:relative/,
        /^md:right/,
        /^md:-right/,
        /^md:rounded/,
        /^md:self-/,
        /^md:shadow-/,
        /^md:static/,
        /^md:sticky/,
        /^md:text-/,
        /^md:top/,
        /^md:-top/,
        /^md:to-/,
        /^md:transform/,
        /^md:translate-/,
        /^md:-translate-/,
        /^md:via-/,
        /^md:w-/,
        /^md:z-/,
        /^lg:hidden/,
        /^lg:inline-block/,
      ],
    },
  },
  theme: {
    fontFamily: {
      'body': [ 'Lato, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji' ],
      'display': [ 'maven-pro, -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji' ],
    },
    colors: {
      black: '#000',
      white: '#fff',
      transparent: 'rgba(255, 255, 255, 0)',
      primary: {
        DEFAULT: '#19a99b',
        'dark': '#18a092',
        'darker': '#0d8578',
      },
      dark: {
        DEFAULT: '#0a2540',
        alt: '#124475',
        600: '#103963',
        700: '#0D2F52',
        'heading': '#0D2F52',
      },
      body: {
        DEFAULT: '#0a2540',
        light: '#103963',
      },
      light: '#f6f9fc',
      green: {
        DEFAULT: '#19a99b',
        100: '#cbfdfd',
        'light': '#55e5c7',
        'alt-1': '#169376',
        'alt-2': '#1C6050',
      },
      orange: {
        DEFAULT: '#f2994a',
        600: '#e8685b',
        700: '#C94D41',
      },
      red: '#ff4a63',
      yellow: '#eeaf03',
      blue: '#30daff',
      'color-curve-blue': '#11253e',
      'color-curve-powder-blue': '#d5f8fc',
      'oxford-blue': {
        DEFAULT: '#0a2540',
        50: '#f9fcfd',
        100: '#e7e9ec',
        200: '#c2c9cf',
        300: '#9da8b3',
        400: '#546679',
        500: '#0a2540',
        600: '#082038',
        700: '#081c30',
        800: '#061626',
        900: '#05121f',
      },
      gray: {
        100: '#f7fafc',
        200: '#edf2f7',
        300: '#e2e8f0',
        400: '#cbd5e0',
        500: '#a0aec0',
        600: '#718096',
        700: '#4a5568',
        800: '#2d3748',
        900: '#1a202c',
      },
      gray2: {
        '111': '#111111',
        '222': '#222222',
        '333': '#333333',
        '444': '#444444',
        '555': '#555555',
        '667': '#666666',
        '777': '#777777',
        '888': '#888888',
        '999': '#999999',
        'aaa': '#aaaaaa',
        'bbb': '#bbbbbb',
        'ccc': '#cccccc',
        'ddd': '#dddddd',
        'eee': '#eeeeee',
      },
      'bl-gradient': {
        'teal1': '#5be0e5',
        'teal2': '#75e8de',
        'mint1': '#9fd8cc',
        'mint2': '#c9f7ee',
        'mint3': '#e4faf7',
      },
      'nk': {
        'blue-application': '#212437',
        'blue-light': '#c1ebec',
        'blue-marine': '#0a6376',
        'blue-midnight': '#002139',
        'blue-midnight2': '#00253f',
        'blue-soft': '#294158',
        'gold': '#f7ac43',
        'gray1': '#e6eaed',
        'gray2': '#d2dade',
        'gray3': '#9da7b2',
        'gray3point5': '#677583',
        'gray4': '#3b5065',
        'lavender': '#8b91e4',
        'orange-argo': '#ef6c34',
        'orange-burnt': '#e5503c',
        'primary': '#08b1ab',
        'primary-dark': '#079792',
        'silver': '#f4f8f8',
        'teal': '#08b1ab',
        'teal-light': '#e9f7f5',
        'teal-medium': '#92d8d3',
        'teal-vivid': '#b2ffe0',
      },
      'qd': {
        'gray1': '#f3f3f3',
        'marine-a1': '#33acad',
        'marine-a2': '#06a7a4',
        'marine-a3': '#07697a',
        'marine-a4': '#097985',
        'marine-a5': '#0a5065',
        'mint-a1': '#cddcdf',
        'mint-a2': '#6acac8',
        'mint-b1': '#e9f7f5',
        'mint-b2': '#c7edeb',
        'mint-b3': '#9cdfdc',
        'mint-c1': '#e8fcf8',
        'mint-d1': '#d9f1ef',
        'mint-d2': '#c4eae7',
        'mint-d3': '#e8fcf8',
        'primary-on-dark': '#1eeae3',
      },
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1216px',
    },
    boxShadow: {
      DEFAULT: '0 1px 3px 0 rgba(1,58,63, .1), 0 1px 2px 0 rgba(1,58,63, .06)',
      'sm': '0 1px 46px -4px rgb(0 0 0 / 28%)',
      'md': '0 4px 6px -1px rgba(1,58,63, .1), 0 2px 4px -1px rgba(1,58,63, .06)',
      'lg': '0 10px 15px -3px rgba(1,58,63, .12), 0 4px 6px -2px rgba(1,58,63, .05)',
      'xl': '0 20px 25px -5px rgba(31,47,70, .12), 0 10px 10px -5px rgba(31,47,70, .04)',
      '2xl': '0 25px 50px -12px rgba(31,47,70, .12)',
      'inner': 'inset 0 2px 4px 0 rgba(1,58,63, .06)',
      'focus': '0 0 0 3px rgba(77,190,164, .5)',
      'cf': '0 20px 35px rgba(123, 171, 157, .48)',
      'cf-l': '20px 20px 35px rgba(123, 171, 157, .48)',
      'cf-light': '0 20px 35px rgba(123, 171, 157, .3)',
      'card': '0 4px 15px rgba(38, 83, 95, .05)',
      'img': '0 50px 100px -20px rgba(50, 50, 93, .25), 0 30px 60px -30px rgba(0, 0, 0, .3)',
      'none': 'none',
      'nk-qd1': '0px 10px 30px rgb(10, 37, 64, 0.15)',
      'nk-qd2': '0px 15px 50px rgb(10, 37, 64, 0.15)',
      'nk-qd3': '0px 34px 50px rgb(10, 37, 64, 0.15)',
      'nk-qd-glow': '0px 4px 94px rgba(255, 255, 255, 0.25)',
    },
    container: {
      center: true,
      padding: '1rem',
    },
    aspectRatio: {
      'none': 0,
      'square': [ 1, 1 ],
      '16/9': [ 16, 9 ],
      '4/3': [ 4, 3 ],
      '4/5': [ 4, 5 ],
      '21/9': [ 21, 9 ],
    },
    extend: {
      inset: {
        '-100': '-100px',
        '-20': '-20px',
        '-40': '-40px',
        '-2': '-2px',
        '-1': '-1px',
        '1': '1px',
        '30': '30px',
        '100': '100px',
      },
      margin: {
        '-68': '-20.5rem',
        '-70': '-25rem',
      },
      width: {
        '14': '3.5rem',
        '70': '344px',
        '2/3': 'calc(100% * 2 / 3)',
        'grid-1/12':'calc(1184px/12*1)',
        'grid-2/12':'calc(1184px/12*2)',
        'grid-3/12':'calc(1184px/12*3)',
        'grid-4/12':'calc(1184px/12*4)',
        'grid-5/12':'calc(1184px/12*5)',
        'grid-6/12':'calc(1184px/12*6)',
        'grid-7/12':'calc(1184px/12*7)',
        'grid-8/12':'calc(1184px/12*8)',
        'grid-9/12':'calc(1184px/12*9)',
        'grid-10/12':'calc(1184px/12*10)',
        'grid-11/12':'calc(1184px/12*11)',
        'grid-12/12':'calc(1184px/12*12)',
      },
      padding: {
        '68': '19rem',
        '1/2': '50%',
        '1/3': '33.33333%',
        '2/3': '66.66667%',
        '1/4': '25%',
        '3/4': '75%',
        '1/5': '20%',
        '2/5': '40%',
        '3/5': '60%',
        '4/5': '80%',
        '1/6': '16.66667%',
        '5/6': '83.33333%',
        'full': '100%',
      },
      fontSize: {
        '2xs': [ '0.65rem', '1.25' ],
        'xs': [ '.75rem', '1.25' ],
        'sm': [ '.875rem', '1.25' ],
        'base': [ '1rem', '1.25' ],
        'lg': [ '1.125rem', '1.25' ],
        'xl': [ '1.25rem', '1.25' ],
        '2xl': [ '1.5rem', '1.25' ],
        '3xl': [ '1.875rem', '1.25' ],
        '4xl': [ '2.25rem', '1.25' ],
        '5xl': [ '2.5rem', '1.1' ],
        '6xl': [ '3rem', '1.1' ],
        '7xl': [ '3.5rem', '1.1' ],
        '8xl': [ '4.5rem', '1.1' ],
        '9xl': [ '6rem', '1.1' ],
      },
      maxWidth: {
        '32': '8rem',
        '2xs': '17rem',
        '10xl': '106rem',
        '1/3': '33%',
        '1/2': '50%',
        '2/3': '66.6%',
        '3/4': '75%',
        '4/5': '80%',
        'vw': 'calc(100vw - 2rem)',
        'grid-1/12':'calc(1184px/12*1)',
        'grid-2/12':'calc(1184px/12*2)',
        'grid-3/12':'calc(1184px/12*3)',
        'grid-4/12':'calc(1184px/12*4)',
        'grid-5/12':'calc(1184px/12*5)',
        'grid-6/12':'calc(1184px/12*6)',
        'grid-7/12':'calc(1184px/12*7)',
        'grid-8/12':'calc(1184px/12*8)',
        'grid-9/12':'calc(1184px/12*9)',
        'grid-10/12':'calc(1184px/12*10)',
        'grid-11/12':'calc(1184px/12*11)',
        'grid-12/12':'calc(1184px/12*12)',
      },
      maxHeight: {
        'none': 'none',
        '0': '0',
        '1': '0.25rem',
        '2': '0.5rem',
        '3': '0.75rem',
        '4': '1rem',
        '5': '1.25rem',
        '6': '1.5rem',
        '8': '2rem',
        '10': '2.5rem',
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
      },
      borderRadius: {
        'pill': '30px',
        'xl': '14px',
        '2xl': '18px',
        '4xl': '50px',
      },
      lineHeight: {
        'xs': '1.1',
        'tight': '1.25',
        'relaxed': '1.725',
      },
      zIndex: {
        '-2': '-2',
        '-1': '-1',
        '60': 60,
        '70': 70,
        '80': 80,
        '90': 90,
        '100': 100,
        '999': 999,
      },
      opacity: {
        '10': '0.1',
      },
      backgroundPosition: {
        'bottom-px': 'center bottom -1px',
      },
      backgroundSize: {
        '1/4': '25%',
        '3/4': '75%',
        '1/2': '50%',
        '4/6': '66.666667%',
        '7/12': '58.333333%',
        'full': '10%',
      },
    },
  },
  variants: {
    aspectRatio: [ 'responsive' ],
    extend: {},
  },
  plugins: [
    require( 'tailwindcss-aspect-ratio' ),
  ],
}
