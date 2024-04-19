/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
        "./layouts/**/*.{htm,html,js}",
        "./pages/**/*.{htm,html,js}",
        "./partials/**/*.{htm,html,js}"
    ],
  theme: {
    extend: {
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

