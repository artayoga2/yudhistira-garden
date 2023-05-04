/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            'Inter': ['Inter', 'sans-serif']
        },
        extend: {},
    },
    plugins: [
        require('flowbite/plugin')
    ],
}

