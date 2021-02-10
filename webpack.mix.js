// const mix = require('laravel-mix');
//
// /*
//  |--------------------------------------------------------------------------
//  | Mix Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Mix provides a clean, fluent API for defining some Webpack build steps
//  | for your Laravel applications. By default, we are compiling the CSS
//  | file for the application as well as bundling up all the JS files.
//  |
//  */
//
// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

const mix = require('laravel-mix');
const path = require("path");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

const domain = 'laravel-vuejs-boilerplate.test';

// The mix script:
mix.browserSync({
    // proxy: 'https://' + domain,
    proxy: 'http://' + domain,
    host: domain,
    open: false
    // open: 'external',
    // https: {
    //     key: homedir + "/.config/valet/Certificates/" + domain + ".key",
    //     cert: homedir + "/.config/valet/Certificates/" + domain + ".crt"
    // },
})

mix.postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
])
    .js("resources/js/app.js", "public/js")
    .vue({version: 2});

