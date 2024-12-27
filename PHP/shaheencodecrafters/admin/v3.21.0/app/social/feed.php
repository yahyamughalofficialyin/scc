<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  
<!-- Mirrored from prium.github.io/falcon/v3.21.0/app/social/feed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 20:05:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../assets/js/config.js"></script>
    <script src="../../vendors/simplebar/simplebar.min.js"></script>

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link href="../../vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link href="../../vendors/plyr/plyr.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="../../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" data-double-top-nav="data-double-top-nav" style="display: none;">
          <div class="w-100">
            <div class="d-flex flex-between-center">
              <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDoubleTop" aria-controls="navbarDoubleTop" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
              <a class="navbar-brand me-1 me-sm-3" href="../../index-2.html">
                <div class="d-flex align-items-center"><img class="me-2" src="../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
              </a>
              <ul class="navbar-nav align-items-center d-none d-lg-block">
                <li class="nav-item">
                  <div class="search-box" data-list='{"valueNames":["title"]}'>
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                    <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
                    <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                      <div class="scrollbar list py-3" style="max-height: 24rem;">
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../events/event-detail.html">
                          <div class="d-flex align-items-center">
                            <span class="fas fa-circle me-2 text-300 fs-11"></span>
                            <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Events</div>
                          </div>
                        </a>
                        <a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../e-commerce/customers.html">
                          <div class="d-flex align-items-center">
                            <span class="fas fa-circle me-2 text-300 fs-11"></span>
                            <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Customers</div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-9" href="../e-commerce/customers.html">
                          <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                            <div class="flex-1 fs-10 title">All customers list</div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-1 fs-9" href="../events/event-detail.html">
                          <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                            <div class="flex-1 fs-10 title">Latest events in current month</div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-1 fs-9" href="../e-commerce/product/product-grid.html">
                          <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-info">products:</span>
                            <div class="flex-1 fs-10 title">Most popular products</div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Files</h6><a class="dropdown-item px-x1 py-2" href="#!">
                          <div class="d-flex align-items-center">
                            <div class="file-thumbnail me-2"><img class="border h-100 w-100 object-fit-cover rounded-3" src="../../assets/img/products/3-thumb.png" alt="" /></div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">iPhone</h6>
                              <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-2" href="#!">
                          <div class="d-flex align-items-center">
                            <div class="file-thumbnail me-2"><img class="img-fluid" src="../../assets/img/icons/zip.png" alt="" /></div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Falcon v1.8.2</h6>
                              <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                            </div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Members</h6><a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-l status-online me-2">
                              <img class="rounded-circle" src="../../assets/img/team/1.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Anna Karinina</h6>
                              <p class="fs-11 mb-0 d-flex">Technext Limited</p>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-l me-2">
                              <img class="rounded-circle" src="../../assets/img/team/2.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Antony Hopkins</h6>
                              <p class="fs-11 mb-0 d-flex">Brain Trust</p>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-l me-2">
                              <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Emma Watson</h6>
                              <p class="fs-11 mb-0 d-flex">Google</p>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="text-center mt-n3">
                        <p class="fallback fw-bold fs-8 d-none">No Result Found.</p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                <li class="nav-item ps-2 pe-0">
                  <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                      <div class="bg-white dark__bg-1000 rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button></div>
                    </div>
                  </div>
                </li>
                <li class="nav-item d-none d-sm-block">
                  <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                  <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none">
                      <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                          <div class="col-auto">
                            <h6 class="card-header-title mb-0">Notifications</h6>
                          </div>
                          <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                        </div>
                      </div>
                      <div class="scrollbar-overlay" style="max-height:19rem">
                        <div class="list-group list-group-flush fw-normal fs-10">
                          <div class="list-group-title border-bottom">NEW</div>
                          <div class="list-group-item">
                            <a class="notification notification-flush notification-unread" href="#!">
                              <div class="notification-avatar">
                                <div class="avatar avatar-2xl me-3">
                                  <img class="rounded-circle" src="../../assets/img/team/1-thumb.png" alt="" />
                                </div>
                              </div>
                              <div class="notification-body">
                                <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                              </div>
                            </a>
                          </div>
                          <div class="list-group-item">
                            <a class="notification notification-flush notification-unread" href="#!">
                              <div class="notification-avatar">
                                <div class="avatar avatar-2xl me-3">
                                  <div class="avatar-name rounded-circle"><span>AB</span></div>
                                </div>
                              </div>
                              <div class="notification-body">
                                <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                              </div>
                            </a>
                          </div>
                          <div class="list-group-title border-bottom">EARLIER</div>
                          <div class="list-group-item">
                            <a class="notification notification-flush" href="#!">
                              <div class="notification-avatar">
                                <div class="avatar avatar-2xl me-3">
                                  <img class="rounded-circle" src="../../assets/img/icons/weather-sm.jpg" alt="" />
                                </div>
                              </div>
                              <div class="notification-body">
                                <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                              </div>
                            </a>
                          </div>
                          <div class="list-group-item">
                            <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                              <div class="notification-avatar">
                                <div class="avatar avatar-xl me-3">
                                  <img class="rounded-circle" src="../../assets/img/logos/oxford.png" alt="" />
                                </div>
                              </div>
                              <div class="notification-body">
                                <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                              </div>
                            </a>
                          </div>
                          <div class="list-group-item">
                            <a class="border-bottom-0 notification notification-flush" href="#!">
                              <div class="notification-avatar">
                                <div class="avatar avatar-xl me-3">
                                  <img class="rounded-circle" src="../../assets/img/team/10.jpg" alt="" />
                                </div>
                              </div>
                              <div class="notification-body">
                                <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                                <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer text-center border-top"><a class="card-link d-block" href="notifications.html">View all</a></div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown px-1">
                  <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                      <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                      <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                      <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                      <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                      <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                      <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                      <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                      <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                      <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                    </svg></a>
                  <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                    <div class="card shadow-none">
                      <div class="scrollbar-overlay nine-dots-dropdown">
                        <div class="card-body px-3">
                          <div class="row text-center gx-0 gy-0">
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../pages/user/profile.html" target="_blank">
                                <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" /></div>
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Themewagon</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Mailbluster</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                              </a></div>
                            <div class="col-12">
                              <hr class="my-3 mx-n3 bg-200" />
                            </div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../events/event-detail.html" target="_blank">
                                <div class="avatar avatar-2xl">
                                  <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-7">E</span></div>
                                </div>
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                              </a></div>
                            <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../../assets/img/team/3-thumb.png" alt="" />
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                      <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Set status</a>
                      <a class="dropdown-item" href="../../pages/user/profile.html">Profile &amp; account</a>
                      <a class="dropdown-item" href="#!">Feedback</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="../../pages/user/settings.html">Settings</a>
                      <a class="dropdown-item" href="../../pages/authentication/card/logout.html">Logout</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <hr class="my-2 d-none d-lg-block" />
            <div class="collapse navbar-collapse scrollbar py-lg-2" id="navbarDoubleTop">
              <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../index-2.html">Default</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../kanban.html">Kanban</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="followers.html">Followers</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/quick-links.html">Quick links</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/trainer-profile.html">Trainer profile</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../events/event-list.html">Event list</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../email/compose.html">Compose</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/invoice.html">Invoice</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                    <div class="card navbar-card-pages shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/combo-nav.html">Combo nav</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/landing.html">Landing</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/user/settings.html">Settings</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/pricing/pricing-alt.html">Pricing alt</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/errors/500.html">500</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-accordion.html">Faq accordion</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../index.html#authentication-modal" data-bs-toggle="modal">Modal</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                    <div class="card navbar-card-components shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/carousel/bootstrap.html">Bootstrap carousel</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/top-navbar.html">Top nav</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pagination.html">Pagination</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/sortable.html">Sortable</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/videos/plyr.html">Plyr</a></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/visibility.html">Visibility</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/tables/bulk-select.html">Bulk select</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                              <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/how-to-use.html">How to use</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/validation.html">Validation</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column pt-xxl-1">
                              <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/icons/material-icons.html">Material icons</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/maps/leaflet-map.html">Leaflet map</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../../changelog.html">Changelog</a></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="../../index-2.html">
              <div class="d-flex align-items-center py-3"><img class="me-2" src="../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item"><!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="dashboard">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                  </a>
                  <ul class="nav collapse" id="dashboard">
                    <li class="nav-item"><a class="nav-link" href="../../index-2.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/analytics.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Analytics</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/crm.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CRM</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/e-commerce.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">E commerce</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/lms.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">LMS</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/project-management.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Management</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/saas.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">SaaS</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../dashboard/support-desk.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Support desk</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                  </ul>
                </li>
                <li class="nav-item"><!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">App</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="../calendar.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendar</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../chat.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Chat</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span></div>
                  </a>
                  <ul class="nav collapse" id="email">
                    <li class="nav-item"><a class="nav-link" href="../email/inbox.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../email/email-detail.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email detail</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../email/compose.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">Events</span></div>
                  </a>
                  <ul class="nav collapse" id="events">
                    <li class="nav-item"><a class="nav-link" href="../events/create-an-event.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create an event</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event detail</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../events/event-list.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event list</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shopping-cart"></span></span><span class="nav-link-text ps-1">E commerce</span></div>
                  </a>
                  <ul class="nav collapse" id="e-commerce">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="product">
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/product/product-list.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product list</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/product/product-grid.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product grid</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/product/product-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product details</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/product/add-product.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Add product</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Orders</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="orders">
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/orders/order-list.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order list</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../e-commerce/orders/order-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order details</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customers</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/customer-details.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customer details</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/shopping-cart.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shopping cart</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/checkout.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checkout</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/billing.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Billing</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../e-commerce/invoice.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invoice</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-learning" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-graduation-cap"></span></span><span class="nav-link-text ps-1">E learning</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                  </a>
                  <ul class="nav collapse" id="e-learning">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#course" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="course">
                        <li class="nav-item"><a class="nav-link" href="../e-learning/course/course-list.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course list</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../e-learning/course/course-grid.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course grid</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../e-learning/course/course-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course details</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../e-learning/course/create-a-course.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create a course</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../e-learning/student-overview.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Student overview</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../e-learning/trainer-profile.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Trainer profile</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link" href="../kanban.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Kanban</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#social" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="social">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-share-alt"></span></span><span class="nav-link-text ps-1">Social</span></div>
                  </a>
                  <ul class="nav collapse show" id="social">
                    <li class="nav-item"><a class="nav-link active" href="feed.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feed</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="activity-log.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity log</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="notifications.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Notifications</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="followers.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Followers</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#support-desk" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="support-desk">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-ticket-alt"></span></span><span class="nav-link-text ps-1">Support desk</span></div>
                  </a>
                  <ul class="nav collapse" id="support-desk">
                    <li class="nav-item"><a class="nav-link" href="../support-desk/table-view.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Table view</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../support-desk/card-view.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card view</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../support-desk/contacts.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Contacts</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../support-desk/contact-details.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Contact details</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../support-desk/tickets-preview.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tickets preview</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../support-desk/quick-links.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Quick links</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../support-desk/reports.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reports</span></div>
                      </a><!-- more inner pages--></li>
                  </ul>
                </li>
                <li class="nav-item"><!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Pages</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="../../pages/starter.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Starter</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../../pages/landing.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-globe"></span></span><span class="nav-link-text ps-1">Landing</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#authentication" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-lock"></span></span><span class="nav-link-text ps-1">Authentication</span></div>
                  </a>
                  <ul class="nav collapse" id="authentication">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Simple</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="simple">
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/login.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/logout.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/register.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/forgot-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/confirm-mail.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/reset-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/simple/lock-screen.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#card" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="card">
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/login.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/logout.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/register.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/forgot-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/confirm-mail.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/reset-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/card/lock-screen.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Split</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="split">
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/login.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/logout.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/register.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/forgot-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/confirm-mail.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/reset-password.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../pages/authentication/split/lock-screen.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/authentication/wizard.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../index.html#authentication-modal" data-bs-toggle="modal">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modal</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">User</span></div>
                  </a>
                  <ul class="nav collapse" id="user">
                    <li class="nav-item"><a class="nav-link" href="../../pages/user/profile.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/user/settings.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Settings</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#pricing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-tags"></span></span><span class="nav-link-text ps-1">Pricing</span></div>
                  </a>
                  <ul class="nav collapse" id="pricing">
                    <li class="nav-item"><a class="nav-link" href="../../pages/pricing/pricing-default.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing default</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/pricing/pricing-alt.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing alt</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#faq" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faq">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question-circle"></span></span><span class="nav-link-text ps-1">Faq</span></div>
                  </a>
                  <ul class="nav collapse" id="faq">
                    <li class="nav-item"><a class="nav-link" href="../../pages/faq/faq-basic.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq basic</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/faq/faq-alt.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq alt</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/faq/faq-accordion.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq accordion</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#errors" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-exclamation-triangle"></span></span><span class="nav-link-text ps-1">Errors</span></div>
                  </a>
                  <ul class="nav collapse" id="errors">
                    <li class="nav-item"><a class="nav-link" href="../../pages/errors/404.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">404</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/errors/500.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">500</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#miscellaneous" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="miscellaneous">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-thumbtack"></span></span><span class="nav-link-text ps-1">Miscellaneous</span></div>
                  </a>
                  <ul class="nav collapse" id="miscellaneous">
                    <li class="nav-item"><a class="nav-link" href="../../pages/miscellaneous/associations.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Associations</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/miscellaneous/invite-people.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invite people</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../pages/miscellaneous/privacy-policy.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Privacy policy</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#Layouts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="Layouts">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-window-restore"></span></span><span class="nav-link-text ps-1">Layouts</span></div>
                  </a>
                  <ul class="nav collapse" id="Layouts">
                    <li class="nav-item"><a class="nav-link" href="../../demo/navbar-vertical.html" target="_blank">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar vertical</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../demo/navbar-top.html" target="_blank">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Top nav</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../demo/navbar-double-top.html" target="_blank">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Double top</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../demo/combo-nav.html" target="_blank">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Combo nav</span></div>
                      </a><!-- more inner pages--></li>
                  </ul>
                </li>
                <li class="nav-item"><!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Modules</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link dropdown-indicator" href="#forms" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-file-alt"></span></span><span class="nav-link-text ps-1">Forms</span></div>
                  </a>
                  <ul class="nav collapse" id="forms">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="basic">
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/basic/form-control.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Form control</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/basic/input-group.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input group</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/basic/select.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Select</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/basic/checks.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checks</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/basic/range.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/basic/layout.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Layout</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="advance">
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/advance/advance-select.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance select</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/advance/date-picker.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Date picker</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/advance/editor.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Editor</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/advance/emoji-button.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Emoji button</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/advance/file-uploader.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">File uploader</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/advance/input-mask.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input mask</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/advance/range-slider.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range slider</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/forms/advance/rating.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Rating</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/forms/floating-labels.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Floating labels</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/forms/wizard.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/forms/validation.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Validation</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#tables" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-table"></span></span><span class="nav-link-text ps-1">Tables</span></div>
                  </a>
                  <ul class="nav collapse" id="tables">
                    <li class="nav-item"><a class="nav-link" href="../../modules/tables/basic-tables.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic tables</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/tables/advance-tables.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance tables</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/tables/bulk-select.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bulk select</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#charts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">Charts</span></div>
                  </a>
                  <ul class="nav collapse" id="charts">
                    <li class="nav-item"><a class="nav-link" href="../../modules/charts/chartjs.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Chartjs</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/charts/d3js.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">D3js</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#eCharts" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ECharts</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="eCharts">
                        <li class="nav-item"><a class="nav-link" href="../../modules/charts/echarts/line-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Line charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/charts/echarts/bar-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bar charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/charts/echarts/candlestick-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Candlestick charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/charts/echarts/geo-map.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Geo map</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/charts/echarts/scatter-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scatter charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/charts/echarts/pie-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pie charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/charts/echarts/gauge-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Gauge charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/charts/echarts/radar-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Radar charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/charts/echarts/heatmap-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Heatmap charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/charts/echarts/how-to-use.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">How to use</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#icons" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="icons">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shapes"></span></span><span class="nav-link-text ps-1">Icons</span></div>
                  </a>
                  <ul class="nav collapse" id="icons">
                    <li class="nav-item"><a class="nav-link" href="../../modules/icons/font-awesome.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Font awesome</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/icons/bootstrap-icons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap icons</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/icons/feather.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feather</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/icons/material-icons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Material icons</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#maps" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="maps">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-map"></span></span><span class="nav-link-text ps-1">Maps</span></div>
                  </a>
                  <ul class="nav collapse" id="maps">
                    <li class="nav-item"><a class="nav-link" href="../../modules/maps/google-map.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Google map</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/maps/leaflet-map.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Leaflet map</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#components" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text ps-1">Components</span></div>
                  </a>
                  <ul class="nav collapse" id="components">
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/accordion.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Accordion</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/alerts.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Alerts</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/anchor.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Anchor</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/animated-icons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Animated icons</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/background.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/badges.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Badges</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/bottom-bar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bottom bar</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/breadcrumbs.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Breadcrumbs</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/buttons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Buttons</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/calendar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Calendar</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/cards.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cards</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Carousel</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="carousel">
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/carousel/bootstrap.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/carousel/swiper.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Swiper</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/collapse.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Collapse</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/cookie-notice.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cookie notice</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/countup.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Countup</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/dropdowns.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dropdowns</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/jquery-components.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jquery</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/list-group.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List group</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/modals.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modals</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs &amp; Tabs</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="navs-_and_-Tabs">
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/navs-and-tabs/navs.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/navs-and-tabs/navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/navs-and-tabs/vertical-navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar vertical</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/navs-and-tabs/top-navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Top nav</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/navs-and-tabs/double-top-navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Double top</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/navs-and-tabs/combo-navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Combo nav</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/navs-and-tabs/tabs.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tabs</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/offcanvas.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Offcanvas</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pictures" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pictures</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="pictures">
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/pictures/avatar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Avatar</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/pictures/images.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Images</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/pictures/figures.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Figures</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/pictures/hoverbox.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hoverbox</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/pictures/lightbox.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lightbox</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/progress-bar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Progress bar</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/placeholder.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Placeholder</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/pagination.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pagination</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/popovers.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Popovers</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/scrollspy.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scrollspy</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/search.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Search</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/sortable.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sortable</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/spinners.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spinners</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/timeline.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Timeline</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/toasts.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Toasts</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/tooltips.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tooltips</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/treeview.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Treeview</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/components/typed-text.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typed text</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#videos" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Videos</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="videos">
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/videos/embed.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Embed</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../modules/components/videos/plyr.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plyr</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#utilities" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text ps-1">Utilities</span></div>
                  </a>
                  <ul class="nav collapse" id="utilities">
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/background.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/borders.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Borders</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/clearfix.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Clearfix</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/colors.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colors</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/colored-links.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colored links</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/display.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Display</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/flex.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Flex</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/float.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Float</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/focus-ring.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Focus ring</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/grid.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Grid</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/icon-link.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Icon link</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/overlayscrollbar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Overlay scrollbar</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/position.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Position</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/ratio.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Ratio</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/spacing.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spacing</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/sizing.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sizing</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/stretched-link.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stretched link</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/text-truncation.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Text truncation</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/typography.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typography</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/vertical-align.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical align</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/vertical-rule.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical rule</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/visibility.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Visibility</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../modules/utilities/visually-hidden.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Visually hidden</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link" href="../../widgets.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text ps-1">Widgets</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#multi-level" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-layer-group"></span></span><span class="nav-link-text ps-1">Multi level</span></div>
                  </a>
                  <ul class="nav collapse" id="multi-level">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-two" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level two</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="level-two">
                        <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 1</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 2</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-three" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level three</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="level-three">
                        <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 3</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-4" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-three">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 4</span></div>
                          </a><!-- more inner pages-->
                          <ul class="nav collapse" id="item-4">
                            <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 5</span></div>
                              </a><!-- more inner pages--></li>
                            <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 6</span></div>
                              </a><!-- more inner pages--></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-four" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level four</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="level-four">
                        <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 6</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-7" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-four">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 7</span></div>
                          </a><!-- more inner pages-->
                          <ul class="nav collapse" id="item-7">
                            <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 8</span></div>
                              </a><!-- more inner pages--></li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-9" data-bs-toggle="collapse" aria-expanded="false" aria-controls="item-7">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 9</span></div>
                              </a><!-- more inner pages-->
                              <ul class="nav collapse" id="item-9">
                                <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 10</span></div>
                                  </a><!-- more inner pages--></li>
                                <li class="nav-item"><a class="nav-link" href="../../index.html#!.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 11</span></div>
                                  </a><!-- more inner pages--></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item"><!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Documentation</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="../../documentation/getting-started.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-rocket"></span></span><span class="nav-link-text ps-1">Getting started</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#customization" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-wrench"></span></span><span class="nav-link-text ps-1">Customization</span></div>
                  </a>
                  <ul class="nav collapse" id="customization">
                    <li class="nav-item"><a class="nav-link" href="../../documentation/customization/configuration.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Configuration</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../documentation/customization/styling.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Styling</span><span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../documentation/customization/dark-mode.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dark mode</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../documentation/customization/plugin.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plugin</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link" href="../../documentation/faq.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question-circle"></span></span><span class="nav-link-text ps-1">Faq</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../../documentation/gulp.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-gulp"></span></span><span class="nav-link-text ps-1">Gulp</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../../documentation/design-file.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-palette"></span></span><span class="nav-link-text ps-1">Design file</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../../changelog.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text ps-1">Changelog</span></div>
                  </a>
                </li>
              </ul>
              <div class="settings my-3">
                <div class="card shadow-none">
                  <div class="card-body alert mb-0" role="alert">
                    <div class="btn-close-falcon-container"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close" data-bs-dismiss="alert"></button></div>
                    <div class="text-center"><img src="../../assets/img/icons/spot-illustrations/navbar-vertical.png" alt="" width="80" />
                      <p class="fs-11 mt-2">Loving what you see? <br />Get your copy of <a href="#!">Falcon</a></p>
                      <div class="d-grid"><a class="btn btn-sm btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="../../index-2.html">
            <div class="d-flex align-items-center"><img class="me-2" src="../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
          </a>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../index-2.html">Default</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                  <div class="card navbar-card-app shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../kanban.html">Kanban</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="followers.html">Followers</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/quick-links.html">Quick links</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/trainer-profile.html">Trainer profile</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../events/event-list.html">Event list</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../email/compose.html">Compose</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/invoice.html">Invoice</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                  <div class="card navbar-card-pages shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/combo-nav.html">Combo nav</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/landing.html">Landing</a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/user/settings.html">Settings</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/pricing/pricing-alt.html">Pricing alt</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/errors/500.html">500</a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-accordion.html">Faq accordion</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../index.html#authentication-modal" data-bs-toggle="modal">Modal</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                  <div class="card navbar-card-components shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/carousel/bootstrap.html">Bootstrap carousel</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/top-navbar.html">Top nav</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pagination.html">Pagination</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/sortable.html">Sortable</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/videos/plyr.html">Plyr</a></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/visibility.html">Visibility</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/tables/bulk-select.html">Bulk select</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                            <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/how-to-use.html">How to use</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/validation.html">Validation</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column pt-xxl-1">
                            <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/icons/material-icons.html">Material icons</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/maps/leaflet-map.html">Leaflet map</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../../changelog.html">Changelog</a></div>
                </div>
              </li>
            </ul>
          </div>
          <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item ps-2 pe-0">
              <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button></div>
                </div>
              </div>
            </li>
            <li class="nav-item d-none d-sm-block">
              <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
              <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                  <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <h6 class="card-header-title mb-0">Notifications</h6>
                      </div>
                      <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                    </div>
                  </div>
                  <div class="scrollbar-overlay" style="max-height:19rem">
                    <div class="list-group list-group-flush fw-normal fs-10">
                      <div class="list-group-title border-bottom">NEW</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img class="rounded-circle" src="../../assets/img/team/1-thumb.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <div class="avatar-name rounded-circle"><span>AB</span></div>
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                            <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-title border-bottom">EARLIER</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img class="rounded-circle" src="../../assets/img/icons/weather-sm.jpg" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                              <img class="rounded-circle" src="../../assets/img/logos/oxford.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="border-bottom-0 notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                              <img class="rounded-circle" src="../../assets/img/team/10.jpg" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center border-top"><a class="card-link d-block" href="notifications.html">View all</a></div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown px-1">
              <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                  <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                  <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                </svg></a>
              <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                <div class="card shadow-none">
                  <div class="scrollbar-overlay nine-dots-dropdown">
                    <div class="card-body px-3">
                      <div class="row text-center gx-0 gy-0">
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../pages/user/profile.html" target="_blank">
                            <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" /></div>
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Themewagon</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Mailbluster</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                          </a></div>
                        <div class="col-12">
                          <hr class="my-3 mx-n3 bg-200" />
                        </div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../events/event-detail.html" target="_blank">
                            <div class="avatar avatar-2xl">
                              <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-7">E</span></div>
                            </div>
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                          </a></div>
                        <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="../../assets/img/team/3-thumb.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#!">Set status</a>
                  <a class="dropdown-item" href="../../pages/user/profile.html">Profile &amp; account</a>
                  <a class="dropdown-item" href="#!">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../pages/user/settings.html">Settings</a>
                  <a class="dropdown-item" href="../../pages/authentication/card/logout.html">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../../index-2.html">
              <div class="d-flex align-items-center"><img class="me-2" src="../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                <div class="search-box" data-list='{"valueNames":["title"]}'>
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                  <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
                  <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                      <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../events/event-detail.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs-11"></span>
                          <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../e-commerce/customers.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs-11"></span>
                          <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>
                      <hr class="text-200 dark__text-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-9" href="../e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                          <div class="flex-1 fs-10 title">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-x1 py-1 fs-9" href="../events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                          <div class="flex-1 fs-10 title">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-x1 py-1 fs-9" href="../e-commerce/product/product-grid.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-info">products:</span>
                          <div class="flex-1 fs-10 title">Most popular products</div>
                        </div>
                      </a>
                      <hr class="text-200 dark__text-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Files</h6><a class="dropdown-item px-x1 py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="border h-100 w-100 object-fit-cover rounded-3" src="../../assets/img/products/3-thumb.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">iPhone</h6>
                            <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-x1 py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="../../assets/img/icons/zip.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Falcon v1.8.2</h6>
                            <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </div>
                      </a>
                      <hr class="text-200 dark__text-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Members</h6><a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l status-online me-2">
                            <img class="rounded-circle" src="../../assets/img/team/1.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Anna Karinina</h6>
                            <p class="fs-11 mb-0 d-flex">Technext Limited</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="../../assets/img/team/2.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Antony Hopkins</h6>
                            <p class="fs-11 mb-0 d-flex">Brain Trust</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-x1 py-2" href="../../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Emma Watson</h6>
                            <p class="fs-11 mb-0 d-flex">Google</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="text-center mt-n3">
                      <p class="fallback fw-bold fs-8 d-none">No Result Found.</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item ps-2 pe-0">
                <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button></div>
                  </div>
                </div>
              </li>
              <li class="nav-item d-none d-sm-block">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs-10">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../../assets/img/team/1-thumb.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                              <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-title border-bottom">EARLIER</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../../assets/img/icons/weather-sm.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../../assets/img/logos/oxford.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../../assets/img/team/10.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown px-1">
                <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                  <div class="card shadow-none">
                    <div class="scrollbar-overlay nine-dots-dropdown">
                      <div class="card-body px-3">
                        <div class="row text-center gx-0 gy-0">
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../pages/user/profile.html" target="_blank">
                              <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" /></div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Themewagon</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Mailbluster</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                            </a></div>
                          <div class="col-12">
                            <hr class="my-3 mx-n3 bg-200" />
                          </div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../events/event-detail.html" target="_blank">
                              <div class="avatar avatar-2xl">
                                <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-7">E</span></div>
                              </div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                            </a></div>
                          <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../../assets/img/team/3-thumb.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="../../pages/user/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../pages/user/settings.html">Settings</a>
                    <a class="dropdown-item" href="../../pages/authentication/card/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;" data-move-target="#navbarVerticalNav" data-navbar-top="combo">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../../index-2.html">
              <div class="d-flex align-items-center"><img class="me-2" src="../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
            </a>
            <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
              <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../index-2.html">Default</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="../../dashboard/support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../kanban.html">Kanban</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="followers.html">Followers</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../support-desk/quick-links.html">Quick links</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../e-learning/trainer-profile.html">Trainer profile</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../events/event-list.html">Event list</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../email/compose.html">Compose</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../e-commerce/invoice.html">Invoice</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                    <div class="card navbar-card-pages shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/simple/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/card/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/split/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../demo/combo-nav.html">Combo nav</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/landing.html">Landing</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/user/settings.html">Settings</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/pricing/pricing-alt.html">Pricing alt</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/errors/500.html">500</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="../../pages/faq/faq-accordion.html">Faq accordion</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../index.html#authentication-modal" data-bs-toggle="modal">Modal</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                    <div class="card navbar-card-components shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/carousel/bootstrap.html">Bootstrap carousel</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/top-navbar.html">Top nav</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/pagination.html">Pagination</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/sortable.html">Sortable</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/components/videos/plyr.html">Plyr</a></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/utilities/visibility.html">Visibility</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/tables/bulk-select.html">Bulk select</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                              <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/charts/echarts/how-to-use.html">How to use</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/forms/validation.html">Validation</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column pt-xxl-1">
                              <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/icons/material-icons.html">Material icons</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../../modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../../modules/maps/leaflet-map.html">Leaflet map</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../../changelog.html">Changelog</a></div>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item ps-2 pe-0">
                <div class="dropdown theme-control-dropdown"><a class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="light"></span><span class="fas fa-moon fs-7" data-fa-transform="shrink-3" data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7" data-fa-transform="shrink-2" data-theme-dropdown-toggle-icon="auto"></span></a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3" aria-labelledby="themeSwitchDropdown">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2"><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light" data-theme-control="theme"><span class="fas fa-sun"></span>Light<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark" data-theme-control="theme"><span class="fas fa-moon" data-fa-transform=""></span>Dark<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button><button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto" data-theme-control="theme"><span class="fas fa-adjust" data-fa-transform=""></span>Auto<span class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button></div>
                  </div>
                </div>
              </li>
              <li class="nav-item d-none d-sm-block">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs-10">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../../assets/img/team/1-thumb.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                              <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-title border-bottom">EARLIER</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../../assets/img/icons/weather-sm.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../../assets/img/logos/oxford.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../../assets/img/team/10.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown px-1">
                <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                  <div class="card shadow-none">
                    <div class="scrollbar-overlay nine-dots-dropdown">
                      <div class="card-body px-3">
                        <div class="row text-center gx-0 gy-0">
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../pages/user/profile.html" target="_blank">
                              <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" /></div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Themewagon</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Mailbluster</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                            </a></div>
                          <div class="col-12">
                            <hr class="my-3 mx-n3 bg-200" />
                          </div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../events/event-detail.html" target="_blank">
                              <div class="avatar avatar-2xl">
                                <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-7">E</span></div>
                              </div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                            </a></div>
                          <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../../assets/img/team/3-thumb.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="../../pages/user/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../pages/user/settings.html">Settings</a>
                    <a class="dropdown-item" href="../../pages/authentication/card/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
            var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
            var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

            if (localStorage.getItem('navbarPosition') === 'double-top') {
              document.documentElement.classList.toggle('double-top-nav-layout');
            }

            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTopCombo.remove(navbarTopCombo);
              navbarDoubleTop.remove(navbarDoubleTop);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopVertical.remove(navbarTopVertical);
              navbarDoubleTop.remove(navbarDoubleTop);
            } else if (navbarPosition === 'double-top') {
              navbarDoubleTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTop.remove(navbarTop);
              navbarTopCombo.remove(navbarTopCombo);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarDoubleTop.remove(navbarDoubleTop);
              navbarTopCombo.remove(navbarTopCombo);
            }
          </script>
          <div class="row g-3">
            <div class="col-lg-8">
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary overflow-hidden">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-m">
                      <img class="rounded-circle" src="../../assets/img/team/1.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                      <h5 class="mb-0 fs-9">Create post</h5>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <form><textarea class="shadow-none form-control rounded-0 resize-none px-x1 border-y-0 border-200" placeholder="What do you want to talk about?" rows="4"></textarea>
                    <div class="d-flex align-items-center ps-x1 border border-200"><label class="text-nowrap mb-0 me-2" for="hash-tags"><span class="fas fa-plus me-1 fs-11"></span><span class="fw-medium fs-10">Add hashtag</span></label><input class="form-control border-0 fs-10 shadow-none" id="hash-tags" type="text" placeholder="Help the right person to see" /></div>
                    <div class="row g-0 justify-content-between mt-3 px-x1 pb-3">
                      <div class="col"><button class="btn btn-tertiary btn-sm rounded-pill shadow-none d-inline-flex align-items-center fs-10 mb-0 me-1" type="button"><img class="cursor-pointer" src="../../assets/img/icons/spot-illustrations/image.svg" width="17" alt="" /><span class="ms-2 d-none d-md-inline-block">Image</span></button><button class="btn btn-tertiary btn-sm rounded-pill shadow-none d-inline-flex align-items-center fs-10 me-1" type="button"><img class="cursor-pointer" src="../../assets/img/icons/spot-illustrations/calendar.svg" width="17" alt="" /><span class="ms-2 d-none d-md-inline-block">Event</span></button><button class="btn btn-tertiary btn-sm rounded-pill shadow-none d-inline-flex align-items-center fs-10 me-1" type="button"><img class="cursor-pointer" src="../../assets/img/icons/spot-illustrations/location.svg" width="17" alt="" /><span class="ms-2 d-none d-md-inline-block text-nowrap">Check in</span></button></div>
                      <div class="col-auto">
                        <div class="dropdown d-inline-block me-1"><button class="btn btn-sm dropdown-toggle px-1" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-globe-americas"></span></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Public</a><a class="dropdown-item" href="#">Private</a><a class="dropdown-item" href="#">Draft</a></div>
                        </div><button class="btn btn-primary btn-sm px-4 px-sm-5" type="submit">Share</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <div class="row justify-content-between">
                    <div class="col">
                      <div class="d-flex">
                        <div class="avatar avatar-2xl status-online">
                          <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />
                        </div>
                        <div class="flex-1 align-self-center ms-2">
                          <p class="mb-1 lh-1"><a class="fw-semi-bold" href="../../pages/user/profile.html">Rowan Atkinson</a> shared an <a href="#!">album</a></p>
                          <p class="mb-0 fs-10">11 hrs &bull; Consett, UK &bull; <span class="fas fa-globe-americas"></span></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="post-album-action" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-10"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-3" aria-labelledby="post-album-action"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Report</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body overflow-hidden">
                  <p>Rowan Sebastian Atkinson CBE is an English actor, comedian and screenwriter best known for his work on the sitcoms Blackadder and Mr. Bean.</p>
                  <div class="row mx-n1">
                    <div class="col-6 p-1"><a href="../../assets/img/generic/4.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/generic/4.jpg" alt="" /></a></div>
                    <div class="col-6 p-1"><a href="../../assets/img/generic/5.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/generic/5.jpg" alt="" /></a></div>
                    <div class="col-4 p-1"><a href="../../assets/img/gallery/4.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/gallery/4.jpg" alt="" /></a></div>
                    <div class="col-4 p-1"><a href="../../assets/img/gallery/5.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/gallery/5.jpg" alt="" /></a></div>
                    <div class="col-4 p-1"><a href="../../assets/img/gallery/3.jpg" data-gallery="gallery-1"><img class="img-fluid rounded" src="../../assets/img/gallery/3.jpg" alt="" /></a></div>
                  </div>
                </div>
                <div class="card-footer bg-body-tertiary pt-0">
                  <div class="border-bottom border-200 fs-10 py-3"><a class="text-700" href="#!">345 Likes</a> &bull; <a class="text-700" href="#!">34 Comments</a></div>
                  <div class="row g-0 fw-semi-bold text-center py-2 fs-10">
                    <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3" href="#!"><img src="../../assets/img/icons/spot-illustrations/like-active.png" width="20" alt="" /><span class="ms-1">Like</span></a></div>
                    <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3" href="#!"><img src="../../assets/img/icons/spot-illustrations/comment-active.png" width="20" alt="" /><span class="ms-1">Comment</span></a></div>
                    <div class="col-auto d-flex align-items-center"><a class="rounded-2 text-700 d-flex align-items-center" href="#!"><img src="../../assets/img/icons/spot-illustrations/share-inactive.png" width="20" alt="" /><span class="ms-1">Share</span></a></div>
                  </div>
                  <form class="d-flex align-items-center border-top border-200 pt-3">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                    </div><input class="form-control rounded-pill ms-2 fs-10" type="text" placeholder="Write a comment..." />
                  </form>
                  <div class="d-flex mt-3">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2 fs-10">
                      <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../../pages/user/profile.html">Rowan Atkinson</a> She starred as Jane Porter in The <a href="#!">@Legend of Tarzan (2016)</a>, Tanya Vanderpoel in Whiskey Tango Foxtrot (2016) and as DC comics villain Harley Quinn in Suicide Squad (2016), for which she was nominated for a Teen Choice Award, and many other awards.</p>
                      <div class="px-2"><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 23min </div>
                    </div>
                  </div>
                  <div class="d-flex mt-3">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2 fs-10">
                      <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../../pages/user/profile.html">Jessalyn Gilsig</a> Jessalyn Sarah Gilsig is a Canadian-American actress known for her roles in television series, e.g., as Lauren Davis in Boston Public, Gina Russo in Nip/Tuck, Terri Schuester in Glee, and as Siggy Haraldson on the History Channel series Vikings. 🏆</p>
                      <div class="px-2"><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 3hrs </div>
                    </div>
                  </div><a class="fs-10 text-700 d-inline-block mt-2" href="#!">Load more comments (2 of 34)</a>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <div class="row justify-content-between">
                    <div class="col">
                      <div class="d-flex">
                        <div class="avatar avatar-2xl">
                          <img class="rounded-circle" src="../../assets/img/team/15.jpg" alt="" />
                        </div>
                        <div class="flex-1 align-self-center ms-2">
                          <p class="mb-1 lh-1"><a class="fw-semi-bold" href="../../pages/user/profile.html">Margot Robbie</a></p>
                          <p class="mb-0 fs-10">Yesterday &bull; Dalby &bull; <span class="fas fa-users"></span></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="post-article-action" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-10"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-3" aria-labelledby="post-article-action"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Report</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <p>Margot Elise Robbie was born on July 2, 1990 in Dalby, Queensland, Australia to Scottish parents. Her mother, Sarie Kessler, is a physiotherapist, and her father, is Doug Robbie. She comes from a family of four children, having two brothers and one sister. She graduated from Somerset College in Mudgeeraba, Queensland, Australia, a suburb in the Gold Coast hinterland of South East Queensland, where she and her siblings were raised by their mother and spent much of her time at the farm belonging to her grandparents. In her late teens, she moved to Melbourne, Victoria, Australia to pursue an acting career.</p>
                  <p>From 2008-2010, Robbie played the character of Donna Freedman in the long-running Australian soap opera, Neighbours (1985), for which she was nominated for two Logie Awards. She set off to pursue Hollywood opportunities, quickly landing the role of Laura Cameron on the short-lived ABC series, Pan Am (2011). She made her big screen debut in the film, About Time (2013).</p>
                  <p>Robbie rose to fame co-starring alongside Leonardo DiCaprio, portraying the role of Naomi Lapaglia in Martin Scorsese's Oscar-nominated film, The Wolf of Wall Street (2013). She was nominated for a Breakthrough Performance MTV Movie Award, and numerous other awards.</p>
                  <p>In 2014, Robbie founded her own production company, LuckyChap Entertainment. She also appeared in the World War II romantic-drama film, Suite Française (2014). She starred in Focus (2015) and Z for Zachariah (2015), and made a cameo in The Big Short (2015).</p>
                  <p>In 2016, she married Tom Ackerley in Byron Bay, New South Wales, Australia.</p>
                  <p>She starred as Jane Porter in The Legend of Tarzan (2016), Tanya Vanderpoel in Whiskey Tango Foxtrot (2016) and as DC comics villain Harley Quinn in Suicide Squad (2016), for which she was nominated for a Teen Choice Award, and many other awards.</p>
                  <p>She portrayed figure skater Tonya Harding in the biographical film I, Tonya (2017), receiving critical acclaim and a Golden Globe Award nomination for Best Actress - Motion Picture Comedy or Musical.</p>
                </div>
                <div class="card-footer bg-body-tertiary pt-0">
                  <div class="border-bottom border-200 fs-10 py-3"><a class="text-700" href="#!">34 Comments</a></div>
                  <div class="row g-0 fw-semi-bold text-center py-2 fs-10">
                    <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3 text-700" href="#!"><img src="../../assets/img/icons/spot-illustrations/like-inactive.png" width="20" alt="" /><span class="ms-1">Like</span></a></div>
                    <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3" href="#!"><img src="../../assets/img/icons/spot-illustrations/comment-active.png" width="20" alt="" /><span class="ms-1">Comment</span></a></div>
                    <div class="col-auto d-flex align-items-center"><a class="rounded-2 text-700 d-flex align-items-center" href="#!"><img src="../../assets/img/icons/spot-illustrations/share-inactive.png" width="20" alt="" /><span class="ms-1">Share</span></a></div>
                  </div>
                  <form class="d-flex align-items-center border-top border-200 pt-3">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                    </div><input class="form-control rounded-pill ms-2 fs-10" type="text" placeholder="Write a comment..." />
                  </form>
                  <div class="d-flex mt-3">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2 fs-10">
                      <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../../pages/user/profile.html">Rowan Atkinson</a> She starred as Jane Porter in The <a href="#!">@Legend of Tarzan (2016)</a>, Tanya Vanderpoel in Whiskey Tango Foxtrot (2016) and as DC comics villain Harley Quinn in Suicide Squad (2016), for which she was nominated for a Teen Choice Award, and many other awards.</p>
                      <div class="px-2"><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 23min </div>
                    </div>
                  </div>
                  <div class="d-flex mt-3">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2 fs-10">
                      <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold" href="../../pages/user/profile.html">Jessalyn Gilsig</a> Jessalyn Sarah Gilsig is a Canadian-American actress known for her roles in television series, e.g., as Lauren Davis in Boston Public, Gina Russo in Nip/Tuck, Terri Schuester in Glee, and as Siggy Haraldson on the History Channel series Vikings. 🏆</p>
                      <div class="px-2"><a href="#!">Like</a> &bull; <a href="#!">Reply</a> &bull; 3hrs </div>
                    </div>
                  </div><a class="fs-10 text-700 d-inline-block mt-2" href="#!">Load more comments (2 of 34)</a>
                </div>
              </div>
              <div class="card mb-3"><img class="card-img-top" src="../../assets/img/generic/13.jpg" alt="" />
                <div class="card-body overflow-hidden">
                  <div class="row justify-content-between align-items-center">
                    <div class="col">
                      <div class="d-flex">
                        <div class="calendar me-2"><span class="calendar-month">Dec</span><span class="calendar-day">31 </span></div>
                        <div class="flex-1 fs-10">
                          <h5 class="fs-9"><a href="../events/event-detail.html">FREE New Year's Eve Midnight Harbor Fireworks</a></h5>
                          <p class="mb-0">by <a href="#!">Boston Harbor Now</a></p><span class="fs-9 text-warning fw-semi-bold">$49.99 – $89.99</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-auto d-none d-md-block"><button class="btn btn-falcon-default btn-sm px-4" type="button">Register</button></div>
                  </div>
                </div>
                <div class="card-footer bg-body-tertiary pt-0">
                  <div class="row g-0 fw-semi-bold text-center py-2 fs-10">
                    <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3 text-700" href="#!"><img src="../../assets/img/icons/spot-illustrations/like-inactive.png" width="20" alt="" /><span class="ms-1">Like</span></a></div>
                    <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3 text-700" href="#!"><img src="../../assets/img/icons/spot-illustrations/comment-inactive.png" width="20" alt="" /><span class="ms-1">Comment</span></a></div>
                    <div class="col-auto d-flex align-items-center"><a class="rounded-2 text-700 d-flex align-items-center" href="#!"><img src="../../assets/img/icons/spot-illustrations/share-inactive.png" width="20" alt="" /><span class="ms-1">Share</span></a></div>
                  </div>
                  <form class="d-flex align-items-center border-top border-200 pt-3">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                    </div><input class="form-control rounded-pill ms-2 fs-10" type="text" placeholder="Write a comment..." />
                  </form>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <div class="row justify-content-between">
                    <div class="col">
                      <div class="d-flex">
                        <div class="avatar avatar-2xl">
                          <img class="rounded-circle" src="../../assets/img/team/10.jpg" alt="" />
                        </div>
                        <div class="flex-1 align-self-center ms-2">
                          <p class="mb-1 lh-1"><a class="fw-semi-bold" href="../../pages/user/profile.html">Leonardo DiCaprio</a> shared a <a href="#!">photo</a></p>
                          <p class="mb-0 fs-10">13 Jan &bull; LA, US &bull; <span class="fas fa-globe-americas"></span></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="post-image-action" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-10"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-3" aria-labelledby="post-image-action"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Report</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body overflow-hidden"><a href="../../assets/img/generic/11.jpg" data-gallery="gallery-2"><img class="img-fluid rounded" src="../../assets/img/generic/11.jpg" alt="" /></a></div>
                <div class="card-footer bg-body-tertiary pt-0">
                  <div class="row g-0 fw-semi-bold text-center py-2 fs-10">
                    <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3 text-700" href="#!"><img src="../../assets/img/icons/spot-illustrations/like-inactive.png" width="20" alt="" /><span class="ms-1">Like</span></a></div>
                    <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3 text-700" href="#!"><img src="../../assets/img/icons/spot-illustrations/comment-inactive.png" width="20" alt="" /><span class="ms-1">Comment</span></a></div>
                    <div class="col-auto d-flex align-items-center"><a class="rounded-2 text-700 d-flex align-items-center" href="#!"><img src="../../assets/img/icons/spot-illustrations/share-inactive.png" width="20" alt="" /><span class="ms-1">Share</span></a></div>
                  </div>
                  <form class="d-flex align-items-center border-top border-200 pt-3">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                    </div><input class="form-control rounded-pill ms-2 fs-10" type="text" placeholder="Write a comment..." />
                  </form>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <div class="row justify-content-between">
                    <div class="col">
                      <div class="d-flex">
                        <div class="avatar avatar-2xl">
                          <img class="rounded-circle" src="../../assets/img/team/8.jpg" alt="" />
                        </div>
                        <div class="flex-1 align-self-center ms-2">
                          <p class="mb-1 lh-1"><a class="fw-semi-bold" href="../../pages/user/profile.html">Johnny Depp</a> shared a <a href="#!">video</a></p>
                          <p class="mb-0 fs-10">Just Now &bull; Paris &bull; <span class="fas fa-users"></span></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="post-video-action" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-10"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-3" aria-labelledby="post-video-action"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Report</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <p>See the sport of surfing as it’s never been captured before in John Florence and Blake Vincent Kueny’s second signature release, in association with the award-winning film studio, Brain Farm. The first surf film shot entirely in 4K, View From a Blue Moon. 🤩 🌎 🎬</p>
                  <div>
                    <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>
                  </div>
                </div>
                <div class="card-footer bg-body-tertiary pt-0">
                  <div class="row g-0 fw-semi-bold text-center py-2 fs-10">
                    <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3 text-700" href="#!"><img src="../../assets/img/icons/spot-illustrations/like-inactive.png" width="20" alt="" /><span class="ms-1">Like</span></a></div>
                    <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3 text-700" href="#!"><img src="../../assets/img/icons/spot-illustrations/comment-inactive.png" width="20" alt="" /><span class="ms-1">Comment</span></a></div>
                    <div class="col-auto d-flex align-items-center"><a class="rounded-2 text-700 d-flex align-items-center" href="#!"><img src="../../assets/img/icons/spot-illustrations/share-inactive.png" width="20" alt="" /><span class="ms-1">Share</span></a></div>
                  </div>
                  <form class="d-flex align-items-center border-top border-200 pt-3">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                    </div><input class="form-control rounded-pill ms-2 fs-10" type="text" placeholder="Write a comment..." />
                  </form>
                </div>
              </div>
              <div class="card">
                <div class="card-header bg-body-tertiary">
                  <div class="row justify-content-between">
                    <div class="col">
                      <div class="d-flex">
                        <div class="avatar avatar-2xl status-online">
                          <img class="rounded-circle" src="../../assets/img/team/17.jpg" alt="" />
                        </div>
                        <div class="flex-1 align-self-center ms-2">
                          <p class="mb-1 lh-1"><a class="fw-semi-bold" href="../../pages/user/profile.html">Emilia Clarke</a> shared a <a href="#!">url</a></p>
                          <p class="mb-0 fs-10">14 Feb &bull; London &bull; <span class="fas fa-globe-americas"></span></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="post-url-action" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-10"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-3" aria-labelledby="post-url-action"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Report</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body overflow-hidden">
                  <p>Mount Everest, known in Nepali as Sagarmatha and in Tibetan as Chomolungma, is Earth's highest mountain above sea level, located in the Mahalangur Himal sub-range of the Himalayas. The international border between Nepal and China runs across its summit point.</p><a class="text-decoration-none" href="#!"><img class="img-fluid rounded" src="../../assets/img/generic/12.jpg" alt="" /><small class="text-uppercase text-700">en.wikipedia.org</small>
                    <h6 class="fs-9 mb-0">Mount Everest: Facts & Location of World's Highest Mountain</h6>
                    <p class="fs-10 mb-0 text-700">The Himalayan range has many of the Earth's highest peaks, including the highest, Mount Everest...</p>
                  </a>
                </div>
                <div class="card-footer bg-body-tertiary pt-0">
                  <div class="border-bottom border-200 fs-10 py-3"><a class="text-700" href="#!">345 Likes</a></div>
                  <div class="row g-0 fw-semi-bold text-center py-2 fs-10">
                    <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3" href="#!"><img src="../../assets/img/icons/spot-illustrations/like-active.png" width="20" alt="" /><span class="ms-1">Like</span></a></div>
                    <div class="col-auto"><a class="rounded-2 d-flex align-items-center me-3 text-700" href="#!"><img src="../../assets/img/icons/spot-illustrations/comment-inactive.png" width="20" alt="" /><span class="ms-1">Comment</span></a></div>
                    <div class="col-auto d-flex align-items-center"><a class="rounded-2 text-700 d-flex align-items-center" href="#!"><img src="../../assets/img/icons/spot-illustrations/share-inactive.png" width="20" alt="" /><span class="ms-1">Share</span></a></div>
                  </div>
                  <form class="d-flex align-items-center border-top border-200 pt-3">
                    <div class="avatar avatar-xl">
                      <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                    </div><input class="form-control rounded-pill ms-2 fs-10" type="text" placeholder="Write a comment..." />
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-3">
                <div class="card-body fs-10">
                  <div class="d-flex"><span class="fas fa-gift fs-9 text-warning"></span>
                    <div class="flex-1 ms-2"><a class="fw-semi-bold" href="../../pages/user/profile.html">Emma Watson</a>'s Birthday is today</div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Add to your feed</h5><a class="fs-10" href="#!">See all</a>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                      <h6 class="mb-0"><a href="../../pages/user/profile.html">Katheryn Winnick</a></h6><button class="btn btn-tertiary btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs-10">Follow</span></button>
                      <div class="border-bottom border-dashed my-3"></div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="../../assets/img/team/5.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                      <h6 class="mb-0"><a href="../../pages/user/profile.html">Travis Fimmel</a></h6>
                      <p class="fs-10 mb-0">5 mutual connections</p><button class="btn btn-tertiary btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs-10">Follow</span></button>
                      <div class="border-bottom border-dashed my-3"></div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="../../assets/img/team/10.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                      <h6 class="mb-0"><a href="../../pages/user/profile.html">Gustaf Skarsgård</a></h6>
                      <p class="fs-10 mb-0">10 mutual connections</p><button class="btn btn-tertiary btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs-10">Follow</span></button>
                      <div class="border-bottom border-dashed my-3"></div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="../../assets/img/team/8.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                      <h6 class="mb-0"><a href="../../pages/user/profile.html">Clive Standen</a></h6>
                      <p class="fs-10 mb-0">8 mutual connections</p><button class="btn btn-tertiary btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs-10">Follow</span></button>
                      <div class="border-bottom border-dashed my-3"></div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="../../assets/img/team/15.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                      <h6 class="mb-0"><a href="../../pages/user/profile.html">Jennie Jacques</a></h6><button class="btn btn-tertiary btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs-10">Follow</span></button>
                      <div class="border-bottom border-dashed my-3"></div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="../../assets/img/team/6.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                      <h6 class="mb-0"><a href="../../pages/user/profile.html">Isaac Hempstead</a></h6><button class="btn btn-tertiary btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs-10">Follow</span></button>
                      <div class="border-bottom border-dashed my-3"></div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="../../assets/img/team/2.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                      <h6 class="mb-0"><a href="../../pages/user/profile.html">Antony Hopkins</a></h6><button class="btn btn-tertiary btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs-10">Follow</span></button>
                      <div class="border-bottom border-dashed my-3"></div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="avatar avatar-3xl">
                      <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                      <h6 class="mb-0"><a href="../../pages/user/profile.html">Sophie Turner</a></h6><button class="btn btn-tertiary btn-sm py-0 mt-1 border" type="button"><span class="fas fa-user-plus" data-fa-transform="shrink-5 left-2"></span><span class="fs-10">Follow</span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3 mb-lg-0">
                <div class="card-header bg-body-tertiary">
                  <h5 class="mb-0">You may interested</h5>
                </div>
                <div class="card-body fs-10">
                  <div class="d-flex btn-reveal-trigger">
                    <div class="calendar"><span class="calendar-month">Feb</span><span class="calendar-day">21</span></div>
                    <div class="flex-1 position-relative ps-3">
                      <h6 class="fs-9 mb-0"><a href="../events/event-detail.html">Newmarket Nights</a></h6>
                      <p class="mb-1">Organized by <a href="#!" class="text-700">University of Oxford</a></p>
                      <p class="text-1000 mb-0">Time: 6:00AM</p>
                      <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>Place: Cambridge Boat Club, Cambridge<div class="border-bottom border-dashed my-3"></div>
                    </div>
                  </div>
                  <div class="d-flex btn-reveal-trigger">
                    <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">31</span></div>
                    <div class="flex-1 position-relative ps-3">
                      <h6 class="fs-9 mb-0"><a href="../events/event-detail.html">31st Night Celebration</a></h6>
                      <p class="mb-1">Organized by <a href="#!" class="text-700">Chamber Music Society</a></p>
                      <p class="text-1000 mb-0">Time: 11:00PM</p>
                      <p class="text-1000 mb-0">280 people interested</p>Place: Tavern on the Greend, New York<div class="border-bottom border-dashed my-3"></div>
                    </div>
                  </div>
                  <div class="d-flex btn-reveal-trigger">
                    <div class="calendar"><span class="calendar-month">Dec</span><span class="calendar-day">16</span></div>
                    <div class="flex-1 position-relative ps-3">
                      <h6 class="fs-9 mb-0"><a href="../events/event-detail.html">Folk Festival</a></h6>
                      <p class="mb-1">Organized by <a href="#!" class="text-700">Harvard University</a></p>
                      <p class="text-1000 mb-0">Time: 9:00AM</p>
                      <p class="text-1000 mb-0">Location: Cambridge Masonic Hall Association</p>Place: Porter Square, North Cambridge
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-body-tertiary p-0 border-top"><a class="btn btn-link d-block w-100" href="../events/event-list.html">All Events<span class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="row g-0 justify-content-between fs-10 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2024 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.21.0</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-1">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs-10 mb-0 text-white">Please create your free Falcon account</p>
                </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                  <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input class="form-control" type="email" autocomplete="on" id="modal-auth-email" /></div>
                  <div class="row gx-2">
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-password">Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-password" /></div>
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-confirm-password">Confirm Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" /></div>
                  </div>
                  <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" /><label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a class="white-space-nowrap" href="#!">privacy policy</a></label></div>
                  <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
                </form>
                <div class="position-relative mt-5">
                  <hr />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header settings-panel-header bg-shape">
        <div class="z-1 py-1">
          <div class="d-flex justify-content-between align-items-center mb-1">
            <h5 class="text-white mb-0 me-2"><span class="fas fa-palette me-2 fs-9"></span>Settings</h5><button class="btn btn-primary btn-sm rounded-pill mt-0 mb-0" data-theme-control="reset" style="font-size:12px"> <span class="fas fa-redo-alt me-1" data-fa-transform="shrink-3"></span>Reset</button>
          </div>
          <p class="mb-0 fs-10 text-white opacity-75"> Set your own customized style</p>
        </div>
        <div class="z-1" data-bs-theme="dark"><button class="btn-close z-1 mt-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
      </div>
      <div class="offcanvas-body scrollbar-overlay px-x1 h-100" id="themeController">
        <h5 class="fs-9">Color Scheme</h5>
        <p class="fs-10">Choose the perfect color mode for your app.</p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherAuto"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/falcon-mode-auto.jpg" alt=""/></span><span class="label-text"> Auto</span></label></div>
          </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-9">RTL Mode</h5>
              <p class="fs-10 mb-0">Switch your language direction </p><a class="fs-10" href="../../documentation/customization/configuration.html">RTL Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" /></div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/arrows-h.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-9">Fluid Layout</h5>
              <p class="fs-10 mb-0">Toggle container layout system </p><a class="fs-10" href="../../documentation/customization/configuration.html">Fluid Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" /></div>
        </div>
        <hr />
        <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/paragraph.svg" width="20" alt="" />
          <div class="flex-1">
            <h5 class="fs-9 d-flex align-items-center">Navigation Position</h5>
            <p class="fs-10 mb-2">Select a suitable navigation system for your web application </p>
            <div><select class="form-select form-select-sm" aria-label="Navbar position" data-theme-control="navbarPosition">
                <option value="vertical">Vertical</option>
                <option value="top">Top</option>
                <option value="combo">Combo</option>
                <option value="double-top">Double Top</option>
              </select></div>
          </div>
        </div>
        <hr />
        <h5 class="fs-9 d-flex align-items-center">Vertical Navbar Style</h5>
        <p class="fs-10 mb-0">Switch between styles for your vertical navbar </p>
        <p> <a class="fs-10" href="../../modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="../../assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="../../assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-card"> <img class="img-fluid img-prototype" src="../../assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="../../assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label></div>
          </div>
        </div>
        <div class="text-center mt-5"><img class="mb-4" src="../../assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
          <h5>Like What You See?</h5>
          <p class="fs-10">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="mb-3 btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a>
        </div>
      </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
      <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
        <div class="bg-primary-subtle position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></span></div>
        </div><small class="text-uppercase text-primary fw-bold bg-primary-subtle py-2 pe-2 ps-1 rounded-end">customize</small>
      </div>
    </a>

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
    <script src="../../vendors/glightbox/glightbox.min.js"></script>
    <script src="../../vendors/plyr/plyr.polyfilled.min.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../assets/js/theme.js"></script>
  </body>


<!-- Mirrored from prium.github.io/falcon/v3.21.0/app/social/feed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 20:05:24 GMT -->
</html>