module.exports = {
    purge: [
        './views/**/*.blade.php',
    ],
    darkMode: false,
    theme: {
        container: {
            center: true,
        },
        fontFamily: {
            'sans': 'ArticulatCF-Normal',
            // 'sans': 'ArticulatCF-Regular',
            'title': 'WayfinderCF-Bold'
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
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
    ],
};