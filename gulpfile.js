var elixir = require('laravel-elixir');

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

elixir(function (mix) {

    mix.sass('app.scss')
        .sass('admin.scss');

    mix.scripts([
        '../vendors/sb-admin/bower_components/jquery/dist/jquery.min.js',
        '../vendors/sb-admin/bower_components/bootstrap/dist/js/bootstrap.min.js',
        '../vendors/sb-admin/bower_components/metisMenu/dist/metisMenu.min.js',
        'vendors/laravel-restful-links.js',
        'admin.js',
    ]);

    mix.scripts([
            '../vendors/sb-admin/bower_components/jquery/dist/jquery.min.js',
            'vendors/jquery-ui-1.10.4.min.js',
            'vendors/jquery.nicescroll.js',
            'vendors/jquery.sticky.js',
            'masonry.pkgd.min.js',
            'imagesloaded.pkgd.min.js',
            'vendors/jquery.parallax.js',
            'script.js',
        ], 'public/js/app.js')
        .version([
            '/css/app.css',
            '/css/admin.css',
            '/js/all.js',
            '/js/app.js',
        ]);

    mix.scripts([
        '../vendors/sb-admin/bower_components/raphael/raphael-min.js',
        '../vendors/sb-admin/bower_components/morrisjs/morris.min.js',
    ], 'public/js/morris-bundle.js');

    mix.scripts([
        '../vendors/sb-admin/bower_components/datatables/media/js/jquery.dataTables.min.js',
        '../vendors/sb-admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js',
        '../vendors/sb-admin/bower_components/datatables-responsive/js/dataTables.responsive.js',
    ], 'public/js/tables-bundle.js');

    mix.scripts([
        '../vendors/sb-admin/bower_components/flot/excanvas.min.js',
        '../vendors/sb-admin/bower_components/flot/jquery.flot.js',
        '../vendors/sb-admin/bower_components/flot/jquery.flot.pie.js',
        '../vendors/sb-admin/bower_components/flot/jquery.flot.resize.js',
        '../vendors/sb-admin/bower_components/flot/jquery.flot.time.js',
        '../vendors/sb-admin/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js',
    ], 'public/js/flot-bundle.js');
});

