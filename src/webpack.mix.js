const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../../public').mergeManifest();

mix.js('assets/js/larapanel/larapanel.js', 'modules/js')
    //.js('assets/js/components/ModuleList.vue', 'modules/js/components')
    .sass('assets/sass/larapanel/larapanel.scss', 'modules/css')
    .version();
