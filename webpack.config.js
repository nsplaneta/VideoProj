var Encore = require('@symfony/webpack-encore');

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/assets/')
    // public path used by the web server to access the output path
    .setPublicPath('/assets')
    // only needed for CDN's or sub-directory deploy

    // .addEntry('app', './assets/js/app.js')
    .addStyleEntry('css/styles', ['./assets/css/styles.css'])
    .addStyleEntry('css/video_list', ['./assets/css/video_list.css'])
;

module.exports = Encore.getWebpackConfig();
