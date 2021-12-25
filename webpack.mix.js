let mix = require('laravel-mix');

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
    .styles(
    [
        'resources/assets/css/bootstrap.min.css',
        'resources/assets/css/utilities.css',
        'resources/assets/css/icon.css',
        'resources/assets/css/login.css',
        'resources/assets/css/forgot.css',
        'resources/assets/css/profile.css',
        'resources/assets/css/register.css',
        'resources/assets/css/settings.css',
        'resources/assets/css/settings_images.css',
        'resources/assets/css/add_project.css',
        'resources/assets/css/custom.css',
    ],
    'public/css/app.css'
    )
    .styles(
        [
            'resources/admin-assets/css/icheck-bootstrap.min.css',
            'resources/admin-assets/css/all.min.css',
            'resources/admin-assets/css/adminlte.min.css',
        ],
        'public/css/admin.css'
        )
    .scripts(
        [
            'resources/assets/js/bootstrap.bundle.min.js',
            'resources/assets/js/custom.js',
        ],
        'public/js/app.js'
    )
    .scripts(
        [
            'resources/admin-assets/js/bootstrap.bundle.min.js',
            'resources/admin-assets/js/jquery.min.js',
            'resources/admin-assets/js/adminlte.min.js',
        ],
        'public/js/admin.js'
    );



