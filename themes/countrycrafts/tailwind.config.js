/** @type {import('tailwindcss').Config} */
import colors from 'tailwindcss/colors';
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
            "mom-yellow": "#F9CC57"
        },
        fontFamily:{
            architects:["Architects Daughter", "cursive"]
        },
        screens: {
            '3xl': '1900px'
        },
        backgroundImage: {
            "home-hero-pattern": "url('images/YarnBanner.jpeg')",
        },
    }
  },
  plugins: [],
}

