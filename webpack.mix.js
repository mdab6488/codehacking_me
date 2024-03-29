const { mix } = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/libs/blog-post.css',
    'resources/assets/css/libs/bootstrap.min.css',
    'resources/assets/css/libs/font-awesome.css',
    'resources/assets/css/libs/metisMenu.css',
    'resources/assets/css/libs/sb-admin-2.css'
], 'public/css/libs.css');

mix.scripts([
    'resources/assets/js/libs/jquery-3.3.1.slim.min.js',
    'resources/assets/js/libs/bootstrap.min.js',
    'resources/assets/js/libs/popper.min.js',
    'resources/assets/js/libs/metisMenu.js',
    'resources/assets/js/sb-admin-2.js',
    'resources/assets/js/libs/scripts.js'
], 'public/js/libs.js');