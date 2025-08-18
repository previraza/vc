<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-setting="app_name" data-rightJoin=" Pro | ISTA FINANCE">Viraza Pro | ISTA FINANCE</title>
    <meta name="description" content="Viraza Pro is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords" content="premium, admin, dashboard, template, bootstrap 5, clean ui, Viraza, admin dashboard,responsive dashboard, optimized dashboard,">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="Viraza Pro | ISTA FINANCE">

    <!-- Google Font Api KEY-->
    <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
    <!-- Config Options -->
    <meta name="setting_options" content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;huisetting-html&quot;,&quot;setting&quot;:{&quot;app_name&quot;:{&quot;value&quot;:&quot;Viraza&quot;},&quot;theme_scheme_direction&quot;:{&quot;value&quot;:&quot;ltr&quot;},&quot;theme_scheme&quot;:{&quot;value&quot;:&quot;auto&quot;},&quot;theme_style_appearance&quot;:{&quot;value&quot;:[&quot;theme-default&quot;]},&quot;theme_color&quot;:{&quot;colors&quot;:{&quot;--{{prefix}}primary&quot;:&quot;#3a57e8&quot;,&quot;--{{prefix}}info&quot;:&quot;#08B1BA&quot;},&quot;value&quot;:&quot;theme-color-default&quot;},&quot;theme_transition&quot;:{&quot;value&quot;:&quot;theme-with-animation&quot;},&quot;theme_font_size&quot;:{&quot;value&quot;:&quot;theme-fs-md&quot;},&quot;page_layout&quot;:{&quot;value&quot;:&quot;container-fluid&quot;},&quot;header_navbar&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;header_banner&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;sidebar_color&quot;:{&quot;value&quot;:&quot;sidebar-white&quot;},&quot;card_color&quot;:{&quot;value&quot;:&quot;card-default&quot;},&quot;sidebar_type&quot;:{&quot;value&quot;:[]},&quot;sidebar_menu_style&quot;:{&quot;value&quot;:&quot;left-bordered&quot;},&quot;footer&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;body_font_family&quot;:{&quot;value&quot;:null},&quot;heading_font_family&quot;:{&quot;value&quot;:null}}}'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />
    
    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="/assets/css/core/libs.min.css" />
    
    <!-- Flatpickr css -->
    <link rel="stylesheet" href="/assets/vendor/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet" href="/assets/vendor/sheperd/dist/css/sheperd.css">
        
    <link rel="stylesheet" href="/assets/css/hope-ui.mind1f1.css?v=2.2.0" />
    <link rel="stylesheet" href="/assets/css/pro.mind1f1.css?v=2.2.0" />
        
    <!-- Custom Css -->
    <link rel="stylesheet" href="/assets/css/custom.mind1f1.css?v=2.2.0" />
    
    <?=app()->ASSETS['_css']?>
    
    <!-- Sweetlaert2 css -->
    <link rel="stylesheet" href="/assets/vendor/sweetalert2/dist/sweetalert2.min.css" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="/assets/css/dark.mind1f1.css?v=2.2.0" />
    
    <!-- Customizer Css -->
    <link rel="stylesheet" href="/assets/css/customizer.mind1f1.css?v=2.2.0" />
    
    <!-- RTL Css -->
    <link rel="stylesheet" href="/assets/css/rtl.mind1f1.css?v=2.2.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <script>app_name="<?= app()->name ?>"</script>
    <?= app()->ASSETS['css']?>
    
</head>
<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
                <img src="/assets/images/loader.html" alt="loader" class="light-loader img-fluid w-25" width="200" height="200">
            </div>
        </div>
    </div>
    <!-- loader END -->
    <?php $app->page->header === true ? include_once LAYOUT . DS . 'default.h' : print('<main class="main-content">');
    echo $app->page->content; 
    // echo $app->page->special;  ?>
    <?php if ($app->page->footer) { ?>
        <!-- Footer Section Start -->
        <footer class="footer">
            <div class="footer-body">
                <ul class="left-panel list-inline mb-0 p-0">
                    <li class="list-inline-item"><a href="extra/privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="extra/terms-of-service.html">Terms of Use</a></li>
                </ul>
                <div class="right-panel">
                    ©<script>
                    2022
                    </script> <span data-setting="app_name">Viraza</span>, Made with
                    <span class="text-gray">
                        <svg class="icon-16" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z"
                                fill="currentColor"></path>
                        </svg>
                    </span> by <a href="https://iqonic.design/" target="_blank">IQONIC Design</a>.
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
    <?php } ?>
    </main>

        <!-- Library Bundle Script -->
        <script src="/assets/js/core/libs.min.js"></script>
        <!-- Plugin Scripts -->
        <!-- Tour plugin Start -->
        <script src="/assets/vendor/sheperd/dist/js/sheperd.min.js"></script>
        <script src="/assets/js/plugins/tour.js" defer></script>
        
        <!-- Flatpickr Script -->
        <script src="/assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
        <script src="/assets/js/plugins/flatpickr.js" defer></script>

        <!-- Slider-tab Script -->
        <script src="/assets/js/plugins/slider-tabs.js"></script>
        
        <!-- Select2 Script -->
        <script src="/assets/js/plugins/select2.js" defer></script>

        <!-- Sweet-alert Script -->
        <script src="/assets/vendor/sweetalert2/dist/sweetalert2.min.js" async></script>
        <script src="/assets/js/plugins/sweet-alert.js" defer></script>
        
        <?= app()->ASSETS['_js']?>

        <script src="/assets/js/plugins/Form.local.js"></script>

        <!-- Lodash Utility -->
        <script src="/assets/vendor/lodash/lodash.min.js"></script>
        <!-- Utilities Functions -->
        <script src="/assets/js/iqonic-script/utility.min.js"></script>
        <!-- Settings Script -->
        <script src="/assets/js/iqonic-script/setting.min.js"></script>
        <!-- Settings Init Script -->
        <script src="/assets/js/setting-init.js"></script>
        <!-- External Library Bundle Script -->
        <script src="/assets/js/core/external.min.js"></script>
        <!-- Widgetchart Script -->
        <script src="/assets/js/charts/widgetchartsd1f1.js?v=2.2.0" defer></script>
        <!-- Dashboard Script -->
        <script src="/assets/js/charts/dashboardd1f1.js?v=2.2.0" defer></script>
        <script src="/assets/js/charts/alternate-dashboardd1f1.js?v=2.2.0" defer></script>
        <!-- Hopeui Script -->
        <script src="/assets/js/hope-uid1f1.js?v=2.2.0" defer></script>
        <script src="/assets/js/hope-uiprod1f1.js?v=2.2.0" defer></script>
        <script src="/assets/js/sidebard1f1.js?v=2.2.0" defer></script>   
        <?= app()->ASSETS['js']?>
    </body>
</html>
