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
            'sans': 'ArticulatCF-Regular',
            'title': 'WayfinderCF-Bold'
        },
        extend: {
            colors: {
                'accent': '#F9BDC6',
                'accent-light': '#FFECF2',
                'black': '#000000',
                'dark': '#231F20'
            }
        },
        screens: { //This is to remove xxl size
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};