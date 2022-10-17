const mix = require('laravel-mix'); Calculating...



mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/main.css', 'public/css', [
     require('tailwindcss'), Calculating...
    ])
    .browserSync('weather-app.test');