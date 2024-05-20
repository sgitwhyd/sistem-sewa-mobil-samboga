<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="dashboard/assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

      <?= $this->renderSection('title'); ?>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="dashboard/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="dashboard/assets/vendore/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="dashboard/assets/vendore/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="dashboard/assets/vendore/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="dashboard/assets/css/demo.css" />

    <!-- vendores CSS -->
    <link rel="stylesheet" href="dashboard/assets/vendore/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="dashboard/assets/vendore/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="dashboard/assets/vendore/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="dashboard/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

   <?= $this->renderSection('content') ?>

    <!-- /Content -->
    <!-- Core JS -->
    <!-- build:js assets/vendore/js/core.js -->

    <script src="dashboard/assets/vendore/libs/jquery/jquery.js"></script>
    <script src="dashboard/assets/vendore/libs/popper/popper.js"></script>
    <script src="dashboard/assets/vendore/js/bootstrap.js"></script>
    <script src="dashboard/assets/vendore/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="dashboard/assets/vendore/js/menu.js"></script>

    <!-- endbuild -->

    <!-- vendores JS -->

    <!-- Main JS -->
    <script src="dashboard/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
