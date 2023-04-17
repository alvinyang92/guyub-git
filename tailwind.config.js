module.exports = {
  content: [
    './public/**/*.php',
    './public/**/*.js',
  ],
  theme: {

    flex: {
      '1': '1 1 0%',
      auto: '1 1 auto',
      initial: '0 1 auto',
      inherit: 'inherit',
      none: 'none',
      '1-auto': '1 0 auto',
    },

    screens: {
      // 'xxs': '320px',
      // 'xs': '480px',
      // 'sm': '640px',
      // 'md': '768px',
      // 'lg': '1024px',
      // 'xl': '1280px',
      // '2xl': '1536px',
      '3xl': { 'max': '1920px' },
      '2xl': { 'max': '1535px' },
      'xll': { 'max': '1440px' },
      'xl': { 'max': '1200px' },
     
      'sxl': { 'min': '1000px' },

      'lg': { 'max': '1024px' },
      'lgg': { 'max': '1023px' },
      'xgg': { 'max': '900px' },
      'slg': { 'min': '769px' },

      'md': { 'max': '768px' },
      'mdd': { 'max': '800px' },
      'smd': { 'min': '481px' },

      'sm': { 'max': '640px' },
      'xs': { 'max': '480px' },
    },

    extend: {
      //typography
      typography: {
        DEFAULT: {
          css: {
            fontSize: '1rem',
            lineHeight: '1.75rem',
            color: '#374151',
            a: {
              color: '#01ADB9',
              // textDecoration: 'none',
              fontWeight: '600',
              '&:hover': {
                color: '#000000',
              },
            },
          },
        },
      },

      //max width
      maxWidth: {

        '8xl': '90rem',//1440
        '9xl': '96rem',//1536
        '10xl': '120rem',//1920
      },
      //bg image
      backgroundImage: theme => ({
        'home-top-banner': "url('../images/home-top-banner.jpg')",
        'ads-top-banner': "url('https://wp-tid.zillowstatic.com/bedrock/app/uploads/sites/7/2021/01/brokers-hero-image-desktop2x-399b12-scaled.jpg')",
        'newlaunch-banner': "url('../images/new-launch-banner.jpg')",
        'interior-banner': "url('../images/interior-banner.jpg')",
        'rent-banner': "url('../images/rent-photo-slider.jpg')",
        'login-bg': "url('https://www.guyub.co/wp-content/uploads/2022/login-bg.png')",
        // 'banner-2': "url('../images/home/banner-2.jpg')",
        // 'feature-wood': "url('../images/roomba/overview/roomba-wood.jpeg')",
        // 's-series-wood': "url('../images/roomba/s-series/s-series-wood.jpeg')",

        // 'grey-floor': "url('../images/home/home-grey-floor.jpg')",
        // 'braava-grey': "url('../images/braava/overview/braava-grey-bg.jpg')",
        // 'm-series-grey': "url('../images/braava/m-series/m-series-grey-floor.jpeg')",

        // 'help-me-choose': "url('../images/reuse/help-me-choose-banner.jpg')",





      }),
      //color//bg color//all color
      colors: {
        'guyub-green': '#01ADB9',
        'guyub-black': '#2C2F3E',

      },
      textColor: theme => theme('colors'),
      textColor: {
        // 'ir-black': '#393f45',
      },
      //gtid
      gridTemplateColumns: {
        '1-2': '1.5fr 2fr',
        '2-1': '2.5fr 1fr',
        '1-3': '1.5fr 3fr',
      }

    },//end extend
  },
  variants: {

    extend: {
      fill: ['hover', 'focus'],
    },
  },
  plugins: [
 
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/typography'),
  
  ],//end plugings
}
