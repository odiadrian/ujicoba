
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- All meta and title start-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Koho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
<meta name="keywords" content="admin template, Koho admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="pixelstrap">
<link rel="icon" href="https://laravel.pixelstrap.com/koho/public/assets/images/favicon/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="https://laravel.pixelstrap.com/koho/public/assets/images/favicon/favicon.png" type="image/x-icon">
<title>Koho - Premium Admin Template</title>
<!-- Google font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <!-- meta and title end-->

    <!-- css start-->
    <!-- font-awesome -->
<link rel="stylesheet" type="text/css" href="{{ url ('assets/css/vendors/font-awesome.css') }}">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="{{ url ('assets/css/vendors/icofont.css') }}">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="{{ url ('assets/css/vendors/themify.css') }}">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="{{ url ('assets/css/vendors/flag-icon.css') }}">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="{{ url ('assets/css/vendors/feather-icon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url ('assets/css/vendors/scrollbar.css') }}">



<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.css') }}">

<!-- App css-->

<link rel="preload" as="style" href="https://laravel.pixelstrap.com/koho/public/build/assets/style.1f83ba2e.css" /><link rel="modulepreload" href="https://laravel.pixelstrap.com/koho/public/build/assets/app.15edb3e4.js" /><link rel="stylesheet" href="https://laravel.pixelstrap.com/koho/public/build/assets/style.1f83ba2e.css" /><script type="module" src="https://laravel.pixelstrap.com/koho/public/build/assets/app.15edb3e4.js"></script>
<link id="color" rel="stylesheet" href="https://laravel.pixelstrap.com/koho/public/assets/css/color-1.css" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/responsive.css') }}">
    <!-- css end-->

</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->

    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- Loader ends-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        <!-- Page Header Start-->
        <div class="page-header">
    <div class="header-wrapper row m-0">
      <form class="form-inline search-full col" action="#" method="get">
        <div class="form-group w-100">
          <div class="Typeahead Typeahead--twitterUsers">
            <div class="u-posRelative">
              <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Koho .." name="q" title="" autofocus>
              <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
            </div>
            <div class="Typeahead-menu"></div>
          </div>
        </div>
      </form>
      <div class="header-logo-wrapper col-auto p-0">
        <div class="logo-wrapper"><a href="https://laravel.pixelstrap.com/koho/public/dashboard"><img class="img-fluid for-light" src="https://laravel.pixelstrap.com/koho/public/assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="https://laravel.pixelstrap.com/koho/public/assets/images/logo/logo-dark.png" alt=""></a></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
      </div>
      <div class="left-header col horizontal-wrapper ps-0">
        <div class="input-group">
          <input class="form-control" type="text" placeholder="Search Here........"><span class="input-group-text mobile-search"><i data-feather="search"></i></span>
        </div>
      </div>
      <div class="nav-right col-6 pull-right right-header p-0">
        <ul class="nav-menus">
          <li class="language-nav">
            <div class="translate_wrapper">
              <div class="current_lang">
                <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN                               </span></div>
              </div>
              <div class="more_lang">
                <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span></div>
                <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>
                <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span> (BR)</span></span></div>
                <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span></div>
                <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span> (ae)</span></span></div>
              </div>
            </div>
          </li>
          <li>
            <div class="mode"><i data-feather="moon"></i></div>
          </li>
          <li class="onhover-dropdown">
            <div class="notification-box"><i data-feather="star"></i></div>
            <div class="onhover-show-div bookmark-flip">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="front">
                    <ul class="droplet-dropdown bookmark-dropdown">
                      <li class="gradient-primary"><i data-feather="star"></i>
                        <h3 class="mb-0">Bookmark</h3>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-4 text-center"><a href="https://laravel.pixelstrap.com/koho/public/file-manager"><i data-feather="file-text"></i></a></div>
                          <div class="col-4 text-center"><a href="https://laravel.pixelstrap.com/koho/public/general-widget"><i data-feather="activity"></i></a></div>
                          <div class="col-4 text-center"><a href="https://laravel.pixelstrap.com/koho/public/user-profile"><i data-feather="users"></i></a></div>
                          <div class="col-4 text-center"><a href="https://laravel.pixelstrap.com/koho/public/clipboard"><i data-feather="clipboard"></i></a></div>
                          <div class="col-4 text-center"><a href="https://laravel.pixelstrap.com/koho/public/to_do"><i data-feather="anchor"></i></a></div>
                          <div class="col-4 text-center"><a href="https://laravel.pixelstrap.com/koho/public/internationalization"><i data-feather="settings"></i></a></div>
                        </div>
                      </li>
                      <li class="text-center">
                        <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                      </li>
                    </ul>
                  </div>
                  <div class="back">
                    <ul>
                      <li>
                        <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                          <input type="text" placeholder="search...">
                        </div>
                      </li>
                      <li class="pb-0">
                        <button class="d-block flip-back" id="flip-back">Back </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="onhover-dropdown">
            <div class="notification-box"><i data-feather="bell"></i><span class="badge rounded-pill badge-primary">4                                </span></div>
            <ul class="notification-dropdown onhover-show-div">
              <li><i data-feather="bell">            </i>
                <h3 class="mb-0">Notifications</h3>
              </li>
              <li><a href="https://laravel.pixelstrap.com/koho/public/email-read">
                  <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p></a></li>
              <li><a href="https://laravel.pixelstrap.com/koho/public/email-read">
                  <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p></a></li>
              <li><a href="https://laravel.pixelstrap.com/koho/public/email-read">
                  <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p></a></li>
              <li><a href="https://laravel.pixelstrap.com/koho/public/email-read">
                  <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p></a></li>
              <li><a class="btn btn-primary" href="https://laravel.pixelstrap.com/koho/public/email-read">Check all notification</a></li>
            </ul>
          </li>
          <li class="onhover-dropdown"><i data-feather="message-square"></i>
            <ul class="chat-dropdown onhover-show-div">
              <li><i data-feather="message-square"></i>
                <h3 class="mb-0">Message Box</h3>
              </li>
              <li>
                <div class="d-flex"><img class="img-fluid rounded-circle me-3" src="https://laravel.pixelstrap.com/koho/public/assets/images/user/6.jpg" alt="">
                  <div class="status-circle online"></div>
                  <div class="flex-grow-1"><a href="https://laravel.pixelstrap.com/koho/public/user-profile"><span>Erica Hughes</span>
                      <p>Do you want to go see movie?</p></a></div>
                  <p class="f-12 font-success">2 mins ago</p>
                </div>
              </li>
              <li>
                <div class="d-flex"><img class="img-fluid rounded-circle me-3" src="https://laravel.pixelstrap.com/koho/public/assets/images/user/1.jpg" alt="">
                  <div class="status-circle online"></div>
                  <div class="flex-grow-1"><a href="https://laravel.pixelstrap.com/koho/public/user-profile"><span>Kori Thomas</span>
                      <p>Thank you for rating us.</p></a></div>
                  <p class="f-12 font-success">5 mins ago</p>
                </div>
              </li>
              <li>
                <div class="d-flex"><img class="img-fluid rounded-circle me-3" src="https://laravel.pixelstrap.com/koho/public/assets/images/user/7.jpg" alt="">
                  <div class="status-circle offline"></div>
                  <div class="flex-grow-1"><a href="https://laravel.pixelstrap.com/koho/public/user-profile"><span>Ain Chavez</span>
                      <p>What`s the project report update?</p></a></div>
                  <p class="f-12 font-danger">9 mins ago</p>
                </div>
              </li>
              <li class="text-center"> <a class="btn btn-primary" href="https://laravel.pixelstrap.com/koho/public/chat">View All     </a></li>
            </ul>
          </li>
          <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
          <li class="profile-nav onhover-dropdown p-0 me-0">
            <div class="d-flex profile-media"><img class="b-r-50" src="https://laravel.pixelstrap.com/koho/public/assets/images/dashboard/profile.png" alt="">
              <div class="flex-grow-1"><span>Helen Walter</span>
                <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
              </div>
            </div>
            <ul class="profile-dropdown onhover-show-div">
              <li><a href="https://laravel.pixelstrap.com/koho/public/user-profile"><i data-feather="user"></i><span>Account </span></a></li>
              <li><a href="https://laravel.pixelstrap.com/koho/public/email-inbox"><i data-feather="mail"></i><span>Inbox</span></a></li>
              <li><a href="https://laravel.pixelstrap.com/koho/public/kanban"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
              <li><a href="https://laravel.pixelstrap.com/koho/public/login"><i data-feather="log-in"> </i><span>Log in</span></a></li>
            </ul>
          </li>
        </ul>
      </div>
      <script class="result-template" type="text/x-handlebars-template">
        <div class="ProfileCard u-cf">
        <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
        <div class="ProfileCard-details">
        
        </div>
        </div>
      </script>
      <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
    </div>
  </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a href="https://laravel.pixelstrap.com/koho/public/dashboard"><img class="img-fluid for-light"
                    src="https://laravel.pixelstrap.com/koho/public/assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark"
                    src="https://laravel.pixelstrap.com/koho/public/assets/images/logo/logo-dark.png" alt=""></a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-left"> </i>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="https://laravel.pixelstrap.com/koho/public/dashboard"><img class="img-fluid for-light"
                    src="https://laravel.pixelstrap.com/koho/public/assets/images/logo/logo-icon.png" alt=""><img class="img-fluid for-dark"
                    src="https://laravel.pixelstrap.com/koho/public/assets/images/logo/logo-icon-dark.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="https://laravel.pixelstrap.com/koho/public/dashboard"><img class="img-fluid for-light"
                                src="https://laravel.pixelstrap.com/koho/public/assets/images/logo/logo-icon.png" alt=""><img
                                class="img-fluid for-dark" src="https://laravel.pixelstrap.com/koho/public/assets/images/logo/logo-icon-dark.png"
                                alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h4 class="lan-1">General </h4>
                        </div>
                    </li>
                    <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="home"></i><span class="lan-3">Dashboard</span><span
                                class="badge badge-primary">2</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="lan-4" href="https://laravel.pixelstrap.com/koho/public/dashboard">Default</a></li>
                            <li><a class="lan-5" href="https://laravel.pixelstrap.com/koho/public/ecommerce">Ecommerce</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="airplay"></i><span class="lan-6">Widgets</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/general-widget">General</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/chart-widget">Chart</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="layout"></i><span class="lan-7">Page
                                layout</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/box-layout">Boxed</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/layout-rtl">RTL</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/layout-dark">Dark Layout</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/hide-on-scroll">Hide Nav Scroll</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/footer-light">Footer Light</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/footer-dark">Footer Dark</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/footer-fixed">Footer Fixed</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h4 class="lan-8">Applications </h4>
                        </div>
                    </li>
                    <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="box"></i><span>Project </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/projects">Project List</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/projectcreate">Create new</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/file-manager"><i data-feather="git-pull-request"> </i><span>File
                                manager</span></a></li>
                    <li class="sidebar-list"> <a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/kanban"><i data-feather="monitor"> </i><span>kanban Board</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="shopping-bag"></i><span>Ecommerce</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/product">Product</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/page-product">Product page</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/add_product">Add Product</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/list-products">Product list</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/payment-details">Payment Details</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/order-history">Order History</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/invoice-template">Invoice</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/cart">Cart</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/list-wish">Wishlist</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/checkout">Checkout</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/pricing">Pricing </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="mail"></i><span>Email</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/email-inbox">Mail Inbox</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/email-read">Read mail</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/email-compose">Compose</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="message-circle"></i><span>Chat</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/chat">Chat App</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/video-chat">Video chat</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="users"></i><span>Users</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/user-profile">Users Profile</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/edit-profile">Users Edit</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/user-cards">Users Cards</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/bookmark"><i data-feather="heart"> </i><span>Bookmarks</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/contacts"><i data-feather="list"> </i><span>Contacts</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/tasks"><i data-feather="check-square"> </i><span>Tasks</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/calendar_basic"><i data-feather="calendar">
                            </i><span>Calendar</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/social_app"><i data-feather="zap"> </i><span>Social App</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/to_do"><i data-feather="clock"> </i><span>To-Do</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/search"><i data-feather="search"> </i><span>Search
                                Result</span></a></li>
                    <li class="sidebar-main-title">
                        <div>
                            <h4>Forms & Table </h4>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="file-text"></i><span>Forms</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Form Controls<span
                                        class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/form-validation">Form Validation</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/base-input">Base Inputs</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/radio-checkbox-control">Checkbox & Radio</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/input-group">Input Groups</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/megaoptions">Mega Options</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Form Widgets<span
                                        class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/datepicker">Datepicker</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/time-picker">Timepicker</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/datetimepicker">Datetimepicker</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/daterangepicker">Daterangepicker</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/touchspin">Touchspin</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/select2">Select2</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/switch">Switch</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/typeahead">Typeahead</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/clipboard">Clipboard</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Form layout<span
                                        class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/default-form">Default Forms</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/form-wizard">Form Wizard 1</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/form-wizard-two">Form Wizard 2</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/form-wizard-three">Form Wizard 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)">
                        <i data-feather="server"></i><span>Tables</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Bootstrap Tables<span
                                        class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/bootstrap-basic-table">Basic Tables</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/table-components">Table components</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Data Tables<span
                                        class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/datatable-basic-init">Basic Tables</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/datatable-api">Data API</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/datatable-data-source">Data Sources</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="https://laravel.pixelstrap.com/koho/public/datatable-ext-autofill">Ex. Data Tables</a>
                            </li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/js_grid_table">Js Grid Table </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h4>Components</h4>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="box"></i><span>Ui Kits</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/state-color">State color</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/typography">Typography</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/avatars">Avatars</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/helper-classes">Helper classes</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/grid">Grid</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/tag-pills">Tag & pills</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/progress-bar">Progress</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/modal">Modal</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/alert">Alert</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/popover">Popover</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/tooltip">Tooltip</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/loader">Spinners</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/dropdown">Dropdown</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/according">Accordion</a></li>
                            <li><a class="submenu-title" href="javascript:void(0)">Tabs<span class="sub-arrow"><i
                                            class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/tab-bootstrap">Bootstrap Tabs</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/tab-line">Line Tabs</a></li>
                                </ul>
                            </li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/box-shadow">Shadow</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/list">Lists</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="folder-plus"></i><span>Bonus
                                Ui</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/scrollable">Scrollable</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/tree">Tree view</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/bootstrap-notify">Bootstrap Notify</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/rating">Rating</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/dropzone">dropzone</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/tour">Tour</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/sweet-alert2">SweetAlert2</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/modal-animated">Animated Modal</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/owl-carousel">Owl Carousel</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/ribbons">Ribbons</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/pagination">Pagination</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/breadcrumb">Breadcrumb</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/range-slider">Range Slider</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/image-cropper">Image cropper</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/sticky">Sticky</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/basic-card">Basic Card</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/creative-card">Creative Card</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/tabbed-card">Tabbed Card</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/dragable-card">Draggable Card</a></li>
                            <li><a class="submenu-title" href="javascript:void(0)">Timeline<span class="sub-arrow"><i
                                            class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/timeline-v-1">Timeline 1</a></li>
                                    <li><a href="https://laravel.pixelstrap.com/koho/public/timeline-v-2">Timeline 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="edit-3"></i><span>Builders</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/form-builder-1"> Form Builder 1</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/form-builder-2"> Form Builder 2</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/pagebuild">Page Builder</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/button-builder">Button Builder</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="cloud-drizzle"></i><span>Animation</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/animate">Animate</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/scroll-reval">Scroll Reveal</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/aos">AOS animation</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/tilt">Tilt Animation</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/wow">Wow Animation</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="command"></i><span>Icons</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/flag-icon">Flag icon</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/font-awesome">Fontawesome Icon</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/ico-icon">Ico Icon</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/themify-icon">Thimify Icon</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/feather-icon">Feather icon</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/whether-icon">Whether Icon</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="cloud"></i><span>Buttons</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/buttons">Default Style</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/button-group">Button Group</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="bar-chart"></i><span>Charts</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/chart-apex">Apex Chart</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/chart-google">Google Chart</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/chart-sparkline">Sparkline chart</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/chart-flot">Flot Chart</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/chart-knob">Knob Chart</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/chart-morris">Morris Chart</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/chartjs">Chatjs Chart</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/chartist">Chartist Chart</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/chart-peity">Peity Chart</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h4>Pages </h4>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/sample_page"><i data-feather="file-text"> </i><span>Sample
                                page</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/internationalization"><i data-feather="globe">
                            </i><span>Internationalization</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/dashboard" target="_blank"><i
                                data-feather="anchor"></i><span>Starter kit</span></a></li>
                    <li class="mega-menu"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="layers"></i><span>Others</span></a>
                        <div class="mega-menu-container menu-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col mega-box">
                                        <div class="link-section">
                                            <div class="submenu-title">
                                                <h5>Error Page</h5>
                                            </div>
                                            <ul class="submenu-content opensubmegamenu">
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/error-page1">Error Page 1</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/error-page2">Error Page 2</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/error-page3">Error Page 3</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/error-page4">Error Page 4</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/error-page5">Error Page 5 </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col mega-box">
                                        <div class="link-section">
                                            <div class="submenu-title">
                                                <h5> Authentication</h5>
                                            </div>
                                            <ul class="submenu-content opensubmegamenu">
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/login" target="_blank">Login Simple</a>
                                                </li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/login_one" target="_blank">Login with bg
                                                        image</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/login_two" target="_blank">Login with
                                                        image two </a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/login-bs-validation"
                                                        target="_blank">Login With validation</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/login-bs-tt-validation"
                                                        target="_blank">Login with tooltip</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/login-sa-validation"
                                                        target="_blank">Login with sweetalert</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/sign-up" target="_blank">Register
                                                        Simple</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/sign-up-one" target="_blank">Register
                                                        with Bg Image </a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/sign-up-two" target="_blank">Register
                                                        with Bg video</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/unlock">Unlock User</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/forget-password">Forget Password</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/reset-password">Reset Password</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/maintenance">Maintenance</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col mega-box">
                                        <div class="link-section">
                                            <div class="submenu-title">
                                                <h5>Coming Soon</h5>
                                            </div>
                                            <ul class="submenu-content opensubmegamenu">
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/comingsoon">Coming Simple</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/comingsoon-bg-video">Coming with Bg
                                                        video</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/comingsoon-bg-img">Coming with Bg
                                                        Image</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col mega-box">
                                        <div class="link-section">
                                            <div class="submenu-title">
                                                <h5>Email templates</h5>
                                            </div>
                                            <ul class="submenu-content opensubmegamenu">
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/basic-template">Basic Email</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/email-header">Basic With Header</a></li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/template-email">Ecomerce Template</a>
                                                </li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/template-email-2">Email Template 2</a>
                                                </li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/ecommerce-templates">Ecommerce Email</a>
                                                </li>
                                                <li><a href="https://laravel.pixelstrap.com/koho/public/email-order-success">Order Success</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h4>Miscellaneous </h4>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="image"></i><span>Gallery</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/gallery">Gallery Grid</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/gallery-with-description">Gallery Grid Desc</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/masonry-gallery">Masonry Gallery</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/masonry-gallery-with-disc">Masonry with Desc</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/gallery-hover">Hover Effects</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="film"></i><span>Blog</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/blog">Blog Details</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/single-blog">Blog Single</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/add-post">Add Post</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/faq"><i data-feather="help-circle"> </i><span>FAQ</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="package"></i><span>Job
                                Search</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/job-cards-view">Cards view</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/job-list-view">List View</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/job-details">Job Details</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/job-apply">Apply</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="radio"></i><span>Learning</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/learning-list-view">Learning List</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/learning-detailed">Detailed Course</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="map"></i><span>Maps</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/map_js">Maps JS</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/vector-map">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="edit"></i><span>Editors</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/summernote">Summer Note</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/ckeditor">CK editor</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/simple-mde">MDE editor</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/ace-code-editor">ACE code editor</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                data-feather="sunrise">
                            </i><span>Knowledgebase</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://laravel.pixelstrap.com/koho/public/knowledgebase">Knowledgebase</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/knowledge-category">Knowledge category</a></li>
                            <li><a href="https://laravel.pixelstrap.com/koho/public/knowledge-detail">Knowledge detail </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="https://laravel.pixelstrap.com/koho/public/support-ticket"><i data-feather="users"> </i><span>Support Ticket
                            </span></a></li>
                </ul>
                <div class="sidebar-img-section">
                    <div class="sidebar-img-content"><img class="img-fluid"
                            src="https://laravel.pixelstrap.com/koho/public/assets/images/dashboard/upgrade/2.png" alt="">
                        <h4>Experiance with more Features</h4><a class="btn btn-primary"
                            href="https://themeforest.net/user/pixelstrap/portfolio" target="_blank">Check
                            now</a>
                    </div>
                </div>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
        <!-- Page Sidebar Ends-->

        <div class="page-body">

            
                <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Sample Page</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://laravel.pixelstrap.com/koho/public/dashboard"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Sample Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3>Sample Card</h3><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                    <div class="card-body">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>
        <!-- footer start-->
            <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 p-0 footer-left">
                <p class="mb-0">Copyright 2023 © Koho theme by pixelstrap</p>
            </div>
            <div class="col-2 p-0 footer-right"> <i class="fa fa-heart font-danger"> </i></div>
        </div>
    </div>
</footer>
        <!-- footer end-->
        </div>
    </div>
    <!-- scripts start-->
    <!-- latest jquery-->
   <script src="{{ url('assets/js/jquery-3.6.0.min.js') }}"></script>
   <script src="{{ url ('assets/js/popper.min.js') }}"></script>
   <script src="{{ url ('assets/js/bootstrap.bundle.min.js') }}"></script>
   <!-- feather icon js-->
   <script src="{{ url ('assets/js/feather.min.js') }}"></script>
   <script src="{{ url ('assets/js/feather-icon.js') }}"></script>
   <script src="{{ url ('assets/js/simplebar.js') }}"></script>
   <script src="{{ url ('assets/js/custom.js') }}"></script>
   <!-- Sidebar jquery-->
   <script src="{{ url ('assets/js/config.js') }}"></script>
   <script src="{{ url('assets/js/sidebar-menu.js') }}"></script>
      <script src="{{ url ('assets/js/tooltip-init.js') }}"></script>
   <!-- Theme js-->
   <script src="{{ url ('assets/js/script.js') }}"></script>
   <script src="{{ url ('assets/js/customizer.js') }}"></script>
    <!-- scripts end-->
</body>

</html>
