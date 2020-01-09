const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/assets/js')
    .sass('resources/sass/app.scss', 'public/assets/css')
    .sass('resources/sass/library.scss', 'public/assets/css')
    .copyDirectory('node_modules/admin-lte/docs_html/assets/img', 'public/assets/img')
    .copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');
// import adminlte js plugin
mix.scripts([
    'node_modules/datatables.net/js/jquery.dataTables.min.js',
    'node_modules/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
    'node_modules/chart.js/dist/Chart.min.js',
    'node_modules/moment/moment.js',
    'node_modules/daterangepicker/daterangepicker.js',
    'node_modules/daterangepicker/moment.min.js',
    'node_modules/summernote/dist/summernote-bs4.js',
    'node_modules/jquery-knob-chif/dist/jquery.knob.min.js',
    'node_modules/admin-lte/plugins/jsgrid/jsgrid.min.js',
    'node_modules/admin-lte/plugins/pdfmake/pdfmake.min.js',
    'node_modules/admin-lte/plugins/inputmask/min/jquery.inputmask.bundle.min.js',
    'node_modules/admin-lte/plugins/daterangepicker/moment.min.js',
    'node_modules/raphael/raphael.min.js',
    'node_modules/admin-lte/plugins/toastr/toastr.min.js',
    'node_modules/admin-lte/plugins/jquery-mapael/jquery.mapael.min.js',
    'node_modules/admin-lte/plugins/ekko-lightbox/ekko-lightbox.min.js',
    'node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js',
    'node_modules/jqvmap-novulnerability/dist/maps/jquery.vmap.usa.js',
    'node_modules/admin-lte/plugins/jquery-ui/jquery-ui.min.js',
    'node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
    'node_modules/@fullcalendar/core/main.min.js',
    'node_modules/@fullcalendar/daygrid/main.min.js',
    'node_modules/admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js',
    'node_modules/admin-lte/plugins/filterizr/filterizr.min.js',
    'node_modules/admin-lte/plugins/select2/js/select2.min.js',
    'node_modules/admin-lte/plugins/jquery-validation/jquery.validate.min.js',
    'node_modules/admin-lte/plugins/jquery-validation/additional-methods.min.js',
    'node_modules/admin-lte/plugins/sweetalert2/sweetalert2.min.js',
    'node_modules/admin-lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js',
    'node_modules/admin-lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
    'node_modules/admin-lte/plugins/pace-progress/pace.min.js',
    'node_modules/admin-lte/plugins/ion-rangeslider/js/ion.rangeSlider.min.js',
    'node_modules/admin-lte/plugins/overlayScrollbars/js/OverlayScrollbars.min.js',
    'node_modules/admin-lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
    'node_modules/admin-lte/plugins/jszip/jszip.min.js',
    'node_modules/sparklines/source/sparkline.js'
],'public/assets/js/library.min.js');

/** dev browsycn*/
mix.browserSync({
    proxy: 'hrm.io:8000'
});
