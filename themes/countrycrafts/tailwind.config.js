/** @type {import('tailwindcss').Config} */
import colors from 'tailwindcss/colors';
import plugin from 'tailwindcss/plugin';

module.exports = {
  content: [
        "./layouts/**/*.{htm,html,js}",
        "./pages/**/*.{htm,html,js}",
        "./partials/**/*.{htm,html,js}"
    ],
  theme: {
    extend: {
        colors: {
            ...colors,
            "mom-red":"#9B262C",
            "mom-yellow": "#F9CC57",
            "mom-teal": "#32837D"
        },
        textShadow: {
            sm: '0 1px 2px rgba(0, 0, 0, 0.25)',
            DEFAULT: '0 2px 4px rgba(0, 0, 0, 0.45)',
            lg: '0 8px 16px rgba(0, 0, 0, 0.65)',
        },
        fontFamily:{
            architects:["Architects Daughter", "cursive"],
            dancing:["Dancing Script", "cursive"]
        },
        screens: {
            '3xl': '1900px'
        },
        backgroundImage: {
            "home-hero-pattern": "url('images/YarnBanner.jpeg')",
            "wall-of-yarn": "url('images/WallOYarn.jpeg')",
        },
    }
  },
  plugins: [
    plugin(function ({ matchUtilities, theme }) {
      matchUtilities(
        {
          'text-shadow': (value) => ({
            textShadow: value,
          }),
        },
        { values: theme('textShadow') }
      )
    }),
  ],
}

