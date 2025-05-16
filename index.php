<!DOCTYPE html>

<html
  lang="en"
  class="layout-navbar-fixed layout-wide"
  dir="ltr"
  data-skin="default"
  data-bs-theme="light"
  data-assets-path="assets/"
  data-template="front-pages">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="robots" content="noindex, nofollow" />

  <title>
    ICONX - Layanan Internet Berkecepatan Tinggi
  </title>

  <!-- Canonical SEO -->

  <meta
    property="og:title"
    content="ICONX" />
  <meta property="og:type" content="product" />


  <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        "gtm.start": new Date().getTime(),
        event: "gtm.js"
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != "dataLayer" ? "&l=" + l : "";
      j.async = true;
      j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-5DDHKGP");
  </script>
  <!-- End Google Tag Manager -->

  <!-- Favicon -->
  <link
    rel="icon"
    type="image/x-icon"
    href="assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="assets/vendor/fonts/iconify-icons.css" />

  <!-- Core CSS -->
  <!-- build:css assets/vendor/css/theme.css  -->

  <link rel="stylesheet" href="assets/vendor/libs/pickr/pickr-themes.css" />

  <link rel="stylesheet" href="assets/vendor/css/core.css" />
  <link rel="stylesheet" href="assets/css/demo.css" />

  <link rel="stylesheet" href="assets/vendor/css/pages/front-page.css" />

  <!-- Vendors CSS -->

  <!-- endbuild -->

  <link
    rel="stylesheet"
    href="assets/vendor/libs/nouislider/nouislider.css" />
  <link rel="stylesheet" href="assets/vendor/libs/swiper/swiper.css" />

  <!-- Page CSS -->

  <link
    rel="stylesheet"
    href="assets/vendor/css/pages/front-page-landing.css" />

  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="assets/vendor/js/template-customizer.js"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

  <script src="assets/js/front-config.js"></script>
</head>

<body>
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe
      src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP"
      height="0"
      width="0"
      style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <script src="assets/vendor/js/dropdown-hover.js"></script>
  <script src="assets/vendor/js/mega-dropdown.js"></script>
  <!-- Navbar: Start -->
  <?php include('includes/navbar.php'); ?>
  <!-- Navbar: End -->

  <!-- Sections:Start -->

  <div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->
    <!-- Updated Hero Section with CSS Background Image -->
    <style>
      #landingHero {
        position: relative;
        background:
          /* 1st layer: white→transparent gradient */
          linear-gradient(to top,
            rgba(255, 255, 255, 1) 0%,
            rgba(255, 255, 255, 0) 60%),
          /* 2nd layer: your actual image */
          url('assets/img/front-pages/backgrounds/hero6.avif') no-repeat center center;
        background-size: cover;
      }

      #landingHero.fullscreen {
        display: flex;
        align-items: center;
        /* vertical centering */
        justify-content: center;
        /* optional: horizontal centering */
        min-height: 100vh;
        /* keep full screen height */
      }
    </style>

    <section id="hero-animation">
      <div id="landingHero" class="section-py landing-hero position-relative fullscreen">
        <!-- Removed <img> tag; background now applied via CSS -->
        <div class="container">
          <div class="hero-text-box text-center position-relative">
            <h1 class="text-primary hero-title display-6 fw-extrabold">
              ICONX - Internet WiFi Tercepat dan Andal
            </h1>
            <h2 class="hero-sub-title h6 mb-6">
              Koneksi Tanpa Batas untuk Semua Kebutuhan Anda
            </h2>
            <div class="landing-hero-btn d-inline-block position-relative">

              <a
                href="#landingFeatures"
                class="btn btn-primary btn-lg">
                Mulai Sekarang
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Hero: End -->

    <!-- Useful features: Start -->
    <section id="landingFeatures" class="section-py landing-features">
      <div class="container">
        <div class="text-center mb-4">
          <span class="badge bg-label-primary">Useful Features</span>
        </div>
        <h4 class="text-center mb-1">
          <span class="position-relative fw-extrabold z-1">Semua yang dibutuhkan
            <img
              src="assets/img/front-pages/icons/section-title-icon.png"
              alt="laptop charging"
              class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
          </span>
          untuk keperluanmu
        </h4>
        <p class="text-center mb-12">
          Not just a set of tools, the package includes ready-to-deploy
          conceptual application.
        </p>
        <div class="features-icon-wrapper row gx-0 gy-6 g-sm-12">
          <div class="col-lg-4 col-sm-6 text-center features-icon-box">
            <div class="mb-4 text-primary text-center">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="64" height="65" viewBox="0 0 256 256" xml:space="preserve">
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                  <path d="M 89.1 69.647 c -0.768 -2.505 -3.292 -4.057 -5.864 -3.59 c -3.919 0.697 -8.239 1.834 -12.813 3.037 c -2.373 0.624 -4.812 1.262 -7.231 1.844 c -0.88 -3.998 -4.373 -6.987 -8.557 -7.128 l -1.886 -0.063 c -2.909 0 -6.067 -1.12 -9.123 -2.203 c -3.038 -1.077 -6.18 -2.19 -9.096 -2.19 c -4.362 0 -9.621 0.699 -15.555 5.883 c -0.486 0.426 -1.1 0.65 -1.687 0.652 l -1.295 -0.059 v -3.368 c 0 -0.553 -0.448 -1 -1 -1 H 1.672 c -0.552 0 -1 0.447 -1 1 V 89 c 0 0.553 0.448 1 1 1 h 13.321 c 0.552 0 1 -0.447 1 -1 v -3.865 h 4.726 c 1.584 0 3.173 0.175 4.721 0.52 l 14.181 3.162 c 1.27 0.284 2.574 0.428 3.881 0.428 c 0.084 0 0.168 -0.001 0.253 -0.002 l 7.849 -0.114 c 2.341 -0.034 4.619 -0.521 6.766 -1.443 l 27.817 -11.747 C 88.624 74.889 89.876 72.185 89.1 69.647 z M 13.993 88 H 2.672 V 63.462 h 11.321 V 88 z M 85.402 74.098 L 57.586 85.845 c -1.911 0.821 -3.934 1.253 -6.012 1.283 l -7.848 0.114 c -1.226 0.014 -2.47 -0.109 -3.669 -0.377 l -14.182 -3.162 c -1.691 -0.377 -3.426 -0.568 -5.156 -0.568 h -4.726 V 67.831 l 1.242 0.056 c 1.126 -0.013 2.2 -0.398 3.056 -1.146 c 5.436 -4.748 10.249 -5.389 14.239 -5.389 c 2.572 0 5.417 1.008 8.428 2.076 c 3.213 1.139 6.536 2.317 9.754 2.316 c 0.001 0 0.002 0 0.002 0 l 1.852 0.063 c 3.273 0.111 6.003 2.454 6.68 5.584 c -8.328 1.886 -16.122 2.802 -19.718 -0.497 c -0.407 -0.373 -1.04 -0.345 -1.413 0.062 c -0.374 0.407 -0.346 1.039 0.061 1.413 c 5.714 5.242 18.443 1.896 30.755 -1.343 c 4.533 -1.192 8.815 -2.318 12.654 -3.002 c 1.587 -0.278 3.131 0.667 3.603 2.207 C 87.665 71.793 86.895 73.455 85.402 74.098 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                  <path d="M 65.197 64.432 c -0.276 0 -0.552 -0.114 -0.749 -0.338 c -0.366 -0.414 -0.327 -1.046 0.087 -1.411 c 5.06 -4.473 7.962 -10.908 7.962 -17.657 c 0 -12.99 -10.568 -23.558 -23.559 -23.558 c -12.99 0 -23.558 10.568 -23.558 23.558 c 0 2.888 0.516 5.708 1.534 8.381 c 0.196 0.516 -0.063 1.094 -0.579 1.29 c -0.516 0.198 -1.094 -0.063 -1.291 -0.579 c -1.105 -2.9 -1.665 -5.96 -1.665 -9.092 c 0 -14.092 11.465 -25.558 25.558 -25.558 c 14.093 0 25.559 11.465 25.559 25.558 c 0 7.321 -3.148 14.303 -8.638 19.155 C 65.669 64.349 65.433 64.432 65.197 64.432 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                  <path d="M 50.565 44.557 l -2.629 -0.96 c -1.262 -0.371 -2.249 -1.286 -2.708 -2.51 c -0.801 -2.136 0.285 -4.526 2.42 -5.327 c 2.14 -0.802 4.526 0.286 5.327 2.421 c 0.194 0.518 0.774 0.777 1.287 0.585 c 0.518 -0.194 0.779 -0.771 0.586 -1.288 c -0.818 -2.181 -2.75 -3.624 -4.911 -3.924 v -1.924 c 0 -0.552 -0.447 -1 -1 -1 s -1 0.448 -1 1 v 1.984 c -0.332 0.064 -0.664 0.15 -0.991 0.272 c -3.168 1.188 -4.779 4.733 -3.591 7.902 c 0.682 1.819 2.146 3.178 3.956 3.707 l 2.629 0.961 c 1.262 0.37 2.249 1.284 2.708 2.509 c 0.801 2.137 -0.285 4.526 -2.422 5.327 c -1.034 0.389 -2.159 0.35 -3.164 -0.107 c -1.006 -0.457 -1.774 -1.278 -2.162 -2.313 c -0.194 -0.517 -0.77 -0.775 -1.288 -0.585 c -0.517 0.194 -0.779 0.771 -0.585 1.288 c 0.576 1.534 1.715 2.753 3.208 3.432 c 0.549 0.249 1.122 0.407 1.703 0.488 v 1.927 c 0 0.553 0.447 1 1 1 s 1 -0.447 1 -1 v -1.982 c 0.334 -0.065 0.665 -0.152 0.99 -0.274 c 3.169 -1.188 4.78 -4.732 3.593 -7.901 C 53.84 46.444 52.375 45.086 50.565 44.557 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                  <path d="M 48.938 15.141 c -0.553 0 -1 -0.448 -1 -1 V 1 c 0 -0.552 0.447 -1 1 -1 s 1 0.448 1 1 v 13.141 C 49.938 14.693 49.491 15.141 48.938 15.141 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                  <path d="M 29.245 20.065 c -0.552 0 -1 -0.448 -1 -1 V 8.878 c 0 -0.552 0.448 -1 1 -1 s 1 0.448 1 1 v 10.187 C 30.245 19.617 29.797 20.065 29.245 20.065 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                  <path d="M 68.633 20.065 c -0.553 0 -1 -0.448 -1 -1 V 8.878 c 0 -0.552 0.447 -1 1 -1 s 1 0.448 1 1 v 10.187 C 69.633 19.617 69.186 20.065 68.633 20.065 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
              </svg>
            </div>
            <h5 class="mb-2">Affordable</h5>
            <p class="features-icon-description">
              Koneksi ICONX sangat stabil karena menggunakan jaringan fiber optic yang tercanggih.
            </p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center features-icon-box">
            <div class="mb-4 text-primary text-center">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="64" height="65" viewBox="0 0 256 256" xml:space="preserve">
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                  <path d="M 81.867 47.412 H 70.599 c -0.553 0 -1 -0.447 -1 -1 c 0 -0.552 0.447 -1 1 -1 h 11.269 c 0.553 0 1 0.448 1 1 C 82.867 46.965 82.42 47.412 81.867 47.412 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                  <path d="M 82.597 60.909 H 70.599 c -0.553 0 -1 -0.447 -1 -1 s 0.447 -1 1 -1 h 11.998 c 0.553 0 1 0.447 1 1 S 83.149 60.909 82.597 60.909 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                  <path d="M 74.787 74.406 h -7.195 c -0.553 0 -1 -0.447 -1 -1 s 0.447 -1 1 -1 h 7.195 c 0.553 0 1 0.447 1 1 S 75.34 74.406 74.787 74.406 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                  <path d="M 48.846 87.915 c -6.43 0 -13.01 -1.635 -16.961 -4.251 c -1.546 -1.024 -3.226 -1.565 -4.855 -1.565 h -3.602 c -0.552 0 -1 -0.447 -1 -1 s 0.448 -1 1 -1 h 3.602 c 2.024 0 4.084 0.656 5.96 1.897 c 3.824 2.533 10.405 4.069 16.769 3.907 h 25.029 c 2.832 0 5.137 -2.305 5.137 -5.137 v -1.224 c 0 -2.832 -2.305 -5.137 -5.137 -5.137 c -0.553 0 -1 -0.447 -1 -1 s 0.447 -1 1 -1 h 8.076 c 2.832 0 5.137 -2.305 5.137 -5.137 v -1.224 c 0 -2.832 -2.305 -5.137 -5.137 -5.137 h -0.267 c -0.553 0 -1 -0.447 -1 -1 s 0.447 -1 1 -1 c 2.832 0 5.137 -2.305 5.137 -5.137 v -1.224 c 0 -2.832 -2.305 -5.137 -5.137 -5.137 h -0.729 c -0.553 0 -1 -0.447 -1 -1 c 0 -0.552 0.447 -1 1 -1 c 2.832 0 5.137 -2.304 5.137 -5.137 v -1.224 c 0 -2.833 -2.305 -5.137 -5.137 -5.137 l -23.81 0.042 c -0.001 0 -0.001 0 -0.002 0 c -0.358 0 -0.688 -0.191 -0.867 -0.502 c -0.179 -0.311 -0.177 -0.694 0.004 -1.003 c 2.64 -4.507 3.423 -16.03 0.572 -23.053 c -1.183 -2.915 -2.828 -4.683 -4.892 -5.253 c -0.474 -0.133 -0.973 -0.043 -1.402 0.249 c -0.479 0.326 -0.804 0.865 -0.866 1.443 c -1.638 15.069 -10.808 33.007 -20.176 33.549 l -7.001 0.001 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 6.944 c 8.22 -0.478 16.724 -17.77 18.245 -31.767 c 0.127 -1.17 0.758 -2.221 1.731 -2.882 c 0.909 -0.619 2.026 -0.808 3.059 -0.521 c 2.655 0.735 4.804 2.958 6.212 6.429 c 2.853 7.028 2.321 17.726 0.035 23.307 l 22.212 -0.039 c 3.938 0 7.139 3.202 7.139 7.137 v 1.224 c 0 2.462 -1.254 4.638 -3.156 5.921 c 2.305 1.185 3.886 3.588 3.886 6.353 v 1.224 c 0 2.552 -1.347 4.796 -3.366 6.058 C 88.534 61.057 90 63.383 90 66.046 v 1.224 c 0 3.936 -3.201 7.137 -7.137 7.137 h -3.127 c 1.348 1.299 2.188 3.121 2.188 5.137 v 1.224 c 0 3.936 -3.201 7.137 -7.137 7.137 H 49.783 C 49.472 87.911 49.158 87.915 48.846 87.915 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                  <path d="M 20.838 87.915 H 3.589 C 1.61 87.915 0 86.305 0 84.326 V 35.408 c 0 -1.979 1.61 -3.589 3.589 -3.589 h 17.25 c 1.979 0 3.589 1.61 3.589 3.589 v 48.918 C 24.427 86.305 22.817 87.915 20.838 87.915 z M 3.589 33.819 C 2.713 33.819 2 34.532 2 35.408 v 48.918 c 0 0.876 0.713 1.589 1.589 1.589 h 17.25 c 0.876 0 1.589 -0.713 1.589 -1.589 V 35.408 c 0 -0.876 -0.713 -1.589 -1.589 -1.589 H 3.589 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                  <path d="M 12.214 81.958 c -0.552 0 -1 -0.447 -1 -1 v -6.677 c 0 -0.553 0.448 -1 1 -1 s 1 0.447 1 1 v 6.677 C 13.214 81.511 12.766 81.958 12.214 81.958 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
              </svg>
            </div>
            <h5 class="mb-2">Reliable</h5>
            <p class="features-icon-description">
              ICONX memiliki kecepatan internet yang tinggi dan stabil karena menggunakan jaringan Fiber.
            </p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center features-icon-box">
            <div class="text-center mb-4 text-primary">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="64" height="65" viewBox="0 0 256 256" xml:space="preserve">
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                  <path d="M 70.584 25.584 c -13.769 0 -19.469 8.002 -25.584 17.559 c -6.114 -9.556 -11.815 -17.559 -25.584 -17.559 C 8.71 25.584 0 34.294 0 45 c 0 10.706 8.71 19.416 19.416 19.416 c 13.77 0 19.47 -8.003 25.584 -17.559 c 6.114 9.556 11.814 17.559 25.584 17.559 C 81.29 64.416 90 55.706 90 45 C 90 34.294 81.29 25.584 70.584 25.584 z M 19.416 62.416 C 9.813 62.416 2 54.604 2 45 c 0 -9.603 7.813 -17.416 17.416 -17.416 c 12.453 0 17.487 6.609 24.396 17.416 C 36.904 55.807 31.868 62.416 19.416 62.416 z M 70.584 62.416 c -12.452 0 -17.487 -6.609 -24.396 -17.416 c 6.909 -10.807 11.943 -17.416 24.396 -17.416 C 80.188 27.584 88 35.397 88 45 C 88 54.604 80.188 62.416 70.584 62.416 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: currentColor; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
              </svg>
            </div>
            <h5 class="mb-2">Unlimited</h5>
            <p class="features-icon-description">
              Nikmati Internet Tanpa Kuota, Bebas Akses Sepuasnya.
            </p>
          </div>
          <!-- <div class="col-lg-4 col-sm-6 text-center features-icon-box">
            <div class="text-center mb-4 text-primary">
              <svg
                width="64"
                height="65"
                viewBox="0 0 64 65"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  opacity="0.2"
                  d="M13.625 50.8413C11.325 48.5413 12.85 43.7163 11.675 40.8913C10.5 38.0663 6 35.5913 6 32.4663C6 29.3413 10.45 26.9663 11.675 24.0413C12.9 21.1163 11.325 16.3913 13.625 14.0913C15.925 11.7913 20.75 13.3163 23.575 12.1413C26.4 10.9663 28.875 6.46631 32 6.46631C35.125 6.46631 37.5 10.9163 40.425 12.1413C43.35 13.3663 48.075 11.7913 50.375 14.0913C52.675 16.3913 51.15 21.2163 52.325 24.0413C53.5 26.8663 58 29.3413 58 32.4663C58 35.5913 53.55 37.9663 52.325 40.8913C51.1 43.8163 52.675 48.5413 50.375 50.8413C48.075 53.1413 43.25 51.6163 40.425 52.7913C37.6 53.9663 35.125 58.4663 32 58.4663C28.875 58.4663 26.5 54.0163 23.575 52.7913C20.65 51.5663 15.925 53.1413 13.625 50.8413Z"
                  fill="currentColor" />
                <path
                  d="M43 26.4663L28.325 40.4663L21 33.4663M13.625 50.8413C11.325 48.5413 12.85 43.7163 11.675 40.8913C10.5 38.0663 6 35.5913 6 32.4663C6 29.3413 10.45 26.9663 11.675 24.0413C12.9 21.1163 11.325 16.3913 13.625 14.0913C15.925 11.7913 20.75 13.3163 23.575 12.1413C26.4 10.9663 28.875 6.46631 32 6.46631C35.125 6.46631 37.5 10.9163 40.425 12.1413C43.35 13.3663 48.075 11.7913 50.375 14.0913C52.675 16.3913 51.15 21.2163 52.325 24.0413C53.5 26.8663 58 29.3413 58 32.4663C58 35.5913 53.55 37.9663 52.325 40.8913C51.1 43.8163 52.675 48.5413 50.375 50.8413C48.075 53.1413 43.25 51.6163 40.425 52.7913C37.6 53.9663 35.125 58.4663 32 58.4663C28.875 58.4663 26.5 54.0163 23.575 52.7913C20.65 51.5663 15.925 53.1413 13.625 50.8413Z"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <h5 class="mb-2">API Ready</h5>
            <p class="features-icon-description">
              Just change the endpoint and see your own data loaded within
              seconds.
            </p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center features-icon-box">
            <div class="text-center mb-4 text-primary">
              <svg
                width="64"
                height="65"
                viewBox="0 0 64 65"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  opacity="0.2"
                  d="M31.9999 8.46631C27.1437 8.46489 22.4012 9.93672 18.399 12.6874C14.3969 15.438 11.3233 19.3381 9.58436 23.8723C7.84542 28.4066 7.52291 33.3617 8.65945 38.0831C9.79598 42.8045 12.3381 47.0701 15.9499 50.3163C17.4549 47.3526 19.7511 44.8636 22.5841 43.125C25.417 41.3864 28.676 40.4662 31.9999 40.4663C30.0221 40.4663 28.0887 39.8798 26.4442 38.781C24.7997 37.6822 23.518 36.1204 22.7611 34.2931C22.0043 32.4659 21.8062 30.4552 22.1921 28.5154C22.5779 26.5756 23.5303 24.7938 24.9289 23.3952C26.3274 21.9967 28.1092 21.0443 30.049 20.6585C31.9888 20.2726 33.9995 20.4706 35.8268 21.2275C37.654 21.9844 39.2158 23.2661 40.3146 24.9106C41.4135 26.5551 41.9999 28.4885 41.9999 30.4663C41.9999 33.1185 40.9464 35.662 39.071 37.5374C37.1956 39.4127 34.6521 40.4663 31.9999 40.4663C35.3238 40.4662 38.5829 41.3864 41.4158 43.125C44.2487 44.8636 46.545 47.3526 48.0499 50.3163C51.6618 47.0701 54.2039 42.8045 55.3404 38.0831C56.477 33.3617 56.1545 28.4066 54.4155 23.8723C52.6766 19.3381 49.603 15.438 45.6008 12.6874C41.5987 9.93672 36.8562 8.46489 31.9999 8.46631Z"
                  fill="currentColor" />
                <path
                  d="M32 40.4663C37.5228 40.4663 42 35.9892 42 30.4663C42 24.9435 37.5228 20.4663 32 20.4663C26.4772 20.4663 22 24.9435 22 30.4663C22 35.9892 26.4772 40.4663 32 40.4663ZM32 40.4663C28.6759 40.4663 25.4168 41.3852 22.5839 43.1241C19.7509 44.863 17.4548 47.3524 15.95 50.3163M32 40.4663C35.3241 40.4663 38.5832 41.3852 41.4161 43.1241C44.2491 44.863 46.5452 47.3524 48.05 50.3163M56 32.4663C56 45.7211 45.2548 56.4663 32 56.4663C18.7452 56.4663 8 45.7211 8 32.4663C8 19.2115 18.7452 8.46631 32 8.46631C45.2548 8.46631 56 19.2115 56 32.4663Z"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <h5 class="mb-2">Excellent Support</h5>
            <p class="features-icon-description">
              An easy-to-follow doc with lots of references and code examples.
            </p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center features-icon-box">
            <div class="text-center mb-4 text-primary">
              <svg
                width="64"
                height="65"
                viewBox="0 0 64 65"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  opacity="0.2"
                  d="M55.875 14.4663H8.125C6.95139 14.4663 6 15.4177 6 16.5913V48.3413C6 49.5149 6.95139 50.4663 8.125 50.4663H55.875C57.0486 50.4663 58 49.5149 58 48.3413V16.5913C58 15.4177 57.0486 14.4663 55.875 14.4663Z"
                  fill="currentColor" />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M7 16.5913C7 15.97 7.50368 15.4663 8.125 15.4663H55.875C56.4963 15.4663 57 15.97 57 16.5913V48.3413C57 48.9626 56.4963 49.4663 55.875 49.4663H8.125C7.50368 49.4663 7 48.9626 7 48.3413V16.5913ZM8.125 13.4663C6.39911 13.4663 5 14.8654 5 16.5913V48.3413C5 50.0672 6.39911 51.4663 8.125 51.4663H55.875C57.6009 51.4663 59 50.0672 59 48.3413V16.5913C59 14.8654 57.6009 13.4663 55.875 13.4663H8.125ZM14 23.4663C13.4477 23.4663 13 23.914 13 24.4663C13 25.0186 13.4477 25.4663 14 25.4663H50C50.5523 25.4663 51 25.0186 51 24.4663C51 23.914 50.5523 23.4663 50 23.4663H14ZM14 31.4663C13.4477 31.4663 13 31.914 13 32.4663C13 33.0186 13.4477 33.4663 14 33.4663H50C50.5523 33.4663 51 33.0186 51 32.4663C51 31.914 50.5523 31.4663 50 31.4663H14ZM13 40.4663C13 39.914 13.4477 39.4663 14 39.4663H16C16.5523 39.4663 17 39.914 17 40.4663C17 41.0186 16.5523 41.4663 16 41.4663H14C13.4477 41.4663 13 41.0186 13 40.4663ZM24 39.4663C23.4477 39.4663 23 39.914 23 40.4663C23 41.0186 23.4477 41.4663 24 41.4663H40C40.5523 41.4663 41 41.0186 41 40.4663C41 39.914 40.5523 39.4663 40 39.4663H24ZM47 40.4663C47 39.914 47.4477 39.4663 48 39.4663H50C50.5523 39.4663 51 39.914 51 40.4663C51 41.0186 50.5523 41.4663 50 41.4663H48C47.4477 41.4663 47 41.0186 47 40.4663Z"
                  fill="currentColor" />
              </svg>
            </div>
            <h5 class="mb-2">Well Documented</h5>
            <p class="features-icon-description">
              An easy-to-follow doc with lots of references and code examples.
            </p>
          </div> -->
        </div>
      </div>
    </section>
    <!-- Useful features: End -->

    <!-- Real customers reviews: Start -->
    <section
      id="landingReviews"
      class="section-py bg-body landing-reviews pb-0">
      <!-- What people say slider: Start -->
      <div class="container">
        <div class="row align-items-center gx-0 gy-4 g-lg-5 mb-5 pb-md-5">
          <div class="col-md-6 col-lg-5 col-xl-3">
            <div class="mb-4">
              <span class="badge bg-label-primary">Real Customers Reviews</span>
            </div>
            <h4 class="mb-1">
              <span class="position-relative fw-extrabold z-1">What people say
                <img
                  src="assets/img/front-pages/icons/section-title-icon.png"
                  alt="laptop charging"
                  class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
              </span>
            </h4>
            <p class="mb-5 mb-md-12">
              See what our customers have to<br class="d-none d-xl-block" />
              say about their experience.
            </p>
            <div class="landing-reviews-btns">
              <button
                id="reviews-previous-btn"
                class="btn btn-icon btn-label-primary reviews-btn me-3"
                type="button">
                <i
                  class="icon-base bx bx-chevron-left icon-md scaleX-n1-rtl"></i>
              </button>
              <button
                id="reviews-next-btn"
                class="btn btn-icon btn-label-primary reviews-btn"
                type="button">
                <i
                  class="icon-base bx bx-chevron-right icon-md scaleX-n1-rtl"></i>
              </button>
            </div>
          </div>
          <div class="col-md-6 col-lg-7 col-xl-9">
            <div class="swiper-reviews-carousel overflow-hidden">
              <div class="swiper" id="swiper-reviews">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="card h-100">
                      <div
                        class="card-body text-body d-flex flex-column justify-content-between h-100">
                        <!-- <div class="mb-4">
                          <img
                            src="assets/img/front-pages/branding/logo-1.png"
                            alt="client logo"
                            class="client-logo img-fluid" />
                        </div> -->
                        <p>
                          “Internet membantu pembesaran omset, akses pasar dan ekspansi perusahaan. Jadi menurut saya, keren. Karena sekarang yang gak butuh internet ya siapa sih? gak di desa, gak di kota, semuanya sama. Semuanya membutuhkan internet, dan itu yang dijawab oleh ICONX.”
                        </p>
                        <div class="text-warning mb-4">
                          <i class="icon-base bx bxs-star"></i>
                          <i class="icon-base bx bxs-star"></i>
                          <i class="icon-base bx bxs-star"></i>
                          <i class="icon-base bx bxs-star"></i>
                          <i class="icon-base bx bxs-star"></i>
                        </div>
                        <div class="d-flex align-items-center">

                          <div>
                            <h6 class="mb-0">Wiyadi</h6>
                            <p class="small text-body-secondary mb-0">
                              Pengguna ICONX
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card h-100">
                      <div
                        class="card-body text-body d-flex flex-column justify-content-between h-100">
                        <!-- <div class="mb-4">
                          <img
                            src="assets/img/front-pages/branding/logo-2.png"
                            alt="client logo"
                            class="client-logo img-fluid" />
                        </div> -->
                        <p>
                          “Saya memakai ICONX karena harganya relatif murah dan terjangkau. Sehingga itu cocok untuk warga saya yang tarif rata-rata ekonominya menengah kebawah. Kemudian yang saya suka itu karena dia unlimited, mau internet kapanpun bebas. Makanya saya yakin kalau ICONX bisa menjadi solusi bagi permasalahan yang ada di lingkungan kami.”
                        </p>
                        <div class="text-warning mb-4">
                          <i class="icon-base bx bxs-star"></i>
                          <i class="icon-base bx bxs-star"></i>
                          <i class="icon-base bx bxs-star"></i>
                          <i class="icon-base bx bxs-star"></i>
                          <i class="icon-base bx bxs-star"></i>
                        </div>
                        <div class="d-flex align-items-center">

                          <div>
                            <h6 class="mb-0">Ibu Murni</h6>
                            <p class="small text-body-secondary mb-0">
                              Carik Desa Sindumartani, Sleman
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card h-100">
                      <div
                        class="card-body text-body d-flex flex-column justify-content-between h-100">
                        <!-- <div class="mb-4">
                          <img
                            src="assets/img/front-pages/branding/logo-3.png"
                            alt="client logo"
                            class="client-logo img-fluid" />
                        </div> -->
                        <p>
                          Transformasi DIGITAL & Transformasi SOSIAL. Kehadiran platform digital mampu memudahkan dan meningkatkan proses pembangunan pemerintah maupun kualitas hidup warga desa Panggungharjo. Kehadiran ICONX menjadi salah satu infrastruktur teknologi penting untuk mewujudkan cita cita besar dari pemerintah desa maupun warga desa Panggungharjo
                        </p>
                        <div class="text-warning mb-4">
                          <i class="icon-base bx bxs-star"></i>
                          <i class="icon-base bx bxs-star"></i>
                          <i class="icon-base bx bxs-star"></i>
                          <i class="icon-base bx bxs-star"></i>
                          <i class="icon-base bx bxs-star"></i>
                        </div>
                        <div class="d-flex align-items-center">

                          <div>
                            <h6 class="mb-0">Wahyudi Anggoro Hadi</h6>
                            <p class="small text-body-secondary mb-0">
                              Kepala Desa Panggungharjo, Bantul

                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- What people say slider: End -->
      <hr class="m-0 mt-6 mt-md-12" />
      <!-- Logo slider: Start -->
      <!-- <div class="container">
        <div class="swiper-logo-carousel pt-8">
          <div class="swiper" id="swiper-clients-logos">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img
                  src="assets/img/front-pages/branding/logo_1-light.png"
                  alt="client logo"
                  class="client-logo"
                  data-app-light-img="front-pages/branding/logo_1-light.png"
                  data-app-dark-img="front-pages/branding/logo_1-dark.png" />
              </div>
              <div class="swiper-slide">
                <img
                  src="assets/img/front-pages/branding/logo_2-light.png"
                  alt="client logo"
                  class="client-logo"
                  data-app-light-img="front-pages/branding/logo_2-light.png"
                  data-app-dark-img="front-pages/branding/logo_2-dark.png" />
              </div>
              <div class="swiper-slide">
                <img
                  src="assets/img/front-pages/branding/logo_3-light.png"
                  alt="client logo"
                  class="client-logo"
                  data-app-light-img="front-pages/branding/logo_3-light.png"
                  data-app-dark-img="front-pages/branding/logo_3-dark.png" />
              </div>
              <div class="swiper-slide">
                <img
                  src="assets/img/front-pages/branding/logo_4-light.png"
                  alt="client logo"
                  class="client-logo"
                  data-app-light-img="front-pages/branding/logo_4-light.png"
                  data-app-dark-img="front-pages/branding/logo_4-dark.png" />
              </div>
              <div class="swiper-slide">
                <img
                  src="assets/img/front-pages/branding/logo_5-light.png"
                  alt="client logo"
                  class="client-logo"
                  data-app-light-img="front-pages/branding/logo_5-light.png"
                  data-app-dark-img="front-pages/branding/logo_5-dark.png" />
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Logo slider: End -->
    </section>
    <!-- Real customers reviews: End -->



    <!-- Pricing plans: Start -->
    <section id="landingPricing" class="section-py bg-body landing-pricing">
      <div class="container">
        <div class="text-center mb-4">
          <span class="badge bg-label-primary">NEW FOR ICONX</span>
        </div>
        <h4 class="text-center mb-1">
          <span class="position-relative fw-extrabold z-1">Harga Terjangkau
            <img
              src="assets/img/front-pages/icons/section-title-icon.png"
              alt="laptop charging"
              class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
          </span>
          Sesuai Kebutuhanmu
        </h4>

        <div class="text-center mb-12">
          <div class="position-relative d-inline-block pt-3 pt-md-0">
            <label class="switch switch-sm switch-primary me-0">
              <span class="switch-label fs-6 text-body me-3">Bayar Bulanan</span>
              <input
                type="checkbox"
                class="switch-input price-duration-toggler"
                checked />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label fs-6 text-body ms-3">Bayar Tahunan</span>
            </label>
            <div class="pricing-plans-item position-absolute d-flex">
              <img
                src="assets/img/front-pages/icons/pricing-plans-arrow.png"
                alt="pricing plans arrow"
                class="scaleX-n1-rtl" />
              <span class="fw-medium mt-2 ms-1"> Hemat 25%</span>
            </div>
          </div>
        </div>
        <div class="row g-6 pt-lg-5">
          <!-- Basic Plan: Start -->
          <div class="col-xl-4 col-lg-6">
            <div class="card">
              <div class="card-header">
                <div class="text-center">
                  <img
                    src="assets/img/front-pages/icons/paper-airplane.png"
                    alt="paper airplane icon"
                    class="mb-8 pb-2" />
                  <h4 class="mb-0">Starter</h4>
                  <div
                    class="d-flex align-items-center justify-content-center">
                    <span
                      class="price-monthly h2 text-primary fw-extrabold mb-0">Rp239.000</span>
                    <span
                      class="price-yearly h2 text-primary fw-extrabold mb-0 d-none">Rp179.000</span>
                    <sub class="h6 text-body-secondary mb-n1 ms-1">/ Bulan</sub>
                  </div>
                  <div class="position-relative pt-2">
                    <div
                      class="price-yearly text-body-secondary price-yearly-toggle d-none">
                      Rp2.148.000 / Tahun
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled pricing-list">
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Up to 35 Mbps Download/Upload
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Proteksi dasar dengan firewall dan enkripsi WPA3
                    </h6>
                  </li>

                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Layanan pelanggan 24/7 via chat & email
                    </h6>
                  </li>
                  <!-- <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Custom Forms
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Traffic analytics
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Basic Support
                    </h6>
                  </li> -->
                </ul>
                <div class="d-grid mt-8">
                  <a href="#" class="btn btn-label-primary">Get Started</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Basic Plan: End -->

          <!-- Favourite Plan: Start -->
          <div class="col-xl-4 col-lg-6">
            <div class="card border border-primary shadow-xl">
              <div class="card-header">
                <div class="text-center">
                  <img
                    src="assets/img/front-pages/icons/plane.png"
                    alt="plane icon"
                    class="mb-8 pb-2" />
                  <h4 class="mb-0">Pro</h4>
                  <div
                    class="d-flex align-items-center justify-content-center">
                    <span
                      class="price-monthly h2 text-primary fw-extrabold mb-0">Rp299.000</span>
                    <span
                      class="price-yearly h2 text-primary fw-extrabold mb-0 d-none">Rp224.000</span>
                    <sub class="h6 text-body-secondary mb-n1 ms-1">/ Bulan</sub>
                  </div>
                  <div class="position-relative pt-2">
                    <div
                      class="price-yearly text-body-secondary price-yearly-toggle d-none">
                      Rp2.688.000 / Tahun
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled pricing-list">
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Semua benefit Starter
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Up to 50 Mbps Download/Upload
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Dukungan QoS otomatis: prioritas trafik video & gaming
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Akses VPN gratis untuk keamanan ekstra
                    </h6>
                  </li>
                  <!-- <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Advanced chatbot
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Campaign management
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Collaboration tools
                    </h6>
                  </li> -->
                </ul>
                <div class="d-grid mt-8">
                  <a href="#" class="btn btn-primary">Get Started</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Favourite Plan: End -->

          <!-- Standard Plan: Start -->
          <div class="col-xl-4 col-lg-6">
            <div class="card">
              <div class="card-header">
                <div class="text-center">
                  <img
                    src="assets/img/front-pages/icons/shuttle-rocket.png"
                    alt="shuttle rocket icon"
                    class="mb-8 pb-2" />
                  <h4 class="mb-0">Elite</h4>
                  <div
                    class="d-flex align-items-center justify-content-center">
                    <span
                      class="price-monthly h2 text-primary fw-extrabold mb-0">Rp399.000</span>
                    <span
                      class="price-yearly h2 text-primary fw-extrabold mb-0 d-none">Rp299.000</span>
                    <sub class="h6 text-body-secondary mb-n1 ms-1">/ Bulan</sub>
                  </div>
                  <div class="position-relative pt-2">
                    <div
                      class="price-yearly text-body-secondary price-yearly-toggle d-none">
                      Rp3.588.000 / Tahun
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled pricing-list">
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Up to 100 Mbps Download/Upload
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Semua benefit Pro
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Layanan prioritas: instalasi & troubleshooting dalam 24 jam
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Paket proteksi premium: antivirus & parental control terintegrasi
                    </h6>
                  </li>
                  <!-- <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Custom permissions
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Social media automation
                    </h6>
                  </li>
                  <li>
                    <h6 class="d-flex align-items-center mb-3">
                      <span
                        class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base bx bx-check icon-12px"></i></span>
                      Sales automation tools
                    </h6>
                  </li> -->
                </ul>
                <div class="d-grid mt-8">
                  <a href="#" class="btn btn-label-primary">Get Started</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Standard Plan: End -->
        </div>
      </div>
    </section>
    <!-- Pricing plans: End -->


    <!-- FAQ: Start -->
    <section id="landingFAQ" class="section-py bg-body landing-faq">
      <div class="container">
        <div class="text-center mb-4">
          <span class="badge bg-label-primary">FAQ</span>
        </div>
        <h4 class="text-center mb-1">
          <span class="position-relative fw-extrabold z-1">Pertanyaan
            <img
              src="assets/img/front-pages/icons/section-title-icon.png"
              alt="laptop charging"
              class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
          </span>
          Yang Sering Ditanya
        </h4>

        <div class="row gy-12 align-items-center">
          <div class="col-lg-5">
            <div class="text-center">
              <img
                src="assets/img/front-pages/landing-page/faq-boy-with-logos.png"
                alt="faq boy with logos"
                class="faq-image" />
            </div>
          </div>
          <div class="col-lg-7">
            <div class="accordion" id="accordionExample">
              <div class="card accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    type="button"
                    class="accordion-button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionOne"
                    aria-expanded="true"
                    aria-controls="accordionOne">
                    Bagaimana Cara Berlangganan ICONX?
                  </button>
                </h2>

                <div
                  id="accordionOne"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Daftar online melalui website kami atau hubungi tim sales kami untuk instalasi cepat.
                  </div>
                </div>
              </div>
              <div class="card accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    type="button"
                    class="accordion-button collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionTwo"
                    aria-expanded="false"
                    aria-controls="accordionTwo">
                    Apa Saja Keunggulan Layanan ICONX?
                  </button>
                </h2>
                <div
                  id="accordionTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Koneksi berbasis fiber optic, tanpa batas kuota, dan dukungan pelanggan 24/7.
                  </div>
                </div>
              </div>
              <div class="card accordion-item active">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    type="button"
                    class="accordion-button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordionThree"
                    aria-expanded="false"
                    aria-controls="accordionThree">
                    Bagaimana Jika Saya Mengalami Gangguan Jaringan?
                  </button>
                </h2>
                <div
                  id="accordionThree"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Jangan khawatir! Tim dukungan kami siap 24/7 untuk membantu mengatasi masalah jaringan dengan solusi cepat dan efektif.
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ: End -->


    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py bg-body landing-contact">
      <div class="container">
        <div class="text-center mb-4">
          <span class="badge bg-label-primary">Hubungi Kami</span>
        </div>
        <h4 class="text-center mb-1">
          <span class="position-relative fw-extrabold z-1">Hubungi
            <img
              src="assets/img/front-pages/icons/section-title-icon.png"
              alt="laptop charging"
              class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
          </span>
          kami
        </h4>

        <div class="row g-6">
          <div class="col-lg-5">
            <div class="contact-img-box position-relative border p-2 h-100">
              <img
                src="assets/img/front-pages/icons/contact-border.png"
                alt="contact border"
                class="contact-border-img position-absolute d-none d-lg-block scaleX-n1-rtl" />
              <img
                src="assets/img/front-pages/landing-page/contact-customer-service.png"
                alt="contact customer service"
                class="contact-img w-100 scaleX-n1-rtl" />
              <div class="p-4 pb-2">

              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="mb-2">Kirimkan Pesan</h4>
                <p class="mb-6">
                  Kirimkan pertanyaan atau permintaan Anda, kami siap membantu 24/7!
                </p>
                <form>
                  <div class="row g-4">
                    <div class="col-md-6">
                      <label class="form-label" for="contact-form-fullname">Nama Lengkap</label>
                      <input
                        type="text"
                        class="form-control"
                        id="contact-form-fullname"
                        placeholder="john" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="contact-form-email">Email</label>
                      <input
                        type="text"
                        id="contact-form-email"
                        class="form-control"
                        placeholder="johndoe@gmail.com" />
                    </div>
                    <div class="col-12">
                      <label class="form-label" for="contact-form-message">Pesan</label>
                      <textarea
                        id="contact-form-message"
                        class="form-control"
                        rows="11"
                        placeholder="Write a message"></textarea>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">
                        Kirimkan
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us: End -->
  </div>

  <!-- / Sections:End -->

  <!-- Footer: Start -->
  <?php include('includes/footer.php'); ?>
  <!-- Footer: End -->


  <!-- Core JS -->

  <!-- build:js assets/vendor/js/theme.js  -->

  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>

  <script src="assets/vendor/libs/@algolia/autocomplete-js.js"></script>

  <script src="assets/vendor/libs/pickr/pickr.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/nouislider/nouislider.js"></script>
  <script src="assets/vendor/libs/swiper/swiper.js"></script>

  <!-- Main JS -->

  <script src="assets/js/front-main.js"></script>

  <!-- Page JS -->
  <script src="assets/js/front-page-landing.js"></script>
</body>

</html>

<!-- beautify ignore:end -->