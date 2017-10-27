let mix = require('laravel-mix');

let themeDir = './theme/'
let themeStyleDir = `${themeDir}/topbar/`

mix
    .styles([
        themeDir + 'global/css/bootstrap.min.css',
        themeDir + 'global/css/bootstrap-extend.min.css',
        themeStyleDir + 'assets/css/site.min.css'
    ], 'public/css/theme.css')
    .styles([
        themeDir + 'global/vendor/animsition/animsition.css',
        themeDir + 'global/vendor/asscrollable/asScrollable.css',
        themeDir + 'global/vendor/switchery/switchery.css',
        themeDir + 'global/vendor/intro-js/introjs.css',
        themeDir + 'global/vendor/slidepanel/slidePanel.css',
        themeDir + 'global/vendor/flag-icon-css/flag-icon.css',
        themeDir + 'global/vendor/blueimp-file-upload/jquery.fileupload.css',
        themeDir + 'global/vendor/dropify/dropify.css',
        themeStyleDir + 'assets/examples/css/apps/media.css',
        themeDir + 'global/fonts/web-icons/web-icons.min.css',
        themeDir + 'global/fonts/brand-icons/brand-icons.min.css'
    ], 'public/css/plugins.css')
    .styles([
        themeStyleDir + 'assets/examples/css/pages/login-v3.css'
    ], 'public/css/login.css')
    .scripts([
        themeDir + 'global/vendor/html5shiv/html5shiv.min.js'
    ], 'public/js/ie9.js')
    .scripts([
        themeDir + 'global/vendor/media-match/media.match.min.js',
        themeDir + 'global/vendor/respond/respond.min.js'
    ], 'public/js/ie10.js')
    .scripts([
        themeDir + 'global/vendor/breakpoints/breakpoints.js'
    ], 'public/js/breakpoints.js')

    .scripts([
        themeDir + 'global/vendor/babel-external-helpers/babel-external-helpers.js',
        themeDir + 'global/vendor/jquery/jquery.js',
        themeDir + 'global/vendor/tether/tether.js',
        themeDir + 'global/vendor/bootstrap/bootstrap.js',
        themeDir + 'global/vendor/animsition/animsition.js',
        themeDir + 'global/vendor/mousewheel/jquery.mousewheel.js',
        themeDir + 'global/vendor/asscrollbar/jquery-asScrollbar.js',
        themeDir + 'global/vendor/asscrollable/jquery-asScrollable.js',
    ], 'public/js/core.js')
    .scripts([
        themeDir + 'global/vendor/switchery/switchery.min.js',
        themeDir + 'global/vendor/intro-js/intro.js',
        themeDir + 'global/vendor/screenfull/screenfull.js',
        themeDir + 'global/vendor/slidepanel/jquery-slidePanel.js',
        themeDir + 'global/vendor/jquery-ui/jquery-ui.js',
        themeDir + 'global/vendor/blueimp-tmpl/tmpl.js',
        themeDir + 'global/vendor/blueimp-canvas-to-blob/canvas-to-blob.js',
        themeDir + 'global/vendor/blueimp-load-image/load-image.all.min.js',
        themeDir + 'global/vendor/blueimp-file-upload/jquery.fileupload.js',
        themeDir + 'global/vendor/blueimp-file-upload/jquery.fileupload-process.js',
        themeDir + 'global/vendor/blueimp-file-upload/jquery.fileupload-image.js',
        themeDir + 'global/vendor/blueimp-file-upload/jquery.fileupload-audio.js',
        themeDir + 'global/vendor/blueimp-file-upload/jquery.fileupload-video.js',
        themeDir + 'global/vendor/blueimp-file-upload/jquery.fileupload-validate.js',
        themeDir + 'global/vendor/blueimp-file-upload/jquery.fileupload-ui.js',
        themeDir + 'global/vendor/dropify/dropify.min.js'

    ], 'public/js/plugins.js')
    .scripts([
        themeDir + 'global/js/State.js',
        themeDir + 'global/js/Component.js',
        themeDir + 'global/js/Plugin.js',
        themeDir + 'global/js/Base.js',
        themeDir + 'global/js/Config.js',
        themeStyleDir + 'assets/js/Section/Menubar.js',
        themeStyleDir + 'assets/js/Section/Sidebar.js',
        themeStyleDir + 'assets/js/Section/PageAside.js',
        themeStyleDir + 'assets/js/Plugin/menu.js'
    ], 'public/js/scripts.js')
    .scripts([
        themeDir + 'global/js/config/colors.js',
        themeStyleDir + 'assets/js/config/tour.js'
    ], 'public/js/config.js')
    .scripts([
        themeStyleDir + 'assets/js/Site.js',
        themeDir + 'global/js/Plugin/asscrollable.js',
        themeDir + 'global/js/Plugin/slidepanel.js',
        themeDir + 'global/js/Plugin/switchery.js',
        themeDir + 'global/js/Plugin/sticky-header.js',
        themeDir + 'global/js/Plugin/asscrollable.js',
        themeDir + 'global/js/Plugin/animate-list.js',
        themeDir + 'global/js/Plugin/action-btn.js',
        themeDir + 'global/js/Plugin/asselectable.js',
        themeDir + 'global/js/Plugin/selectable.js',
        themeDir + 'global/js/Plugin/dropify.js',
        themeStyleDir + 'assets/examples/js/forms/uploads.js',
        themeStyleDir + 'assets/js/BaseApp.js',
        themeStyleDir + 'assets/js/App/Media.js',
        themeStyleDir + 'assets/examples/js/apps/media.js',
        'resources/assets/js/logout.js'
    ], 'public/js/page.js')

    .copy(themeDir + 'global/fonts/web-icons/', 'public/css')
    .copy(themeDir + 'global/fonts/brand-icons/', 'public/css')
    .copy(themeDir + 'global/vendor/dropify/dropify.ttf', 'public/css')
    .copy(themeDir + 'global/vendor/dropify/dropify.woff', 'public/css')