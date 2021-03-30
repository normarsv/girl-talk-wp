module.exports = {
    purge: [
        './views/**/*.blade.php',
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
            },
        },
        minWidth: {
            '400': '400px',
        }
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/typography'),
    ],
};