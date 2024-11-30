/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    container: {
        padding: {
            DEFAULT: '15px',
        }
    },
    fontFamily: {
        primary: 'DM Serif Display',
        secondary: 'Jost',
    },
    backgroundImage: {
        hero: "url('/images/hero/bg.jpg')",
        grid: "url('/images/grid/grid.jpg')",
    },
    screens: {
        sm: '640px',
        md: '768px',
        lg: '960px',
        xl: '1200px',
    },
    extend: {
        colors: {
            primary: {
                DEFAULT: '#292f36',
                hover: '#343e4a'
            },
            secondary: '#4d5053',
            accent: {
                DEFAULT: '#cda274',
                secondary: '#f4f0ec',
                hover: '#b88c5d',
            },
        },
    },
  },
  plugins: [],
}

