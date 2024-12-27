<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  
<!-- Mirrored from prium.github.io/falcon/v3.21.0/app/e-learning/course/course-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 20:05:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../assets/js/config.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link href="../../../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../../../vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="../../../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
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
    <main class="main pb-6 pb-lg-0" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" data-double-top-nav="data-double-top-nav">
          <div class="w-100">
            <div class="d-flex flex-between-center">
              <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDoubleTop" aria-controls="navbarDoubleTop" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
              <a class="navbar-brand me-1 me-sm-3" href="../../../index-2.html">
                <div class="d-flex align-items-center"><img class="me-2" src="../../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
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
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../../events/event-detail.html">
                          <div class="d-flex align-items-center">
                            <span class="fas fa-circle me-2 text-300 fs-11"></span>
                            <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Events</div>
                          </div>
                        </a>
                        <a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../../e-commerce/customers.html">
                          <div class="d-flex align-items-center">
                            <span class="fas fa-circle me-2 text-300 fs-11"></span>
                            <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Customers</div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-9" href="../../e-commerce/customers.html">
                          <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                            <div class="flex-1 fs-10 title">All customers list</div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-1 fs-9" href="../../events/event-detail.html">
                          <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                            <div class="flex-1 fs-10 title">Latest events in current month</div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-1 fs-9" href="../../e-commerce/product/product-grid.html">
                          <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-info">products:</span>
                            <div class="flex-1 fs-10 title">Most popular products</div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Files</h6><a class="dropdown-item px-x1 py-2" href="#!">
                          <div class="d-flex align-items-center">
                            <div class="file-thumbnail me-2"><img class="border h-100 w-100 object-fit-cover rounded-3" src="../../../assets/img/products/3-thumb.png" alt="" /></div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">iPhone</h6>
                              <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-2" href="#!">
                          <div class="d-flex align-items-center">
                            <div class="file-thumbnail me-2"><img class="img-fluid" src="../../../assets/img/icons/zip.png" alt="" /></div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Falcon v1.8.2</h6>
                              <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                            </div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Members</h6><a class="dropdown-item px-x1 py-2" href="../../../pages/user/profile.html">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-l status-online me-2">
                              <img class="rounded-circle" src="../../../assets/img/team/1.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Anna Karinina</h6>
                              <p class="fs-11 mb-0 d-flex">Technext Limited</p>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-2" href="../../../pages/user/profile.html">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-l me-2">
                              <img class="rounded-circle" src="../../../assets/img/team/2.jpg" alt="" />
                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 title">Antony Hopkins</h6>
                              <p class="fs-11 mb-0 d-flex">Brain Trust</p>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-2" href="../../../pages/user/profile.html">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-l me-2">
                              <img class="rounded-circle" src="../../../assets/img/team/3.jpg" alt="" />
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
                  <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../../e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
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
                                  <img class="rounded-circle" src="../../../assets/img/team/1-thumb.png" alt="" />
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
                                  <img class="rounded-circle" src="../../../assets/img/icons/weather-sm.jpg" alt="" />
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
                                  <img class="rounded-circle" src="../../../assets/img/logos/oxford.png" alt="" />
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
                                  <img class="rounded-circle" src="../../../assets/img/team/10.jpg" alt="" />
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
                      <div class="card-footer text-center border-top"><a class="card-link d-block" href="../../social/notifications.html">View all</a></div>
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
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../../pages/user/profile.html" target="_blank">
                                <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../../../assets/img/team/3.jpg" alt="" /></div>
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Themewagon</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Mailbluster</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                              </a></div>
                            <div class="col-12">
                              <hr class="my-3 mx-n3 bg-200" />
                            </div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                                <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                              </a></div>
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../events/event-detail.html" target="_blank">
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
                      <img class="rounded-circle" src="../../../assets/img/team/3-thumb.png" alt="" />
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                      <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#!">Set status</a>
                      <a class="dropdown-item" href="../../../pages/user/profile.html">Profile &amp; account</a>
                      <a class="dropdown-item" href="#!">Feedback</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="../../../pages/user/settings.html">Settings</a>
                      <a class="dropdown-item" href="../../../pages/authentication/card/logout.html">Logout</a>
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
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../../index-2.html">Default</a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../../calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../../kanban.html">Kanban</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="../../social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="../../social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="../../social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="../../social/followers.html">Followers</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../../support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../../support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../../support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../../support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../../support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../../support-desk/quick-links.html">Quick links</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../trainer-profile.html">Trainer profile</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../../events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../../events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../events/event-list.html">Event list</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../../email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../email/compose.html">Compose</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/invoice.html">Invoice</a>
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
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="../../../demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../../demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../../demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../../demo/combo-nav.html">Combo nav</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/landing.html">Landing</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/user/settings.html">Settings</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/pricing/pricing-alt.html">Pricing alt</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/errors/500.html">500</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/faq/faq-accordion.html">Faq accordion</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../../index.html#authentication-modal" data-bs-toggle="modal">Modal</a>
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
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/carousel/bootstrap.html">Bootstrap carousel</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/top-navbar.html">Top nav</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/pagination.html">Pagination</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/sortable.html">Sortable</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/videos/plyr.html">Plyr</a></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/visibility.html">Visibility</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/tables/bulk-select.html">Bulk select</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                              <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/how-to-use.html">How to use</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/validation.html">Validation</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column pt-xxl-1">
                              <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/icons/material-icons.html">Material icons</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/maps/leaflet-map.html">Leaflet map</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                  <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../../../changelog.html">Changelog</a></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="../../../index-2.html">
            <div class="d-flex align-items-center"><img class="me-2" src="../../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>
          </a>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../../index-2.html">Default</a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/lms.html">LMS<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/saas.html">SaaS</a><a class="dropdown-item link-600 fw-medium" href="../../../dashboard/support-desk.html">Support desk<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a></div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                  <div class="card navbar-card-app shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../../calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../../kanban.html">Kanban</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="../../social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="../../social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="../../social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="../../social/followers.html">Followers</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../../support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../../support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../../support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../../support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../../support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../../support-desk/quick-links.html">Quick links</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../trainer-profile.html">Trainer profile</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../../events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../../events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../events/event-list.html">Event list</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../../email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../email/compose.html">Compose</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../../e-commerce/invoice.html">Invoice</a>
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
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/simple/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/card/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/split/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Layouts</p><a class="nav-link py-1 link-600 fw-medium" href="../../../demo/navbar-vertical.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../../demo/navbar-top.html">Top nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../../demo/navbar-double-top.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../../demo/combo-nav.html">Combo nav</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/landing.html">Landing</a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/user/settings.html">Settings</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/pricing/pricing-alt.html">Pricing alt</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/errors/500.html">500</a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">FAQ</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/faq/faq-accordion.html">Faq accordion</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../../../pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../../index.html#authentication-modal" data-bs-toggle="modal">Modal</a>
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
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../../../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/carousel/bootstrap.html">Bootstrap carousel</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/top-navbar.html">Top nav</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/pagination.html">Pagination</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/sortable.html">Sortable</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/components/videos/plyr.html">Plyr</a></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/utilities/visibility.html">Visibility</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/tables/bulk-select.html">Bulk select</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                            <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/charts/echarts/how-to-use.html">How to use</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/forms/validation.html">Validation</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column pt-xxl-1">
                            <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/icons/material-icons.html">Material icons</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../../../modules/maps/leaflet-map.html">Leaflet map</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../../../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/customization/styling.html">Styling<span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/customization/dark-mode.html">Dark mode</a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/faq.html">Faq</a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../../../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../../../changelog.html">Changelog</a></div>
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
              <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../../e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
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
                              <img class="rounded-circle" src="../../../assets/img/team/1-thumb.png" alt="" />
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
                              <img class="rounded-circle" src="../../../assets/img/icons/weather-sm.jpg" alt="" />
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
                              <img class="rounded-circle" src="../../../assets/img/logos/oxford.png" alt="" />
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
                              <img class="rounded-circle" src="../../../assets/img/team/10.jpg" alt="" />
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
                  <div class="card-footer text-center border-top"><a class="card-link d-block" href="../../social/notifications.html">View all</a></div>
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
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../../pages/user/profile.html" target="_blank">
                            <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../../../assets/img/team/3.jpg" alt="" /></div>
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Themewagon</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Mailbluster</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                          </a></div>
                        <div class="col-12">
                          <hr class="my-3 mx-n3 bg-200" />
                        </div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../../../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../events/event-detail.html" target="_blank">
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
                  <img class="rounded-circle" src="../../../assets/img/team/3-thumb.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#!">Set status</a>
                  <a class="dropdown-item" href="../../../pages/user/profile.html">Profile &amp; account</a>
                  <a class="dropdown-item" href="#!">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../../pages/user/settings.html">Settings</a>
                  <a class="dropdown-item" href="../../../pages/authentication/card/logout.html">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="content">
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
            var navbarDoubleTop = document.querySelector('[data-double-top-nav]');

            if (localStorage.getItem('navbarPosition') === 'double-top') {
              document.documentElement.classList.toggle('double-top-nav-layout');
            }

            if (navbarPosition === 'double-top') {
              navbarDoubleTop.removeAttribute('style');
              navbarTop.remove(navbarTop);
            } else {
              navbarTop.removeAttribute('style');
              navbarDoubleTop.remove(navbarDoubleTop);
            }
          </script>
          <div class="card overflow-hidden mb-3" data-bs-theme="light">
            <div class="card-body bg-black">
              <div class="bg-holder rounded-3" style="background-image:url(../../../assets/img/icons/spot-illustrations/course-details-bg.png);"></div><!--/.bg-holder-->
              <div class="row">
                <div class="col-xl-8 position-relative">
                  <div class="row g-3 align-items-center">
                    <div class="col-lg-5">
                      <div class="position-relative">
                        <div class="bg-holder rounded-1 overlay" style="background-image:url(../../../assets/img/elearning/courses/course-details.png);"></div><!--/.bg-holder-->
                        <a class="text-decoration-none position-relative d-block py-7 text-center" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="rounded-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></a>
                      </div>
                    </div>
                    <div class="col-lg-7">
                      <h6 class="fw-semi-bold text-400">A course by <a class="text-info" href="../trainer-profile.html">Bill Finger</a></h6>
                      <h2 class="fw-bold text-white">Advanced Design Tools for Modern Designs </h2>
                      <p class="text-white fw-semi-bold fs-10"><span class="me-1">4.8</span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="text-info ms-2">(6,899 reviews)</span></p>
                      <p class="mb-0 fw-medium text-400"> Exploring Photoshop, Illustrator, Krita, Procreate, and Canva; trace the evolution of graphic design from ancient...<a class="text-info" href="#!"> See more</a></p>
                    </div>
                  </div>
                  <hr class="text-secondary text-opacity-50" />
                  <ul class="list-unstyled d-flex flex-wrap gap-3 fs-10 fw-semi-bold text-300 mt-3 mb-0">
                    <li><span class="fas fa-graduation-cap text-white me-1"> </span>7,302 Learners </li>
                    <li><span class="fas fa-user-graduate text-white me-1"> </span>91% Completion</li>
                    <li><span class="fas fa-headphones text-white me-1"> </span>English</li>
                    <li><span class="fas fa-closed-captioning text-white me-1"> </span>English</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-lg-3">
            <div class="col-lg-8 order-1 order-lg-0">
              <div class="card mb-3 bg-transparent border shadow-none">
                <div class="card-body">
                  <div class="row gy-4 text-center text-md-start">
                    <div class="col-md-4"><img class="mb-3" src="../../../assets/img/icons/target.svg" width="36" alt="" />
                      <h6 class="fs-9 text-primary">Improve in A purposed Manner</h6>
                      <p class="fs-10 mb-0">Improve your skills by immersing yourself in a learning environment with professional instruction and limited access at a time.</p>
                    </div>
                    <div class="col-md-4"><img class="mb-3" src="../../../assets/img/icons/discount.svg" width="36" alt="" />
                      <h6 class="fs-9 text-primary">Get Exclusive Deals and Discounts</h6>
                      <p class="fs-10 mb-0">Online discussion and crucial insights, Adobe vouchers, and more are all available solely to you and your fellow learners to get you going.</p>
                    </div>
                    <div class="col-md-4"><img class="mb-3" src="../../../assets/img/icons/networking.svg" width="36" alt="" />
                      <h6 class="fs-9 text-primary">Networking with Fellow Artists</h6>
                      <p class="fs-10 mb-0">Learn, work together and connect with other learners tools like a common purpose Discord and Slack channel and showcase your works.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <div class="d-flex flex-between-center">
                    <h5 class="mb-0 text-truncate">This Course Will Teach You</h5><button class="btn btn-falcon-primary btn-sm" type="button"><span class="d-none d-sm-inline-block align-middle me-1">Preview</span><span class="fas fa-caret-right align-middle"></span></button>
                  </div>
                </div>
                <div class="card-body position-relative">
                  <div class="bg-holder bg-card d-none d-md-block" style="background-image:url(../../../assets/img/icons/spot-illustrations/corner-6.png);"></div><!--/.bg-holder-->
                  <ul class="list-unstyled position-relative row g-2 fs-10 mb-0 p-0">
                    <li class="col-md-6 d-flex gap-2"><span class="fas fa-circle mt-1" data-fa-transform="shrink-8"></span><span>Which tool is preferred for what kind of work.</span></li>
                    <li class="col-md-6 d-flex gap-2"><span class="fas fa-circle mt-1" data-fa-transform="shrink-8"></span><span>How to take criticism and make best use of them.</span></li>
                    <li class="col-md-6 d-flex gap-2"><span class="fas fa-circle mt-1" data-fa-transform="shrink-8"></span><span>Lessons and tasks that will give you intermidiate level skills.</span></li>
                    <li class="col-md-6 d-flex gap-2"><span class="fas fa-circle mt-1" data-fa-transform="shrink-8"></span><span>To build your first portfolio while completing the tasks.</span></li>
                    <li class="col-md-6 d-flex gap-2"><span class="fas fa-circle mt-1" data-fa-transform="shrink-8"></span><span>The Advantage and Disadvantage that comes with each software.</span></li>
                    <li class="col-md-6 d-flex gap-2"><span class="fas fa-circle mt-1" data-fa-transform="shrink-8"></span><span>Trials of Premium and Free programs and promo codes.</span></li>
                  </ul>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <h5 class="mb-0">Lesson Plans</h5>
                </div>
                <div class="card-body p-0">
                  <div class="d-flex align-items-center px-x1 py-2 border-bottom border-200">
                    <div class="hoverbox me-3 my-1"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg">
                        <div class="bg-attachment bg-attachment-square">
                          <div class="bg-holder" style="background-image:url(../../../assets/img/elearning/lessons/intro.png);"></div><!--/.bg-holder-->
                        </div>
                      </a>
                      <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-1 rounded">
                        <div class="position-relative fs-7 text-white" data-bs-theme="light"><span class="fas fa-play-circle"></span></div>
                      </div>
                    </div>
                    <div class="flex-1">
                      <h5 class="fs-9"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-title">Intro</a></h5>
                      <p class="fs-10 mb-0">Introduction and Course Objectives</p>
                    </div><button class="btn btn-falcon-default btn-sm" type="button"><span class="d-none d-sm-inline-block me-1">Take a Peek</span><span class="fas fa-chevron-down fs-11"></span></button>
                  </div>
                  <div class="d-flex align-items-center px-x1 py-2 border-bottom border-200">
                    <div class="hoverbox me-3 my-1"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg">
                        <div class="bg-attachment bg-attachment-square">
                          <div class="bg-holder" style="background-image:url(../../../assets/img/elearning/lessons/chapter1.png);"></div><!--/.bg-holder-->
                        </div>
                      </a>
                      <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-1 rounded">
                        <div class="position-relative fs-7 text-white" data-bs-theme="light"><span class="fas fa-play-circle"></span></div>
                      </div>
                    </div>
                    <div class="flex-1">
                      <h5 class="fs-9"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-title">Chapter 1</a></h5>
                      <p class="fs-10 mb-0">Tools, nothing more, nothing less</p>
                    </div><span class="fas fa-lock fs-10 text-secondary"></span>
                  </div>
                  <div class="d-flex align-items-center px-x1 py-2 border-bottom border-200">
                    <div class="hoverbox me-3 my-1"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg">
                        <div class="bg-attachment bg-attachment-square">
                          <div class="bg-holder" style="background-image:url(../../../assets/img/elearning/lessons/chapter2.png);"></div><!--/.bg-holder-->
                        </div>
                      </a>
                      <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-1 rounded">
                        <div class="position-relative fs-7 text-white" data-bs-theme="light"><span class="fas fa-play-circle"></span></div>
                      </div>
                    </div>
                    <div class="flex-1">
                      <h5 class="fs-9"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-title">Chapter 2</a></h5>
                      <p class="fs-10 mb-0">Choosing the Right Tool</p>
                    </div><span class="fas fa-lock fs-10 text-secondary"></span>
                  </div>
                  <div class="d-flex align-items-center px-x1 py-2 border-bottom border-200">
                    <div class="hoverbox me-3 my-1"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg">
                        <div class="bg-attachment bg-attachment-square">
                          <div class="bg-holder" style="background-image:url(../../../assets/img/elearning/lessons/chapter3.png);"></div><!--/.bg-holder-->
                        </div>
                      </a>
                      <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-1 rounded">
                        <div class="position-relative fs-7 text-white" data-bs-theme="light"><span class="fas fa-play-circle"></span></div>
                      </div>
                    </div>
                    <div class="flex-1">
                      <h5 class="fs-9"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-title">Chapter 3</a></h5>
                      <p class="fs-10 mb-0">Getting Comfortable</p>
                    </div><span class="fas fa-lock fs-10 text-secondary"></span>
                  </div>
                  <div class="d-flex align-items-center px-x1 py-2">
                    <div class="hoverbox me-3 my-1"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg">
                        <div class="bg-attachment bg-attachment-square">
                          <div class="bg-holder" style="background-image:url(../../../assets/img/elearning/lessons/chapter4.png);"></div><!--/.bg-holder-->
                        </div>
                      </a>
                      <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-1 rounded">
                        <div class="position-relative fs-7 text-white" data-bs-theme="light"><span class="fas fa-play-circle"></span></div>
                      </div>
                    </div>
                    <div class="flex-1">
                      <h5 class="fs-9"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-title">Chapter 4</a></h5>
                      <p class="fs-10 mb-0">Exploring Beyond Comfort</p>
                    </div><span class="fas fa-lock fs-10 text-secondary"></span>
                  </div>
                </div>
                <div class="card-footer text-end py-1 bg-body-tertiary"><a class="btn btn-link btn-sm py-2 px-0" href="#!">Full Lesson Plan<span class="fas fa-chevron-down ms-1 fs-11"></span></a></div>
              </div>
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <h5 class="mb-0">Requirements</h5>
                </div>
                <div class="card-body position-relative">
                  <div class="bg-holder bg-card d-none d-md-block" style="background-image:url(../../../assets/img/icons/spot-illustrations/corner-7.png);"></div><!--/.bg-holder-->
                  <ul class="list-unstyled position-relative fs-10 p-0 m-0">
                    <li class="mb-2">
                      <div class="d-flex"><span class="fas fa-circle me-2 mt-1" data-fa-transform="shrink-8"></span><span>This course requires profieciency in English language as the Lessons are prepared in English.</span></div>
                    </li>
                    <li class="mb-2">
                      <div class="d-flex"><span class="fas fa-circle me-2 mt-1" data-fa-transform="shrink-8"></span><span>Learners with following skills might be more benefited, but little extra work is all that’ll take to catch up to experts’ level</span></div>
                      <ol class="bullet-inside mt-2">
                        <li class="mb-2">Comfortable with Computer</li>
                        <li class="mb-2">Access to Internet and Computer</li>
                        <li class="mb-2">Background in Fine Arts or Any Creative Field</li>
                        <li class="mb-2">Digital Drawing Experience</li>
                      </ol>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header d-flex flex-between-center">
                  <h5 class="mb-0">Trainer</h5><button class="btn btn-falcon-primary btn-sm" type="button"><span class="fas fa-user-plus"></span><span class="d-none d-sm-inline-block align-middle ms-1">Follow</span></button>
                </div>
                <div class="card-body bg-body-tertiary">
                  <div class="row g-4 text-center text-md-start">
                    <div class="col-md-auto"><a href="../trainer-profile.html">
                        <div class="avatar avatar-4xl">
                          <img class="rounded-circle" src="../../../assets/img/team/5-thumb.png" alt="" />
                        </div>
                      </a></div>
                    <div class="col">
                      <h5 class="mb-2"> <a href="../trainer-profile.html">Bill Finger</a></h5>
                      <h6 class="fs-10 text-800 fw-normal mb-3">Artist | Professional Comic Writer</h6>
                      <p class="fs-10 text-700">Finger, an aspiring writer and part-time shoe salesperson, joined Kane's fledgling studio in 1938. Finger was inducted into the Jack Kirby Hall of Fame in 1994 and the <strong>Will Eisner Award Hall of Fame</strong>in 1999 after death. Finger was named one of the awardees in the company's 50th anniversary edition <strong>Fifty Who Made DC </strong>Great in 1985. In his honor, Comic-Con International created the <strong>Bill Finger Award for Excellence </strong>in Comic Book Writing in 2005. In 2014, Finger got a posthumous <strong>Inkpot Award. </strong></p>
                      <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-md-start"><span class="badge rounded-pill badge-subtle-light dark__bg-dark border border-300 text-secondary py-2 px-3"><span class="fas fa-star me-1" data-fa-transform="shrink-4"></span><span>4.95</span></span><span class="badge rounded-pill badge-subtle-light dark__bg-dark border border-300 text-secondary py-2 px-3"><span class="fas fa-graduation-cap me-1" data-fa-transform="shrink-4"></span><span>35,400</span></span><span class="badge rounded-pill badge-subtle-light dark__bg-dark border border-300 text-secondary py-2 px-3"><span class="fas fa-file-alt me-1" data-fa-transform="shrink-4"></span><span>15</span></span><span class="badge rounded-pill badge-subtle-light dark__bg-dark border border-300 text-secondary py-2 px-3"><span class="fas fa-map-pin me-1" data-fa-transform="shrink-4"></span><span>5,700</span></span></div>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-end py-1"><a class="btn btn-link btn-sm fw-medium py-2 px-0" href="course-list.html">View all his courses<span class="fas fa-external-link-alt ms-1"></span></a></div>
              </div>
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary d-flex flex-between-center">
                  <h5 class="mb-0">Reviews</h5>
                  <div class="d-flex gap-2"> <button class="btn btn-falcon-default btn-sm" type="button"><span class="d-none d-sm-inline-block me-1">Filter</span><span class="fs-11 fas fa-filter"></span></button>
                    <div> <select class="form-select form-select-sm">
                        <option value="" selected="selected">Sort by</option>
                        <option value="oldest">Oldest</option>
                        <option value="newest">Newest</option>
                        <option value="name">Name</option>
                      </select></div>
                  </div>
                </div>
                <div class="card-body py-0">
                  <div class="row g-3 align-items-center text-center text-md-start py-3 border-bottom border-200">
                    <div class="col-md-auto"><a href="#!">
                        <div class="avatar avatar-3xl">
                          <img class="rounded-circle" src="../../../assets/img/team/11.jpg" alt="" />
                        </div>
                      </a></div>
                    <div class="col px-x1 py-2">
                      <div class="row">
                        <div class="col-12">
                          <h6 class="fs-9"><a class="me-2" href="#!">Jim Lee</a><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span></h6>
                        </div>
                        <div class="col-md-10">
                          <p class="fs-10 text-800">Excellent Course for any beginner like me :p The trainer was very generous and helped whenever DMed.</p>
                        </div>
                        <div class="col-12">
                          <div class="fs-11 text-600 d-flex flex-column flex-md-row align-items-center gap-2">
                            <h6 class="fs-11 text-600 mb-0">3 days ago</h6>
                            <p class="mb-0 ms-1">230 people found this helpful</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-auto d-flex justify-content-center gap-2"><button class="btn btn-falcon-default icon-item focus-bg-primary"><span class="fs-11 fas fa-thumbs-up"></span></button><button class="btn btn-falcon-default icon-item focus-bg-secondary"><span class="fs-11 fas fa-thumbs-up" data-fa-transform="rotate-180"></span></button></div>
                  </div>
                  <div class="row g-3 align-items-center text-center text-md-start py-3 border-bottom border-200">
                    <div class="col-md-auto"><a href="#!">
                        <div class="avatar avatar-3xl">
                          <img class="rounded-circle" src="../../../assets/img/team/2-thumb.png" alt="" />
                        </div>
                      </a></div>
                    <div class="col px-x1 py-2">
                      <div class="row">
                        <div class="col-12">
                          <h6 class="fs-9"><a class="me-2" href="#!">Greg Capullo</a><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></h6>
                        </div>
                        <div class="col-md-10">
                          <p class="fs-10 text-800">Very Sophisticated Content. Helped me a great amount. Going to follow this guy and his other contents.</p>
                        </div>
                        <div class="col-12">
                          <div class="fs-11 text-600 d-flex flex-column flex-md-row align-items-center gap-2">
                            <h6 class="fs-11 text-600 mb-0">5 days ago</h6>
                            <p class="mb-0 ms-1">670 people found this helpful</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-auto d-flex justify-content-center gap-2"><button class="btn btn-falcon-default icon-item focus-bg-primary"><span class="fs-11 fas fa-thumbs-up"></span></button><button class="btn btn-falcon-default icon-item focus-bg-secondary"><span class="fs-11 fas fa-thumbs-up" data-fa-transform="rotate-180"></span></button></div>
                  </div>
                  <div class="row g-3 align-items-center text-center text-md-start py-3 border-bottom border-200">
                    <div class="col-md-auto"><a href="#!">
                        <div class="avatar avatar-3xl">
                          <img class="rounded-circle" src="../../../assets/img/team/7.jpg" alt="" />
                        </div>
                      </a></div>
                    <div class="col px-x1 py-2">
                      <div class="row">
                        <div class="col-12">
                          <h6 class="fs-9"><a class="me-2" href="#!">Frank Miller</a><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></h6>
                        </div>
                        <div class="col-md-10">
                          <p class="fs-10 text-800">BEST COURSE EVER in this topic. Going to use the knowledge I’ve gathered here. Great content and clear, contextual lessons.</p>
                        </div>
                        <div class="col-12">
                          <div class="fs-11 text-600 d-flex flex-column flex-md-row align-items-center gap-2">
                            <h6 class="fs-11 text-600 mb-0">5 days ago</h6>
                            <p class="mb-0 ms-1">17 people found this helpful</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-auto d-flex justify-content-center gap-2"><button class="btn btn-falcon-default icon-item focus-bg-primary"><span class="fs-11 fas fa-thumbs-up"></span></button><button class="btn btn-falcon-default icon-item focus-bg-secondary"><span class="fs-11 fas fa-thumbs-up" data-fa-transform="rotate-180"></span></button></div>
                  </div>
                  <div class="row g-3 align-items-center text-center text-md-start py-3 border-bottom border-200">
                    <div class="col-md-auto"><a href="#!">
                        <div class="avatar avatar-3xl">
                          <img class="rounded-circle" src="../../../assets/img/team/4-thumb.png" alt="" />
                        </div>
                      </a></div>
                    <div class="col px-x1 py-2">
                      <div class="row">
                        <div class="col-12">
                          <h6 class="fs-9"><a class="me-2" href="#!">Scott Snyder</a><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></h6>
                        </div>
                        <div class="col-md-10">
                          <p class="fs-10 text-800">I was confused about what tool is good for me and this finally course helped me a lot. I’m definitely going to refer it to my peers.</p>
                        </div>
                        <div class="col-12">
                          <div class="fs-11 text-600 d-flex flex-column flex-md-row align-items-center gap-2">
                            <h6 class="fs-11 text-600 mb-0">7 days ago</h6>
                            <p class="mb-0 ms-1">68 people found this helpful</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-auto d-flex justify-content-center gap-2"><button class="btn btn-falcon-default icon-item focus-bg-primary"><span class="fs-11 fas fa-thumbs-up"></span></button><button class="btn btn-falcon-default icon-item focus-bg-secondary"><span class="fs-11 fas fa-thumbs-up" data-fa-transform="rotate-180"></span></button></div>
                  </div>
                  <div class="row g-3 align-items-center text-center text-md-start py-3">
                    <div class="col-md-auto"><a href="#!">
                        <div class="avatar avatar-3xl">
                          <img class="rounded-circle" src="../../../assets/img/team/10.jpg" alt="" />
                        </div>
                      </a></div>
                    <div class="col px-x1 py-2">
                      <div class="row">
                        <div class="col-12">
                          <h6 class="fs-9"><a class="me-2" href="#!">Bob Kane</a><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="fa fa-star text-300"></span></h6>
                        </div>
                        <div class="col-md-10">
                          <p class="fs-10 text-800">This course changed my life. I changed my profession and now I’m living a happy life where I’m in charge. Thanks to both Bill and Falcon.</p>
                        </div>
                        <div class="col-12">
                          <div class="fs-11 text-600 d-flex flex-column flex-md-row align-items-center gap-2">
                            <h6 class="fs-11 text-600 mb-0">8 days ago</h6>
                            <p class="mb-0 ms-1">0 people found this helpful</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-auto d-flex justify-content-center gap-2"><button class="btn btn-falcon-default icon-item focus-bg-primary"><span class="fs-11 fas fa-thumbs-up"></span></button><button class="btn btn-falcon-default icon-item focus-bg-secondary"><span class="fs-11 fas fa-thumbs-up" data-fa-transform="rotate-180"></span></button></div>
                  </div>
                </div>
                <div class="card-footer bg-body-tertiary text-end py-1"><a class="btn btn-link btn-sm py-2 px-0" href="#!">See All Reviewes<span class="fas fa-external-link-alt ms-1"></span></a></div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h6 class="fs-9 mb-0">Similar Courses</h6>
                </div>
                <div class="card-body py-0 bg-body-tertiary">
                  <div class="swiper theme-slider py-x1" data-swiper='{"autoplay":true,"spaceBetween":10,"slidesPerView":1,"breakpoints":{"460":{"slidesPerView":1.5},"768":{"slidesPerView":2},"1540":{"slidesPerView":2.5}},"loop":true,"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev"}}'>
                    <div class="swiper-wrapper">
                      <article class="swiper-slide h-auto">
                        <div class="card h-100 overflow-hidden">
                          <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div>
                              <div class="hoverbox text-center"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="w-100 h-100 object-fit-cover" src="../../../assets/img/elearning/courses/course1.png" alt="" /></a>
                                <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                              </div>
                              <div class="p-3">
                                <h5 class="fs-9 mb-2"><a class="text-1100" href="course-details.html">Script Writing Masterclass: Introdution to Industry Cliches</a></h5>
                                <h5 class="fs-9"><a href="../trainer-profile.html">Bill Finger</a></h5>
                              </div>
                            </div>
                            <div class="row g-0 mb-3 align-items-end">
                              <div class="col ps-3">
                                <h4 class="fs-8 text-warning d-flex align-items-center"> <span>$69.50</span><del class="ms-2 fs-10 text-700">$139.90</del></h4>
                                <p class="mb-0 fs-10 text-800">92,632 Learners Enrolled</p>
                              </div>
                              <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default me-2 hover-danger" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><span class="far fa-heart" data-fa-transform="down-2"></span></a><a class="btn btn-sm btn-falcon-default hover-primary" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Cart"><span class="fas fa-cart-plus" data-fa-transform="down-2"></span></a></div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <article class="swiper-slide h-auto">
                        <div class="card h-100 overflow-hidden">
                          <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div>
                              <div class="hoverbox text-center"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="w-100 h-100 object-fit-cover" src="../../../assets/img/elearning/courses/course2.png" alt="" /></a>
                                <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                              </div>
                              <div class="p-3">
                                <h5 class="fs-9 mb-2"><a class="text-1100" href="course-details.html">Composition in Comics: Easy to Read Between Panels</a></h5>
                                <h5 class="fs-9"><a href="../trainer-profile.html">Bill Finger</a></h5>
                              </div>
                            </div>
                            <div class="row g-0 mb-3 align-items-end">
                              <div class="col ps-3">
                                <h4 class="fs-8 text-warning d-flex align-items-center"> <span>$39.99</span><del class="ms-2 fs-10 text-700">$139.90</del></h4>
                                <p class="mb-0 fs-10 text-800">92,603 Learners Enrolled</p>
                              </div>
                              <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default me-2 hover-danger" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><span class="far fa-heart" data-fa-transform="down-2"></span></a><a class="btn btn-sm btn-falcon-default hover-primary" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Cart"><span class="fas fa-cart-plus" data-fa-transform="down-2"></span></a></div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <article class="swiper-slide h-auto">
                        <div class="card h-100 overflow-hidden">
                          <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div>
                              <div class="hoverbox text-center"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="w-100 h-100 object-fit-cover" src="../../../assets/img/elearning/courses/course3.png" alt="" /></a>
                                <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                              </div>
                              <div class="p-3">
                                <h5 class="fs-9 mb-2"><a class="text-1100" href="course-details.html">Advanced Design Tools for Modern Designs</a></h5>
                                <h5 class="fs-9"><a href="../trainer-profile.html">Bill Finger</a></h5>
                              </div>
                            </div>
                            <div class="row g-0 mb-3 align-items-end">
                              <div class="col ps-3">
                                <h4 class="fs-8 text-warning d-flex align-items-center"> <span>$69.50</span><del class="ms-2 fs-10 text-700">$139.90</del></h4>
                                <p class="mb-0 fs-10 text-800">11,000 Learners Enrolled</p>
                              </div>
                              <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default me-2" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove from wishlist"><span class="fas fa-heart text-danger" data-fa-transform="down-2"></span></a><a class="btn btn-sm btn-falcon-default hover-primary" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Cart"><span class="fas fa-cart-plus" data-fa-transform="down-2"></span></a></div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <article class="swiper-slide h-auto">
                        <div class="card h-100 overflow-hidden">
                          <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div>
                              <div class="hoverbox text-center"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="w-100 h-100 object-fit-cover" src="../../../assets/img/elearning/courses/course4.png" alt="" /></a>
                                <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                              </div>
                              <div class="p-3">
                                <h5 class="fs-9 mb-2"><a class="text-1100" href="course-details.html">Comic Page Layout: Analysing The Classics</a></h5>
                                <h5 class="fs-9"><a href="../trainer-profile.html">Bill Finger</a></h5>
                              </div>
                            </div>
                            <div class="row g-0 mb-3 align-items-end">
                              <div class="col ps-3">
                                <h4 class="fs-8 text-warning d-flex align-items-center"> <span>$49.50</span><del class="ms-2 fs-10 text-700">$139.90</del></h4>
                                <p class="mb-0 fs-10 text-800">32,106 Learners Enrolled</p>
                              </div>
                              <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default me-2 hover-danger" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><span class="far fa-heart" data-fa-transform="down-2"></span></a><a class="btn btn-sm btn-primary" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove from Cart"><span class="fas fa-shopping-cart" data-fa-transform="down-2"></span></a></div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <article class="swiper-slide h-auto">
                        <div class="card h-100 overflow-hidden">
                          <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div>
                              <div class="hoverbox text-center"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="w-100 h-100 object-fit-cover" src="../../../assets/img/elearning/courses/course5.png" alt="" /></a>
                                <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                              </div>
                              <div class="p-3">
                                <h5 class="fs-9 mb-2"><a class="text-1100" href="course-details.html">Abstract Painting: Zero to Mastery in Traditional Medium</a></h5>
                                <h5 class="fs-9"><a href="../trainer-profile.html">J. H. Williams III</a></h5>
                              </div>
                            </div>
                            <div class="row g-0 mb-3 align-items-end">
                              <div class="col ps-3">
                                <h4 class="fs-8 text-warning d-flex align-items-center"> <span>$69.50</span><del class="ms-2 fs-10 text-700">$139.90</del></h4>
                                <p class="mb-0 fs-10 text-800">2,304 Learners Enrolled</p>
                              </div>
                              <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default me-2 hover-danger" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><span class="far fa-heart" data-fa-transform="down-2"></span></a><a class="btn btn-sm btn-falcon-default hover-primary" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Cart"><span class="fas fa-cart-plus" data-fa-transform="down-2"></span></a></div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <article class="swiper-slide h-auto">
                        <div class="card h-100 overflow-hidden">
                          <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div>
                              <div class="hoverbox text-center"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="w-100 h-100 object-fit-cover" src="../../../assets/img/elearning/courses/course6.png" alt="" /></a>
                                <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                              </div>
                              <div class="p-3">
                                <h5 class="fs-9 mb-2"><a class="text-1100" href="course-details.html">Inking: Choosing Between Analog vs Digital</a></h5>
                                <h5 class="fs-9"><a href="../trainer-profile.html">Bill Finger</a></h5>
                              </div>
                            </div>
                            <div class="row g-0 mb-3 align-items-end">
                              <div class="col ps-3">
                                <h4 class="fs-8 text-warning d-flex align-items-center"> <span>$39.99</span><del class="ms-2 fs-10 text-700">$139.90</del></h4>
                                <p class="mb-0 fs-10 text-800">9,312 Learners Enrolled</p>
                              </div>
                              <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default me-2 hover-danger" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><span class="far fa-heart" data-fa-transform="down-2"></span></a><a class="btn btn-sm btn-falcon-default hover-primary" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Cart"><span class="fas fa-cart-plus" data-fa-transform="down-2"></span></a></div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <article class="swiper-slide h-auto">
                        <div class="card h-100 overflow-hidden">
                          <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div>
                              <div class="hoverbox text-center"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="w-100 h-100 object-fit-cover" src="../../../assets/img/elearning/courses/course7.png" alt="" /></a>
                                <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                              </div>
                              <div class="p-3">
                                <h5 class="fs-9 mb-2"><a class="text-1100" href="course-details.html">Character Design Masterclass: Your First Supervillain</a></h5>
                                <h5 class="fs-9"><a href="../trainer-profile.html">Bill Finger</a></h5>
                              </div>
                            </div>
                            <div class="row g-0 mb-3 align-items-end">
                              <div class="col ps-3">
                                <h4 class="fs-8 text-warning d-flex align-items-center"> <span>$99.90</span><del class="ms-2 fs-10 text-700">$139.90</del></h4>
                                <p class="mb-0 fs-10 text-800">292,603 Learners Enrolled</p>
                              </div>
                              <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default me-2 hover-danger" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><span class="far fa-heart" data-fa-transform="down-2"></span></a><a class="btn btn-sm btn-falcon-default hover-primary" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Cart"><span class="fas fa-cart-plus" data-fa-transform="down-2"></span></a></div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <article class="swiper-slide h-auto">
                        <div class="card h-100 overflow-hidden">
                          <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div>
                              <div class="hoverbox text-center"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="w-100 h-100 object-fit-cover" src="../../../assets/img/elearning/courses/course8.png" alt="" /></a>
                                <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                              </div>
                              <div class="p-3">
                                <h5 class="fs-9 mb-2"><a class="text-1100" href="course-details.html">Character Design Masterclass: Your First Superhero</a></h5>
                                <h5 class="fs-9"><a href="../trainer-profile.html">Bill Finger</a></h5>
                              </div>
                            </div>
                            <div class="row g-0 mb-3 align-items-end">
                              <div class="col ps-3">
                                <h4 class="fs-8 text-warning d-flex align-items-center"> <span>$69.99</span><del class="ms-2 fs-10 text-700">$139.90</del></h4>
                                <p class="mb-0 fs-10 text-800">90,304 Learners Enrolled</p>
                              </div>
                              <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default me-2 hover-danger" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><span class="far fa-heart" data-fa-transform="down-2"></span></a><a class="btn btn-sm btn-falcon-default hover-primary" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Cart"><span class="fas fa-cart-plus" data-fa-transform="down-2"></span></a></div>
                            </div>
                          </div>
                        </div>
                      </article>
                      <article class="swiper-slide h-auto">
                        <div class="card h-100 overflow-hidden">
                          <div class="card-body p-0 d-flex flex-column justify-content-between">
                            <div>
                              <div class="hoverbox text-center"><a class="text-decoration-none" href="../../../assets/video/beach.mp4" data-gallery="attachment-bg"><img class="w-100 h-100 object-fit-cover" src="../../../assets/img/elearning/courses/course9.png" alt="" /></a>
                                <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2"><img class="z-1" src="../../../assets/img/icons/play.svg" width="60" alt="" /></div>
                              </div>
                              <div class="p-3">
                                <h5 class="fs-9 mb-2"><a class="text-1100" href="course-details.html">Character Design Masterclass: Your First Sidekick</a></h5>
                                <h5 class="fs-9"><a href="../trainer-profile.html">Bill Finger</a></h5>
                              </div>
                            </div>
                            <div class="row g-0 mb-3 align-items-end">
                              <div class="col ps-3">
                                <h4 class="fs-8 text-warning d-flex align-items-center"> <span>$69.99</span><del class="ms-2 fs-10 text-700">$139.90</del></h4>
                                <p class="mb-0 fs-10 text-800">66,304 Learners Enrolled</p>
                              </div>
                              <div class="col-auto pe-3"><a class="btn btn-sm btn-falcon-default me-2 hover-danger" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><span class="far fa-heart" data-fa-transform="down-2"></span></a><a class="btn btn-sm btn-falcon-default hover-primary" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Cart"><span class="fas fa-cart-plus" data-fa-transform="down-2"></span></a></div>
                            </div>
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="swiper-nav">
                      <div class="swiper-button-next swiper-button-white"></div>
                      <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-end py-1"><a class="btn btn-link btn-sm py-2 px-0" href="course-grid.html">All courses<span class="fas fa-external-link-alt ms-1"></span></a></div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="course-details-sticky-sidebar mb-lg-8 mt-xl-n10 pe-xl-4 pe-xxl-7">
                <div class="card mb-3">
                  <div class="card-header bg-body-tertiary d-none d-lg-block">
                    <h5 class="mb-0">Plan Your Dream Career</h5>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-7 col-lg-12 order-md-1 order-lg-0">
                        <h2 class="fw-medium d-flex align-items-center">$47.49<del class="ms-2 fs-10 text-500">$69.99</del></h2>
                        <p class="text-danger fs-10 fw-semi-bold"><span class="far fa-clock me-2"></span>Sale ends in 13h : 25m : 54s</p><button class="btn btn-primary btn-lg w-100 fs-9 mt-1" id="course-purchase-btn">Purchase this course</button>
                        <p class="text-700 fw-medium fs-10 mt-3 mb-0">14 day Refund Policy</p>
                      </div>
                      <div class="col-md-5 col-lg-12">
                        <hr class="border-top border-dashed d-md-none d-lg-block" />
                        <h6 class="fw-bold">Course Contents</h6>
                        <ul class="list-unstyled fs-10 mb-0">
                          <li class="mb-1"><span class="fs-11 fas fa-check me-2"></span>Total 13 hours of video lectures</li>
                          <li class="mb-1"><span class="fs-11 fas fa-check me-2"></span>12 premium article access</li>
                          <li class="mb-1"><span class="fs-11 fas fa-check me-2"></span>11 downloadable resources</li>
                          <li class="mb-1"><span class="fs-11 fas fa-check me-2"></span>Mobile, Tab or TV friendly content</li>
                          <li class="mb-1"><span class="fs-11 fas fa-check me-2"></span>Certificate upon completion</li>
                          <li class="mb-1"><span class="fs-11 fas fa-infinity me-2"></span>Lifetime permission to access</li>
                        </ul>
                      </div>
                    </div>
                    <hr class="border-top border-dashed" />
                    <h6 class="fw-bold">Share with friends</h6>
                    <div class="d-flex gap-2"><button class="btn btn-falcon-default icon-item fs-11 icon-item-lg"><span class="fs-9 fab fa-facebook-f mr-1 text-primary"></span></button><button class="btn btn-falcon-default icon-item fs-11 icon-item-lg"><span class="fs-9 fab fa-twitter mr-1 text-twitter"></span></button><button class="btn btn-falcon-default icon-item fs-11 icon-item-lg"><span class="fs-9 fab fa-google-plus-g mr-1 text-google-plus"></span></button><button class="btn btn-falcon-default icon-item fs-11 icon-item-lg"><span class="fs-9 fab fa-linkedin-in mr-1 text-info"></span></button></div>
                  </div>
                </div>
                <div class="d-none d-xl-block position-absolute z-n1 top-0 end-0 text-end me-n2 me-xxl-4 mt-xl-6"><img class="bg-card" src="../../../assets/img/illustrations/bg-wave.png" alt="" style="max-width: 23.75rem;" /></div>
              </div>
            </div>
          </div>
          <div class="card rounded-0 bottom-bar d-lg-none" data-bottom-bar='{"target":"course-purchase-btn","offsetTop":60,"breakPoint":"lg"}'>
            <div class="card-body py-2">
              <div class="d-flex gap-3 flex-between-center">
                <h2 class="mb-0 fw-medium d-flex align-items-center">$47.49<del class="d-none d-sm-block ms-2 fs-10 text-500">$69.99</del></h2><button class="btn btn-primary btn-lg fs-9 flex-1">Purchase this course</button>
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
            <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../../assets/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../../assets/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherAuto"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../../assets/img/generic/falcon-mode-auto.jpg" alt=""/></span><span class="label-text"> Auto</span></label></div>
          </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="../../../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-9">RTL Mode</h5>
              <p class="fs-10 mb-0">Switch your language direction </p><a class="fs-10" href="../../../documentation/customization/configuration.html">RTL Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" /></div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="../../../assets/img/icons/arrows-h.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-9">Fluid Layout</h5>
              <p class="fs-10 mb-0">Toggle container layout system </p><a class="fs-10" href="../../../documentation/customization/configuration.html">Fluid Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" /></div>
        </div>
        <hr />
        <div class="d-flex align-items-start"><img class="me-2" src="../../../assets/img/icons/paragraph.svg" width="20" alt="" />
          <div class="flex-1">
            <h5 class="fs-9 d-flex align-items-center">Navigation Position</h5>
            <p class="fs-10 mb-2">Select a suitable navigation system for your web application </p>
            <div><select class="form-select form-select-sm" aria-label="Navbar position" data-theme-control="navbarPosition">
                <option disabled="" value="vertical">Vertical</option>
                <option value="top">Top</option>
                <option disabled="" value="combo">Combo</option>
                <option value="double-top">Double Top</option>
              </select></div>
          </div>
        </div>
        <hr />
        <h5 class="fs-9 d-flex align-items-center">Vertical Navbar Style</h5>
        <p class="fs-10 mb-0">Switch between styles for your vertical navbar </p>
        <p> <a class="fs-10" href="../../../modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="../../../assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="../../../assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-card"> <img class="img-fluid img-prototype" src="../../../assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="../../../assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label></div>
          </div>
        </div>
        <div class="text-center mt-5"><img class="mb-4" src="../../../assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
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
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/swiper/swiper-bundle.min.js"></script>
    <script src="../../../vendors/glightbox/glightbox.min.js"> </script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../assets/js/theme.js"></script>
  </body>


<!-- Mirrored from prium.github.io/falcon/v3.21.0/app/e-learning/course/course-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 20:05:39 GMT -->
</html>