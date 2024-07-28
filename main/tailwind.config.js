/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js}"],
    theme: {
      extend: {
        colors: {
          primary: '#000',
          secondary: '#888',
        },
      },
    },
    plugins: [
        require('@iconify/tailwind'),
    ],
  }