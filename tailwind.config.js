module.exports = {
  content: [
    './resources/js/**/*.{vue,js,ts,tsx}',
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#2563eb', // blue-600
        primaryDark: '#1d4ed8', // blue-700
        background: '#f9fafb', // gray-50
      }
    },
  },
  plugins: [],
}
