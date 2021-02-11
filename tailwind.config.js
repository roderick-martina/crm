const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')
module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: '#181818',
                'black-light': '#333',
                'cool-gray': colors.coolGray,
                primary: '#07f',
            },
            backgroundColor: {
                primary: '#07f',
                'primary-lighter': '#0295FF',
                'cool-gray': 'rgba(241,245,249,1)'
            },
            textColor: {
                primary: '#07f',
                'primary-lighter': '##0295FF',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/line-clamp'),
    ],
}
