const mix = require('laravel-mix');
var webpack = require('webpack');
require('./laravel-mix-plugin');
require('./laravel-mix-tailwind');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
     .combine([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/foundation-sites/dist/js/foundation.min.js',
    ], 'public/js/bundle.js')
    //.foo('FooBarBazz')
   // .tailwind('./tailwind.config.js')

 .webpackConfig({
    resolve: {
        modules: [
            'node_modules'
        ],
    },
     plugins: [
         new webpack.LoaderOptionsPlugin({
             test: /\.s[ac]ss$/,
             options: {
                 includePaths: ['resources/assets/sass', 'node_modules/foundation-sites/scss']
             }
        })
    ]
});