<?php
    include_once ('path.php');
?>
<!-- SEO Meta Tags -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-76DY313RBW"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-76DY313RBW');
</script>

<!-- Viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png"  href="assets/favicon/favicon-32x32.png">

<!-- Vendor Styles -->
<link rel="stylesheet" media="screen" href="assets/vendor/boxicons/css/boxicons.min.css"/>
<link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css"/>
<link rel="stylesheet" media="screen" href="assets/vendor/lightgallery/css/lightgallery-bundle.min.css"/>

<!-- Main Theme Styles + Bootstrap -->
<link rel="stylesheet" media="screen" href="assets/css/theme.css">

<!-- Page loading styles -->
<style>
    .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
    }
    .dark-mode .page-loading {
        background-color: #0b0f19;
    }
    .page-loading.active {
        opacity: 1;
        visibility: visible;
    }
    .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
    }
    .page-loading.active > .page-loading-inner {
        opacity: 1;
    }
    .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #9397ad;
    }
    .dark-mode .page-loading-inner > span {
        color: #fff;
        opacity: .6;
    }
    .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #b4b7c9;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
    }
    .dark-mode .page-spinner {
        border-color: rgba(255,255,255,.4);
        border-right-color: transparent;
    }
    @-webkit-keyframes spinner {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    @keyframes spinner {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>

<!-- Theme mode -->
<script>
    let mode = window.localStorage.getItem('mode'),
        root = document.getElementsByTagName('html')[0];
    root.classList.add('dark-mode');
</script>

<!-- Page loading scripts -->
<script>
    (function () {
        window.onload = function () {
            const preloader = document.querySelector('.page-loading');
            preloader.classList.remove('active');
            setTimeout(function () {
                preloader.remove();
            }, 1000);
        };
    })();
</script>