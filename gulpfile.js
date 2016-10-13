const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.styles([
        'css/custom.css',
        '../../node_modules/semantic-ui/dist/semantic.min.css',
    ], 'public/css/frontend.css', 'resources/assets' )
    mix.webpack('app.js')
    mix.scripts([
        '../../public/js/app.js',
        'js/custom.js',
        'js/jquery-3.1.0.min.js',
        '../../node_modules/semantic-ui/dist/semantic.min.js',
    ], 'public/js/frontend.js', 'resources/assets' )
});
