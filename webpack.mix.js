const mix = require("laravel-mix");

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

mix
  .js("resources/js/app.js", "public/js")
  .sass("resources/sass/app.scss", "public/css")
  .browserSync("pip.test")
  .disableNotifications();

mix.styles(
  [
    "public/css/normalize.css",
    "public/css/bootstrap.min.css",
    "public/css/swiper.min.css",
    "public/css/app.css"
  ],
  "public/css/all.css"
);

mix.scripts(
  [
    "public/js/jquery-3.4.1.min.js",
    "public/js/popper.min.js",
    "public/js/bootstrap.bundle.min.js",
    "public/js/swiper.min.js",
    "public/js/app.js"
  ],
  "public/js/all.js"
);
