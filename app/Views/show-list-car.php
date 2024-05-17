<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="/dashboard/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>
    Cards basic - UI elements | Sneat - Bootstrap 5 HTML Admin Template - Pro
  </title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="/dashboard/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="/dashboard/assets/vendore/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="/dashboard/assets/vendore/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="/dashboard/assets/vendore/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="/dashboard/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="/dashboard/assets/vendore/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="/dashboard/assets/vendore/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="/dashboard/assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Search..." aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <a class="github-button" href="https://github.com/themeselection/sneat-html-admin-template-free" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="/dashboard/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="/dashboard/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-medium d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                        <span class="flex-grow-1 align-middle ms-1">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4">
              <span class="text-muted fw-light">UI Elements /</span> Cards
              Basic
            </h4>

            <!-- Examples -->
            <div class="row mb-5">
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/2.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up the bulk of the card's content.
                    </p>
                    <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle text-muted">
                      Support card subtitle
                    </h6>
                  </div>
                  <img class="img-fluid" src="/dashboard/assets/img/elements/13.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <p class="card-text">
                      Bear claw sesame snaps gummies chocolate.
                    </p>
                    <a href="javascript:void(0);" class="card-link">Card link</a>
                    <a href="javascript:void(0);" class="card-link">Another link</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle text-muted">
                      Support card subtitle
                    </h6>
                    <img class="img-fluid d-flex mx-auto my-4 rounded" src="/dashboard/assets/img/elements/4.jpg" alt="Card image cap" />
                    <p class="card-text">
                      Bear claw sesame snaps gummies chocolate.
                    </p>
                    <a href="javascript:void(0);" class="card-link">Card link</a>
                    <a href="javascript:void(0);" class="card-link">Another link</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Examples -->

            <!-- Content types -->
            <h5 class="pb-1 mb-4">Content types</h5>

            <div class="row mb-5">
              <div class="col-md-6 col-lg-4">
                <h6 class="mt-2 text-muted">Body</h6>
                <div class="card mb-4">
                  <div class="card-body">
                    <p class="card-text">
                      This is some text within a card body. Jelly lemon drops
                      tiramisu chocolate cake cotton candy soufflé oat cake
                      sweet roll. Sugar plum marzipan dragée topping
                      cheesecake chocolate bar. Danish muffin icing donut.
                    </p>
                  </div>
                </div>
                <h6 class="mt-2 text-muted">Titles, text, and links</h6>
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <div class="card-subtitle text-muted mb-3">
                      Card subtitle
                    </div>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up the bulk of the card's content.
                    </p>
                    <a href="javascript:void(0)" class="card-link">Card link</a>
                    <a href="javascript:void(0)" class="card-link">Another link</a>
                  </div>
                </div>
                <h6 class="mt-2 text-muted">List groups</h6>
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <h6 class="mt-2 text-muted">Images</h6>
                <div class="card mb-4">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/5.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up the bulk of the card's content.
                    </p>
                    <p class="card-text">
                      Cookie topping caramels jujubes gingerbread. Lollipop
                      apple pie cupcake candy canes cookie ice cream. Wafer
                      chocolate bar carrot cake jelly-o.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <h6 class="mt-2 text-muted">Kitchen sink</h6>
                <div class="card">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/7.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title.
                    </p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                  <div class="card-body">
                    <a href="javascript:void(0)" class="card-link">Card link</a>
                    <a href="javascript:void(0)" class="card-link">Another link</a>
                  </div>
                </div>
              </div>
            </div>

            <h6 class="pb-1 mb-4 text-muted">Header and footer</h6>
            <div class="row mb-5">
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                  <div class="card-header">Featured</div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content natural lead-in to additional
                      content.
                    </p>
                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                  <h5 class="card-header">Quote</h5>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Integer posuere erat a ante.Lorem ipsum dolor
                        sit amet, consectetur.
                      </p>
                      <footer class="blockquote-footer">
                        Someone famous in
                        <cite title="Source Title">Source Title</cite>
                      </footer>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card text-center">
                  <div class="card-header">Featured</div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">
                      With supporting text below as a natural.
                    </p>
                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                  </div>
                  <div class="card-footer text-muted">2 days ago</div>
                </div>
              </div>
            </div>
            <!--/ Content types -->

            <!-- Text alignment -->
            <h5 class="pb-1 mb-4">Text alignment</h5>
            <div class="row mb-5">
              <div class="col-md-6 col-lg-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card text-end mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Text alignment -->

            <!-- Images -->
            <h5 class="pb-1 mb-4">Images caps & overlay</h5>
            <div class="row mb-5">
              <div class="col-md-6 col-xl-4">
                <div class="card mb-3">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/18.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                  <img class="card-img-bottom" src="/dashboard/assets/img/elements/1.jpg" alt="Card image cap" />
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card bg-dark border-0 text-white">
                  <img class="card-img" src="/dashboard/assets/img/elements/11.jpg" alt="Card image" />
                  <div class="card-img-overlay">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                    <p class="card-text">Last updated 3 mins ago</p>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Images -->

            <!-- Horizontal -->
            <h5 class="pb-1 mb-4">Horizontal</h5>
            <div class="row mb-5">
              <div class="col-md">
                <div class="card mb-3">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img class="card-img card-img-left" src="/dashboard/assets/img/elements/12.jpg" alt="Card image" />
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div class="card mb-3">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <p class="card-text">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <img class="card-img card-img-right" src="/dashboard/assets/img/elements/17.jpg" alt="Card image" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Horizontal -->

            <!-- Style variation -->
            <h5 class="pb-1 mb-4">Style variation</h5>
            <div class="row">
              <div class="col-md-6 col-xl-4">
                <div class="card bg-primary text-white mb-3">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title text-white">Primary card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card bg-secondary text-white mb-3">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title text-white">
                      Secondary card title
                    </h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card bg-success text-white mb-3">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title text-white">Success card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card bg-danger text-white mb-3">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title text-white">Danger card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card bg-warning text-white mb-3">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title text-white">Warning card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card bg-info text-white mb-3">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title text-white">Info card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Outline -->
            <div class="row">
              <div class="col-md-6 col-xl-4">
                <div class="card shadow-none bg-transparent border border-primary mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card shadow-none bg-transparent border border-secondary mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card shadow-none bg-transparent border border-success mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card shadow-none bg-transparent border border-danger mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card shadow-none bg-transparent border border-warning mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card shadow-none bg-transparent border border-info mb-3">
                  <div class="card-body">
                    <h5 class="card-title">Info card title</h5>
                    <p class="card-text">
                      Some quick example text to build on the card title and
                      make up.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Style variation -->

            <!-- Card layout -->
            <h5 class="pb-1 my-5">Card layout</h5>

            <!-- Card Groups -->
            <h6 class="pb-1 mb-4 text-muted">Card Groups</h6>
            <div class="card-group mb-5">
              <div class="card">
                <img class="card-img-top" src="/dashboard/assets/img/elements/4.jpg" alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a wider card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="/dashboard/assets/img/elements/5.jpg" alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This card has supporting text below as a natural lead-in
                    to additional content.
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="/dashboard/assets/img/elements/1.jpg" alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This is a wider card with supporting text below as a
                    natural lead-in to additional content. This card has even
                    longer content than the first to show that equal height
                    action.
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>

            <!-- Grid Card -->
            <h6 class="pb-1 mb-4 text-muted">Grid Card</h6>
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
              <div class="col">
                <div class="card h-100">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/2.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a longer card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/13.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a longer card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/4.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a longer card with supporting text below as a
                      natural lead-in to additional content.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/18.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a longer card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/19.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a longer card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/20.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a longer card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Masonry -->
            <h6 class="pb-1 mb-4 text-muted">Masonry</h6>
            <div class="row" data-masonry='{"percentPosition": true }'>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/5.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">
                      Card title that wraps to a new line
                    </h5>
                    <p class="card-text">
                      This is a longer card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card p-3">
                  <figure class="p-3 mb-0">
                    <blockquote class="blockquote">
                      <p>
                        A well-known quote, contained in a blockquote element.
                      </p>
                    </blockquote>
                    <figcaption class="blockquote-footer mb-0 text-muted">
                      Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/18.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This card has supporting text below as a natural lead-in
                      to additional content.
                    </p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card bg-primary text-white text-center p-3">
                  <figure class="mb-0">
                    <blockquote class="blockquote">
                      <p>
                        A well-known quote, contained in a blockquote element.
                      </p>
                    </blockquote>
                    <figcaption class="blockquote-footer mb-0 text-white">
                      Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card text-center">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This card has a regular title and short paragraph of
                      text below it.
                    </p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                  <img class="card-img-top" src="/dashboard/assets/img/elements/4.jpg" alt="Card image cap" />
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card p-3 text-end">
                  <figure class="mb-0">
                    <blockquote class="blockquote">
                      <p>
                        A well-known quote, contained in a blockquote element.
                      </p>
                    </blockquote>
                    <figcaption class="blockquote-footer mb-0 text-muted">
                      Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is another card with title and supporting text
                      below. This card has some additional content to make it
                      slightly taller overall.
                    </p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Card layout -->
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , made with ❤️ by
                <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
              </div>
              <div class="d-none d-lg-inline-block">
                <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link">Support</a>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <div class="buy-now">
    <a href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
  </div>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="/dashboard/assets/vendore/libs/jquery/jquery.js"></script>
  <script src="/dashboard/assets/vendore/libs/popper/popper.js"></script>
  <script src="/dashboard/assets/vendore/js/bootstrap.js"></script>
  <script src="/dashboard/assets/vendore/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="/dashboard/assets/vendore/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="/dashboard/assets/vendore/libs/masonry/masonry.js"></script>

  <!-- Main JS -->
  <script src="/dashboard/assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>