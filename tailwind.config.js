/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    'app/**/*.blade.php',
    'app/**/*.html',
    'app/**/*.php',
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

