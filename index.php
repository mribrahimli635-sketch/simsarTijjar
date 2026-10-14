<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

function safe_include($path) {
    if (file_exists($path)) {
        include $path;
    }
}
?>
<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="google-site-verification" content="7w15Rgo6nv-bj5jQrFNBgMVYLcf-0v4FBLE1lYcMh5A" />

    <title>simsarTijjar — Ticarət, İnvestisiya və Layihələr Portalı</title>
    <meta name="description" content="simsarTijjar - Yüksək gəlirli layihələr, özəl sərmayələr (Private Equity), investorlar və şirkətləri bir araya gətirən rəqəmsal platforma.">
    <meta name="keywords" content="simsarTijjar, simsar tijjar, simsar, ticarət, private equity, investisiya, layihələr, reklam, şirkətlər">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://mraga.gt.tc/">

    <!-- Favicon Düzəlişləri -->
    <link rel="icon" type="image/jpeg" sizes="48x48" href="https://mraga.gt.tc/ASST/about-gallery-photos/ySkWM.jpg">
    <link rel="icon" type="image/jpeg" sizes="96x96" href="https://mraga.gt.tc/ASST/about-gallery-photos/ySkWM.jpg">
    <link rel="icon" type="image/jpeg" sizes="144x144" href="https://mraga.gt.tc/ASST/about-gallery-photos/ySkWM.jpg">
    <link rel="icon" type="image/jpeg" sizes="192x192" href="https://mraga.gt.tc/ASST/about-gallery-photos/ySkWM.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="https://mraga.gt.tc/ASST/about-gallery-photos/ySkWM.jpg">
    <link rel="shortcut icon" href="https://mraga.gt.tc/ASST/about-gallery-photos/ySkWM.jpg" type="image/x-icon">

    <!-- Open Graph SEO Metatagları -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="simsarTijjar">
    <meta property="og:url" content="https://mraga.gt.tc/">
    <meta property="og:title" content="simsarTijjar — Ticarət və İnvestisiya Portalı">
    <meta property="og:description" content="Yüksək gəlirli gələcək layihələri, investorları və şirkətləri kəşf edin.">
    <meta property="og:image" content="https://mraga.gt.tc/ASST/about-gallery-photos/ySkWM.jpg">
    <meta property="og:image:secure_url" content="https://mraga.gt.tc/ASST/about-gallery-photos/ySkWM.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="simsarTijjar — Ticarət və İnvestisiya Portalı">
    <meta name="twitter:description" content="Yüksək gəlirli gələcək layihələri, investorları və şirkətləri kəşf edin.">
    <meta name="twitter:image" content="https://mraga.gt.tc/ASST/about-gallery-photos/ySkWM.jpg">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebSite",
          "@id": "https://mraga.gt.tc/#website",
          "url": "https://mraga.gt.tc/",
          "name": "simsarTijjar",
          "alternateName": ["simsarTijjar Portal", "simsarTijjar Official", "simsarTijjar Trade"],
          "publisher": {
            "@type": "Organization",
            "@id": "https://mraga.gt.tc/#organization"
          }
        },
        {
          "@type": "Organization",
          "@id": "https://mraga.gt.tc/#organization",
          "name": "simsarTijjar",
          "url": "https://mraga.gt.tc/",
          "logo": {
            "@type": "ImageObject",
            "url": "https://mraga.gt.tc/ASST/about-gallery-photos/ySkWM.jpg",
            "width": 512,
            "height": 512
          },
          "image": "https://mraga.gt.tc/ASST/about-gallery-photos/ySkWM.jpg"
        },
        {
          "@type": "WebPage",
          "@id": "https://mraga.gt.tc/#webpage",
          "url": "https://mraga.gt.tc/",
          "name": "simsarTijjar — Ticarət, İnvestisiya və Layihələr Portalı",
          "primaryImageOfPage": {
            "@type": "ImageObject",
            "url": "https://mraga.gt.tc/ASST/about-gallery-photos/ySkWM.jpg"
          }
        }
      ]
    }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<!-- Font & Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;900&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS Fayl Yolları (Kökdən Başlayan / Yapısı) -->
    <link rel="stylesheet" href="public/css/root.css">
    <link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="public/css/responsive.css">
     <link rel="stylesheet" href="public/css/chat.css">
</head>
<body>

    <?php safe_include(__DIR__ . '/public/MAIN/header/header.php'); ?>
    <?php safe_include(__DIR__ . '/public/MAIN/hero.php'); ?>
     <?php safe_include(__DIR__ . '/public/MAIN/form/index-form.php'); ?>
     <?php safe_include(__DIR__ . '/public/MAIN/slide-banner.php'); ?>
    <?php safe_include(__DIR__ . '/public/MAIN/footer/footer.php'); ?>

    <?php safe_include(__DIR__ . '/public/MAIN/form/chat-form.php'); ?>

    <!-- JS Fayl Yolları -->
    <script src="/public/MAIN/js/script.js"></script>
    <script src="/public/MAIN/js/chat.js"></script>
</body>
</html>
