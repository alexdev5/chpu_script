<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

     <title><?= $meta['title'] ?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?=$baseURL ?>assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=$baseURL ?>assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$baseURL ?>assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$baseURL ?>assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$baseURL ?>assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=$baseURL ?>assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=$baseURL ?>assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=$baseURL ?>assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$baseURL ?>assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=$baseURL ?>assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$baseURL ?>assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=$baseURL ?>assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$baseURL ?>assets/favicon/favicon-16x16.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="San Francisco Ferry Building">
    <meta name="twitter:description" content="The San Francisco Ferry Building Marketplace">
    <meta name="twitter:image" content="<?=$baseURL ?>assets/img/ferry-building-social-1200x630.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="San Francisco Ferry Building"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?= $baseURL ?>"/>
    <meta property="og:image" content="<?=$baseURL ?>assets/img/ferry-building-social-1200x630.png"/>
    <meta property="og:description" content="The San Francisco Ferry Building Marketplace"/>
    <meta property="og:site_name" content="San Francisco Ferry Building"/>


    <!-- This site is optimized with the Yoast SEO Premium plugin v15.7 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description"
          content="Food artisan Marketplace in the historic Ferry Building brings together the food traditions of the Bay Area."/>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>

    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Ferry Building Marketplace"/>
    <meta property="og:description"
          content="Food artisan Marketplace in the historic Ferry Building brings together the food traditions of the Bay Area."/>

    <meta property="og:site_name" content="Ferry Building Marketplace"/>
    <meta property="article:publisher" content="https://www.facebook.com/ferrybuildingmarketplace"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@sfferrybuilding"/>
    <script type="application/ld+json" class="yoast-schema-graph">{
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebSite",
                    "@id": "<?= $baseURL ?>#website",
                    "url": "<?= $baseURL ?>",
                    "name": "Ferry Building Marketplace",
                    "description": "San Francisco Ferry Building Marketplace",
                    "potentialAction": [
                        {
                            "@type": "SearchAction",
                            "target": "<?= $baseURL ?>?s={search_term_string}",
                            "query-input": "required name=search_term_string"
                        }
                    ],
                    "inLanguage": "en-US"
                },
                {
                    "@type": "WebPage",
                    "@id": "<?= $baseURL ?>#webpage",
                    "url": "<?= $baseURL ?>",
                    "name": "Ferry Building Marketplace",
                    "isPartOf": {
                        "@id": "<?= $baseURL ?>#website"
                    },
                    "datePublished": "2016-03-03T19:44:27+00:00",
                    "dateModified": "2020-12-08T01:02:41+00:00",
                    "description": "Food artisan Marketplace in the historic Ferry Building brings together the food traditions of the Bay Area.",
                    "inLanguage": "en-US",
                    "potentialAction": [
                        {
                            "@type": "ReadAction",
                            "target": [
                                "<?= $baseURL ?>"
                            ]
                        }
                    ]
                }
            ]
        }</script>


    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' href='<?=$baseURL ?>style.min.css'>
    <link rel='stylesheet' href='<?=$baseURL ?>assets/css/cookie-bar.css'>
    <link rel='stylesheet' href='<?=$baseURL ?>style.css'>
    <link rel='stylesheet' href='<?=$baseURL ?>assets/css/eventon_styles.css'>
    <link rel='stylesheet' href='<?=$baseURL ?>assets/css/font-awesome.css'>
    <link rel='stylesheet' href='<?=$baseURL ?>assets/css/eventon_dynamic_styles.css?ver=5.6'>
    <link rel='stylesheet' href='<?=$baseURL ?>assets/css/main.css'>
    <script src='<?=$baseURL ?>assets/js/jquery.min.js'></script>
    <script src='<?=$baseURL ?>assets/js/jquery-migrate.min.js'></script>
    <script src='<?=$baseURL ?>assets/js/cookie-bar.js'></script>
    <script src='<?=$baseURL ?>assets/js/min/main-min.js'></script>
    <script src='<?=$baseURL ?>assets/js/lightcase.js'></script>
    <script src='<?=$baseURL ?>assets/js/owl.carousel.min.js'></script>
    <script src='<?=$baseURL ?>assets/js/js.cookie.min.js'></script>


    <!-- EventON Version -->
    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }</style>

    <? if ($meta['description']): ?>
        <meta name="description" content="<?= $meta['description'] ?>"/>
    <? endif; ?>

	<? if ($meta['robots']): ?>
        <meta name="robots" content="<?= $meta['robots'] ?>"/>
	 <? endif; ?>
</head>
<body class="<?= $meta['classes'] ?>">

<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    <div class="mobile-header">
        <i class="hamburger icon-menu-1"></i>
        <h1 class="logo-title">
           <a href="/">SF Ferry Building</a></h1>
    </div>


<? include $pagesPath . 'inc/nav-menu.php' ?>
