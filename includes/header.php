<?php
// Auto-detect the site's base URL so asset paths and internal links work
// no matter how deep the site is hosted (domain root, or several nested
// folders like /IT-Solutions/IT-Solutions/IT-Solutions-restructured/).
// This is computed from where THIS file actually sits on disk relative
// to the web server's document root, so it's correct regardless of which
// page included it.
$docRoot  = isset($_SERVER['DOCUMENT_ROOT']) ? str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])) : false;
$siteRoot = str_replace('\\', '/', realpath(__DIR__ . '/..'));
$basePath = '';
if ($docRoot !== false && $siteRoot !== false && strpos($siteRoot, $docRoot) === 0) {
    $basePath = substr($siteRoot, strlen($docRoot));
}
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
define('SITE_BASE_URL', $scheme . '://' . $host . $basePath . '/');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle; ?></title>
    <meta name="description" content="<?= $pageDescription; ?>">
    <base href="<?= SITE_BASE_URL ?>">
    <link rel="icon" href="assets/images/logo/favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css"> -->

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/motion.css">
</head>