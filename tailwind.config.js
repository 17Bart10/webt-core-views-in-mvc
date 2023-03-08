/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{html,js}"
  ],
  theme: {
    extend: {
      colors: {
        // Configure your color palette here
         'headerColor':'#356198',
        },
    },
  },
  plugins: [],
}