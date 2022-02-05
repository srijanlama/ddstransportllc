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

 mix.js("resources/js/front.js", "public/js")
    .vue()

mix.js("resources/js/app.js", "public/js")
    .vue()
    .sass("resources/sass/app.scss", "public/css")

mix.styles(["resources/css/admin/main.css"], "public/css/admin.css");
mix.styles(
        [
            "resources/css/frontend/bootstrap.min.css",
            "resources/css/frontend/owl.theme.default.min.css",
            "resources/css/frontend/owl.carousel.min.css",
            "resources/css/frontend/animate.min.css",
            "resources/css/frontend/boxicons.min.css",
            "resources/css/frontend/flaticon.css",
            "resources/css/frontend/meanmenu.min.css",
            "resources/css/frontend/nice-select.min.css",
            "resources/css/frontend/odometer.min.css",
            "resources/css/frontend/style.css",
            "resources/css/frontend/custom.css",
            "resources/css/frontend/responsive.css",
        ],
        "public/css/frontend.css"
    )
    .combine(
        [
            "resources/js/frontend/jquery.min.js",
            "resources/js/frontend/bootstrap.bundle.min.js",
            "resources/js/frontend/meanmenu.min.js",
            "resources/js/frontend/wow.min.js",
            "resources/js/frontend/owl.carousel.min.js",
            "resources/js/frontend/nice-select.min.js",
            "resources/js/frontend/magnific-popup.min.js",
            "resources/js/frontend/jarallax.min.js",
            "resources/js/frontend/appear.min.js",
            "resources/js/frontend/odometer.min.js",
            // "resources/js/frontend/smoothscroll.min.js",
            // "resources/js/frontend/form-validator.min.js",
            // "resources/js/frontend/contact-form-script.js",
            // "resources/js/frontend/ajaxchimp.min.js",
            "resources/js/frontend/custom.js",
            "resources/js/frontend/main.js",
        ],
        "public/js/frontend.js"
    )
    .sourceMaps(true);