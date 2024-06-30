/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  "./resources/**/*.js",
],
  theme: {
    extend: {
        "black" : "#060606",
    },
    fontFamily: {
        "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
    },
    fontFamily: {
        "2xs": ".625rem" //10px
    },
  },
  plugins: [],
}

