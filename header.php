<?php
// Detects protocol + host automatically; adjust the path part if the
// site ever lives in a subfolder (e.g. '/visionvivante').
if (!defined('BASE_URL')) {
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
  $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
  define('BASE_URL', $protocol . $host . '/');
}
?>
<?php
/**
 * Global header include.
 *
 * Set these optional variables in a page BEFORE requiring this file:
 *
 *   $pageTitle     string  <title> text (defaults to the site title)
 *   $extraHead     string  raw HTML injected just before </head>
 *                          (page-specific <link>/<style> tags)
 *   $bodyAttrs     string  raw attributes added to the <body> tag
 *                          (e.g. 'class="dm-page"' or a style="...")
 *   $showPreloader bool    whether to render the loading preloader
 *                          (defaults to true)
 */

$pageTitle = $pageTitle ?? 'Vision Vivante | Enterprise Software & Digital Solutions';
$extraHead = $extraHead ?? '';
$bodyAttrs = $bodyAttrs ?? '';
$showPreloader = $showPreloader ?? true;

/**
 * Active nav-link detection.
 * Works out which top-level nav item matches the page currently being
 * served, so the correct <a> gets the 'active' class automatically
 * instead of it being hardcoded onto "Home" on every page.
 */
$currentPage = basename((string) parse_url($_SERVER['SCRIPT_NAME'] ?? '', PHP_URL_PATH));
if ($currentPage === '' || $currentPage === '/') {
  $currentPage = 'index.php';
}

$navServicePages = ['web-development-services.php', 'ui-ux-services.php', 'digital-marketing-services.php'];
$navWorkPages = ['work.php', 'portfolio-listing.php', 'portfolio-detail.php'];

$navActive = [
  'home' => $currentPage === 'index.php',
  'services' => in_array($currentPage, $navServicePages, true),
  'work' => in_array($currentPage, $navWorkPages, true),
  'blog' => $currentPage === 'blog.php',
];

// "Home" always means the homepage's own hero, regardless of whether the
// current page happens to reuse the id="home" locally for its own hero.
$homeHref = $navActive['home'] ? '#home' : BASE_URL . '#home';

// Pages that actually contain a given #id section, so anchor links only
// scroll in-page when the target really exists there and otherwise send
// the person to the page that does have it.
$pagesWithWork = ['index.php', 'work.php'];
$pagesWithContactUs = ['index.php', 'work.php', 'ui-ux-services.php', 'digital-marketing-services.php'];
$pagesWithServicesGrid = ['index.php'];

$workHref = in_array($currentPage, $pagesWithWork, true) ? '#work' : BASE_URL . 'work.php#work';
$contactHref = in_array($currentPage, $pagesWithContactUs, true) ? '#contactUs' : BASE_URL . '#contactUs';
$servicesHref = in_array($currentPage, $pagesWithServicesGrid, true) ? '#servicesModern' : BASE_URL . '#servicesModern';
?>
<!doctype html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="assets/images/vision-logo-sm3D-emerald.png" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle; ?></title>

  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />

  <!-- Slick Slider CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

  <!-- Devicon CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon/devicon.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <?php echo $extraHead; ?>
</head>

<body<?php echo $bodyAttrs !== '' ? ' ' . $bodyAttrs : ''; ?>>
  <?php if ($showPreloader): ?>
    <div id="preloader">
      <div class="preloader-inner-main-div-wrap">
        <canvas id="preloaderNetwork"></canvas>
        <img class="preloader-logo" src="assets/images/vision-logo-sm3D-emerald.png" style="width: 150px; height: 150px" />
      </div>
    </div>
  <?php endif; ?>
  <div id="scrollProgress"></div>

  <!-- ============ NAVBAR ============ -->
  <nav class="navbar navbar-expand-lg vv-navbar" id="mainNav">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2 me-0 p-0" href="<?php echo BASE_URL; ?>">
        <img src="assets/images/dark-green-with-blue-logo-full.svg" class="header-vision-logo img-fluid" alt="header-logo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navMenu">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link<?php echo $navActive['home'] ? ' active' : ''; ?>"
              href="<?php echo $homeHref; ?>">Home</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="d-flex align-items-center gap-2 nav-link<?php echo $navActive['services'] ? ' active' : ''; ?>" href="#" data-bs-toggle="dropdown"
              aria-expanded="false">
              Services
              <i class="bi bi-chevron-down d-flex"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="<?php echo $servicesHref; ?>">
                  All Services
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>web-development-services.php">
                  Web Development
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>ui-ux-services.php">
                  UI/UX Design
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>digital-marketing-services.php">
                  Digital Marketing
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>web-development-services.php">
                  Android App Development
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>web-development-services.php">
                  IOS App Development
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>web-development-services.php">
                  IoT Development
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>web-development-services.php">
                  Quality Assurance
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo BASE_URL; ?>web-development-services.php">
                  AI Development
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a class="nav-link<?php echo !empty($navActive['Services']) ? ' active' : ''; ?>"
              href="<?php echo BASE_URL; ?>services.php">
              Services
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?php echo $navActive['work'] ? ' active' : ''; ?>"
              href="<?php echo BASE_URL; ?>work.php">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link<?php echo $navActive['blog'] ? ' active' : ''; ?>"
              href="<?php echo BASE_URL; ?>blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://web.visionvivante.in/#contactUs">Contact</a>
          </li>
        </ul>
        <a href="<?php echo $contactHref; ?>"
          class="btn btn-vv-primary d-inline-flex d-lg-none align-items-center justify-content-center gap-2 mt-3 w-100">
          Get in Touch <i class="bi bi-arrow-right"></i>
        </a>
      </div>
      <a href="<?php echo $contactHref; ?>" class="btn btn-vv-primary d-none d-lg-inline-flex align-items-center gap-2">
        Get in Touch <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </nav>