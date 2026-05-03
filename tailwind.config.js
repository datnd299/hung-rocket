/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/views/web/default/pages/home.blade.php',
    './resources/views/web/default/includes/footer.blade.php'
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
        heading: ['Montserrat', 'ui-sans-serif', 'system-ui'],
      },
      colors: {
        primary: '#fbcb1c',
        'dark-bg': '#050505',
        'card-bg': '#111111',
        surface: '#1a1a1a',
        'text-muted': '#9ca3af',
      },
      borderColor: {
        DEFAULT: 'rgba(255, 255, 255, 0.1)',
      },
      animation: {
        marquee: 'marquee 30s linear infinite',
      },
      keyframes: {
        marquee: {
          '0%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(-50%)' },
        },
      },
    },
  },
  plugins: [],
}