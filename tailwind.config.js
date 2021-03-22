const colors = require('tailwindcss/colors');

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    minWidth: {
      '250': '250px'
    },
    maxWidth:{
      'small':'320px'
    },
    extend: {
      alignItems: ['hover', 'focus'],
      transformOrigin: {
        '24': '6rem',
        'full': '100%',
      },
      fontSize: {'big':'3rem'},
      colors: {
        ...colors,
        'bg-green': '#6AA84F'
      },
      fontFamily: {
        'lato': ['Lato'],
        'Montserrat': ['Montserrat']
      },
      variants: {
        animation: ['responsive', 'motion-safe', 'motion-reduce', 'hover','focus']
      },
      backdropFilter: { // defaults to {}
        'none': 'none',
        'blur': 'blur(20px)',
      }
    }
  },

  variants: {
      extend: {
        translate: ['motion-reduce'],
      }
    },
  plugins: [],
}
