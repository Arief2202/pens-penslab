const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        // './node_modules/tw-elements/dist/js/**/*.js'
    ],

    theme: {
        container: {
            center: true,
            padding: '16px',
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                color1: '#00296B',
                color3: '#FDC500',
                dark: '#0f172a',
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        // require('tw-elements/dist/plugin')
    ],
};
