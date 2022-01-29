const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'brand': {
                    '50': '#f4f4f4',
                    '100': '#e9e8ea',
                    '200': '#c8c6c9',
                    '300': '#a7a3a9',
                    '400': '#655e69',
                    '500': '#231928',
                    '600': '#201724',
                    '700': '#1a131e',
                    '800': '#150f18',
                    '900': '#110c14'
                },
                'brandt': {
                    '50': '#f6fffe',
                    '100': '#edfffe',
                    '200': '#d3fffc',
                    '300': '#b8fffa',
                    '400': '#82fff7',
                    '500': '#4dfff3',
                    '600': '#45e6db',
                    '700': '#3abfb6',
                    '800': '#2e9992',
                    '900': '#267d77'
                }
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
