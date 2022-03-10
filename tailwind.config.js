module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        fontFamily: {
            'sans': ['Manrope', 'sans-serif'],
        },
        fontSize: {
            'base': ['13px', '20px'],
            'lg': ['16px', '24px'],
            'xl': ['20px', '28px'],
        },
        colors: {
            'blue-400': 'hsl(217, 19%, 35%)',
            'blue-300': 'hsl(214, 17%, 51%)',
            'blue-200': 'hsl(212, 23%, 69%)',
            'blue-100': 'hsl(210, 46%, 95%)',
            black: 'hsl(0, 0%, 0%)',
            white: 'hsl(100,100%,100%)',
        },
        extend: {},
    },
    plugins: [],
}
