/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.blade.php',
    './**/*.html',
    './**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        'event-yummy': "#E49287",
        'event-jazz': "#B92090",
        'event-history': "#95D4EB",
      },
    },
  },
  plugins: [],
}

