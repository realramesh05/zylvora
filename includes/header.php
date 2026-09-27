<?php
/**
 * Zylvora Technologies - Global Header Component
 */
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

$pageTitle = isset($pageTitle) ? $pageTitle . " | " . SITE_NAME : SITE_NAME . " - " . SITE_TAGLINE;
$pageDesc = isset($pageDesc) ? $pageDesc : "Zylvora Technologies delivers next-generation ERP solutions, SAP implementations, Cloud Architecture, and Data Intelligence for global enterprises.";
$canonicalUrl = isset($canonicalUrl) ? $canonicalUrl : (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . ($_SERVER['REQUEST_URI'] ?? '/');
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Primary SEO Meta Tags -->
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="keywords" content="Zylvora Technologies, SAP Consulting, SAP Migration S4HANA, Enterprise ERP, Cloud Solutions, Data Analytics, Odoo Partner, Zoho ERP, Freshdesk, Cybersecurity">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta property="og:image" content="<?= asset('images/logo.png') ?>">

    <!-- Twitter Card -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
    <meta property="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta property="twitter:image" content="<?= asset('images/logo.png') ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= asset('images/logo.png') ?>">

    <!-- Google Fonts: Plus Jakarta Sans & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: {
                            900: '#030712',
                            800: '#050b14',
                            700: '#0a1526',
                            600: '#112240',
                        },
                        cyan: {
                            400: '#00d2ff',
                            500: '#06b6d4',
                            600: '#0891b2',
                        },
                        brand: {
                            blue: '#2563eb',
                            accent: '#00d2ff',
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= asset('css/custom.css') ?>">

    <!-- Schema.org JSON-LD Structured Data for Google -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "<?= SITE_NAME ?>",
      "url": "<?= SITE_URL ?>",
      "logo": "<?= asset('images/logo.png') ?>",
      "description": "<?= addslashes(SITE_TAGLINE) ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "OMR IT Corridor",
        "addressLocality": "Chennai",
        "addressRegion": "TN",
        "postalCode": "600096",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "<?= CONTACT_PHONE ?>",
        "contactType": "sales",
        "email": "<?= CONTACT_EMAIL ?>"
      }
    }
    </script>
</head>
<body class="bg-dark-800 text-slate-100 flex flex-col min-h-screen selection:bg-cyan-500 selection:text-black">
<?php include_once __DIR__ . '/navbar.php'; ?>
