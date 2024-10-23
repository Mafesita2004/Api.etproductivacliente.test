const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .version();

mix.browserSync('localhost');

mix.webpackConfig({
    resolve: {
        fallback: {
            "fs": false // Esto soluciona posibles problemas de compatibilidad con ciertos paquetes
        }
    }
});
