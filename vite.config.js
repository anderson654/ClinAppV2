import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vitePluginRequire from "vite-plugin-require";
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Resources paths
                'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/js/app.js',

                // Resources assets js file paths
                'resources/assets/js/add-products', 
                'resources/assets/js/advancedform', 
                'resources/assets/js/alerts', 
                'resources/assets/js/apexchart',  
                'resources/assets/js/authentication-main', 
                'resources/assets/js/authentication', 
                'resources/assets/js/blog-post', 
                'resources/assets/js/canada', 
                'resources/assets/js/carousel', 
                'resources/assets/js/cart', 
                'resources/assets/js/chart', 
                'resources/assets/js/chartjs-charts', 
                'resources/assets/js/charts', 
                'resources/assets/js/chat', 
                'resources/assets/js/Check-out', 
                'resources/assets/js/checkbox-selectall', 
                'resources/assets/js/color-picker', 
                'resources/assets/js/construction', 
                'resources/assets/js/content-scroll', 
                'resources/assets/js/custom-switcher', 
                'resources/assets/js/datatable', 
                'resources/assets/js/defaultmenu', 
                'resources/assets/js/echarts', 
                'resources/assets/js/email-ibox',
                'resources/assets/js/form-elements', 
                'resources/assets/js/form-layout', 
                'resources/assets/js/form-validation', 
                'resources/assets/js/formelementadvnced', 
                'resources/assets/js/fullcalendar', 
                'resources/assets/js/gallery', 
                'resources/assets/js/gmaps', 
                'resources/assets/js/google-maps', 
                'resources/assets/js/grid', 
                'resources/assets/js/index1', 
                'resources/assets/js/jvectormap', 
                'resources/assets/js/landing', 
                'resources/assets/js/map-leafleft', 
                'resources/assets/js/modal', 
                'resources/assets/js/notifications', 
                'resources/assets/js/nouislider', 
                'resources/assets/js/profile', 
                'resources/assets/js/quill-editor', 
                'resources/assets/js/range', 
                'resources/assets/js/rangeslider', 
                'resources/assets/js/ratings', 
                'resources/assets/js/russia', 
                'resources/assets/js/select2', 
                'resources/assets/js/setting', 
                'resources/assets/js/show-code', 
                'resources/assets/js/simplebar', 
                'resources/assets/js/slider', 
                'resources/assets/js/spain', 
                'resources/assets/js/sweet-alert', 
                'resources/assets/js/swiper',
                'resources/assets/js/table-data',
                'resources/assets/js/themeColors',
                'resources/assets/js/toast',
                'resources/assets/js/treeview',
                'resources/assets/js/us-merc-en',
                'resources/assets/js/widget',
                'resources/assets/js/wishlist',
            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
              {
                src: ([
                'resources/assets/images/',
                'resources/assets/libs/',
                'resources/assets/iconfonts/', 
                'resources/assets/js/sticky.js',
                'resources/assets/js/main.js',
                'resources/assets/js/under-maintenance.js',
                'resources/assets/js/show-password.js',
                'resources/assets/js/filemanager-list.js',
                'resources/assets/js/apexcharts-stock-prices.js',
            ]),
                dest: 'assets/'
              }
            ]
        }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        },
        vitePluginRequire.default(),
    ],
    build: {
        chunkSizeWarningLimit: 1600,
    },
});
