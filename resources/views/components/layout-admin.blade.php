<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="bootstrap admin template, admin template ,admin panel template ,bootstrap 4 admin template ,bootstrap admin ,admin dashboard template ,bootstrap admin panel ,bitcoin dashboard ,crypto dashboard ,btc dashboard ,cryptocurrency dashboard ,bitcoin template ,cryptocurrency template ,crypto template ,cryptocurrency dashboard template ,cryptocurrency admin template ,crypto admin template ,btconline dashboard ,ryptocurrency dashboard template ,crypto admin template ,crypto trading dashboard ,cryptocurrency admin template " />

    <!-- Title -->
    <title> Xino - Premium dashboard ui bootstrap rwd admin html5 template </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- Internal Chart-Morris css-->
    <link href="{{ asset('assets/plugins/morris.js/morris.css') }}assets/plugins/morris.js/morris.css" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!-- Internal Nice-select css  -->
    <link href="{{ asset('assets/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" />

    <!-- Internal News-Ticker css-->
    <link href="{{ asset('assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">

    <!-- Jquery-countdown css-->
    <link href="{{ asset('assets/plugins/jquery-countdown/countdown.css') }}" rel="stylesheet">

    <!-- Internal News-Ticker css-->
    <link href="{{ asset('assets/plugins/newsticker/jquery.jConveyorTicker.css') }}" rel="stylesheet" />

    <!-- style css-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- skin css-->
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet">

    <!-- dark-theme css-->
    <link href="{{ asset('assets/css/style-dark.css') }}" rel="stylesheet">

    <!--- Animations css-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">

</head>

<body class="main-body app sidebar-mini Light-mode">

    <!-- Loader -->
    <div id="global-loader" class="light-loader">
        <img src="{{ asset('assets/img/loaders/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- main-header -->
    <div class="main-header nav nav-item hor-header">
        <div class="container">
            <div class="main-header-left ">
                <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
                <a class="header-brand" href="index.html">
                    <img src="{{ asset('assets/img/brand/logo-theme-dark.png') }}" class="desktop-dark">
                    <img src="{{ asset('assets/img/brand/logo.png') }}" class="desktop-logo">
                </a>
                <div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
                    <input type="search" class="form-control" placeholder="Search for anything...">
                    <button class="btn"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="main-header-center">
                <div class="responsive-logo">
                    <a href="index.html"><img src="{{ asset('assets/img/brand/logo.png') }}" class="mobile-logo"
                            alt="logo"></a>
                </div>
            </div>
            <div class="main-header-right">
                <div class="nav nav-item  navbar-nav-right ml-auto">
                    <form class="navbar-form nav-item my-auto d-lg-none" role="search">
                        <div class="input-group nav-item my-auto">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button type="reset" class="btn btn-default">
                                    <i class="ti-close"></i>
                                </button>
                                <button type="submit" class="btn btn-default nav-link">
                                    <i class="ti-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <div class="nav-item full-screen fullscreen-button">
                        <a class="new nav-link full-screen-link" href="#"><i class="ti-fullscreen"></i></span></a>
                    </div>
                    <div class="dropdown  nav-item main-header-message ">
                        <a class="new nav-link" href="#"><i class="ti-email"></i><span
                                class="pulse-danger"></span></a>
                        <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp ">
                            <div class="main-dropdown-header  d-sm-none">
                                <a class="main-header-arrow" href=""><i class="icon ion-md-arrow-back"></i></a>
                            </div>
                            <div class="menu-header-content text-left d-flex">
                                <div class="">
                                    <h6 class="menu-header-title text-white mb-0">5 new Messages</h6>
                                </div>
                                <div class="my-auto ml-auto">
                                    <span class="badge badge-pill badge-warning float-right">Mark All Read</span>
                                </div>
                            </div>
                            <div class="main-message-list chat-scroll">
                                <a href="#" class="p-3 d-flex border-bottom">
                                    <div class="  drop-img  cover-image  "
                                        data-image-src="{{ asset('assets/img/faces/3.jpg') }}">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>

                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Paul Molive</h5>
                                            <p class="time mb-0 text-right ml-auto float-right">10 min ago</p>
                                        </div>
                                        <p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
                                    </div>
                                </a>
                                <a href="#" class="p-3 d-flex border-bottom">
                                    <div class="drop-img cover-image"
                                        data-image-src="{{ asset('assets/img/faces/2.jpg') }}">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Sahar Dary</h5>
                                            <p class="time mb-0 text-right ml-auto float-right">13 min ago</p>
                                        </div>
                                        <p class="mb-0 desc">All set ! Now, time to get to you now......</p>
                                    </div>
                                </a>
                                <a href="#" class="p-3 d-flex border-bottom">
                                    <div class="drop-img cover-image"
                                        data-image-src="{{ asset('assets/img/faces/9.jpg') }}">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Khadija Mehr</h5>
                                            <p class="time mb-0 text-right ml-auto float-right">20 min ago</p>
                                        </div>
                                        <p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
                                    </div>
                                </a>
                                <a href="#" class="p-3 d-flex border-bottom">
                                    <div class="drop-img cover-image"
                                        data-image-src="{{ asset('assets/img/faces/12.jpg') }}">
                                        <span class="avatar-status bg-danger"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Barney Cull</h5>
                                            <p class="time mb-0 text-right ml-auto float-right">30 min ago</p>
                                        </div>
                                        <p class="mb-0 desc">Here are some products ...</p>
                                    </div>
                                </a>
                                <a href="#" class="p-3 d-flex border-bottom">
                                    <div class="drop-img cover-image"
                                        data-image-src="{{ asset('assets/img/faces/5.jpg') }}">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Petey Cruiser</h5>
                                            <p class="time mb-0 text-right ml-auto float-right">35 min ago</p>
                                        </div>
                                        <p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
                                    </div>
                                </a>
                            </div>
                            <div class="text-center dropdown-footer">
                                <a href="text-center">VIEW ALL</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown nav-item main-header-notification">
                        <a class="new nav-link " href="#"><i class="ti-bell animated bell-animations"></i><span
                                class=" pulse"></span></a>
                        <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                            <div class="menu-header-content text-left d-flex">
                                <div class="">
                                    <h6 class="menu-header-title text-white mb-0">7 new Notifications</h6>
                                </div>
                                <div class="my-auto ml-auto">
                                    <span class="badge badge-pill badge-warning float-right">Mark All Read</span>
                                </div>
                            </div>
                            <div class="main-notification-list Notification-scroll">
                                <a class="d-flex p-3 border-bottom">
                                    <div class="notifyimg bg-success-transparent">
                                        <i class="la la-shopping-basket text-success"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">New Order Received</h5>
                                        <div class="notification-subtext">1 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom">
                                    <div class="notifyimg bg-danger-transparent">
                                        <i class="la la-user-check text-danger"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">22 verified registrations</h5>
                                        <div class="notification-subtext">2 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom">
                                    <div class="notifyimg bg-primary-transparent">
                                        <i class="la la-check-circle text-primary"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">Project has been approved</h5>
                                        <div class="notification-subtext">4 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom">
                                    <div class="notifyimg bg-pink-transparent">
                                        <i class="la la-file-alt text-pink"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">New files available</h5>
                                        <div class="notification-subtext">10 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom">
                                    <div class="notifyimg bg-warning-transparent">
                                        <i class="la la-envelope-open text-warning"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">New review received</h5>
                                        <div class="notification-subtext">1 day ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3">
                                    <div class="notifyimg bg-purple-transparent">
                                        <i class="la la-gem text-purple"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">Updates Available</h5>
                                        <div class="notification-subtext">2 days ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer">
                                <a href="">VIEW ALL</a>
                            </div>
                        </div>
                    </div>
                    <button class="navbar-toggler navresponsive-toggler d-sm-none" type="button"
                        data-toggle="collapse" data-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fe fe-more-vertical "></span>
                    </button>
                    <div class="dropdown main-profile-menu nav nav-item nav-link">
                        <a class="profile-user" href=""><img alt=""
                                src="{{ asset('assets/img/faces/5.jpg') }}"></a>
                        <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                            <div class="main-header-profile header-img">
                                <div class="main-img-user"><img alt=""
                                        src="{{ asset('assets/img/faces/5.jpg') }}"></div>
                                <h6>Elizabeth Jane</h6><span>Premium Member</span>
                            </div>
                            <a class="dropdown-item" href=""><i class="far fa-user"></i> My Profile</a>
                            <a class="dropdown-item" href=""><i class="far fa-edit"></i> Edit Profile</a>
                            <a class="dropdown-item" href=""><i class="far fa-clock"></i> Activity Logs</a>
                            <a class="dropdown-item" href=""><i class="fas fa-sliders-h"></i> Account
                                Settings</a>
                            <a class="dropdown-item" href="page-signin.html"><i class="fas fa-sign-out-alt"></i> Sign
                                Out</a>
                        </div>
                    </div>
                    <div class="dropdown main-header-message right-toggle">
                        <a class="nav-link " data-toggle="sidebar-right" data-target=".sidebar-right">
                            <i class="ti-menu tx-20 bg-transparent"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main-header -->

    <!-- mobile-header -->
    <div class="responsive main-header">
        <div
            class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark d-sm-none ">
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <div class="d-flex order-lg-2 ml-auto">
                    <form class="navbar-form nav-item my-auto d-lg-none" role="search">
                        <div class="input-group nav-item my-auto">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button type="reset" class="btn btn-default">
                                    <i class="ti-close"></i>
                                </button>
                                <button type="submit" class="btn btn-default nav-link">
                                    <i class="ti-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <div class="d-md-flex">
                        <div class="nav-item full-screen fullscreen-button">
                            <a class="new nav-link full-screen-link" href="#"><i
                                    class="ti-fullscreen"></i></span></a>
                        </div>
                    </div>
                    <div class="dropdown  nav-item main-header-message header-contact">
                        <a class="new nav-link" href="#"><i class="ti-email"></i><span
                                class=" pulse-danger"></span></a>
                        <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                            <div class="main-dropdown-header d-sm-none">
                                <a class="main-header-arrow" href=""><i
                                        class="icon ion-md-arrow-back"></i></a>
                            </div>
                            <div class="menu-header-content text-left d-flex">
                                <div class="">
                                    <h6 class="menu-header-title text-white mb-0">5 new Messages</h6>
                                </div>
                                <div class="my-auto ml-auto">
                                    <span class="badge badge-pill badge-warning float-right">Mark All Read</span>
                                </div>
                            </div>
                            <div class="main-message-list text-scroll">
                                <a href="#" class="p-3 d-flex border-bottom">
                                    <div class="  drop-img  cover-image  "
                                        data-image-src="{{ asset('assets/img/faces/3.jpg') }}">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>

                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Paul Molive</h5>
                                            <p class="time mb-0 text-right ml-auto float-right">10 min ago</p>
                                        </div>
                                        <p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
                                    </div>
                                </a>
                                <a href="#" class="p-3 d-flex border-bottom">
                                    <div class="drop-img cover-image"
                                        data-image-src="{{ asset('assets/img/faces/2.jpg') }}">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Sahar Dary</h5>
                                            <p class="time mb-0 text-right ml-auto float-right">13 min ago</p>
                                        </div>
                                        <p class="mb-0 desc">All set ! Now, time to get to you now......</p>
                                    </div>
                                </a>
                                <a href="#" class="p-3 d-flex border-bottom">
                                    <div class="drop-img cover-image"
                                        data-image-src="{{ asset('assets/img/faces/9.jpg') }}">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Khadija Mehr</h5>
                                            <p class="time mb-0 text-right ml-auto float-right">20 min ago</p>
                                        </div>
                                        <p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
                                    </div>
                                </a>
                                <a href="#" class="p-3 d-flex border-bottom">
                                    <div class="drop-img cover-image"
                                        data-image-src="{{ asset('assets/img/faces/12.jpg') }}">
                                        <span class="avatar-status bg-danger"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Barney Cull</h5>
                                            <p class="time mb-0 text-right ml-auto float-right">30 min ago</p>
                                        </div>
                                        <p class="mb-0 desc">Here are some products ...</p>
                                    </div>
                                </a>
                                <a href="#" class="p-3 d-flex border-bottom">
                                    <div class="drop-img cover-image"
                                        data-image-src="{{ asset('assets/img/faces/5.jpg') }}">
                                        <span class="avatar-status bg-teal"></span>
                                    </div>
                                    <div class="wd-90p">
                                        <div class="d-flex">
                                            <h5 class="mb-1 name">Petey Cruiser</h5>
                                            <p class="time mb-0 text-right ml-auto float-right">35 min ago</p>
                                        </div>
                                        <p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
                                    </div>
                                </a>
                            </div>
                            <div class="text-center dropdown-footer">
                                <a href="text-center">VIEW ALL</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown nav-item main-header-notification">
                        <a class="new nav-link" href="#"><i class="ti-bell "></i><span
                                class=" pulse"></span></a>
                        <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                            <div class="menu-header-content text-left d-flex">
                                <div class="">
                                    <h6 class="menu-header-title text-white mb-0">7 new Notifications</h6>
                                </div>
                                <div class="my-auto ml-auto">
                                    <span class="badge badge-pill badge-warning float-right">Mark All Read</span>
                                </div>
                            </div>
                            <div class="main-notification-list notify-scroll">
                                <a class="d-flex p-3 border-bottom">
                                    <div class="notifyimg bg-success-transparent">
                                        <i class="la la-shopping-basket text-success"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">New Order Received</h5>
                                        <div class="notification-subtext">1 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom">
                                    <div class="notifyimg bg-danger-transparent">
                                        <i class="la la-user-check text-danger"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">22 verified registrations</h5>
                                        <div class="notification-subtext">2 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom">
                                    <div class="notifyimg bg-primary-transparent">
                                        <i class="la la-check-circle text-primary"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">Project has been approved</h5>
                                        <div class="notification-subtext">4 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom">
                                    <div class="notifyimg bg-pink-transparent">
                                        <i class="la la-file-alt text-pink"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">New files available</h5>
                                        <div class="notification-subtext">10 hour ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3 border-bottom">
                                    <div class="notifyimg bg-warning-transparent">
                                        <i class="la la-envelope-open text-warning"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">New review received</h5>
                                        <div class="notification-subtext">1 day ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                                <a class="d-flex p-3">
                                    <div class="notifyimg bg-purple-transparent">
                                        <i class="la la-gem text-purple"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h5 class="notification-label mb-1">Updates Available</h5>
                                        <div class="notification-subtext">2 days ago</div>
                                    </div>
                                    <div class="ml-auto">
                                        <i class="las la-angle-right text-right text-muted"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer">
                                <a href="">VIEW ALL</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown main-profile-menu nav nav-item nav-link">
                        <a class="profile-user" href=""><img alt=""
                                src="{{ asset('assets/img/faces/5.jpg') }}"></a>
                        <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                            <div class="main-header-profile header-img">
                                <div class="main-img-user"><img alt=""
                                        src="{{ asset('assets/img/faces/5.jpg') }}"></div>
                                <h6>Elizabeth Jane</h6><span>Premium Member</span>
                            </div>
                            <a class="dropdown-item" href=""><i class="far fa-user"></i> My Profile</a>
                            <a class="dropdown-item" href=""><i class="far fa-edit"></i> Edit Profile</a>
                            <a class="dropdown-item" href=""><i class="far fa-clock"></i> Activity Logs</a>
                            <a class="dropdown-item" href=""><i class="fas fa-sliders-h"></i> Account
                                Settings</a>
                            <a class="dropdown-item" href="page-signin.html"><i class="fas fa-sign-out-alt"></i> Sign
                                Out</a>
                        </div>
                    </div>
                    <div class="dropdown main-header-message right-toggle">
                        <a class="nav-link " data-toggle="sidebar-right" data-target=".sidebar-right">
                            <i class="ti-menu tx-20 bg-transparent"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-header -->

    <!--Horizontal-main -->
    <div class="sticky">
        <div class="horizontal-main hor-menu clearfix side-header">
            <div class="horizontal-mainwrapper container clearfix">
                <!--Nav-->
                <nav class="horizontalMenu clearfix">
                    <ul class="horizontalMenu-list">
                        <li aria-haspopup="true"><a href="index.html" class=""><i
                                    class="ti-home menu-icon"></i> Dashboard </a></li>
                        <li aria-haspopup="true"><a href="widgets.html" class=""><i class="ti-briefcase"></i>
                                Widgets</a></li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-bar-chart-alt"></i>
                                Charts <span class="badge badge-danger horizontal-badge">5</span><i
                                    class="fe fe-chevron-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="chart-morris.html" class="slide-item">Morris
                                        Charts</a></li>
                                <li aria-haspopup="true"><a href="chart-flot.html" class="slide-item">Flot Charts</a>
                                </li>
                                <li aria-haspopup="true"><a href="chart-chartjs.html" class="slide-item">ChartJS</a>
                                </li>
                                <li aria-haspopup="true"><a href="chart-echart.html" class="slide-item">Echart</a>
                                </li>
                                <li aria-haspopup="true"><a href="chart-sparkline.html"
                                        class="slide-item">Sparkline</a></li>
                                <li aria-haspopup="true"><a href="chart-peity.html" class="slide-item">
                                        Chart-peity</a></li>
                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-layers"></i>
                                Elements<i class="fe fe-chevron-down horizontal-icon"></i></a>
                            <div class="horizontal-megamenu clearfix">
                                <div class="container">
                                    <div class="mega-menubg hor-mega-menu">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-12 col-xs-12 link-list">

                                                <ul>
                                                    <li>
                                                        <h3 class="fs-14 font-weight-bold mb-1 mt-2">Elements</h3>
                                                    </li>
                                                    <li aria-haspopup="true"><a href="alerts.html"
                                                            class="slide-item">Alerts</a></li>
                                                    <li aria-haspopup="true"><a href="avatar.html"
                                                            class="slide-item">Avatar</a></li>
                                                    <li aria-haspopup="true"><a href="breadcrumbs.html"
                                                            class="slide-item">Breadcrumbs</a></li>
                                                    <li aria-haspopup="true"><a href="buttons.html"
                                                            class="slide-item">Buttons</a></li>
                                                    <li aria-haspopup="true"><a href="badge.html"
                                                            class="slide-item">Badge</a></li>
                                                    <li aria-haspopup="true"><a href="dropdown.html"
                                                            class="slide-item">Dropdown</a></li>
                                                    <li aria-haspopup="true"><a href="thumbnails.html"
                                                            class="slide-item">Thumbnails</a></li>
                                                    <li aria-haspopup="true"><a href="images.html"
                                                            class="slide-item">Images</a></li>
                                                    <li aria-haspopup="true"><a href="list-group.html"
                                                            class="slide-item">List Group</a></li>

                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                <ul>
                                                    <li aria-haspopup="true"><a href="navigation.html"
                                                            class="slide-item">Navigation</a></li>
                                                    <li aria-haspopup="true"><a href="pagination.html"
                                                            class="slide-item">Pagination</a></li>
                                                    <li aria-haspopup="true"><a href="popover.html"
                                                            class="slide-item">Popover</a></li>
                                                    <li aria-haspopup="true"><a href="progress.html"
                                                            class="slide-item">Progress</a></li>
                                                    <li aria-haspopup="true"><a href="spinners.html"
                                                            class="slide-item">Spinners</a></li>
                                                    <li aria-haspopup="true"><a href="media-object.html"
                                                            class="slide-item">Media Object</a></li>
                                                    <li aria-haspopup="true"><a href="typography.html"
                                                            class="slide-item">Typography</a></li>
                                                    <li aria-haspopup="true"><a href="tooltip.html"
                                                            class="slide-item">Tooltip</a></li>
                                                    <li aria-haspopup="true"><a href="toast.html"
                                                            class="slide-item">Toast</a></li>
                                                    <li aria-haspopup="true"><a href="tags.html"
                                                            class="slide-item">Tags</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                <ul>
                                                    <li>
                                                        <h3 class="fs-14 font-weight-bold mb-1 mt-2">Apps</h3>
                                                    </li>
                                                    <li aria-haspopup="true"><a href="cards.html"
                                                            class="slide-item">Cards</a></li>
                                                    <li aria-haspopup="true"><a href="darggablecards.html"
                                                            class="slide-item">Darggablecards</a></li>
                                                    <li aria-haspopup="true"><a href="rangeslider.html"
                                                            class="slide-item">Range-slider</a></li>
                                                    <li aria-haspopup="true"><a href="calendar.html"
                                                            class="slide-item">Calendar</a></li>
                                                    <li aria-haspopup="true"><a href="contacts.html"
                                                            class="slide-item">Contacts</a></li>
                                                    <li aria-haspopup="true"><a href="image-compare.html"
                                                            class="slide-item">Image-compare</a></li>
                                                    <li aria-haspopup="true"><a href="notification.html"
                                                            class="slide-item">Notification</a></li>
                                                    <li aria-haspopup="true"><a href="widget-notification.html"
                                                            class="slide-item">Widget-notification</a></li>
                                                    <li aria-haspopup="true"><a href="treeview.html"
                                                            class="slide-item">Treeview</a></li>

                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                <ul>
                                                    <li>
                                                        <h3 class="fs-14 font-weight-bold mb-1 mt-2">Icons <span
                                                                class="badge badge-success ">New</span></h3>
                                                    </li>
                                                    <li aria-haspopup="true"><a href="icons.html"
                                                            class="slide-item">Icons</a></li>
                                                    <li>
                                                        <h3 class="fs-14 font-weight-bold mb-1">Maps</h3>
                                                    </li>
                                                    <li aria-haspopup="true"><a href="map-leaflet.html"
                                                            class="slide-item">Mapel Maps</a></li>
                                                    <li aria-haspopup="true"><a href="map-vector.html"
                                                            class="slide-item">Vector Maps</a></li>

                                                    <li>
                                                        <h3 class="fs-14 font-weight-bold mb-1">Tables</h3>
                                                    </li>
                                                    <li aria-haspopup="true"><a href="table-basic.html"
                                                            class="slide-item">Basic Tables</a></li>
                                                    <li aria-haspopup="true"><a href="table-data.html"
                                                            class="slide-item">Data Tables</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-write"></i>
                                Advanced UI <i class="fe fe-chevron-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="accordion.html" class="slide-item"> Accordion</a>
                                </li>
                                <li aria-haspopup="true"><a href="carousel.html" class="slide-item">Carousel</a></li>
                                <li aria-haspopup="true"><a href="collapse.html" class="slide-item">Collapse</a></li>
                                <li aria-haspopup="true"><a href="modals.html" class="slide-item">Modals</a></li>
                                <li aria-haspopup="true"><a href="timeline.html" class="slide-item">Timeline</a></li>
                                <li aria-haspopup="true"><a href="sweet-alert.html" class="slide-item">Sweet
                                        Alert</a></li>
                                <li aria-haspopup="true"><a href="rating.html" class="slide-item">Ratings</a></li>
                                <li aria-haspopup="true"><a href="counters.html" class="slide-item">Counters</a></li>
                                <li aria-haspopup="true"><a href="search.html" class="slide-item">Search</a></li>
                                <li aria-haspopup="true"><a href="userlist.html" class="slide-item"> Userlist</a>
                                </li>
                                <li aria-haspopup="true"><a href="blog.html" class="slide-item">Blog</a></li>
                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-agenda"></i>
                                Utilities <i class="fe fe-chevron-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="background.html" class="slide-item">Background</a>
                                </li>
                                <li aria-haspopup="true"><a href="border.html" class="slide-item">Border</a></li>
                                <li aria-haspopup="true"><a href="display.html" class="slide-item">Display</a></li>
                                <li aria-haspopup="true"><a href="flex.html" class="slide-item">Flex</a></li>
                                <li aria-haspopup="true"><a href="height.html" class="slide-item">Height</a></li>
                                <li aria-haspopup="true"><a href="margin.html" class="slide-item">Margin</a></li>
                                <li aria-haspopup="true"><a href="padding.html" class="slide-item">Padding</a></li>
                                <li aria-haspopup="true"><a href="position.html" class="slide-item">Position</a></li>
                                <li aria-haspopup="true"><a href="width.html" class="slide-item">Width</a></li>
                                <li aria-haspopup="true"><a href="extras.html" class="slide-item">Extras</a></li>
                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-receipt"></i> Pages
                                <i class="fe fe-chevron-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="profile.html" class="slide-item">Profile</a></li>
                                <li aria-haspopup="true"><a href="editprofile.html"
                                        class="slide-item">Edit-profile</a></li>
                                <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Mail <span
                                            class="badge badge-pink side-badge">5</span></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="mail.html"
                                                class="slide-item">Mail-inbox</a></li>
                                        <li aria-haspopup="true"><a href="mail-compose.html"
                                                class="slide-item">Mail-compose</a></li>
                                        <li aria-haspopup="true"><a href="mail-read.html"
                                                class="slide-item">Mail-read</a></li>
                                        <li aria-haspopup="true"><a href="mail-settings.html"
                                                class="slide-item">Mail-settings</a></li>
                                        <li aria-haspopup="true"><a href="chat.html" class="slide-item">Chat</a></li>

                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Forms <span
                                            class="badge badge-info side-badge">6</span></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="form-elements.html" class="slide-item">Form
                                                Elements</a></li>
                                        <li aria-haspopup="true"><a href="form-advanced.html"
                                                class="slide-item">Advanced Forms</a></li>
                                        <li aria-haspopup="true"><a href="form-layouts.html" class="slide-item">Form
                                                Layouts</a></li>
                                        <li aria-haspopup="true"><a href="form-validation.html"
                                                class="slide-item">Form Validation</a></li>
                                        <li aria-haspopup="true"><a href="form-wizards.html" class="slide-item">Form
                                                Wizards</a></li>
                                        <li aria-haspopup="true"><a href="form-editor.html"
                                                class="slide-item">WYSIWYG Editor</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><a href="invoice.html" class="slide-item">Invoice</a></li>
                                <li aria-haspopup="true"><a href="todotask.html" class="slide-item">Todotask</a></li>
                                <li aria-haspopup="true"><a href="pricing.html" class="slide-item">Pricing</a></li>
                                <li aria-haspopup="true"><a href="gallery.html" class="slide-item">Gallery</a></li>
                                <li aria-haspopup="true"><a href="faq.html" class="slide-item">Faqs</a></li>
                                <li aria-haspopup="true"><a href="empty.html" class="slide-item">Empty Page</a></li>
                            </ul>
                        </li>
                        </li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-shopping-cart"></i>
                                E-Commerce <span class="badge badge-success horizontal-badge">3</span><i
                                    class="fe fe-chevron-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="products.html" class="slide-item"> Products</a>
                                </li>
                                <li aria-haspopup="true"><a href="product-details.html"
                                        class="slide-item">Product-Details</a></li>
                                <li aria-haspopup="true"><a href="product-cart.html" class="slide-item">Shopping
                                        Cart</a></li>
                            </ul>
                        </li>
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-id-badge"></i>
                                Custom <i class="fe fe-chevron-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="signin.html" class="slide-item">Sign In</a></li>
                                <li aria-haspopup="true"><a href="signup.html" class="slide-item">Sign Up</a></li>
                                <li aria-haspopup="true"><a href="forgot.html" class="slide-item">Forgot Password</a>
                                </li>
                                <li aria-haspopup="true"><a href="reset.html" class="slide-item">Reset Password</a>
                                </li>
                                <li aria-haspopup="true"><a href="lockscreen.html" class="slide-item">Lock screen</a>
                                </li>
                                <li aria-haspopup="true"><a href="underconstruction.html"
                                        class="slide-item">UnderConstruction</a></li>
                                <li aria-haspopup="true"><a href="404.html" class="slide-item">404 Error</a></li>
                                <li aria-haspopup="true"><a href="500.html" class="slide-item">500 Error</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!--Nav-->
            </div>
        </div>
    </div>
    <!--Horizontal-main -->

    <!-- main-content opened -->
    <div class="main-content horizontal-content">

        <!-- container -->
        <div class="container">

            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <h3 class="content-title mb-2">Welcome back,</h3>
                    <div class="d-flex">
                        <i class="mdi mdi-home text-muted hover-cursor"></i>
                        <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                        <p class="text-primary mb-0 hover-cursor">Crypto</p>
                    </div>
                </div>
                <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
                    <button type="button" class="btn btn-warning btn-icon mr-3 mt-2 mt-xl-0">
                        <i class="mdi mdi-download "></i>
                    </button>
                    <button type="button" class="btn btn-danger  btn-icon mr-3 mt-2 mt-xl-0">
                        <i class="mdi mdi-clock"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-icon mr-3 mt-2 mt-xl-0">
                        <i class="mdi mdi-plus"></i>
                    </button>
                    <button class="btn btn-primary mt-2 mt-xl-0">Download report</button>
                </div>
            </div>
            <!-- /breadcrumb -->

            <!-- row  -->
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class=" overflow-hidden bg-transparent card-crypto-scroll shadow-none">
                        <div class="js-conveyor-example">
                            <ul class="news-crypto">
                                <li>
                                    <div class="crypto-card">
                                        <div class="row">
                                            <div class="d-flex">
                                                <div class="my-auto">
                                                    <img src="{{ asset('assets/img/crypto-currencies/round-outline/Augur.svg') }}"
                                                        class="w-6 h-6 mt-0" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="mb-1 tx-13">REP / INR</p>
                                                    <div class="m-0 tx-13 text-warning">$0.0215<span
                                                            class="text-danger ml-2"><i
                                                                class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crypto-card">
                                        <div class="row">
                                            <div class="d-flex">
                                                <div class="">
                                                    <img src="{{ asset('assets/img/crypto-currencies/round-outline/AquariusCoin.svg') }}"
                                                        class="w-6 h-6 mt-0" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="mb-1 tx-13">ARCO / INR</p>
                                                    <div class="m-0 tx-13 text-warning">$425.25<span
                                                            class="text-success ml-2"><i
                                                                class="ion-arrow-up-c mr-1"></i>+12.85%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crypto-card">
                                        <div class="row">
                                            <div class="d-flex">
                                                <div class="">
                                                    <img src="{{ asset('assets/img/crypto-currencies/round-outline/BitShares.svg') }}"
                                                        class="w-6 h-6 mt-0" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="mb-1 tx-13">BTS / INR</p>
                                                    <div class="m-0 tx-13 text-warning">$2.786<span
                                                            class="text-success ml-2"><i
                                                                class="ion-arrow-up-c mr-1"></i>-02.25%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crypto-card">
                                        <div class="row">
                                            <div class="d-flex">
                                                <div class="">
                                                    <img src="{{ asset('assets/img/crypto-currencies/round-outline/Bytecoin.svg') }}"
                                                        class="w-6 h-6 mt-0" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="mb-1 tx-13">BCN / INR</p>
                                                    <div class="m-0 tx-13 text-warning">$15.425<span
                                                            class="text-danger ml-2"><i
                                                                class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crypto-card">
                                        <div class="row">
                                            <div class=" d-flex">
                                                <div class="my-auto">
                                                    <img src="{{ asset('assets/img/crypto-currencies/round-outline/Dash.svg') }}"
                                                        class="w-6 h-6 mt-0" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="mb-1 tx-13">Dash / INR</p>
                                                    <div class="m-0 tx-13 text-warning">$5.125<span
                                                            class="text-success ml-2"><i
                                                                class="ion-arrow-up-c mr-1"></i>-11.85%%</span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crypto-card">
                                        <div class="row">
                                            <div class=" d-flex">
                                                <div class="">
                                                    <img src="{{ asset('') }}assets/img/crypto-currencies/round-outline/EOS.svg"
                                                        class="w-6 h-6 mt-0" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="mb-1 tx-13">EUR / INR</p>
                                                    <div class="m-0 tx-13 text-warning">$135.425<span
                                                            class="text-danger ml-2"><i
                                                                class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crypto-card">
                                        <div class="row">
                                            <div class=" d-flex">
                                                <div class="">
                                                    <img src="{{ asset('') }}assets/img/crypto-currencies/round-outline/Decred.svg"
                                                        class="w-6 h-6 mt-0" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="mb-1 tx-13">ETH / USDT</p>
                                                    <div class="m-0 tx-13 text-warning">$34.625<span
                                                            class="text-success ml-2"><i
                                                                class="ion-arrow-up-c mr-1"></i>-0.32%</span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crypto-card">
                                        <div class="row">
                                            <div class=" d-flex">
                                                <div class="">
                                                    <img src="{{ asset('') }}assets/img/crypto-currencies/round-outline/IOTA.svg"
                                                        class="w-6 h-6 mt-0" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="mb-1 tx-13">IOTA / USD</p>
                                                    <div class="m-0 tx-13 text-warning">$67.325<span
                                                            class="text-danger ml-2"><i
                                                                class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crypto-card">
                                        <div class="row">
                                            <div class=" d-flex">
                                                <div class="">
                                                    <img src="{{ asset('') }}assets/img/crypto-currencies/round-outline/Litecoin.svg"
                                                        class="w-6 h-6 mt-0" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="mb-1 tx-13">LTC / USD</p>
                                                    <div class="m-0 tx-13 text-warning">$7.525<span
                                                            class="text-success ml-2"><i
                                                                class="ion-arrow-up-c mr-1"></i>-1.42%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crypto-card">
                                        <div class="row">
                                            <div class=" d-flex">
                                                <div class="">
                                                    <img src="{{ asset('') }}assets/img/crypto-currencies/round-outline/Monero.svg"
                                                        class="w-6 h-6 mt-0" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="mb-1 tx-13">XMR / EUR</p>
                                                    <div class="m-0 tx-13 text-warning">$4.325<span
                                                            class="text-danger ml-2"><i
                                                                class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crypto-card">
                                        <div class="row">
                                            <div class=" d-flex">
                                                <div class="">
                                                    <img src="{{ asset('') }}assets/img/crypto-currencies/round-outline/NEM.svg"
                                                        class="w-6 h-6 mt-0" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="mb-1 tx-13">ETH / USDT</p>
                                                    <div class="m-0 tx-13 text-warning">$5.525<span
                                                            class="text-success ml-2"><i
                                                                class="ion-arrow-up-c mr-1"></i>-1.32%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="crypto-card">
                                        <div class="row">
                                            <div class=" d-flex">
                                                <div class="">
                                                    <img src="{{ asset('') }}assets/img/crypto-currencies/round-outline/Netko-coin.svg"
                                                        class="w-6 h-6 mt-0" alt="">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="mb-1 tx-13">NEO / USD</p>
                                                    <div class="m-0 tx-13 text-warning">$6.025<span
                                                            class="text-danger ml-2"><i
                                                                class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row row-sm">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card crypto crypt-primary overflow-hidden">
                        <div class="card-body iconfont text-left">
                            <div class="media">
                                <div class="coin-logo bg-primary-transparent">
                                    <i class="cf cf-eth text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h6>Ethereum</h6>
                                    <p>ETH (USD) = $148.46 (<span class="text-danger">-12.24%</span>)</p>
                                </div>
                                <div class="card-body-top mb-3">
                                    <div>
                                        <a href="">14</a> USD Markets
                                    </div>
                                    <div>
                                        <a href="">82</a> LTC Markets
                                    </div>
                                </div>
                            </div>
                            <div class="flot-wrapper">
                                <div class="flot-chart ht-150 mt-4" id="flotChart3"></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <nav class="nav">
                                <a class="nav-link active" href=""><span>1D</span><span>-12.24%</span></a> <a
                                    class="nav-link" href=""><span>1W</span><span>-16.48%</span></a> <a
                                    class="nav-link" href=""><span>1M</span><span>-15.21%</span></a> <a
                                    class="nav-link" href=""><span>1Y</span><span>-40.17%</span></a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card crypto crypt-danger overflow-hidden">
                        <div class="card-body iconfont text-left">
                            <div class="media">
                                <div class="coin-logo bg-danger-transparent">
                                    <i class="cf cf-ltc tx-18 text-danger"></i>
                                </div>
                                <div class="media-body">
                                    <h6>Litecoin</h6>
                                    <p>LTC (USD) = $45.81 (<span class="text-danger">-12.24%</span>)</p>
                                </div>
                                <div class="card-body-top">
                                    <div>
                                        <a href="">21</a> USD Markets
                                    </div>
                                    <div>
                                        <a href="">56</a> LTC Markets
                                    </div>
                                </div>
                            </div>
                            <div class="flot-wrapper">
                                <div class="flot-chart ht-150  mt-4" id="flotChart5"></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <nav class="nav">
                                <a class="nav-link active" href=""><span>1D</span><span>-15.24%</span></a> <a
                                    class="nav-link" href=""><span>1W</span><span>-24.68%</span></a> <a
                                    class="nav-link" href=""><span>1M</span><span>-17.15%</span></a> <a
                                    class="nav-link" href=""><span>1Y</span><span>-30.23%</span></a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="card crypto  crypt-success overflow-hidden">
                        <div class="card-body iconfont text-left">
                            <div class="media">
                                <div class="coin-logo bg-success-transparent">
                                    <i class="cf cf-xrp text-success"></i>
                                </div>
                                <div class="media-body">
                                    <h6>Ripple</h6>
                                    <p>XRP (USD) = $0.2195(<span class="text-danger">-2.97%</span>)</p>
                                </div>
                                <div class="card-body-top">
                                    <div>
                                        <a href="">4</a> USD Markets
                                    </div>
                                    <div>
                                        <a href="">45</a> LTC Markets
                                    </div>
                                </div>
                            </div>
                            <div class="flot-wrapper">
                                <div class="flot-chart ht-150 mt-4" id="flotChart1"></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <nav class="nav">
                                <a class="nav-link active" href=""><span>1D</span><span>-14.32%</span></a> <a
                                    class="nav-link" href=""><span>1W</span><span>-24.39%</span></a> <a
                                    class="nav-link" href=""><span>1M</span><span>-42.12%</span></a> <a
                                    class="nav-link" href=""><span>1Y</span><span>-50.34%</span></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row row-sm row-deck">
                <div class="col-xl-4 col-lg-12">
                    <div class="card overflow-hidden ">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mg-b-10">Market Info</h4>
                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                            </div>
                            <p class="tx-12 tx-gray-500 mb-2">An activity is a scheduled phase in a project plan with
                                a distinct beginning and end. <a href="">Learn more</a></p>
                        </div>
                        <div class="card-body p-0">
                            <div class="">
                                <div class="list d-flex align-items-center border-bottom p-2 pl-3 pr-3 mt-0">
                                    <img class="w-6 h-6"
                                        src="{{ asset('') }}assets/img/crypto-currencies/round-outline/Bitcoin.svg  "
                                        alt="image">
                                    <div class="w-100 ml-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mt-1 mb-0 font-weight-semibold">BTC/USD</p>
                                            <span class="ml-auto fs-15 mb-0 font-weight-semibold">$10,245.00</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-success tx-13"><i
                                                    class="fa fa-caret-up mr-1"></i>2.04%</span>
                                            <small class="text-muted ml-auto">340.5 USD</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list d-flex align-items-center border-bottom p-2 pl-3 pr-3">
                                    <img class="w-6 h-6"
                                        src="{{ asset('') }}assets/img/crypto-currencies/round-outline/Ethereum.svg"
                                        alt="image">
                                    <div class="w-100 ml-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mt-1 mb-0 font-weight-semibold">ETH/USD</p>
                                            <span class="ml-auto fs-15 mb-0 font-weight-semibold">$15,183.00</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-danger tx-13"><i
                                                    class="fa fa-caret-down mr-1"></i>1.25%</span>
                                            <small class="text-muted ml-auto">283.5 USD</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list d-flex align-items-center border-bottom p-2 pl-3 pr-3">
                                    <img class="w-6 h-6"
                                        src="{{ asset('') }}assets/img/crypto-currencies/round-outline/Litecoin.svg"
                                        alt="image">
                                    <div class="w-100 ml-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mt-1 mb-0 font-weight-semibold">LTC/USD</p>
                                            <span class="ml-auto fs-15 mb-0 font-weight-semibold">$14,348.00</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-danger tx-13"><i
                                                    class="fa fa-caret-down mr-1"></i>1.04%</span>
                                            <small class="text-muted ml-auto">368.2 USD</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list d-flex align-items-center border-bottom p-2 pl-3 pr-3">
                                    <img class="w-6 h-6"
                                        src="{{ asset('') }}assets/img/crypto-currencies/round-outline/Dash.svg"
                                        alt="image">
                                    <div class="w-100 ml-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mt-1 mb-0 font-weight-semibold">Dash/USD</p>
                                            <span class="ml-auto fs-15 mb-0 font-weight-semibold">$12,157.00</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-success tx-13"><i
                                                    class="fa fa-caret-up mr-1"></i>2.04%</span>
                                            <small class="text-muted ml-auto">127.3 USD</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list d-flex align-items-center p-2 pl-3 pr-3 mb-0">
                                    <img class="w-6 h-6"
                                        src="{{ asset('') }}assets/img/crypto-currencies/round-outline/NEM.svg"
                                        alt="image">
                                    <div class=" w-100 ml-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mt-1 mb-0 font-weight-semibold">BTC/USD</p>
                                            <span class="ml-auto fs-15 mb-0 font-weight-semibold">$11,183.00</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-success tx-13"><i
                                                    class="fa fa-caret-up mr-1"></i>1.04%</span>
                                            <small class="text-muted ml-auto ">165.8 USD</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="card card-bitcoin">
                        <div class=" card-minimal-two">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Bitcoin / USD Rate</h4>
                                <div class="">
                                    <nav class="nav nav-pills">
                                        <a class="nav-link active" data-toggle="tab" href="#">BTH</a> <a
                                            class="nav-link" data-toggle="tab" href="#">ETH</a> <a
                                            class="nav-link" data-toggle="tab" href="#">LTC</a> <a
                                            class="nav-link" data-toggle="tab" href="#">BTG</a>
                                    </nav>
                                </div><!-- card-header-right -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="media">
                                <div class="media-icon"><i class="fab fa-bitcoin"></i></div>
                                <div class="media-body">
                                    <div class="row row-sm">
                                        <div class="col">
                                            <label>Symbol</label>
                                            <p>BTC</p>
                                        </div>
                                        <div class="col-3">
                                            <label>Price Benchmark</label>
                                            <p>128.00%</p>
                                        </div>
                                        <div class="col">
                                            <label>Price (USD)</label>
                                            <p>$4,253.49</p>
                                        </div>
                                        <div class="col">
                                            <label>Change (24H)</label>
                                            <p>-0.24%</p>
                                        </div>
                                        <div class="col">
                                            <label>Market Cap</label>
                                            <p>$179.12B</p>
                                        </div>
                                    </div><!-- row -->
                                </div>
                            </div><!-- media-body -->
                            <div class="flot-wrapper">
                                <div class="flot-chart ht-226 wd-100p" id="flotChart12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row  -->

            <!-- row -->
            <div class="row row-sm">
                <div class="col-md-12 col-xl-4 col-lg-12">
                    <div class="card overflow-hidden recent-operations-card">
                        <div class="card-body p-0">
                            <div class="p-3 pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-10">Transactions History</h4>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                                <p class="tx-12 tx-gray-500 mb-0">Transaction History shows information about cash
                                    deposits, cash withdrawals for your account.<a href="">Learn more</a></p>
                            </div>
                            <div class="transcation-scroll">
                                <ul class="list-unstyled mg-b-0 mt-2">
                                    <li class="list-item pl-3 pr-3 mb-0 pb-3">
                                        <div class="media align-items-center">
                                            <div
                                                class="wd-40 ht-40 bg-orange-transparent tx-orange rounded-circle align-items-center justify-content-center d-none d-sm-flex">
                                                <i class="cf cf-btc wd-20 ht-20 text-center tx-20 "></i>
                                            </div>
                                            <div class="media-body mg-sm-l-15">
                                                <p class="tx-medium mg-b-3">Received Bitcoin</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">Wallet: 03E25DAEYWZXB01</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <p class="mg-b-3  font-weight-semibold">2.0435 BTC</p>
                                            <p class="tx-11 mg-b-0  tx-gray-500"><span class="text-success">+ $25.00
                                                </span>USD</p>
                                        </div>
                                    </li>
                                    <li class="list-item  mb-0 pl-3 pr-3 pb-3">
                                        <div class="media align-items-center">
                                            <div
                                                class="wd-40 ht-40 bg-teal-transparent tx-teal rounded-circle align-items-center justify-content-center d-none d-sm-flex">
                                                <i class="cf cf-ltc wd-20 ht-20 text-center tx-16 "></i>
                                            </div>
                                            <div class="media-body mg-sm-l-15">
                                                <p class="tx-medium mg-b-3">Sent Litecoin</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">Wallet: 03E25DAEYWZXB02</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <p class="mg-b-3  font-weight-semibold">0.0147 LTC</p>
                                            <p class="tx-11 mg-b-0  tx-gray-500"><span class="text-danger">- $12.00
                                                </span>USD</p>
                                        </div>
                                    </li>
                                    <li class="list-item  mb-0 pl-3 pr-3 pb-3">
                                        <div class="media align-items-center">
                                            <div
                                                class="wd-40 ht-40 bg-danger-transparent rounded-circle align-items-center justify-content-center d-none d-sm-flex">
                                                <i class="cf cf-eth wd-20 ht-20 text-danger tx-20 "></i>
                                            </div>
                                            <div class="media-body mg-sm-l-15">
                                                <p class="tx-medium mg-b-3">Received Ethereum</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">Wallet: 03E25DAEYWZXB03</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <p class="mg-b-3 font-weight-semibold">2.0157 ETH</p>
                                            <p class="tx-11 mg-b-0  tx-gray-500"><span class="text-success">+ $24.00
                                                </span>USD</p>
                                        </div>
                                    </li>
                                    <li class="list-item mb-0 pl-3 pr-3 pb-3">
                                        <div class="media align-items-center">
                                            <div
                                                class="wd-40 ht-40 bg-primary-transparent  rounded-circle align-items-center justify-content-center d-none d-sm-flex">
                                                <i class="cf cf-dash wd-20 ht-20 text-primary tx-20 "></i>
                                            </div>
                                            <div class="media-body mg-sm-l-15">
                                                <p class="tx-medium mg-b-3">Sent Dash</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">Wallet: 03E25DAEYWZXB04</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <p class="mg-b-3 font-weight-semibold">0.032 Dash</p>
                                            <p class="tx-11 mg-b-0  tx-gray-500"><span class="text-danger">- $128.39
                                                </span>USD</p>
                                        </div>
                                    </li>
                                    <li class="list-item mb-0 pl-3 pr-3 pb-3">
                                        <div class="media align-items-center">
                                            <div
                                                class="wd-40 ht-40 bg-success-transparent tx-success rounded-circle align-items-center justify-content-center d-none d-sm-flex">
                                                <i class="cf cf-xmr wd-20 ht-20 text-center tx-20 "></i>
                                            </div>
                                            <div class="media-body mg-sm-l-15">
                                                <p class="tx-medium mg-b-3">Sent Bitcoin</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">Wallet: 03E25DAEYWZXB05</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <p class="mg-b-3  font-weight-semibold">0.0157 BTC</p>
                                            <p class="tx-11 mg-b-0 tx-gray-500"><span class="text-danger">-
                                                    $149.00</span> USD</p>
                                        </div>
                                    </li>
                                    <li class="list-item mb-0 pl-3 pr-3 pb-3">
                                        <div class="media align-items-center">
                                            <div
                                                class="wd-40 ht-40 bg-purple-transparent tx-purple rounded-circle align-items-center justify-content-center d-none d-sm-flex">
                                                <i class="cf cf-xrp wd-20 ht-20 text-center tx-20 "></i>
                                            </div>
                                            <div class="media-body mg-sm-l-15">
                                                <p class="tx-medium mg-b-3">Pending Ripple</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">Wallet: 03E25DAEYWZXB06</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <p class="mg-b-3 font-weight-semibold">0.0258 XRP</p>
                                            <p class="tx-11 mg-b-0 tx-gray-500"><span class="text-success">+
                                                    $235.00</span> USD</p>
                                        </div>
                                    </li>
                                    <li class="list-item mb-0 pl-3 pr-3 pb-3">
                                        <div class="media align-items-center">
                                            <div
                                                class="wd-40 ht-40 bg-warning-transparent tx-warning rounded-circle align-items-center justify-content-center d-none d-sm-flex">
                                                <i class="cf cf-btc wd-20 ht-20 text-center tx-20 "></i>
                                            </div>
                                            <div class="media-body mg-sm-l-15">
                                                <p class="tx-medium mg-b-3">Pending Bitcoin</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">Wallet: 03E25DAEYWZXB07</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <p class="mg-b-3 font-weight-semibold">0.0235 BTC</p>
                                            <p class="tx-11 mg-b-0 tx-gray-500"><span class="text-success">+
                                                    $345.00</span> USD</p>
                                        </div>
                                    </li>
                                    <li class="list-item mb-0 pl-3 pr-3 pb-3">
                                        <div class="media align-items-center">
                                            <div
                                                class="wd-40 ht-40 bg-pink-transparent tx-pink rounded-circle align-items-center justify-content-center d-none d-sm-flex">
                                                <i class="cf cf-eth wd-20 ht-20 text-center tx-20 "></i>
                                            </div>
                                            <div class="media-body mg-sm-l-15">
                                                <p class="tx-medium mg-b-3">Sent Ethereum</p>
                                                <p class="tx-11 mg-b-0 tx-gray-500">Wallet: 03E25DAEYWZXB08</p>
                                            </div>
                                        </div>
                                        <div class="text-right ml-auto">
                                            <p class="mg-b-3 font-weight-semibold">0.0020 ETH</p>
                                            <p class="tx-11 mg-b-0 tx-gray-500"><span class="text-danger">-
                                                    $245.00</span> USD</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-12">
                    <div class="row row-sm">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body text-center crypto-buy-sell">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title ">Buy Crypto Coins</h4>
                                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                                    </div>
                                    <div class="form-group mt-1">
                                        <label class="form-label float-left">Enter Your Money</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" Value="10,000">
                                            <div class="input-group-append wd-100">
                                                <select class="form-control select2 br-0 nice-select"
                                                    data-placeholder="Choose one (with optgroup)">
                                                    <optgroup label="Currecy">
                                                        <option value="USD">USD</option>
                                                        <option value="EUR">EUR</option>
                                                        <option value="INR">INR</option>
                                                        <option value="GBP">GBP</option>
                                                        <option value="JPY">JPY</option>
                                                        <option value="RUB">RUB</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label float-left">Your Crypto Coins Converted to</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" Value="0.254">
                                            <div class="input-group-append wd-100">
                                                <select class="form-control select2 br-0 nice-select"
                                                    data-placeholder="Choose one (with optgroup)">
                                                    <optgroup label="Coins">
                                                        <option value="BTC">BTC</option>
                                                        <option value="ETH">ETH</option>
                                                        <option value="DAH">DAH</option>
                                                        <option value="RIP">RIP</option>
                                                        <option value="ITA">ITA</option>
                                                        <option value="EOS">EOS</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-block btn-success" href="#">Buy Coins</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title ">Sell Crypto Coins</h4>
                                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                                    </div>
                                    <div class="form-group mt-1">
                                        <label class="form-label float-left">Enter Crypto Coin</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" Value="0.254">
                                            <div class="input-group-append wd-100">
                                                <select class="form-control select2 br-0 nice-select"
                                                    data-placeholder="Choose one (with optgroup)">
                                                    <optgroup label="Coins">
                                                        <option value="BTC">BTC</option>
                                                        <option value="ETH">ETH</option>
                                                        <option value="DAH">DAH</option>
                                                        <option value="RIP">RIP</option>
                                                        <option value="ITA">ITA</option>
                                                        <option value="EOS">EOS</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label float-left">Your Money Converted to</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" Value="10,000">
                                            <div class="input-group-append wd-100">
                                                <select class="form-control select2 br-0 nice-select"
                                                    data-placeholder="Choose one (with optgroup)">
                                                    <optgroup label="Currecy">
                                                        <option value="USD">USD</option>
                                                        <option value="EUR">EUR</option>
                                                        <option value="INR">INR</option>
                                                        <option value="GBP">GBP</option>
                                                        <option value="JPY">JPY</option>
                                                        <option value="RUB">RUB</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-block btn-primary" href="#">Sell Coins</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title mb-4">Quick Conversion</div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label float-left">From</label>
                                                <div class="input-group">
                                                    <div class="input-group-append w-100">
                                                        <select class="form-control select2 br-0 bg-light nice-select"
                                                            data-placeholder="Choose one (with optgroup)">
                                                            <optgroup label="Coins">
                                                                <option value="BTC">BTC</option>
                                                                <option value="ETH">ETH</option>
                                                                <option value="DAH">DAH</option>
                                                                <option value="RIP">RIP</option>
                                                                <option value="ITA">ITA</option>
                                                                <option value="EOS">EOS</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label float-left">To</label>
                                                <div class="input-group">
                                                    <div class="input-group-append w-100">
                                                        <select class="form-control select2 br-0 bg-light nice-select"
                                                            data-placeholder="Choose one (with optgroup)">
                                                            <optgroup label="Currecy">
                                                                <option value="USD">USD</option>
                                                                <option value="EUR">EUR</option>
                                                                <option value="INR">INR</option>
                                                                <option value="GBP">GBP</option>
                                                                <option value="JPY">JPY</option>
                                                                <option value="RUB">RUB</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label float-left">Amount</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="10">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-light">BTC</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label float-left">Price For BTC</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="15,25,457">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-light">USD</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <a class="btn btn-primary" href="#"><i class="fa fa-refresh"></i>
                                            Transfer Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->

            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-10">Crypto currencies marketing values</h4>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                                <p class="tx-12 tx-gray-500 mb-2">A cryptocurrency is a new form of digital asset
                                    based on a network that is distributed across a large number of computers. This
                                    decentralized structure allows them to exist outside the control of governments and
                                    central authorities.<a href="">Learn more</a></p>
                            </div>
                            <div class="table-responsive market-values">
                                <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Icon</th>
                                            <th>Price</th>
                                            <th>% 24h</th>
                                            <th>Market Cap</th>
                                            <th>CMGR/Month</th>
                                            <th>Exchange</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td>Ethereum</td>
                                            <td><i class="cf cf-eth tx-22"></i></td>
                                            <td>$966.61</td>
                                            <td class="text-red">-6%</td>
                                            <td class="text-right">$95,270,125,036</td>
                                            <td>22.62% / 29</td>
                                            <td><a href="#" class="btn btn-sm btn-success">Transfer Now</a>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>Bitcoin</td>
                                            <td><i class="cf cf-btc tx-22 text-orange"></i></td>
                                            <td>$10513.00</td>
                                            <td class="text-red">-7%</td>
                                            <td class="text-right">$179,470,305,923</td>
                                            <td>8.11% / 57</td>
                                            <td><a href="#" class="btn btn-sm btn-success">Transfer Now</a>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>NEM</td>
                                            <td><i class="cf cf-xem tx-20 text-teal"></i></td>
                                            <td>$1547.00</td>
                                            <td class="text-red">-11%</td>
                                            <td class="text-right">$26,720,210,956</td>
                                            <td>21.30% / 6</td>
                                            <td><a href="#" class="btn btn-sm btn-success">Transfer Now</a>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>Ripple</td>
                                            <td><i class="cf cf-xrp tx-22 text-primary"></i></td>
                                            <td>$1.2029</td>
                                            <td class="text-red">-11%</td>
                                            <td class="text-right">$47,649,145,657</td>
                                            <td>10.85% / 53</td>
                                            <td><a href="#" class="btn btn-sm btn-success">Transfer Now</a>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>Litecoin</td>
                                            <td><i class="cf cf-ltc tx-20 text-muted"></i></td>
                                            <td>$173.86</td>
                                            <td class="text-red">-7%</td>
                                            <td class="text-right">$9,670,920,267</td>
                                            <td>6.87% / 57</td>
                                            <td><a href="#" class="btn btn-sm btn-success">Transfer Now</a>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>Dash</td>
                                            <td><i class="cf cf-dash tx-22 text-purple"></i></td>
                                            <td>$0.935049</td>
                                            <td class="text-red">-11%</td>
                                            <td class="text-right">$8,415,440,999</td>
                                            <td>26.99% / 33</td>
                                            <td><a href="#" class="btn btn-sm btn-success">Transfer Now</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /conatiner -->
    </div>
    <!-- /main-content -->

    <!-- Right-sidebar-->
    <div class="sidebar sidebar-right sidebar-animate">
        <div class="p-3">
            <a href="#" class="text-right float-right" data-toggle="sidebar-right"
                data-target=".sidebar-right"><i class="fe fe-x"></i></a>
        </div>
        <div class="tab-menu-heading border-0 card-header">
            <div class="card-title mb-0">Notifications</div>
            <div class="card-options ml-auto">
                <a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
            </div>
        </div>
        <div class="tabs-menu ">
            <!-- Tabs -->
            <ul class="nav panel-tabs">
                <li class=""><a href="#tab" class="active show" data-toggle="tab">Profile</a></li>
                <li class=""><a href="#tab1" data-toggle="tab" class="">Friends</a></li>
                <li><a href="#tab2" data-toggle="tab" class="">Activity</a></li>
                <li><a href="#tab3" data-toggle="tab" class="">Todo</a></li>
            </ul>
        </div>
        <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
            <div class="tab-content">
                <div class="tab-pane active" id="tab">
                    <div class="card-body p-0">
                        <div class="header-user text-center mt-4">
                            <span class="avatar avatar-xxl brround mx-auto"><img
                                    src="{{ asset('') }}assets/img/faces/6.jpg" alt="Profile-img"
                                    class="avatar avatar-xxl brround"></span>
                            <div class=" text-center font-weight-semibold user mt-3 h6 mb-0">Rapona Pechon</div>
                            <span class="text-muted">App Developer</span>
                            <div class="card-body">
                                <div class="form-group ">
                                    <label class="form-label  text-left">Offline/Online</label>
                                    <select class="form-control mb-4 nice-select " data-placeholder="Choose one">
                                        <option value="1">Online</option>
                                        <option value="2">Offline</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="form-label text-left">Website</label>
                                    <select class="form-control nice-select " data-placeholder="Choose one">
                                        <option value="1">Spruko.com</option>
                                        <option value="2">sprukosoft.com</option>
                                        <option value="3">sprukotechnologies.com</option>
                                        <option value="4">sprukoinfo.com</option>
                                        <option value="5">sprukotech.com</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a class="dropdown-item  border-top" href="#">
                            <i class="dropdown-icon fe fe-edit mr-2"></i> Edit Profile
                        </a>
                        <a class="dropdown-item  border-top" href="#">
                            <i class="dropdown-icon fe fe-user mr-2"></i> Spruko technologies
                        </a>
                        <a class="dropdown-item border-top" href="#">
                            <i class="dropdown-icon  fe fe-unlock mr-2"></i> Add Another Account
                        </a>
                        <a class="dropdown-item  border-top" href="#">
                            <i class="dropdown-icon fe fe-mail mr-2"></i> Message
                        </a>
                        <a class="dropdown-item  border-top" href="#">
                            <i class="dropdown-icon fe fe-help-circle mr-2"></i> Need Help?
                        </a>
                        <div class="card-body border-top">
                            <h6>Followers</h6>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="followers">
                                        <a href="#" class="avatar brround avatar-md cover-image m-1"
                                            data-image-src="{{ asset('') }}assets/img/faces/3.jpg">
                                            <span class="avatar-status bg-green"></span>
                                        </a>
                                        <a href="#" class="avatar brround avatar-md cover-image m-1"
                                            data-image-src="{{ asset('') }}assets/img/faces/6.jpg">
                                            <span class="avatar-status bg-red"></span>
                                        </a>
                                        <a href="#" class="avatar brround avatar-md cover-image m-1"
                                            data-image-src="{{ asset('') }}assets/img/faces/3.jpg">
                                            <span class="avatar-status bg-warning"></span>
                                        </a>
                                        <a href="#" class="avatar brround avatar-md cover-image m-1"
                                            data-image-src="{{ asset('') }}assets/img/faces/4.jpg">
                                            <span class="avatar-status bg-green"></span>
                                        </a>
                                        <a href="#" class="avatar brround avatar-md cover-image m-1"
                                            data-image-src="{{ asset('') }}assets/img/faces/9.jpg">
                                            <span class="avatar-status bg-warning"></span>
                                        </a>
                                        <a href="#"
                                            class="avatar brround avatar-md cover-image m-1 follwers">+34</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border-top border-bottom">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a class="" href=""><i
                                            class="dropdown-icon mdi  mdi-message-outline fs-20 m-0 leading-tight"></i></a>
                                    <div>Inbox</div>
                                </div>
                                <div class="col-4 text-center">
                                    <a class="" href=""><i
                                            class="dropdown-icon mdi mdi-tune fs-20 m-0 leading-tight"></i></a>
                                    <div>Settings</div>
                                </div>
                                <div class="col-4 text-center">
                                    <a class="" href=""><i
                                            class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
                                    <div>Sign out</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab1">
                    <div class="chat">
                        <div class="contacts_card">
                            <div class="input-group mb-0 p-3">
                                <input type="text" placeholder="Search..." class="form-control search">
                                <div class="input-group-prepend mr-0">
                                    <span class="input-group-text  search_btn  btn-primary"><i
                                            class="fa fa-search text-white"></i></span>
                                </div>
                            </div>
                            <ul class="contacts mb-0">
                                <li class="active">
                                    <div class="d-flex bd-highlight w-100">
                                        <div class="img_cont">
                                            <img src="{{ asset('') }}assets/img/faces/12.jpg"
                                                class="rounded-circle user_img" alt="img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <h5 class="mt-1 mb-1">Maryam Naz</h5>
                                            <small class="text-muted">is online</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>01-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight w-100">
                                        <div class="img_cont">
                                            <img src="{{ asset('') }}assets/img/faces/2.jpg"
                                                class="rounded-circle user_img" alt="img">
                                            <span class=" online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <h5 class="mt-1 mb-1">Sahar Darya</h5>
                                            <small class="text-muted">left 7 mins ago</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>01-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight w-100">
                                        <div class="img_cont">
                                            <img src="{{ asset('') }}assets/img/faces/5.jpg"
                                                class="rounded-circle user_img" alt="img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <h5 class="mt-1 mb-1">Maryam Naz</h5>
                                            <small class="text-muted">online</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>01-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight w-100">
                                        <div class="img_cont">
                                            <img src="{{ asset('') }}assets/img/faces/7.jpg"
                                                class="rounded-circle user_img" alt="img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <h5 class="mt-1 mb-1">Yolduz Rafi</h5>
                                            <small class="text-muted">online</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>02-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight w-100">
                                        <div class="img_cont">
                                            <img src="{{ asset('') }}assets/img/faces/8.jpg"
                                                class="rounded-circle user_img" alt="img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <h5 class="mt-1 mb-1">Nargis Hawa</h5>
                                            <small class="text-muted">30 mins ago</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>02-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight w-100">
                                        <div class="img_cont">
                                            <img src="{{ asset('') }}assets/img/faces/3.jpg"
                                                class="rounded-circle user_img" alt="img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <h5 class="mt-1 mb-1">Khadija Mehr</h5>
                                            <small class="text-muted">50 mins ago</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>03-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight w-100">
                                        <div class="img_cont">
                                            <img src="{{ asset('') }}assets/img/faces/14.jpg"
                                                class="rounded-circle user_img" alt="img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <h5 class="mt-1 mb-1">Petey Cruiser</h5>
                                            <small class="text-muted">1hr ago</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>03-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight w-100">
                                        <div class="img_cont">
                                            <img src="{{ asset('') }}assets/img/faces/11.jpg"
                                                class="rounded-circle user_img" alt="img">
                                        </div>
                                        <div class="user_info">
                                            <h5 class="mt-1 mb-1">Khadija Mehr</h5>
                                            <small class="text-muted">2hr ago</small>
                                        </div>
                                        <div class="float-right text-right ml-auto mt-auto mb-auto">
                                            <small>03-02-2019</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab2">
                    <div class="list d-flex align-items-center border-bottom p-3 mt-3">
                        <div class="">
                            <span class="avatar bg-primary brround avatar-md">CH</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>New Websites is Created</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">30 mins ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-danger brround avatar-md">N</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Prepare For the Next Project</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">2 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-info brround avatar-md">S</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Decide the live Discussion Time</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">3 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-warning brround avatar-md">K</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Team Review meeting</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">4 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-success brround avatar-md">R</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">1 days ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center  border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-pink brround avatar-md">MS</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">1 days ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-purple brround avatar-md">L</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">45 mintues ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-primary brround avatar-md">CH</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>New Websites is Created</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">30 mins ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center p-3">
                        <div class="">
                            <span class="avatar bg-blue brround avatar-md">U</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">2 days ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab3">
                    <div class="mt-3">
                        <div class="d-flex p-3">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1"
                                    value="option1" checked="">
                                <span class="custom-control-label">Do Even More..</span>
                            </label>
                            <span class="ml-auto">
                                <a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Edit"></i></a>
                                <a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Delete"></i></a>
                            </span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox2"
                                    value="option2" checked="">
                                <span class="custom-control-label">Find an idea.</span>
                            </label>
                            <span class="ml-auto">
                                <a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Edit"></i></a>
                                <a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Delete"></i></a>
                            </span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox3"
                                    value="option3" checked="">
                                <span class="custom-control-label">Hangout with friends</span>
                            </label>
                            <span class="ml-auto">
                                <a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Edit"></i></a>
                                <a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Delete"></i></a>
                            </span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox4"
                                    value="option4">
                                <span class="custom-control-label">Do Something else</span>
                            </label>
                            <span class="ml-auto">
                                <a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Edit"></i></a>
                                <a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Delete"></i></a>
                            </span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox5"
                                    value="option5">
                                <span class="custom-control-label">Eat healthy, Eat Fresh..</span>
                            </label>
                            <span class="ml-auto">
                                <a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Edit"></i></a>
                                <a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Delete"></i></a>
                            </span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox6"
                                    value="option6" checked="">
                                <span class="custom-control-label">Finsh something more..</span>
                            </label>
                            <span class="ml-auto">
                                <a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Edit"></i></a>
                                <a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Delete"></i></a>
                            </span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox7"
                                    value="option7" checked="">
                                <span class="custom-control-label">Do something more</span>
                            </label>
                            <span class="ml-auto">
                                <a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Edit"></i></a>
                                <a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Delete"></i></a>
                            </span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox8"
                                    value="option8">
                                <span class="custom-control-label">Updated more files</span>
                            </label>
                            <span class="ml-auto">
                                <a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Edit"></i></a>
                                <a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Delete"></i></a>
                            </span>
                        </div>
                        <div class="d-flex p-3 border-top">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox9"
                                    value="option9">
                                <span class="custom-control-label">System updated</span>
                            </label>
                            <span class="ml-auto">
                                <a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Edit"></i></a>
                                <a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Delete"></i></a>
                            </span>
                        </div>
                        <div class="d-flex p-3 border-top border-bottom">
                            <label class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" name="example-checkbox10"
                                    value="option10">
                                <span class="custom-control-label">Settings Changings...</span>
                            </label>
                            <span class="ml-auto">
                                <a href="#"><i class="si si-pencil text-primary mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Edit"></i></a>
                                <a href="#"><i class="si si-trash text-danger mr-2" data-toggle="tooltip"
                                        title="" data-placement="top" data-original-title="Delete"></i></a>
                            </span>
                        </div>
                        <div class="text-center pt-5">
                            <a href="#" class="btn btn-primary">Add more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Right-sidebar-closed -->


    <!-- Footer opened -->
    <div class="main-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
            <span>Copyright © 2020 <a href="#">Xino</a>. Designed by <a
                    href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
        </div>
    </div>
    <!-- Footer closed -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="la la-chevron-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ asset('') }}assets/plugins/jquery/jquery.min.js"></script>

    <!-- Datepicker js -->
    <script src="{{ asset('') }}assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Ionicons js -->
    <script src="{{ asset('') }}assets/plugins/ionicons/ionicons.js"></script>

    <!-- Moment js -->
    <script src="{{ asset('') }}assets/plugins/moment/moment.js"></script>

    <!--Chart bundle min js -->
    <script src="{{ asset('') }}assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/raphael/raphael.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/peity/jquery.peity.min.js"></script>

    <!-- JQuery sparkline js -->
    <script src="{{ asset('') }}assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Sampledata js -->
    <script src="{{ asset('') }}assets/js/chart.flot.sampledata.js"></script>

    <!-- Perfect-scrollbar js -->
    <script src="{{ asset('') }}assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/perfect-scrollbar/p-scroll.js"></script>

    <!-- Internal  Flot js-->
    <script src="{{ asset('') }}assets/plugins/jquery.flot/jquery.flot.js"></script>
    <script src="{{ asset('') }}assets/plugins/jquery.flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('') }}assets/plugins/jquery.flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('') }}assets/plugins/jquery.flot/jquery.flot.categories.js"></script>
    <script src="{{ asset('') }}assets/js/dashboard.sampledata.js"></script>
    <script src="{{ asset('') }}assets/js/chart.flot.sampledata.js"></script>

    <!-- Internal Newsticker js-->
    <script src="{{ asset('') }}assets/plugins/newsticker/jquery.jConveyorTicker.js"></script>
    <script src="{{ asset('') }}assets/js/newsticker.js"></script>

    <!-- Eva-icons js -->
    <script src="{{ asset('') }}assets/js/eva-icons.min.js"></script>

    <!-- Horizontalmenu js-->
    <script src="{{ asset('') }}assets/plugins/horizontal-menu/horizontal-menu.js"></script>

    <!-- right-sidebar js -->
    <script src="{{ asset('') }}assets/plugins/sidebar/sidebar.js"></script>
    <script src="{{ asset('') }}assets/plugins/sidebar/sidebar-custom.js"></script>

    <!-- Rating js-->
    <script src="{{ asset('') }}assets/plugins/rating/jquery.rating-stars.js"></script>
    <script src="{{ asset('') }}assets/plugins/rating/jquery.barrating.js"></script>

    <!-- P-scroll js -->
    <script src="{{ asset('') }}assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/perfect-scrollbar/p-scroll.js"></script>

    <!-- Internal Nice-select js-->
    <script src="{{ asset('') }}assets/plugins/jquery-nice-select/js/jquery.nice-select.js"></script>
    <script src="{{ asset('') }}assets/plugins/jquery-nice-select/js/nice-select.js"></script>

    <!-- Sticky js -->
    <script src="{{ asset('') }}assets/js/sticky.js"></script>

    <!-- index js -->
    <script src="{{ asset('') }}assets/js/dashboard.js"></script>

    <!-- custom js -->
    <script src="{{ asset('') }}assets/js/custom.js"></script>


</body>

</html>
