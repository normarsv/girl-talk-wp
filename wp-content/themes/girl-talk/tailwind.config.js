module.exports = {
    purge: [
        './views/**/*.blade.php',
        './assets/js/**/*.js',
    ],
    darkMode: false,
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1.25rem',
                md: '2rem',
                lg: '1.25rem'
            },
        },
        fontFamily: {
            'sans': 'ArticulatCF',
            'title': 'WayfinderCF'
        },
        extend: {
            colors: {
                'accent': '#F9BDC6',
                'accent-light': '#FFECF2',
                'black': '#000000',
                'dark': '#231F20'
            },
            boxShadow: {
                accent: '8px 8px 20px #F9BDC6',
                'accent-input': '4px 4px 20px #F9BDC6'
            },
            maxWidth: {
                '900': '900px',
                '650': '650px',
                '600': '600px',
                '460': '460px',
                '160': '160px',
            },
        },
        minWidth: {
            '400': '400px',
        },
        maxHeight: {
            '50': '50px',
        },
        textShadow: {
            'default': '8px 8px 50px #EA6075',
        }
    },
    variants: {
        extend: {
            backgroundColor: ['checked'],
            opacity: ['disabled'],
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/typography'),
        require('tailwindcss-textshadow')
    ],
};