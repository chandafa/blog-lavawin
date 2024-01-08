module.exports = {
    darkMode: 'class',
    lightMode: 'class',

    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        colors: {
            'satu': '#6f00ff', // biru
            'dua': '#5b5b5c', // grey
            'tiga': '#FDFBFF', //putih
            'empat': '#c1ae93',
            'beige': '#a7ab90',

          }
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }
