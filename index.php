<!DOCTYPE html>
<html>
<head>
  <title>Restaurant Meierij</title>
  <!-- ===== EXTRA ===== -->
  <meta charset="UTF-8">

  <meta name="description" content="Hartelijk welkom op de site van Restaurant de Meierij,
  Ons gezellige restaurant is gevestigd in de Hoofdstraat de dorpskern van Santpoort-N.
  De menukaart is veelzijdig en past zicht met  de seizoenen aan,een prettige prijskwaliteit verhouding of u nu eenvoudig of uitgebreid wilt eten.
  Maandelijks hebben wij een nieuw 3 gangen maandmenu a 29,50" />
  <meta name="keywords" content="restaurant , restaurant , meierij , meierij , uiteten , eten , lekker , eten , santpoort, lekker , gezelig , meierij-bokkensteeg, " />
  <meta name="author" content="Meierij">
  <meta name="robots" content="index, follow" />
  <meta name="revisit-after" content="20 days" />
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#FF530D">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#FF530D">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#FF530D">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <!-- restaurant , meierij,eten -->

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="stylesheets/menu.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/reset.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/sections.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/insta.css">
  <link rel="stylesheet" type="text/css" href="menu/jPushMenu.css" />
  <link rel="stylesheet" type="text/css" href="parts/menukaart/menukaart.css">
  <link rel="stylesheet" type="text/css" href="parts/slider/vegas.min.css">
  <link rel="stylesheet" type="text/css" href="parts/time/time.css">

  <!-- js -->
  <!--load jPushMenu, required-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery.min.js"></script>
  <script src="parts/slider/vegas.min.js"></script>
  <script src="js/js.js"></script>
  <script src="js/jPushMenu.js"></script>
  <!--call jPushMenu, required-->
  <script>
  jQuery(document).ready(function($) {
  	$('.toggle-menu').jPushMenu();
  });
  </script>

  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Restaurant",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Santpoort-noord",
      "addressRegion": "EN",
      "postalCode": "2071EN",
      "streetAddress": "Hoofdstraat-204"

    },
    "name": "Meierij",
    "openingHours": [
      "Wo-Zo 11:00-14:30"
    ],
    "servesCuisine": [
      "Franse keuken "
    ],
    "telephone": "(023) 5379764",
    "url": "http://www.meierijsantpoort.nl"
  }
  </script>

</head>

<body>
  <section class="container">
    <?php
    include 'menu/menu.php';
    include 'parts/slider/slider.php';
    include 'parts/menukaart/menukaart.php';

    include 'parts/instagram/insta.php';

    include 'parts/map/map.php';
    ?>
    <section class="scroll">Scroll.</section>
  </section>
  <script>
  $(".top").vegas({
    slides: [
      { src: "img/slide1.jpg" },
      { src: "img/slide2.jpg" },
      { src: "img/slide3.jpg" },
      { src: "img/slide4.jpg" }
    ]
  });

  </script>

</body>
</html>
