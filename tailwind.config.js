import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                /* === PRIMARY COLORS === */
                'primary-verdigris': '#4DBCB6',
                'primary-chinese-black': '#171717',
                'primary-bright-gray': '#EFEFEF',
                'primary-white': '#FFFFFF',

                /* === ALERT COLORS === */
                'alert-red': '#EA3D2F',
                'alert-green': '#33A951',
                'alert-yellow': '#F3A919',

                /* === SECONDARY COLORS === */
                'secondary-green-01': '#B7E2E0',
                'secondary-green-02': '#CAEBE9',
                'secondary-green-03': '#DBF2F0',
                'secondary-green-04': '#B7E2E0',
                'secondary-green-05': '#6C9896',
                'secondary-green-06': '#173837',
                'secondary-green-07': '#081312',

                /* === MONOCHROME COLORS === */
                'monochrome-mono-01': '#FAFAFA',
                'monochrome-mono-02': '#F5F5F5',
                'monochrome-mono-03': '#E5E5E5',
                'monochrome-mono-04': '#D4D4D4',
                'monochrome-mono-05': '#A3A3A3',
                'monochrome-mono-06': '#737373',
                'monochrome-mono-07': '#525252',
                'monochrome-mono-08': '#737373',
                'monochrome-mono-09': '#404040',
                'monochrome-mono-10': '#262626',
                'monochrome-mono-11': '#171717',
                'monochrome-mono-12': '#0A0A0A',
            }
        },
    },

    plugins: [forms],
};
