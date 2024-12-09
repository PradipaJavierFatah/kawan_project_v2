import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/profile/tes.blade.php',
        './resources/views/profile/testing.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                Kanit: ['Kanit'],
                poppins: ['poppins'],
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#F2789F',
                secondery: '#7BD3EA',
                thrid:'#19012C',
                purple: "A020F0",
            },

        },
    },

    plugins: [forms],
};

