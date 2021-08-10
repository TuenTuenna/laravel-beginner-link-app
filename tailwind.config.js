const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {

        // pagination: theme => ({
        //     color: theme('colors.purple.600'),
        //     linkFirst: 'mr-6 border rounded',
        //     linkSecond: 'rounded-l border-l',
        //     linkBeforeLast: 'rounded-r border-r',
        //     linkLast: 'ml-6 border rounded',
        // }),
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        // require('tailwindcss-plugins/pagination'),
        require('@tailwindcss/forms'),

    ],
};
