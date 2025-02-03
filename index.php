<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ana səhifə / Yapondili.Az</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/color-switcher.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/animated-headlines.css">
    <link rel="stylesheet" href="/lib/nivo-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="/lib/nivo-slider/css/preview.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/jquery.mb.YTPlayer.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/css/slidermyelin.css">
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>
    <div>
        <?php
        $page = '';
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        ?>
        <?php include 'includes/nav.php'; ?>


        <?php
        if ($page) {
            if ($page == 'home') {
                include 'home.php';
            } elseif ($page == 'about_us') {
                include 'about_us.php';
            } elseif ($page == 'japan') {
                include 'japan.php';
            } elseif ($page == 'lessons') {
                include 'lessons.php';
            } elseif ($page == 'store') {
                include 'store.php';
            } elseif ($page == 'news') {
                include 'news.php';
            } elseif ($page == 'blog') {
                include 'blog.php';
            } elseif ($page == 'contact_us') {
                include 'contact_us.php';
            } elseif ($page == 'news_pages_2') {
                include 'news_pages_2.php';
            } elseif ($page == 'news_pages_3') {
                include 'news_pages_3.php';
            }elseif ($page == 'sign_in') {
                include 'sign_in.php';
            }elseif ($page == 'sign_up') {
                include 'sign_up.php';
            }
        } else {
            include 'home.php';
        }
        ?>

        <?php include 'includes/footer.php'; ?>
    </div>
</body>

<script src="/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="/lib/nivo-slider/home.js" type="text/javascript"></script>
<script src="/js/jquery.meanmenu.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.scrollUp.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/animated-headlines.js"></script>
<script src="/js/textilate.js"></script>
<script src="/js/lettering.js"></script>
<script src="/js/jquery.mb.YTPlayer.js"></script>
<script src="/js/jquery.ajaxchimp.min.js"></script>
<script src="/js/ajax-mail.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/styleswitch.js"></script>
<script src="/js/main.js"></script>

</html>