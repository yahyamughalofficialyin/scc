<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  
<!-- Mirrored from prium.github.io/falcon/v3.21.0/modules/icons/bootstrap-icons.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 20:07:05 GMT -->
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
    <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.4.0/font/bootstrap-icons.css">
    <link href="../../vendors/prism/prism-okaidia.css" rel="stylesheet">
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
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../../app/events/event-detail.html">
                          <div class="d-flex align-items-center">
                            <span class="fas fa-circle me-2 text-300 fs-11"></span>
                            <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Events</div>
                          </div>
                        </a>
                        <a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../../app/e-commerce/customers.html">
                          <div class="d-flex align-items-center">
                            <span class="fas fa-circle me-2 text-300 fs-11"></span>
                            <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Customers</div>
                          </div>
                        </a>
                        <hr class="text-200 dark__text-900" />
                        <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-9" href="../../app/e-commerce/customers.html">
                          <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                            <div class="flex-1 fs-10 title">All customers list</div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-1 fs-9" href="../../app/events/event-detail.html">
                          <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                            <div class="flex-1 fs-10 title">Latest events in current month</div>
                          </div>
                        </a>
                        <a class="dropdown-item px-x1 py-1 fs-9" href="../../app/e-commerce/product/product-grid.html">
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
                  <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
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
                      <div class="card-footer text-center border-top"><a class="card-link d-block" href="../../app/social/notifications.html">View all</a></div>
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
                            <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../app/events/event-detail.html" target="_blank">
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
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../../app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/kanban.html">Kanban</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/followers.html">Followers</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/quick-links.html">Quick links</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/trainer-profile.html">Trainer profile</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/event-list.html">Event list</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/compose.html">Compose</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/invoice.html">Invoice</a>
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
                              <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../components/carousel/bootstrap.html">Bootstrap carousel</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/top-navbar.html">Top nav</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pagination.html">Pagination</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../components/sortable.html">Sortable</a><a class="nav-link py-1 link-600 fw-medium" href="../components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../components/videos/plyr.html">Plyr</a></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/visibility.html">Visibility</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../tables/bulk-select.html">Bulk select</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                              <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/how-to-use.html">How to use</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/validation.html">Validation</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column pt-xxl-1">
                              <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="material-icons.html">Material icons</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../maps/leaflet-map.html">Leaflet map</a>
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
                  </div><!-- parent pages--><a class="nav-link" href="../../app/calendar.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendar</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../../app/chat.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Chat</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span></div>
                  </a>
                  <ul class="nav collapse" id="email">
                    <li class="nav-item"><a class="nav-link" href="../../app/email/inbox.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/email/email-detail.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email detail</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/email/compose.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">Events</span></div>
                  </a>
                  <ul class="nav collapse" id="events">
                    <li class="nav-item"><a class="nav-link" href="../../app/events/create-an-event.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create an event</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event detail</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/events/event-list.html">
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
                        <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/product/product-list.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product list</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/product/product-grid.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product grid</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/product/product-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product details</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/product/add-product.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Add product</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Orders</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="orders">
                        <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/orders/order-list.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order list</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/orders/order-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order details</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customers</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/customer-details.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customer details</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/shopping-cart.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shopping cart</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/checkout.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checkout</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/billing.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Billing</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-commerce/invoice.html">
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
                        <li class="nav-item"><a class="nav-link" href="../../app/e-learning/course/course-list.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course list</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-learning/course/course-grid.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course grid</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-learning/course/course-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course details</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../../app/e-learning/course/create-a-course.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create a course</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-learning/student-overview.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Student overview</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/e-learning/trainer-profile.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Trainer profile</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link" href="../../app/kanban.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Kanban</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-share-alt"></span></span><span class="nav-link-text ps-1">Social</span></div>
                  </a>
                  <ul class="nav collapse" id="social">
                    <li class="nav-item"><a class="nav-link" href="../../app/social/feed.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feed</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/social/activity-log.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity log</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/social/notifications.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Notifications</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/social/followers.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Followers</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#support-desk" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="support-desk">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-ticket-alt"></span></span><span class="nav-link-text ps-1">Support desk</span></div>
                  </a>
                  <ul class="nav collapse" id="support-desk">
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/table-view.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Table view</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/card-view.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card view</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/contacts.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Contacts</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/contact-details.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Contact details</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/tickets-preview.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tickets preview</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/quick-links.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Quick links</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../../app/support-desk/reports.html">
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
                        <li class="nav-item"><a class="nav-link" href="../forms/basic/form-control.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Form control</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/basic/input-group.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input group</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/basic/select.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Select</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/basic/checks.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checks</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/basic/range.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/basic/layout.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Layout</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="advance">
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/advance-select.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance select</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/date-picker.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Date picker</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/editor.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Editor</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/emoji-button.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Emoji button</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/file-uploader.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">File uploader</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/input-mask.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input mask</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/range-slider.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range slider</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../forms/advance/rating.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Rating</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../forms/floating-labels.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Floating labels</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../forms/wizard.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../forms/validation.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Validation</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#tables" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-table"></span></span><span class="nav-link-text ps-1">Tables</span></div>
                  </a>
                  <ul class="nav collapse" id="tables">
                    <li class="nav-item"><a class="nav-link" href="../tables/basic-tables.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic tables</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../tables/advance-tables.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance tables</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../tables/bulk-select.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bulk select</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#charts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">Charts</span></div>
                  </a>
                  <ul class="nav collapse" id="charts">
                    <li class="nav-item"><a class="nav-link" href="../charts/chartjs.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Chartjs</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../charts/d3js.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">D3js</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#eCharts" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ECharts</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="eCharts">
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/line-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Line charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/bar-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bar charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/candlestick-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Candlestick charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/geo-map.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Geo map</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/scatter-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scatter charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/pie-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pie charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/gauge-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Gauge charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/radar-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Radar charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/heatmap-charts.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Heatmap charts</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../charts/echarts/how-to-use.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">How to use</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#icons" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="icons">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shapes"></span></span><span class="nav-link-text ps-1">Icons</span></div>
                  </a>
                  <ul class="nav collapse show" id="icons">
                    <li class="nav-item"><a class="nav-link" href="font-awesome.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Font awesome</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link active" href="bootstrap-icons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap icons</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="feather.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feather</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="material-icons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Material icons</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#maps" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="maps">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-map"></span></span><span class="nav-link-text ps-1">Maps</span></div>
                  </a>
                  <ul class="nav collapse" id="maps">
                    <li class="nav-item"><a class="nav-link" href="../maps/google-map.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Google map</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../maps/leaflet-map.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Leaflet map</span></div>
                      </a><!-- more inner pages--></li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#components" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text ps-1">Components</span></div>
                  </a>
                  <ul class="nav collapse" id="components">
                    <li class="nav-item"><a class="nav-link" href="../components/accordion.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Accordion</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/alerts.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Alerts</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/anchor.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Anchor</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/animated-icons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Animated icons</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/background.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/badges.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Badges</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/bottom-bar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bottom bar</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/breadcrumbs.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Breadcrumbs</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/buttons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Buttons</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/calendar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Calendar</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/cards.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cards</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Carousel</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="carousel">
                        <li class="nav-item"><a class="nav-link" href="../components/carousel/bootstrap.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/carousel/swiper.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Swiper</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../components/collapse.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Collapse</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/cookie-notice.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cookie notice</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/countup.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Countup</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/dropdowns.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dropdowns</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/jquery-components.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jquery</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/list-group.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List group</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/modals.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modals</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs &amp; Tabs</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="navs-_and_-Tabs">
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/navs.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/vertical-navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar vertical</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/top-navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Top nav</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/double-top-navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Double top</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/combo-navbar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Combo nav</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/navs-and-tabs/tabs.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tabs</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../components/offcanvas.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Offcanvas</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pictures" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pictures</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="pictures">
                        <li class="nav-item"><a class="nav-link" href="../components/pictures/avatar.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Avatar</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/pictures/images.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Images</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/pictures/figures.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Figures</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/pictures/hoverbox.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hoverbox</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/pictures/lightbox.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lightbox</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../components/progress-bar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Progress bar</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/placeholder.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Placeholder</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/pagination.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pagination</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/popovers.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Popovers</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/scrollspy.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scrollspy</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/search.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Search</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/sortable.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sortable</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/spinners.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spinners</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/timeline.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Timeline</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/toasts.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Toasts</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/tooltips.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tooltips</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/treeview.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Treeview</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../components/typed-text.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typed text</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#videos" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Videos</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="videos">
                        <li class="nav-item"><a class="nav-link" href="../components/videos/embed.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Embed</span></div>
                          </a><!-- more inner pages--></li>
                        <li class="nav-item"><a class="nav-link" href="../components/videos/plyr.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plyr</span></div>
                          </a><!-- more inner pages--></li>
                      </ul>
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#utilities" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text ps-1">Utilities</span></div>
                  </a>
                  <ul class="nav collapse" id="utilities">
                    <li class="nav-item"><a class="nav-link" href="../utilities/background.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/borders.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Borders</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/clearfix.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Clearfix</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/colors.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colors</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/colored-links.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colored links</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/display.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Display</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/flex.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Flex</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/float.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Float</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/focus-ring.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Focus ring</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/grid.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Grid</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/icon-link.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Icon link</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/overlayscrollbar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Overlay scrollbar</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/position.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Position</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/ratio.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Ratio</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/spacing.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spacing</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/sizing.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sizing</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/stretched-link.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stretched link</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/text-truncation.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Text truncation</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/typography.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typography</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/vertical-align.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical align</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/vertical-rule.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical rule</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/visibility.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Visibility</span></div>
                      </a><!-- more inner pages--></li>
                    <li class="nav-item"><a class="nav-link" href="../utilities/visually-hidden.html">
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
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../../app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/kanban.html">Kanban</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/followers.html">Followers</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/quick-links.html">Quick links</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/trainer-profile.html">Trainer profile</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/event-list.html">Event list</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/compose.html">Compose</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/invoice.html">Invoice</a>
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
                            <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../components/carousel/bootstrap.html">Bootstrap carousel</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/top-navbar.html">Top nav</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pagination.html">Pagination</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../components/sortable.html">Sortable</a><a class="nav-link py-1 link-600 fw-medium" href="../components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../components/videos/plyr.html">Plyr</a></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/visibility.html">Visibility</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../tables/bulk-select.html">Bulk select</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                            <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/how-to-use.html">How to use</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/validation.html">Validation</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column pt-xxl-1">
                            <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="material-icons.html">Material icons</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../maps/leaflet-map.html">Leaflet map</a>
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
              <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
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
                  <div class="card-footer text-center border-top"><a class="card-link d-block" href="../../app/social/notifications.html">View all</a></div>
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
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../app/events/event-detail.html" target="_blank">
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
                      <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../../app/events/event-detail.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs-11"></span>
                          <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs-10 px-x1 py-1 hover-primary" href="../../app/e-commerce/customers.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs-11"></span>
                          <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs-11" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>
                      <hr class="text-200 dark__text-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-x1 py-1 fs-9" href="../../app/e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                          <div class="flex-1 fs-10 title">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-x1 py-1 fs-9" href="../../app/events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                          <div class="flex-1 fs-10 title">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-x1 py-1 fs-9" href="../../app/e-commerce/product/product-grid.html">
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
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
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
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="../../app/social/notifications.html">View all</a></div>
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
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../app/events/event-detail.html" target="_blank">
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
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../../app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/kanban.html">Kanban</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/social/followers.html">Followers</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Support Desk</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/table-view.html">Table view</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/card-view.html">Card view</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/contacts.html">Contacts</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/contact-details.html">Contact details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/tickets-preview.html">Tickets preview</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/support-desk/quick-links.html">Quick links</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Learning</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-list.html">Course list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-grid.html">Course grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/course-details.html">Course details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/course/create-a-course.html">Create a course</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/student-overview.html">Student overview</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-learning/trainer-profile.html">Trainer profile</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/events/event-list.html">Event list</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/email/compose.html">Compose</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/product/add-product.html">Add product</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../../app/e-commerce/invoice.html">Invoice</a>
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
                              <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../components/bottom-bar.html">Bottom bar<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../components/carousel/bootstrap.html">Bootstrap carousel</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../components/jquery-components.html">Jquery<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/vertical-navbar.html">Navbar vertical</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/top-navbar.html">Top nav</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/double-top-navbar.html">Double top<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/combo-navbar.html">Combo nav</a><a class="nav-link py-1 link-600 fw-medium" href="../components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../components/pagination.html">Pagination</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../components/sortable.html">Sortable</a><a class="nav-link py-1 link-600 fw-medium" href="../components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../components/timeline.html">Timeline</a><a class="nav-link py-1 link-600 fw-medium" href="../components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../components/videos/plyr.html">Plyr</a></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../utilities/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/focus-ring.html">Focus ring</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/icon-link.html">Icon link</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/overlayscrollbar.html">Overlay scrollbar</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/ratio.html">Ratio</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/vertical-rule.html">Vertical rule</a><a class="nav-link py-1 link-600 fw-medium" href="../utilities/visibility.html">Visibility</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../tables/bulk-select.html">Bulk select</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/d3js.html">D3js<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                              <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/gauge-charts.html">Gauge charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../charts/echarts/how-to-use.html">How to use</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/input-mask.html">Input mask</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/range-slider.html">Range slider</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../forms/validation.html">Validation</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column pt-xxl-1">
                              <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="material-icons.html">Material icons</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../maps/leaflet-map.html">Leaflet map</a>
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
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
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
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="../../app/social/notifications.html">View all</a></div>
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
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../../app/events/event-detail.html" target="_blank">
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
          <div class="card mb-3">
            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div><!--/.bg-holder-->
            <div class="card-body position-relative">
              <div class="row">
                <div class="col-lg-8">
                  <h3>Bootstrap Icons</h3>
                  <p class="mt-2">Free, high quality, open source icon library with over 1,300 icons. Include them anyway you like—SVGs, SVG sprite, or web fonts.</p><a class="btn btn-link ps-0 btn-sm" href="https://icons.getbootstrap.com/#usage" target="_blank">Bootstrap Icons Documentation<span class="fas fa-chevron-right ms-1 fs-11"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-0">CSS</h5>
            </div>
            <div class="card-body bg-body-tertiary"><pre class="scrollbar mt-2"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css&quot; /&gt;</code></pre>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="row flex-between-end">
                    <div class="col-auto align-self-center">
                      <h5 class="mb-0" data-anchor="data-anchor">Example</h5>
                      <p class="mb-0 pt-1 mt-2 mb-0">You can use these icons with color and font-size helper classes like the example bellow: </p>
                    </div>
                    <div class="col-auto ms-auto">
                      <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-98cbbf07-aa15-4c95-9adf-9e6b96219aa6" type="button" role="tab" aria-controls="dom-98cbbf07-aa15-4c95-9adf-9e6b96219aa6" aria-selected="true" id="tab-dom-98cbbf07-aa15-4c95-9adf-9e6b96219aa6">Preview</button><button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-935fcf4a-2f6e-404c-9511-5e485fcd9e7d" type="button" role="tab" aria-controls="dom-935fcf4a-2f6e-404c-9511-5e485fcd9e7d" aria-selected="false" id="tab-dom-935fcf4a-2f6e-404c-9511-5e485fcd9e7d">Code</button></div>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-body-tertiary">
                  <div class="tab-content">
                    <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-98cbbf07-aa15-4c95-9adf-9e6b96219aa6" id="dom-98cbbf07-aa15-4c95-9adf-9e6b96219aa6"><span class="bi-bell-fill text-danger fs-4"></span></div>
                    <div class="tab-pane code-tab-pane" role="tabpanel" aria-labelledby="tab-dom-935fcf4a-2f6e-404c-9511-5e485fcd9e7d" id="dom-935fcf4a-2f6e-404c-9511-5e485fcd9e7d"><pre class="scrollbar rounded-1" style="max-height:420px"><code class="language-html">&lt;span class=&quot;bi-bell-fill text-danger fs-4&quot;&gt;&lt;/span&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="row flex-between-end">
                    <div class="col-auto align-self-center">
                      <h5 class="mb-0" data-anchor="data-anchor">Example with indicator</h5>
                      <p class="mb-0 pt-1 mt-2 mb-0">You can use these icons with an indicator like the example bellow:</p>
                    </div>
                    <div class="col-auto ms-auto">
                      <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-d050f9b5-fc5e-470d-9885-9d5cbb335ceb" type="button" role="tab" aria-controls="dom-d050f9b5-fc5e-470d-9885-9d5cbb335ceb" aria-selected="true" id="tab-dom-d050f9b5-fc5e-470d-9885-9d5cbb335ceb">Preview</button><button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-4f2fa859-0d6e-426d-ae8f-61090e86a0ba" type="button" role="tab" aria-controls="dom-4f2fa859-0d6e-426d-ae8f-61090e86a0ba" aria-selected="false" id="tab-dom-4f2fa859-0d6e-426d-ae8f-61090e86a0ba">Code</button></div>
                    </div>
                  </div>
                </div>
                <div class="card-body bg-body-tertiary">
                  <div class="tab-content">
                    <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-d050f9b5-fc5e-470d-9885-9d5cbb335ceb" id="dom-d050f9b5-fc5e-470d-9885-9d5cbb335ceb">
                      <div class="d-inline-block notification-indicator notification-indicator-danger ms-3"><span class="bi-bell-fill fs-4"></span></div>
                    </div>
                    <div class="tab-pane code-tab-pane" role="tabpanel" aria-labelledby="tab-dom-4f2fa859-0d6e-426d-ae8f-61090e86a0ba" id="dom-4f2fa859-0d6e-426d-ae8f-61090e86a0ba"><pre class="scrollbar rounded-1" style="max-height:420px"><code class="language-html">&lt;div class=&quot;d-inline-block notification-indicator notification-indicator-danger ms-3&quot;&gt;&lt;span class=&quot;bi-bell-fill fs-4&quot;&gt;&lt;/span&gt;&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3" data-list='{"valueNames":["icon-list-item"]}'>
            <div class="card-header">
              <div class="row flex-between-center">
                <div class="col">
                  <h5 class="mb-0">Icons List</h5>
                </div>
                <div class="col-auto"><input class="form-control rounded-pill search" type="search" placeholder="Search" /></div>
              </div>
            </div>
            <div class="card-body bg-body-tertiary">
              <div class="row list" id="icon-list">
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">alarm</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-alarm"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="alarm" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">alarm-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-alarm-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="alarm-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">align-bottom</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-align-bottom"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="align-bottom" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">align-center</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-align-center"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="align-center" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">align-end</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-align-end"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="align-end" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">align-middle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-align-middle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="align-middle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">align-start</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-align-start"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="align-start" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">align-top</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-align-top"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="align-top" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-alt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">app</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-app"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="app" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">app-indicator</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-app-indicator"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="app-indicator" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">archive</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-archive"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="archive" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">archive-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-archive-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="archive-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-90deg-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-90deg-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-90deg-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-90deg-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-90deg-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-90deg-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-90deg-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-90deg-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-90deg-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-90deg-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-90deg-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-90deg-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-bar-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-bar-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-bar-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-bar-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-bar-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-bar-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-bar-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-bar-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-bar-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-bar-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-bar-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-bar-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-clockwise</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-clockwise"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-clockwise" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-counterclockwise</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-counterclockwise"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-counterclockwise" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-left-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-left-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-left-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-left-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-left-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-left-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-left-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-left-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-left-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-left-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-left-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-left-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-right-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-right-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-right-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-right-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-right-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-right-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-right-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-right-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-right-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-right-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-right-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-right-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-short</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-short"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-short" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-down-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-down-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-down-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-left-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-left-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-left-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-left-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-left-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-left-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-left-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-left-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-left-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-left-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-left-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-left-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-left-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-left-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-left-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-left-short</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-left-short"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-left-short" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-repeat</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-repeat"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-repeat" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-return-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-return-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-return-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-return-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-return-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-return-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-right-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-right-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-right-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-right-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-right-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-right-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-right-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-right-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-right-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-right-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-right-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-right-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-right-short</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-right-short"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-right-short" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-left-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-left-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-left-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-left-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-left-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-left-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-left-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-left-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-left-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-left-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-left-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-left-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-right-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-right-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-right-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-right-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-right-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-right-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-right-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-right-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-right-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-right-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-right-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-right-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrow-up-short</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrow-up-short"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrow-up-short" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrows-angle-contract</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrows-angle-contract"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrows-angle-contract" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrows-angle-expand</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrows-angle-expand"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrows-angle-expand" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrows-collapse</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrows-collapse"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrows-collapse" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrows-expand</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrows-expand"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrows-expand" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrows-fullscreen</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrows-fullscreen"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrows-fullscreen" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">arrows-move</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-arrows-move"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="arrows-move" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">aspect-ratio</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-aspect-ratio"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="aspect-ratio" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">aspect-ratio-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-aspect-ratio-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="aspect-ratio-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">asterisk</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-asterisk"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="asterisk" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">at</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-at"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="at" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">award</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-award"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="award" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">award-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-award-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="award-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">back</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-back"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="back" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">backspace</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-backspace"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="backspace" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">backspace-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-backspace-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="backspace-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">backspace-reverse</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-backspace-reverse"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="backspace-reverse" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">backspace-reverse-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-backspace-reverse-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="backspace-reverse-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-3d</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-3d"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-3d" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-3d-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-3d-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-3d-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-4k</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-4k"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-4k" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-4k-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-4k-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-4k-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-8k</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-8k"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-8k" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-8k-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-8k-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-8k-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-ad</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-ad"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-ad" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-ad-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-ad-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-ad-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-ar</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-ar"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-ar" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-ar-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-ar-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-ar-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-cc</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-cc"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-cc" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-cc-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-cc-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-cc-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-hd</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-hd"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-hd" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-hd-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-hd-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-hd-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-tm</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-tm"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-tm" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-tm-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-tm-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-tm-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-vo</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-vo"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-vo" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-vo-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-vo-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-vo-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-vr</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-vr"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-vr" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-vr-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-vr-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-vr-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-wc</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-wc"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-wc" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">badge-wc-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-badge-wc-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="badge-wc-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bag</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bag"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bag" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bag-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bag-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bag-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bag-check-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bag-check-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bag-check-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bag-dash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bag-dash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bag-dash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bag-dash-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bag-dash-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bag-dash-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bag-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bag-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bag-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bag-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bag-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bag-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bag-plus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bag-plus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bag-plus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bag-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bag-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bag-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bag-x-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bag-x-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bag-x-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bar-chart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bar-chart"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bar-chart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bar-chart-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bar-chart-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bar-chart-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bar-chart-line</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bar-chart-line"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bar-chart-line" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bar-chart-line-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bar-chart-line-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bar-chart-line-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bar-chart-steps</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bar-chart-steps"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bar-chart-steps" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">basket</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-basket"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="basket" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">basket-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-basket-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="basket-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">basket2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-basket2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="basket2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">basket2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-basket2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="basket2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">basket3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-basket3"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="basket3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">basket3-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-basket3-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="basket3-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">battery</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-battery"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="battery" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">battery-charging</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-battery-charging"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="battery-charging" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">battery-full</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-battery-full"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="battery-full" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">battery-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-battery-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="battery-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bell</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bell"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bell" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bell-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bell-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bell-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bezier</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bezier"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bezier" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bezier2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bezier2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bezier2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bicycle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bicycle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bicycle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">binoculars</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-binoculars"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="binoculars" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">binoculars-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-binoculars-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="binoculars-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">blockquote-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-blockquote-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="blockquote-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">blockquote-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-blockquote-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="blockquote-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">book</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-book"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="book" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">book-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-book-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="book-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">book-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-book-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="book-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-check-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-check-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-check-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-dash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-dash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-dash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-dash-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-dash-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-dash-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-heart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-heart"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-heart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-heart-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-heart-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-heart-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-plus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-plus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-plus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-star</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-star"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-star" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-star-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-star-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-star-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmark-x-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmark-x-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmark-x-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmarks</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmarks"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmarks" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookmarks-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookmarks-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookmarks-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bookshelf</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bookshelf"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bookshelf" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bootstrap</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bootstrap"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bootstrap" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bootstrap-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bootstrap-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bootstrap-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bootstrap-reboot</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bootstrap-reboot"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bootstrap-reboot" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">border</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-border"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="border" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">border-all</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-border-all"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="border-all" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">border-bottom</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-border-bottom"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="border-bottom" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">border-center</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-border-center"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="border-center" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">border-inner</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-border-inner"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="border-inner" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">border-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-border-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="border-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">border-middle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-border-middle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="border-middle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">border-outer</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-border-outer"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="border-outer" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">border-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-border-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="border-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">border-style</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-border-style"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="border-style" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">border-top</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-border-top"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="border-top" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">border-width</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-border-width"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="border-width" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bounding-box</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bounding-box"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bounding-box" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bounding-box-circles</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bounding-box-circles"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bounding-box-circles" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-down-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-down-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-down-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-down-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-down-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-down-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-in-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-in-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-in-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-in-down-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-in-down-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-in-down-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-in-down-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-in-down-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-in-down-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-in-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-in-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-in-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-in-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-in-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-in-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-in-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-in-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-in-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-in-up-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-in-up-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-in-up-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-in-up-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-in-up-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-in-up-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-up-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-up-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-up-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-arrow-up-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-arrow-up-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-arrow-up-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">box-seam</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-box-seam"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="box-seam" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">braces</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-braces"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="braces" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bricks</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bricks"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bricks" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">briefcase</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-briefcase"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="briefcase" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">briefcase-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-briefcase-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="briefcase-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness-alt-high</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-brightness-alt-high"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness-alt-high" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness-alt-high-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-brightness-alt-high-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness-alt-high-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness-alt-low</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-brightness-alt-low"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness-alt-low" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness-alt-low-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-brightness-alt-low-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness-alt-low-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness-high</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-brightness-high"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness-high" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness-high-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-brightness-high-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness-high-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness-low</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-brightness-low"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness-low" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brightness-low-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-brightness-low-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brightness-low-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">broadcast</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-broadcast"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="broadcast" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">broadcast-pin</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-broadcast-pin"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="broadcast-pin" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brush</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-brush"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brush" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">brush-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-brush-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="brush-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bucket</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bucket"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bucket" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bucket-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bucket-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bucket-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bug</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bug"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bug" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bug-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bug-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bug-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">building</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-building"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="building" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">bullseye</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-bullseye"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="bullseye" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calculator</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calculator"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calculator" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calculator-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calculator-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calculator-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-check-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-check-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-check-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-date</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-date"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-date" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-date-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-date-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-date-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-day</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-day"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-day" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-day-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-day-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-day-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-event</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-event"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-event" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-event-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-event-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-event-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-minus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-minus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-minus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-month</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-month"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-month" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-month-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-month-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-month-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-plus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-plus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-plus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-range</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-range"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-range" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-range-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-range-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-range-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-week</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-week"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-week" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-week-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-week-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-week-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar-x-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar-x-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar-x-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-check-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-check-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-check-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-date</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-date"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-date" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-date-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-date-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-date-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-day</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-day"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-day" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-day-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-day-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-day-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-event</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-event"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-event" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-event-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-event-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-event-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-minus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-minus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-minus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-month</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-month"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-month" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-month-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-month-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-month-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-plus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-plus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-plus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-range</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-range"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-range" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-range-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-range-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-range-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-week</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-week"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-week" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-week-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-week-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-week-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar2-x-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar2-x-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar2-x-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar3"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar3-event</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar3-event"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar3-event" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar3-event-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar3-event-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar3-event-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar3-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar3-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar3-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar3-range</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar3-range"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar3-range" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar3-range-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar3-range-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar3-range-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar3-week</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar3-week"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar3-week" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar3-week-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar3-week-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar3-week-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar4</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar4"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar4" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar4-event</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar4-event"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar4-event" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar4-range</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar4-range"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar4-range" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">calendar4-week</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-calendar4-week"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="calendar4-week" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-camera"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-camera2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-camera-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera-reels</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-camera-reels"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera-reels" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera-reels-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-camera-reels-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera-reels-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera-video</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-camera-video"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera-video" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera-video-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-camera-video-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera-video-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera-video-off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-camera-video-off"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera-video-off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">camera-video-off-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-camera-video-off-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="camera-video-off-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">capslock</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-capslock"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="capslock" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">capslock-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-capslock-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="capslock-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">card-checklist</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-card-checklist"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="card-checklist" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">card-heading</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-card-heading"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="card-heading" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">card-image</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-card-image"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="card-image" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">card-list</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-card-list"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="card-list" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">card-text</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-card-text"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="card-text" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-down-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-down-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-down-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-down-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-down-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-down-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-down-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-down-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-down-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-left-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-left-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-left-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-left-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-left-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-left-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-left-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-left-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-left-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-right-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-right-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-right-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-right-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-right-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-right-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-right-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-right-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-right-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-up-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-up-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-up-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-up-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-up-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-up-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">caret-up-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-caret-up-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="caret-up-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart-check-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart-check-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart-check-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart-dash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart-dash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart-dash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart-dash-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart-dash-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart-dash-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart-plus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart-plus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart-plus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart-x-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart-x-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart-x-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart3"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cart4</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cart4"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cart4" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cash-stack</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cash-stack"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cash-stack" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cast</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cast"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cast" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-dots</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-dots"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-dots" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-dots-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-dots-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-dots-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-left-dots</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-left-dots"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-left-dots" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-left-dots-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-left-dots-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-left-dots-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-left-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-left-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-left-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-left-quote</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-left-quote"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-left-quote" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-left-quote-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-left-quote-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-left-quote-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-left-text</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-left-text"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-left-text" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-left-text-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-left-text-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-left-text-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-quote</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-quote"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-quote" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-quote-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-quote-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-quote-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-right-dots</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-right-dots"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-right-dots" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-right-dots-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-right-dots-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-right-dots-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-right-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-right-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-right-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-right-quote</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-right-quote"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-right-quote" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-right-quote-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-right-quote-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-right-quote-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-right-text</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-right-text"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-right-text" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-right-text-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-right-text-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-right-text-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-square-dots</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-square-dots"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-square-dots" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-square-dots-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-square-dots-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-square-dots-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-square-quote</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-square-quote"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-square-quote" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-square-quote-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-square-quote-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-square-quote-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-square-text</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-square-text"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-square-text" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-square-text-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-square-text-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-square-text-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-text</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-text"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-text" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chat-text-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chat-text-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chat-text-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check-all</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-check-all"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check-all" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-check-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-check-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-check-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-check-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-check2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check2-all</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-check2-all"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check2-all" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check2-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-check2-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check2-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">check2-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-check2-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="check2-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-bar-contract</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-bar-contract"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-bar-contract" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-bar-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-bar-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-bar-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-bar-expand</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-bar-expand"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-bar-expand" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-bar-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-bar-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-bar-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-bar-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-bar-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-bar-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-bar-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-bar-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-bar-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-compact-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-compact-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-compact-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-compact-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-compact-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-compact-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-compact-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-compact-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-compact-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-compact-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-compact-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-compact-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-contract</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-contract"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-contract" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-double-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-double-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-double-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-double-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-double-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-double-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-double-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-double-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-double-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-double-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-double-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-double-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-expand</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-expand"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-expand" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">chevron-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-chevron-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="chevron-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">circle-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-circle-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="circle-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">slash-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-slash-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="slash-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">circle-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-circle-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="circle-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clipboard</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-clipboard"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clipboard" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clipboard-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-clipboard-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clipboard-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clipboard-data</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-clipboard-data"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clipboard-data" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clipboard-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-clipboard-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clipboard-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clipboard-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-clipboard-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clipboard-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clipboard-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-clipboard-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clipboard-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clock</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-clock"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clock" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clock-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-clock-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clock-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clock-history</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-clock-history"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clock-history" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-arrow-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-arrow-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-arrow-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-arrow-down-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-arrow-down-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-arrow-down-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-arrow-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-arrow-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-arrow-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-arrow-up-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-arrow-up-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-arrow-up-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-check-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-check-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-check-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-download</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-download"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-download" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-download-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-download-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-download-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-drizzle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-drizzle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-drizzle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-drizzle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-drizzle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-drizzle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-fog</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-fog"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-fog" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-fog-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-fog-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-fog-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-fog2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-fog2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-fog2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-fog2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-fog2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-fog2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-hail</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-hail"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-hail" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-hail-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-hail-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-hail-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-haze</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-haze"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-haze" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-haze-1</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-haze-1"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-haze-1" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-haze-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-haze-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-haze-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-haze2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-haze2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-haze2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-lightning</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-lightning"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-lightning" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-lightning-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-lightning-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-lightning-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-lightning-rain</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-lightning-rain"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-lightning-rain" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-lightning-rain-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-lightning-rain-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-lightning-rain-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-minus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-minus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-minus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-moon</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-moon"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-moon" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-moon-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-moon-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-moon-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-plus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-plus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-plus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-rain</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-rain"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-rain" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-rain-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-rain-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-rain-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-rain-heavy</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-rain-heavy"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-rain-heavy" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-rain-heavy-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-rain-heavy-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-rain-heavy-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-slash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-slash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-slash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-slash-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-slash-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-slash-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-sleet</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-sleet"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-sleet" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-sleet-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-sleet-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-sleet-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-snow</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-snow"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-snow" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-snow-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-snow-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-snow-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-sun</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-sun"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-sun" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-sun-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-sun-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-sun-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-upload</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-upload"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-upload" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloud-upload-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloud-upload-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloud-upload-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clouds</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-clouds"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clouds" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">clouds-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-clouds-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="clouds-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloudy</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloudy"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloudy" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cloudy-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cloudy-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cloudy-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">code</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-code"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="code" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">code-slash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-code-slash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="code-slash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">code-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-code-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="code-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">collection</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-collection"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="collection" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">collection-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-collection-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="collection-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">collection-play</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-collection-play"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="collection-play" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">collection-play-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-collection-play-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="collection-play-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">columns</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-columns"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="columns" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">columns-gap</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-columns-gap"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="columns-gap" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">command</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-command"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="command" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">compass</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-compass"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="compass" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">compass-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-compass-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="compass-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cone</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cone"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cone" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cone-striped</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cone-striped"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cone-striped" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">controller</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-controller"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="controller" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cpu</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cpu"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cpu" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cpu-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cpu-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cpu-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">credit-card</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-credit-card"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="credit-card" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">credit-card-2-back</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-credit-card-2-back"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="credit-card-2-back" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">credit-card-2-back-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-credit-card-2-back-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="credit-card-2-back-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">credit-card-2-front</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-credit-card-2-front"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="credit-card-2-front" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">credit-card-2-front-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-credit-card-2-front-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="credit-card-2-front-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">credit-card-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-credit-card-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="credit-card-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">crop</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-crop"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="crop" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cup</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cup"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cup" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cup-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cup-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cup-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cup-straw</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cup-straw"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cup-straw" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cursor</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cursor"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cursor" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cursor-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cursor-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cursor-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">cursor-text</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-cursor-text"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="cursor-text" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dash-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dash-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dash-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dash-circle-dotted</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dash-circle-dotted"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dash-circle-dotted" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dash-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dash-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dash-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dash-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dash-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dash-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dash-square-dotted</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dash-square-dotted"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dash-square-dotted" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dash-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dash-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dash-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">diagram-2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-diagram-2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="diagram-2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">diagram-2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-diagram-2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="diagram-2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">diagram-3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-diagram-3"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="diagram-3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">diagram-3-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-diagram-3-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="diagram-3-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">diamond</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-diamond"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="diamond" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">diamond-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-diamond-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="diamond-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">diamond-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-diamond-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="diamond-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dice-1</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dice-1"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dice-1" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dice-1-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dice-1-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dice-1-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dice-2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dice-2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dice-2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dice-2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dice-2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dice-2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dice-3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dice-3"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dice-3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dice-3-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dice-3-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dice-3-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dice-4</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dice-4"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dice-4" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dice-4-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dice-4-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dice-4-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dice-5</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dice-5"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dice-5" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dice-5-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dice-5-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dice-5-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dice-6</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dice-6"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dice-6" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dice-6-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dice-6-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dice-6-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">disc</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-disc"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="disc" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">disc-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-disc-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="disc-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">discord</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-discord"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="discord" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">display</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-display"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="display" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">display-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-display-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="display-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">distribute-horizontal</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-distribute-horizontal"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="distribute-horizontal" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">distribute-vertical</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-distribute-vertical"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="distribute-vertical" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">door-closed</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-door-closed"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="door-closed" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">door-closed-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-door-closed-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="door-closed-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">door-open</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-door-open"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="door-open" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">door-open-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-door-open-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="door-open-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">dot</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-dot"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="dot" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">download</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-download"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="download" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">droplet</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-droplet"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="droplet" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">droplet-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-droplet-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="droplet-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">droplet-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-droplet-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="droplet-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">earbuds</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-earbuds"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="earbuds" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">easel</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-easel"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="easel" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">easel-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-easel-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="easel-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">egg</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-egg"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="egg" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">egg-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-egg-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="egg-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">egg-fried</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-egg-fried"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="egg-fried" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">eject</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-eject"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="eject" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">eject-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-eject-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="eject-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-angry</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-angry"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-angry" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-angry-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-angry-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-angry-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-dizzy</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-dizzy"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-dizzy" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-dizzy-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-dizzy-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-dizzy-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-expressionless</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-expressionless"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-expressionless" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-expressionless-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-expressionless-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-expressionless-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-frown</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-frown"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-frown" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-frown-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-frown-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-frown-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-heart-eyes</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-heart-eyes"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-heart-eyes" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-heart-eyes-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-heart-eyes-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-heart-eyes-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-laughing</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-laughing"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-laughing" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-laughing-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-laughing-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-laughing-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-neutral</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-neutral"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-neutral" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-neutral-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-neutral-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-neutral-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-smile</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-smile"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-smile" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-smile-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-smile-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-smile-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-smile-upside-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-smile-upside-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-smile-upside-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-smile-upside-down-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-smile-upside-down-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-smile-upside-down-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-sunglasses</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-sunglasses"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-sunglasses" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-sunglasses-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-sunglasses-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-sunglasses-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-wink</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-wink"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-wink" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">emoji-wink-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-emoji-wink-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="emoji-wink-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">envelope</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-envelope"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="envelope" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">envelope-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-envelope-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="envelope-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">envelope-open</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-envelope-open"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="envelope-open" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">envelope-open-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-envelope-open-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="envelope-open-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">eraser</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-eraser"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="eraser" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">eraser-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-eraser-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="eraser-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exclamation</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-exclamation"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exclamation" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exclamation-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-exclamation-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exclamation-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exclamation-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-exclamation-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exclamation-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exclamation-diamond</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-exclamation-diamond"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exclamation-diamond" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exclamation-diamond-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-exclamation-diamond-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exclamation-diamond-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exclamation-octagon</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-exclamation-octagon"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exclamation-octagon" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exclamation-octagon-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-exclamation-octagon-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exclamation-octagon-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exclamation-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-exclamation-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exclamation-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exclamation-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-exclamation-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exclamation-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exclamation-triangle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-exclamation-triangle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exclamation-triangle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exclamation-triangle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-exclamation-triangle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exclamation-triangle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">exclude</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-exclude"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="exclude" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">eye</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-eye"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="eye" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">eye-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-eye-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="eye-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">eye-slash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-eye-slash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="eye-slash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">eye-slash-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-eye-slash-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="eye-slash-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">eyedropper</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-eyedropper"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="eyedropper" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">eyeglasses</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-eyeglasses"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="eyeglasses" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">facebook</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-facebook"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="facebook" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-arrow-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-arrow-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-arrow-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-arrow-down-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-arrow-down-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-arrow-down-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-arrow-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-arrow-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-arrow-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-arrow-up-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-arrow-up-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-arrow-up-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-bar-graph</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-bar-graph"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-bar-graph" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-bar-graph-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-bar-graph-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-bar-graph-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-binary</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-binary"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-binary" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-binary-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-binary-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-binary-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-break</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-break"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-break" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-break-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-break-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-break-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-check-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-check-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-check-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-code</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-code"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-code" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-code-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-code-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-code-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-diff</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-diff"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-diff" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-diff-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-diff-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-diff-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-arrow-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-arrow-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-arrow-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-arrow-down-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-arrow-down-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-arrow-down-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-arrow-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-arrow-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-arrow-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-arrow-up-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-arrow-up-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-arrow-up-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-bar-graph</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-bar-graph"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-bar-graph" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-bar-graph-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-bar-graph-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-bar-graph-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-binary</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-binary"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-binary" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-binary-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-binary-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-binary-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-break</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-break"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-break" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-break-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-break-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-break-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-check-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-check-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-check-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-code</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-code"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-code" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-code-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-code-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-code-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-diff</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-diff"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-diff" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-diff-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-diff-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-diff-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-easel</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-easel"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-easel" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-easel-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-easel-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-easel-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-excel</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-excel"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-excel" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-excel-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-excel-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-excel-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-font</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-font"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-font" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-font-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-font-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-font-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-image</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-image"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-image" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-image-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-image-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-image-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-lock</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-lock"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-lock" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-lock-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-lock-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-lock-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-lock2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-lock2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-lock2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-lock2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-lock2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-lock2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-medical</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-medical"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-medical" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-medical-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-medical-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-medical-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-minus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-minus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-minus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-music</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-music"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-music" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-music-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-music-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-music-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-person</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-person"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-person" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-person-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-person-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-person-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-play</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-play"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-play" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-play-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-play-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-play-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-plus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-plus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-plus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-post</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-post"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-post" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-post-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-post-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-post-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-ppt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-ppt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-ppt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-ppt-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-ppt-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-ppt-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-richtext</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-richtext"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-richtext" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-richtext-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-richtext-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-richtext-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-ruled</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-ruled"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-ruled" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-ruled-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-ruled-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-ruled-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-slides</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-slides"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-slides" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-slides-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-slides-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-slides-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-spreadsheet</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-spreadsheet"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-spreadsheet" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-spreadsheet-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-spreadsheet-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-spreadsheet-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-text</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-text"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-text" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-text-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-text-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-text-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-word</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-word"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-word" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-word-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-word-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-word-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-x-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-x-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-x-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-zip</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-zip"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-zip" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-earmark-zip-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-earmark-zip-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-earmark-zip-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-easel</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-easel"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-easel" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-easel-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-easel-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-easel-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-excel</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-excel"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-excel" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-excel-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-excel-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-excel-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-font</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-font"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-font" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-font-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-font-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-font-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-image</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-image"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-image" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-image-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-image-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-image-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-lock</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-lock"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-lock" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-lock-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-lock-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-lock-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-lock2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-lock2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-lock2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-lock2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-lock2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-lock2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-medical</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-medical"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-medical" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-medical-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-medical-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-medical-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-minus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-minus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-minus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-music</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-music"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-music" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-music-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-music-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-music-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-person</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-person"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-person" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-person-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-person-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-person-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-play</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-play"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-play" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-play-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-play-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-play-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-plus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-plus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-plus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-post</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-post"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-post" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-post-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-post-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-post-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-ppt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-ppt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-ppt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-ppt-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-ppt-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-ppt-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-richtext</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-richtext"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-richtext" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-richtext-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-richtext-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-richtext-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-ruled</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-ruled"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-ruled" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-ruled-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-ruled-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-ruled-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-slides</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-slides"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-slides" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-slides-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-slides-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-slides-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-spreadsheet</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-spreadsheet"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-spreadsheet" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-spreadsheet-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-spreadsheet-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-spreadsheet-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-text</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-text"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-text" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-text-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-text-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-text-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-word</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-word"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-word" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-word-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-word-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-word-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-x-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-x-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-x-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-zip</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-zip"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-zip" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">file-zip-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-file-zip-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="file-zip-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">files</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-files"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="files" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">files-alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-files-alt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="files-alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">film</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-film"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="film" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-filter"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-filter-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-filter-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-filter-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-filter-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-filter-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">filter-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-filter-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="filter-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flag</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-flag"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flag" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flag-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-flag-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flag-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flower1</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-flower1"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flower1" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flower2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-flower2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flower2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">flower3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-flower3"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="flower3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">folder</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-folder"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="folder" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">folder-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-folder-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="folder-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">folder-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-folder-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="folder-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">folder-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-folder-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="folder-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">folder-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-folder-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="folder-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">folder-symlink</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-folder-symlink"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="folder-symlink" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">folder-symlink-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-folder-symlink-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="folder-symlink-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">folder-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-folder-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="folder-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">folder2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-folder2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="folder2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">folder2-open</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-folder2-open"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="folder2-open" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">fonts</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-fonts"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="fonts" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">forward</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-forward"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="forward" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">forward-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-forward-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="forward-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">front</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-front"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="front" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">fullscreen</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-fullscreen"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="fullscreen" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">fullscreen-exit</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-fullscreen-exit"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="fullscreen-exit" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">funnel</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-funnel"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="funnel" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">funnel-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-funnel-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="funnel-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">gear</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-gear"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="gear" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">gear-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-gear-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="gear-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">gear-wide</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-gear-wide"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="gear-wide" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">gear-wide-connected</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-gear-wide-connected"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="gear-wide-connected" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">gem</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-gem"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="gem" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">geo</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-geo"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="geo" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">geo-alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-geo-alt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="geo-alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">geo-alt-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-geo-alt-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="geo-alt-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">geo-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-geo-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="geo-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">gift</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-gift"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="gift" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">gift-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-gift-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="gift-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">github</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-github"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="github" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">globe</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-globe"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="globe" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">globe2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-globe2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="globe2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">google</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-google"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="google" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">graph-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-graph-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="graph-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">graph-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-graph-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="graph-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grid</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-grid"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grid" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grid-1x2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-grid-1x2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grid-1x2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grid-1x2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-grid-1x2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grid-1x2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grid-3x2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-grid-3x2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grid-3x2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grid-3x2-gap</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-grid-3x2-gap"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grid-3x2-gap" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grid-3x2-gap-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-grid-3x2-gap-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grid-3x2-gap-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grid-3x3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-grid-3x3"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grid-3x3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grid-3x3-gap</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-grid-3x3-gap"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grid-3x3-gap" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grid-3x3-gap-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-grid-3x3-gap-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grid-3x3-gap-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grid-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-grid-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grid-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grip-horizontal</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-grip-horizontal"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grip-horizontal" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">grip-vertical</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-grip-vertical"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="grip-vertical" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hammer</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hammer"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hammer" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hand-index</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hand-index"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hand-index" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hand-index-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hand-index-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hand-index-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hand-index-thumb</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hand-index-thumb"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hand-index-thumb" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hand-index-thumb-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hand-index-thumb-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hand-index-thumb-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hand-thumbs-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hand-thumbs-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hand-thumbs-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hand-thumbs-down-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hand-thumbs-down-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hand-thumbs-down-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hand-thumbs-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hand-thumbs-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hand-thumbs-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hand-thumbs-up-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hand-thumbs-up-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hand-thumbs-up-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">handbag</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-handbag"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="handbag" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">handbag-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-handbag-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="handbag-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdd</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hdd"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdd" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdd-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hdd-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdd-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdd-network</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hdd-network"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdd-network" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdd-network-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hdd-network-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdd-network-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdd-rack</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hdd-rack"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdd-rack" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdd-rack-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hdd-rack-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdd-rack-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdd-stack</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hdd-stack"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdd-stack" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hdd-stack-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hdd-stack-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hdd-stack-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">headphones</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-headphones"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="headphones" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">headset</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-headset"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="headset" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">heart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-heart"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="heart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">heart-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-heart-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="heart-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">heart-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-heart-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="heart-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">heptagon</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-heptagon"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="heptagon" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">heptagon-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-heptagon-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="heptagon-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">heptagon-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-heptagon-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="heptagon-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hexagon</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hexagon"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hexagon" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hexagon-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hexagon-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hexagon-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hexagon-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hexagon-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hexagon-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hourglass</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hourglass"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hourglass" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hourglass-bottom</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hourglass-bottom"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hourglass-bottom" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hourglass-split</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hourglass-split"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hourglass-split" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hourglass-top</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hourglass-top"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hourglass-top" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">house</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-house"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="house" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">house-door</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-house-door"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="house-door" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">house-door-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-house-door-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="house-door-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">house-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-house-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="house-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hr</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hr"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hr" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">hurricane</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-hurricane"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="hurricane" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">image</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-image"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="image" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">image-alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-image-alt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="image-alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">image-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-image-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="image-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">images</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-images"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="images" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">inbox</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-inbox"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="inbox" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">inbox-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-inbox-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="inbox-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">inboxes-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-inboxes-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="inboxes-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">inboxes</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-inboxes"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="inboxes" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">info</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-info"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="info" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">info-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-info-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="info-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">info-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-info-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="info-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">info-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-info-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="info-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">info-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-info-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="info-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">input-cursor</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-input-cursor"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="input-cursor" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">input-cursor-text</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-input-cursor-text"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="input-cursor-text" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">instagram</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-instagram"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="instagram" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">intersect</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-intersect"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="intersect" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-album</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-album"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-album" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-arrow-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-arrow-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-arrow-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-arrow-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-arrow-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-arrow-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-bookmark</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-bookmark"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-bookmark" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-bookmark-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-bookmark-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-bookmark-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-code</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-code"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-code" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-medical</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-medical"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-medical" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-richtext</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-richtext"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-richtext" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-text</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-text"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-text" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journal-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journal-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journal-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">journals</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-journals"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="journals" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">joystick</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-joystick"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="joystick" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">justify</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-justify"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="justify" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">justify-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-justify-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="justify-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">justify-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-justify-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="justify-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">kanban</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-kanban"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="kanban" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">kanban-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-kanban-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="kanban-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">key</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-key"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="key" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">key-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-key-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="key-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">keyboard</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-keyboard"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="keyboard" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">keyboard-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-keyboard-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="keyboard-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">ladder</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-ladder"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="ladder" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lamp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-lamp"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lamp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lamp-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-lamp-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lamp-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">laptop</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-laptop"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="laptop" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">laptop-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-laptop-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="laptop-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layer-backward</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layer-backward"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layer-backward" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layer-forward</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layer-forward"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layer-forward" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layers</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layers"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layers" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layers-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layers-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layers-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layers-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layers-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layers-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layout-sidebar</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layout-sidebar"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layout-sidebar" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layout-sidebar-inset-reverse</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layout-sidebar-inset-reverse"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layout-sidebar-inset-reverse" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layout-sidebar-inset</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layout-sidebar-inset"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layout-sidebar-inset" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layout-sidebar-reverse</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layout-sidebar-reverse"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layout-sidebar-reverse" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layout-split</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layout-split"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layout-split" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layout-text-sidebar</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layout-text-sidebar"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layout-text-sidebar" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layout-text-sidebar-reverse</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layout-text-sidebar-reverse"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layout-text-sidebar-reverse" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layout-text-window</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layout-text-window"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layout-text-window" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layout-text-window-reverse</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layout-text-window-reverse"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layout-text-window-reverse" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layout-three-columns</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layout-three-columns"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layout-three-columns" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">layout-wtf</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-layout-wtf"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="layout-wtf" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">life-preserver</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-life-preserver"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="life-preserver" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lightbulb</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-lightbulb"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lightbulb" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lightbulb-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-lightbulb-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lightbulb-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lightbulb-off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-lightbulb-off"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lightbulb-off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lightbulb-off-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-lightbulb-off-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lightbulb-off-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lightning</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-lightning"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lightning" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lightning-charge</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-lightning-charge"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lightning-charge" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lightning-charge-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-lightning-charge-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lightning-charge-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lightning-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-lightning-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lightning-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">link</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-link"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="link" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">link-45deg</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-link-45deg"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="link-45deg" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">linkedin</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-linkedin"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="linkedin" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">list</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-list"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="list" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">list-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-list-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="list-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">list-nested</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-list-nested"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="list-nested" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">list-ol</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-list-ol"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="list-ol" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">list-stars</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-list-stars"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="list-stars" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">list-task</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-list-task"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="list-task" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">list-ul</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-list-ul"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="list-ul" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lock</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-lock"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lock" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">lock-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-lock-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="lock-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mailbox</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mailbox"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mailbox" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mailbox2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mailbox2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mailbox2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">map</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-map"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="map" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">map-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-map-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="map-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">markdown</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-markdown"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="markdown" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">markdown-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-markdown-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="markdown-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mask</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mask"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mask" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">megaphone</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-megaphone"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="megaphone" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">megaphone-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-megaphone-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="megaphone-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">menu-app</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-menu-app"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="menu-app" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">menu-app-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-menu-app-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="menu-app-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">menu-button</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-menu-button"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="menu-button" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">menu-button-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-menu-button-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="menu-button-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">menu-button-wide</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-menu-button-wide"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="menu-button-wide" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">menu-button-wide-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-menu-button-wide-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="menu-button-wide-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">menu-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-menu-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="menu-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">menu-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-menu-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="menu-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mic</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mic"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mic" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mic-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mic-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mic-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mic-mute</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mic-mute"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mic-mute" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mic-mute-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mic-mute-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mic-mute-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">minecart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-minecart"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="minecart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">minecart-loaded</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-minecart-loaded"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="minecart-loaded" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">moisture</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-moisture"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="moisture" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">moon</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-moon"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="moon" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">moon-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-moon-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="moon-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">moon-stars</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-moon-stars"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="moon-stars" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">moon-stars-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-moon-stars-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="moon-stars-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mouse</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mouse"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mouse" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mouse-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mouse-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mouse-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mouse2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mouse2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mouse2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mouse2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mouse2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mouse2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mouse3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mouse3"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mouse3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">mouse3-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-mouse3-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="mouse3-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">music-note</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-music-note"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="music-note" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">music-note-beamed</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-music-note-beamed"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="music-note-beamed" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">music-note-list</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-music-note-list"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="music-note-list" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">music-player</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-music-player"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="music-player" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">music-player-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-music-player-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="music-player-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">newspaper</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-newspaper"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="newspaper" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">node-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-node-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="node-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">node-minus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-node-minus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="node-minus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">node-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-node-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="node-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">node-plus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-node-plus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="node-plus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">nut</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-nut"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="nut" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">nut-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-nut-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="nut-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">octagon</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-octagon"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="octagon" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">octagon-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-octagon-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="octagon-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">octagon-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-octagon-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="octagon-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">option</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-option"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="option" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">outlet</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-outlet"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="outlet" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">paint-bucket</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-paint-bucket"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="paint-bucket" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">palette</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-palette"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="palette" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">palette-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-palette-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="palette-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">palette2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-palette2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="palette2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">paperclip</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-paperclip"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="paperclip" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">paragraph</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-paragraph"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="paragraph" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">patch-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-patch-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="patch-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">patch-check-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-patch-check-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="patch-check-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">patch-exclamation</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-patch-exclamation"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="patch-exclamation" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">patch-exclamation-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-patch-exclamation-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="patch-exclamation-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">patch-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-patch-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="patch-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">patch-minus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-patch-minus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="patch-minus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">patch-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-patch-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="patch-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">patch-plus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-patch-plus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="patch-plus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">patch-question</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-patch-question"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="patch-question" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">patch-question-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-patch-question-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="patch-question-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pause</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pause"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pause" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pause-btn</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pause-btn"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pause-btn" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pause-btn-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pause-btn-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pause-btn-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pause-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pause-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pause-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pause-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pause-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pause-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pause-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pause-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pause-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">peace</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-peace"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="peace" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">peace-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-peace-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="peace-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pen</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pen"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pen" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pen-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pen-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pen-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pencil</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pencil"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pencil" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pencil-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pencil-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pencil-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pencil-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pencil-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pencil-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pentagon</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pentagon"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pentagon" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pentagon-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pentagon-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pentagon-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pentagon-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pentagon-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pentagon-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">people</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-people"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="people" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">people-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-people-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="people-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">percent</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-percent"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="percent" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-badge</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-badge"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-badge" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-badge-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-badge-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-badge-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-bounding-box</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-bounding-box"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-bounding-box" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-check-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-check-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-check-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-dash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-dash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-dash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-dash-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-dash-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-dash-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-lines-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-lines-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-lines-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-plus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-plus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-plus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">person-x-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-person-x-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="person-x-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phone</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-phone"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phone" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phone-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-phone-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phone-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phone-landscape</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-phone-landscape"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phone-landscape" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phone-landscape-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-phone-landscape-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phone-landscape-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phone-vibrate</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-phone-vibrate"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phone-vibrate" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">phone-vibrate-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-phone-vibrate-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="phone-vibrate-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pie-chart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pie-chart"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pie-chart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pie-chart-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pie-chart-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pie-chart-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pin</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pin"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pin" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pin-angle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pin-angle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pin-angle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pin-angle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pin-angle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pin-angle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pin-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pin-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pin-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pip</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pip"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pip" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">pip-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-pip-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="pip-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">play</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-play"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="play" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">play-btn</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-play-btn"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="play-btn" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">play-btn-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-play-btn-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="play-btn-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">play-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-play-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="play-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">play-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-play-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="play-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">play-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-play-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="play-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">plug</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-plug"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="plug" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">plug-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-plug-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="plug-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">plus-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-plus-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="plus-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">plus-circle-dotted</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-plus-circle-dotted"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="plus-circle-dotted" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">plus-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-plus-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="plus-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">plus-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-plus-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="plus-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">plus-square-dotted</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-plus-square-dotted"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="plus-square-dotted" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">plus-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-plus-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="plus-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">power</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-power"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="power" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">printer</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-printer"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="printer" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">printer-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-printer-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="printer-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">puzzle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-puzzle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="puzzle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">puzzle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-puzzle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="puzzle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">question</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-question"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="question" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">question-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-question-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="question-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">question-diamond</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-question-diamond"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="question-diamond" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">question-diamond-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-question-diamond-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="question-diamond-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">question-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-question-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="question-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">question-octagon</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-question-octagon"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="question-octagon" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">question-octagon-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-question-octagon-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="question-octagon-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">question-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-question-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="question-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">question-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-question-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="question-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">rainbow</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-rainbow"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="rainbow" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">receipt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-receipt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="receipt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">receipt-cutoff</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-receipt-cutoff"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="receipt-cutoff" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reception-0</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-reception-0"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reception-0" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reception-1</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-reception-1"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reception-1" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reception-2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-reception-2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reception-2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reception-3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-reception-3"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reception-3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reception-4</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-reception-4"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reception-4" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">record</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-record"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="record" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">record-btn</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-record-btn"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="record-btn" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">record-btn-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-record-btn-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="record-btn-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">record-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-record-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="record-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">record-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-record-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="record-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">record-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-record-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="record-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">record2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-record2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="record2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">record2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-record2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="record2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reply</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-reply"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reply" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reply-all</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-reply-all"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reply-all" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reply-all-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-reply-all-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reply-all-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">reply-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-reply-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="reply-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">rss</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-rss"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="rss" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">rss-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-rss-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="rss-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">rulers</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-rulers"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="rulers" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">save</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-save"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="save" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">save-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-save-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="save-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">save2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-save2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="save2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">save2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-save2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="save2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">scissors</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-scissors"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="scissors" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">screwdriver</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-screwdriver"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="screwdriver" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">search</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-search"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="search" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">segmented-nav</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-segmented-nav"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="segmented-nav" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">server</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-server"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="server" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">share</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-share"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="share" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">share-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-share-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="share-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-exclamation</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-exclamation"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-exclamation" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-fill-check</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-fill-check"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-fill-check" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-fill-exclamation</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-fill-exclamation"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-fill-exclamation" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-fill-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-fill-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-fill-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-fill-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-fill-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-fill-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-fill-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-fill-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-fill-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-lock</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-lock"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-lock" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-lock-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-lock-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-lock-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-shaded</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-shaded"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-shaded" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-slash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-slash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-slash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-slash-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-slash-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-slash-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shield-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shield-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shield-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shift</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shift"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shift" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shift-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shift-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shift-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shop</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shop"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shop" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shop-window</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shop-window"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shop-window" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">shuffle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-shuffle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="shuffle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">signpost</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-signpost"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="signpost" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">signpost-2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-signpost-2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="signpost-2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">signpost-2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-signpost-2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="signpost-2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">signpost-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-signpost-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="signpost-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">signpost-split</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-signpost-split"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="signpost-split" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">signpost-split-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-signpost-split-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="signpost-split-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sim</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sim"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sim" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sim-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sim-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sim-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-backward</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-backward"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-backward" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-backward-btn</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-backward-btn"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-backward-btn" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-backward-btn-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-backward-btn-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-backward-btn-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-backward-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-backward-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-backward-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-backward-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-backward-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-backward-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-backward-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-backward-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-backward-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-end</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-end"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-end" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-end-btn</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-end-btn"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-end-btn" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-end-btn-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-end-btn-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-end-btn-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-end-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-end-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-end-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-end-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-end-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-end-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-end-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-end-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-end-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-forward</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-forward"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-forward" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-forward-btn</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-forward-btn"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-forward-btn" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-forward-btn-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-forward-btn-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-forward-btn-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-forward-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-forward-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-forward-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-forward-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-forward-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-forward-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-forward-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-forward-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-forward-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-start</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-start"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-start" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-start-btn</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-start-btn"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-start-btn" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-start-btn-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-start-btn-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-start-btn-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-start-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-start-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-start-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-start-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-start-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-start-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">skip-start-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-skip-start-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="skip-start-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">slack</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-slack"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="slack" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">slash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-slash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="slash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">slash-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-slash-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="slash-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">slash-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-slash-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="slash-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">slash-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-slash-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="slash-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sliders</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sliders"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sliders" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">smartwatch</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-smartwatch"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="smartwatch" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">snow</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-snow"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="snow" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">snow2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-snow2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="snow2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">snow3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-snow3"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="snow3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort-alpha-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sort-alpha-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort-alpha-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort-alpha-down-alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sort-alpha-down-alt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort-alpha-down-alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort-alpha-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sort-alpha-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort-alpha-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort-alpha-up-alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sort-alpha-up-alt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort-alpha-up-alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sort-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort-down-alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sort-down-alt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort-down-alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort-numeric-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sort-numeric-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort-numeric-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort-numeric-down-alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sort-numeric-down-alt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort-numeric-down-alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort-numeric-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sort-numeric-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort-numeric-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort-numeric-up-alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sort-numeric-up-alt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort-numeric-up-alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sort-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sort-up-alt</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sort-up-alt"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sort-up-alt" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">soundwave</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-soundwave"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="soundwave" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">speaker</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-speaker"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="speaker" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">speaker-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-speaker-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="speaker-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">speedometer</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-speedometer"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="speedometer" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">speedometer2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-speedometer2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="speedometer2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">spellcheck</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-spellcheck"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="spellcheck" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">square-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-square-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="square-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stack</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stack"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stack" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">star</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-star"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="star" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">star-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-star-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="star-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">star-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-star-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="star-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stars</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stars"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stars" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stickies</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stickies"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stickies" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stickies-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stickies-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stickies-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sticky</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sticky"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sticky" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sticky-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sticky-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sticky-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stop</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stop"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stop" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stop-btn</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stop-btn"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stop-btn" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stop-btn-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stop-btn-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stop-btn-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stop-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stop-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stop-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stop-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stop-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stop-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stop-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stop-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stop-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stoplights</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stoplights"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stoplights" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stoplights-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stoplights-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stoplights-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stopwatch</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stopwatch"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stopwatch" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">stopwatch-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-stopwatch-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="stopwatch-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">subtract</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-subtract"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="subtract" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">suit-club</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-suit-club"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="suit-club" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">suit-club-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-suit-club-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="suit-club-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">suit-diamond</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-suit-diamond"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="suit-diamond" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">suit-diamond-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-suit-diamond-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="suit-diamond-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">suit-heart</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-suit-heart"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="suit-heart" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">suit-heart-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-suit-heart-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="suit-heart-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">suit-spade</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-suit-spade"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="suit-spade" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">suit-spade-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-suit-spade-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="suit-spade-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sun</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sun"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sun" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sun-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sun-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sun-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sunglasses</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sunglasses"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sunglasses" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sunrise</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sunrise"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sunrise" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sunrise-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sunrise-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sunrise-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sunset</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sunset"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sunset" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">sunset-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-sunset-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="sunset-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">symmetry-horizontal</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-symmetry-horizontal"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="symmetry-horizontal" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">symmetry-vertical</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-symmetry-vertical"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="symmetry-vertical" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">table</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-table"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="table" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tablet</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tablet"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tablet" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tablet-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tablet-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tablet-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tablet-landscape</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tablet-landscape"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tablet-landscape" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tablet-landscape-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tablet-landscape-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tablet-landscape-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tag</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tag"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tag" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tag-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tag-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tag-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tags</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tags"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tags" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tags-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tags-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tags-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telegram</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telegram"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telegram" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-forward</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-forward"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-forward" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-forward-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-forward-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-forward-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-inbound</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-inbound"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-inbound" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-inbound-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-inbound-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-inbound-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-minus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-minus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-minus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-minus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-minus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-minus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-outbound</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-outbound"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-outbound" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-outbound-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-outbound-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-outbound-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-plus</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-plus"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-plus" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-plus-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-plus-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-plus-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">telephone-x-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-telephone-x-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="telephone-x-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">terminal</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-terminal"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="terminal" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">terminal-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-terminal-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="terminal-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text-center</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-text-center"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text-center" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text-indent-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-text-indent-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text-indent-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text-indent-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-text-indent-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text-indent-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text-left</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-text-left"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text-left" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text-paragraph</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-text-paragraph"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text-paragraph" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">text-right</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-text-right"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="text-right" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">textarea</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-textarea"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="textarea" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">textarea-resize</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-textarea-resize"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="textarea-resize" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">textarea-t</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-textarea-t"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="textarea-t" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thermometer</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-thermometer"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thermometer" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thermometer-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-thermometer-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thermometer-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thermometer-high</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-thermometer-high"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thermometer-high" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thermometer-low</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-thermometer-low"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thermometer-low" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thermometer-snow</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-thermometer-snow"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thermometer-snow" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">thermometer-sun</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-thermometer-sun"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="thermometer-sun" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">three-dots</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-three-dots"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="three-dots" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">three-dots-vertical</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-three-dots-vertical"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="three-dots-vertical" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">toggle-off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-toggle-off"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="toggle-off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">toggle-on</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-toggle-on"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="toggle-on" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">toggle2-off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-toggle2-off"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="toggle2-off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">toggle2-on</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-toggle2-on"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="toggle2-on" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">toggles</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-toggles"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="toggles" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">toggles2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-toggles2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="toggles2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tools</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tools"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tools" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tornado</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tornado"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tornado" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">trash</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-trash"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="trash" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">trash-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-trash-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="trash-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">trash2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-trash2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="trash2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">trash2-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-trash2-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="trash2-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tree</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tree"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tree" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tree-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tree-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tree-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">triangle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-triangle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="triangle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">triangle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-triangle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="triangle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">triangle-half</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-triangle-half"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="triangle-half" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">trophy</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-trophy"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="trophy" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">trophy-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-trophy-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="trophy-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tropical-storm</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tropical-storm"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tropical-storm" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">truck</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-truck"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="truck" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">truck-flatbed</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-truck-flatbed"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="truck-flatbed" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tsunami</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tsunami"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tsunami" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tv</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tv"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tv" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">tv-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-tv-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="tv-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">twitch</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-twitch"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="twitch" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">twitter</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-twitter"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="twitter" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">type</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-type"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="type" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">type-bold</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-type-bold"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="type-bold" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">type-h1</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-type-h1"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="type-h1" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">type-h2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-type-h2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="type-h2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">type-h3</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-type-h3"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="type-h3" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">type-italic</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-type-italic"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="type-italic" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">type-strikethrough</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-type-strikethrough"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="type-strikethrough" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">type-underline</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-type-underline"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="type-underline" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">ui-checks</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-ui-checks"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="ui-checks" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">ui-checks-grid</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-ui-checks-grid"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="ui-checks-grid" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">ui-radios</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-ui-radios"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="ui-radios" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">ui-radios-grid</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-ui-radios-grid"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="ui-radios-grid" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">umbrella</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-umbrella"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="umbrella" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">umbrella-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-umbrella-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="umbrella-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">union</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-union"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="union" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">unlock</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-unlock"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="unlock" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">unlock-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-unlock-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="unlock-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">upc</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-upc"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="upc" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">upc-scan</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-upc-scan"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="upc-scan" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">upload</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-upload"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="upload" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">vector-pen</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-vector-pen"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="vector-pen" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view-list</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-view-list"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view-list" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">view-stacked</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-view-stacked"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="view-stacked" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">vinyl</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-vinyl"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="vinyl" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">vinyl-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-vinyl-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="vinyl-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">voicemail</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-voicemail"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="voicemail" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">volume-down</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-volume-down"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="volume-down" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">volume-down-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-volume-down-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="volume-down-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">volume-mute</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-volume-mute"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="volume-mute" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">volume-mute-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-volume-mute-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="volume-mute-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">volume-off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-volume-off"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="volume-off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">volume-off-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-volume-off-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="volume-off-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">volume-up</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-volume-up"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="volume-up" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">volume-up-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-volume-up-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="volume-up-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">vr</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-vr"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="vr" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wallet</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-wallet"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wallet" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wallet-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-wallet-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wallet-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wallet2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-wallet2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wallet2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">watch</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-watch"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="watch" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">water</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-water"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="water" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">whatsapp</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-whatsapp"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="whatsapp" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wifi</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-wifi"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wifi" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wifi-1</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-wifi-1"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wifi-1" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wifi-2</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-wifi-2"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wifi-2" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wifi-off</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-wifi-off"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wifi-off" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wind</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-wind"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wind" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">window</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-window"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="window" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">window-dock</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-window-dock"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="window-dock" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">window-sidebar</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-window-sidebar"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="window-sidebar" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">wrench</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-wrench"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="wrench" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">x</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-x"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="x" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">x-circle</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-x-circle"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="x-circle" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">x-circle-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-x-circle-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="x-circle-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">x-diamond</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-x-diamond"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="x-diamond" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">x-diamond-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-x-diamond-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="x-diamond-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">x-octagon</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-x-octagon"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="x-octagon" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">x-octagon-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-x-octagon-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="x-octagon-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">x-square</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-x-square"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="x-square" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">x-square-fill</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-x-square-fill"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="x-square-fill" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">youtube</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-youtube"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="youtube" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">zoom-in</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-zoom-in"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="zoom-in" /></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6"><span class="icon-list-item d-none">zoom-out</span>
                  <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-6 bi-zoom-out"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-1100 bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="zoom-out" /></div>
                </div>
              </div>
              <div class="text-center">
                <p class="fallback fw-bold fs-8 d-none">No icons found</p>
              </div>
            </div>
          </div>
          <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
            <div class="toast align-items-center text-white bg-dark border-0" id="icon-copied-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-theme="light">
              <div class="d-flex flex-between-center">
                <div class="toast-body"></div>
                <div data-bs-theme="dark"><button class="btn-close me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button></div>
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
        <p> <a class="fs-10" href="../components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
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
    <script src="../../vendors/prism/prism.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../assets/js/theme.js"></script>
  </body>


<!-- Mirrored from prium.github.io/falcon/v3.21.0/modules/icons/bootstrap-icons.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2024 20:07:09 GMT -->
</html>