<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <link rel="icon" type="image/x-icon" href="/admin/favicon.ico">
    <title>Angle - Bootstrap Admin Template</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="/admin//admin/vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-brands.css">
    <link rel="stylesheet" href="/admin//admin/vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-regular.css">
    <link rel="stylesheet" href="/admin/vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-solid.css">
    <link rel="stylesheet" href="/admin/vendor/_40fortawesome/fontawesome-free-webfonts/css/fontawesome.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="/admin/vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="/admin/vendor/animate.css/animate.css">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="/admin/vendor/whirl/dist/whirl.css">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- Datatables-->
    <link rel="stylesheet" href="/admin/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/admin/vendor/datatables.net-keytable-bs/css/keyTable.bootstrap.css">
    <link rel="stylesheet" href="/admin/vendor/datatables.net-responsive-bs/css/responsive.bootstrap.css">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="/admin/css/bootstrap-rtl.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="/admin/css/app-rtl.css" id="maincss">
</head>

<body>
<div class="wrapper">
    <!-- top navbar-->
    <header class="topnavbar-wrapper">
        <!-- START Top Navbar-->
        <nav class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
                <a class="navbar-brand" href="/admin/#/">
                    <div class="brand-logo">
                        <img class="img-fluid" src="/admin/img/logo.png" alt="App Logo">
                    </div>
                    <div class="brand-logo-collapsed">
                        <img class="img-fluid" src="/admin/img/logo-single.png" alt="App Logo">
                    </div>
                </a>
            </div>
            <!-- END navbar header-->
            <!-- START Left navbar-->
            <ul class="navbar-nav mr-auto flex-row">
                <li class="nav-item">
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="/admin/#" data-trigger-resize="" data-toggle-state="aside-collapsed">
                        <em class="fas fa-bars"></em>
                    </a>
                    <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                    <a class="nav-link sidebar-toggle d-md-none" href="/admin/#" data-toggle-state="aside-toggled" data-no-persist="true">
                        <em class="fas fa-bars"></em>
                    </a>
                </li>
                <!-- START User avatar toggle-->
                <li class="nav-item d-none d-md-block">
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a class="nav-link" id="user-block-toggle" href="/admin/#user-block" data-toggle="collapse">
                        <em class="icon-user"></em>
                    </a>
                </li>
                <!-- END User avatar toggle-->
                <!-- START lock screen-->
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link" href="/admin/lock.html" title="Lock screen">
                        <em class="icon-lock"></em>
                    </a>
                </li>
                <!-- END lock screen-->
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="navbar-nav flex-row">
                <!-- Search icon-->
                <li class="nav-item">
                    <a class="nav-link" href="/admin/#" data-search-open="">
                        <em class="icon-magnifier"></em>
                    </a>
                </li>
                <!-- Fullscreen (only desktops)-->
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link" href="/admin/#" data-toggle-fullscreen="">
                        <em class="fas fa-expand"></em>
                    </a>
                </li>
                <!-- START Alert menu-->
                <li class="nav-item dropdown dropdown-list">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="/admin/#" data-toggle="dropdown">
                        <em class="icon-bell"></em>
                        <span class="badge badge-danger">11</span>
                    </a>
                    <!-- START Dropdown menu-->
                    <div class="dropdown-menu dropdown-menu-right animated flipInX">
                        <div class="dropdown-item">
                            <!-- START list group-->
                            <div class="list-group">
                                <!-- list item-->
                                <div class="list-group-item list-group-item-action">
                                    <div class="media">
                                        <div class="align-self-start mr-2">
                                            <em class="fab fa-twitter fa-2x text-info"></em>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">دنبال کنندگان جدید</p>
                                            <p class="m-0 text-muted text-sm">1 دنبال کننده جدید</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- list item-->
                                <div class="list-group-item list-group-item-action">
                                    <div class="media">
                                        <div class="align-self-start mr-2">
                                            <em class="fas fa-envelope fa-2x text-warning"></em>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">ایمیل های جدید</p>
                                            <p class="m-0 text-muted text-sm">شما 10 ایمیل جدید دارید</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- list item-->
                                <div class="list-group-item list-group-item-action">
                                    <div class="media">
                                        <div class="align-self-start mr-2">
                                            <em class="fas fa-tasks fa-2x text-success"></em>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">وظایف معلق</p>
                                            <p class="m-0 text-muted text-sm">11 وظیفه معلق</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- last list item-->
                                <div class="list-group-item list-group-item-action">
                              <span class="d-flex align-items-center">
                                 <span class="text-sm">اطلاعیه های بیشتر</span>
                                 <span class="badge badge-danger ml-auto">14</span>
                              </span>
                                </div>
                            </div>
                            <!-- END list group-->
                        </div>
                    </div>
                    <!-- END Dropdown menu-->
                </li>
                <!-- END Alert menu-->
                <!-- START Offsidebar button-->
                <li class="nav-item">
                    <a class="nav-link" href="/admin/#" data-toggle-state="offsidebar-open" data-no-persist="true">
                        <em class="icon-notebook"></em>
                    </a>
                </li>
                <!-- END Offsidebar menu-->
            </ul>
            <!-- END Right Navbar-->
            <!-- START Search form-->
            <form class="navbar-form" role="search" action="search.html">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="عبارت مورد نظر را وارد نمایید ...">
                    <div class="fas fa-times navbar-form-close" data-search-dismiss=""></div>
                </div>
                <button class="d-none" type="submit">ارسال</button>
            </form>
            <!-- END Search form-->
        </nav>
        <!-- END Top Navbar-->
    </header>
    <!-- sidebar-->
    <aside class="aside-container">
        <!-- START Sidebar (left)-->
        <div class="aside-inner">
            <nav class="sidebar" data-sidebar-anyclick-close="">
                <!-- START sidebar nav-->
                <ul class="sidebar-nav">
                    <!-- START user info-->
                    <li class="has-user-block">
                        <div class="collapse" id="user-block">
                            <div class="item user-block">
                                <!-- User picture-->
                                <div class="user-block-picture">
                                    <div class="user-block-status">
                                        <img class="img-thumbnail rounded-circle" src="/admin/img/user/02.jpg" alt="Avatar" width="60" height="60">
                                        <div class="circle bg-success circle-lg"></div>
                                    </div>
                                </div>
                                <!-- Name and Job-->
                                <div class="user-block-info">
                                    <span class="user-block-name">سلام، رضا</span>
                                    <span class="user-block-role">طراح رابط کاربری</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END user info-->
                    <!-- Iterates over all sidebar items-->
                    <li class="nav-heading ">
                        <span data-localize="sidebar.heading.HEADER">منوی اصلی</span>
                    </li>
                    <li class=" ">
                        <a href="/admin/#dashboard" title="Dashboard" data-toggle="collapse">
                            <div class="float-right badge badge-success">3</div>
                            <em class="icon-speedometer"></em>
                            <span data-localize="sidebar.nav.DASHBOARD">داشبورد</span>
                        </a>
                        <ul class="sidebar-nav sidebar-subnav collapse" id="dashboard">
                            <li class="sidebar-subnav-header">داشبورد</li>
                            <li class=" ">
                                <a href="/admin/dashboard.html" title="Dashboard v1">
                                    <span>داشبورد v1</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/dashboard_v2.html" title="Dashboard v2">
                                    <span>داشبورد v2</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/dashboard_v3.html" title="Dashboard v3">
                                    <span>داشبورد v3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/admin/widgets.html" title="Widgets">
                            <div class="float-right badge badge-success">30</div>
                            <em class="icon-grid"></em>
                            <span data-localize="sidebar.nav.WIDGETS">ویجت ها</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/admin/#layout" title="Layouts" data-toggle="collapse">
                            <em class="icon-layers"></em>
                            <span> طرح بندی</span>
                        </a>
                        <ul class="sidebar-nav sidebar-subnav collapse" id="layout">
                            <li class="sidebar-subnav-header"> طرح بندی</li>
                            <li class=" ">
                                <a href="/admin/dashboard_h.html" title="Horizontal">
                                    <span>افقی</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-heading ">
                        <span data-localize="sidebar.heading.COMPONENTS"> کامپوننت ها</span>
                    </li>
                    <li class=" ">
                        <a href="/admin/#elements" title="Elements" data-toggle="collapse">
                            <em class="icon-chemistry"></em>
                            <span data-localize="sidebar.nav.element.ELEMENTS">عناصر صفحه</span>
                        </a>
                        <ul class="sidebar-nav sidebar-subnav collapse" id="elements">
                            <li class="sidebar-subnav-header">عناصر صفحه</li>
                            <li class=" ">
                                <a href="/admin/buttons.html" title="Buttons">
                                    <span data-localize="sidebar.nav.element.BUTTON">دکمه ها</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/notifications.html" title="Notifications">
                                    <span data-localize="sidebar.nav.element.NOTIFICATION"> اطلاعیه ها</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/sweetalert.html" title="Sweet Alert">
                                    <span>هشدار</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/carousel.html" title="Carousel">
                                    <span data-localize="sidebar.nav.element.INTERACTION">اسلایدر</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/spinners.html" title="Spinners">
                                    <span data-localize="sidebar.nav.element.SPINNER">اسپینر</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/animations.html" title="Animations">
                                    <span data-localize="sidebar.nav.element.ANIMATION">انیمیشن ها</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/dropdown-animations.html" title="Dropdown">
                                    <span data-localize="sidebar.nav.element.DROPDOWN">دراپ دان</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/nestable.html" title="Nestable">
                                    <span>Nestable</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/sortable.html" title="Sortable">
                                    <span>Sortable</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/cards.html" title="Cards">
                                    <span data-localize="sidebar.nav.element.CARDS">کارتها</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/portlets.html" title="Portlets">
                                    <span data-localize="sidebar.nav.element.PORTLET">پورتلت</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/grid.html" title="Grid">
                                    <span data-localize="sidebar.nav.element.GRID">Grid</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/grid-masonry.html" title="Grid Masonry">
                                    <span data-localize="sidebar.nav.element.GRID_MASONRY">Grid Masonry</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/typo.html" title="Typography">
                                    <span data-localize="sidebar.nav.element.TYPO">Typography</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/icons-font.html" title="Font Icons">
                                    <div class="float-right badge badge-success">+400</div>
                                    <span data-localize="sidebar.nav.element.FONT_ICON">Font Icons</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/icons-weather.html" title="Weather Icons">
                                    <div class="float-right badge badge-success">+100</div>
                                    <span data-localize="sidebar.nav.element.WEATHER_ICON">Weather Icons</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/colors.html" title="Colors">
                                    <span data-localize="sidebar.nav.element.COLOR">Colors</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/admin/#forms" title="Forms" data-toggle="collapse">
                            <em class="icon-note"></em>
                            <span data-localize="sidebar.nav.form.FORM">فرم ها</span>
                        </a>
                        <ul class="sidebar-nav sidebar-subnav collapse" id="forms">
                            <li class="sidebar-subnav-header">فرم ها</li>
                            <li class=" ">
                                <a href="/admin/form-standard.html" title="Standard">
                                    <span data-localize="sidebar.nav.form.STANDARD"> استاندارد</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/form-extended.html" title="Extended">
                                    <span data-localize="sidebar.nav.form.EXTENDED">توسعه داده شده</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/form-validation.html" title="Validation">
                                    <span data-localize="sidebar.nav.form.VALIDATION">اعتبارسنجی</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/form-wizard.html" title="Wizard">
                                    <span>مرحله ای</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/form-upload.html" title="Upload">

                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/form-xeditable.html" title="xEditable">
                                    <span>xEditable</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/form-imagecrop.html" title="Cropper">

                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/admin/#charts" title="Charts" data-toggle="collapse">
                            <em class="icon-graph"></em>
                            <span data-localize="sidebar.nav.chart.CHART">نمودارها</span>
                        </a>
                        <ul class="sidebar-nav sidebar-subnav collapse" id="charts">
                            <li class="sidebar-subnav-header">نمودارها</li>
                            <li class=" ">
                                <a href="/admin/chart-flot.html" title="Flot">
                                    <span data-localize="sidebar.nav.chart.FLOT">Flot</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/chart-radial.html" title="Radial">
                                    <span data-localize="sidebar.nav.chart.RADIAL">Radial</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/chart-js.html" title="Chart JS">
                                    <span>Chart JS</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/chart-rickshaw.html" title="Rickshaw">
                                    <span>Rickshaw</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/chart-morris.html" title="MorrisJS">
                                    <span>MorrisJS</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/chart-chartist.html" title="Chartist">
                                    <span>Chartist</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/admin/#tables" title="Tables" data-toggle="collapse">
                            <em class="icon-grid"></em>
                            <span data-localize="sidebar.nav.table.TABLE">جداول</span>
                        </a>
                        <ul class="sidebar-nav sidebar-subnav collapse" id="tables">
                            <li class="sidebar-subnav-header">جداول</li>
                            <li class=" ">
                                <a href="/admin/table-standard.html" title="Standard">
                                    <span data-localize="sidebar.nav.table.STANDARD"> استاندارد</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/table-extended.html" title="Extended">
                                    <span data-localize="sidebar.nav.table.EXTENDED">توسعه داده شده</span>
                                </a>
                            </li>
                            <li class=" active">
                                <a href="/admin/table-datatable.html" title="DataTables">
                                    <span data-localize="sidebar.nav.table.DATATABLE">DataTables</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/table-bootgrid.html" title="BootGrid">
                                    <span>BootGrid</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/admin/#maps" title="Maps" data-toggle="collapse">
                            <em class="icon-map"></em>
                            <span data-localize="sidebar.nav.map.MAP">Maps</span>
                        </a>
                        <ul class="sidebar-nav sidebar-subnav collapse" id="maps">
                            <li class="sidebar-subnav-header">Maps</li>
                            <li class=" ">
                                <a href="/admin/maps-google.html" title="Google Maps">

                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/maps-vector.html" title="Vector Maps">
                                    <span data-localize="sidebar.nav.map.VECTOR">Vector Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-heading ">
                        <span data-localize="sidebar.heading.MORE">More</span>
                    </li>
                    <li class=" ">
                        <a href="/admin/#pages" title="Pages" data-toggle="collapse">
                            <em class="icon-doc"></em>
                            <span data-localize="sidebar.nav.pages.PAGES">صفحات</span>
                        </a>
                        <ul class="sidebar-nav sidebar-subnav collapse" id="pages">
                            <li class="sidebar-subnav-header">صفحات</li>
                            <li class=" ">
                                <a href="/admin/login.html" title="Login">
                                    <span data-localize="sidebar.nav.pages.LOGIN">ورود</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/register.html" title="Sign up">
                                    <span data-localize="sidebar.nav.pages.REGISTER">عضویت</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/recover.html" title="Recover Password">
                                    <span data-localize="sidebar.nav.pages.RECOVER">بازیابی رمز عبور</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/lock.html" title="Lock">
                                    <span data-localize="sidebar.nav.pages.LOCK">قفل صفحه</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/template.html" title="قالب شروع ابتدایی">
                                    <span data-localize="sidebar.nav.pages.STARTER">قالب شروع ابتدایی</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/404.html" title="404">
                                    <span>404</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/500.html" title="500">
                                    <span>500</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/maintenance.html" title="Maintenance">
                                    <span>در حال بروزرسانی</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/admin/#extras" title="Extras" data-toggle="collapse">
                            <em class="icon-cup"></em>
                            <span data-localize="sidebar.nav.extra.EXTRA">صفحات بیشتر</span>
                        </a>
                        <ul class="sidebar-nav sidebar-subnav collapse" id="extras">
                            <li class="sidebar-subnav-header">Extras</li>
                            <li class=" ">
                                <a href="/admin/#blog" title="Blog" data-toggle="collapse">
                                    <em class="fas fa-angle-right"></em>
                                    <span>بلاگ</span>
                                </a>
                                <ul class="sidebar-nav sidebar-subnav collapse" id="blog">
                                    <li class="sidebar-subnav-header">بلاگ</li>
                                    <li class=" ">
                                        <a href="/admin/blog.html" title="List">
                                            <span>لیست مطالب</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="/admin/blog-post.html" title="Post">
                                            <span>پست بلاگ</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="/admin/blog-articles.html" title="Articles">
                                            <span>مقالات</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="/admin/blog-article-view.html" title="Article View">
                                            <span> صفحه مقاله</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/admin/#ecommerce" title="eCommerce" data-toggle="collapse">
                                    <em class="fas fa-angle-right"></em>
                                    <span>eCommerce</span>
                                </a>
                                <ul class="sidebar-nav sidebar-subnav collapse" id="ecommerce">
                                    <li class="sidebar-subnav-header">eCommerce</li>
                                    <li class=" ">
                                        <a href="/admin/ecommerce-orders.html" title="Orders">
                                            <div class="float-right badge badge-success">10</div>
                                            <span>Orders</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="/admin/ecommerce-order-view.html" title="Order View">
                                            <span>Order View</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="/admin/ecommerce-products.html" title="Products">
                                            <span>Products</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="/admin/ecommerce-product-view.html" title="Product View">
                                            <span>Product View</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="/admin/ecommerce-checkout.html" title="Checkout">
                                            <span>Checkout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/admin/#forum" title="Forum" data-toggle="collapse">
                                    <em class="fas fa-angle-right"></em>
                                    <span>فروم</span>
                                </a>
                                <ul class="sidebar-nav sidebar-subnav collapse" id="forum">
                                    <li class="sidebar-subnav-header">Forum</li>
                                    <li class=" ">
                                        <a href="/admin/forum-categories.html" title="Categories">
                                            <span>دسته بندی</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="/admin/forum-topics.html" title="Topics">
                                            <span>موضوعات</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="/admin/forum-discussion.html" title="Discussion">
                                            <span>گفتگوها</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/admin/contacts.html" title="Contacts">
                                    <span>ارتباط با ما</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/contact-details.html" title="جزییات ارتباط با ما">
                                    <span>جزییات ارتباط با ما</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/projects.html" title="Projects">
                                    <span>پروژه ها</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/project-details.html" title="Projects details">
                                    <span>جزییات پروژه</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/team-viewer.html" title="Team viewer">
                                    <span>Team viewer</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/social-board.html" title="Social board">
                                    <span>Social board</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/vote-links.html" title="Vote links">
                                    <span>Vote links</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/bug-tracker.html" title="Bug tracker">
                                    <span>Bug tracker</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/faq.html" title="FAQ">
                                    <span>FAQ</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/help-center.html" title="Help Center">
                                    <span>Help Center</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/followers.html" title="Followers">
                                    <span>دنبال کننده </span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/settings.html" title="Settings">
                                    <span> تنظیمات</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/plans.html" title="Plans">
                                    <span>Plans</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/file-manager.html" title="File manager">
                                    <span>File manager</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/mailbox.html" title="Mailbox">
                                    <span data-localize="sidebar.nav.extra.MAILBOX">Mailbox</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/timeline.html" title="Timeline">
                                    <span data-localize="sidebar.nav.extra.TIMELINE">Timeline</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/calendar.html" title="Calendar">
                                    <span data-localize="sidebar.nav.extra.CALENDAR">Calendar</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/invoice.html" title="Invoice">
                                    <span data-localize="sidebar.nav.extra.INVOICE">Invoice</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/search.html" title="Search">
                                    <span data-localize="sidebar.nav.extra.SEARCH">Search</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/todo.html" title="Todo List">
                                    <span data-localize="sidebar.nav.extra.TODO">Todo List</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="/admin/profile.html" title="Profile">
                                    <span data-localize="sidebar.nav.extra.PROFILE">پروفایل</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/admin/#multilevel" title="Multilevel" data-toggle="collapse">
                            <em class="far fa-folder-open"></em>
                            <span>Multilevel</span>
                        </a>
                        <ul class="sidebar-nav sidebar-subnav collapse" id="multilevel">
                            <li class="sidebar-subnav-header">Multilevel</li>
                            <li class=" ">
                                <a href="/admin/#level1" title="Level 1" data-toggle="collapse">
                                    <span>Level 1</span>
                                </a>
                                <ul class="sidebar-nav sidebar-subnav collapse" id="level1">
                                    <li class="sidebar-subnav-header">Level 1</li>
                                    <li class=" ">
                                        <a href="/admin/multilevel-1.html" title="Level1 Item">
                                            <span>Level1 Item</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="/admin/#level2" title="Level 2" data-toggle="collapse">
                                            <span>Level 2</span>
                                        </a>
                                        <ul class="sidebar-nav sidebar-subnav collapse" id="level2">
                                            <li class="sidebar-subnav-header">Level 2</li>
                                            <li class=" ">
                                                <a href="/admin/#level3" title="Level 3" data-toggle="collapse">
                                                    <span>Level 3</span>
                                                </a>
                                                <ul class="sidebar-nav sidebar-subnav collapse" id="level3">
                                                    <li class="sidebar-subnav-header">Level 3</li>
                                                    <li class=" ">
                                                        <a href="/admin/multilevel-3.html" title="Level3 Item">
                                                            <span>Level3 Item</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END sidebar nav-->
            </nav>
        </div>
        <!-- END Sidebar (left)-->
    </aside>
    <!-- offsidebar-->
    <aside class="offsidebar d-none">
        <!-- START Off Sidebar (right)-->
        <nav>
            <div role="tabpanel">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="/admin/#app-settings" aria-controls="app-settings" role="tab" data-toggle="tab">
                            <em class="icon-equalizer fa-lg"></em>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="/admin/#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab">
                            <em class="icon-user fa-lg"></em>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="app-settings" role="tabpanel">
                        <h3 class="text-center text-thin mt-4"> تنظیمات</h3>
                        <div class="p-2">
                            <h4 class="text-muted text-thin">تم ها</h4>
                            <div class="row row-flush mb-2">
                                <div class="col mb-2">
                                    <div class="setting-color">
                                        <label data-load-css="css/theme-a.css">
                                            <input type="radio" name="setting-theme" checked="checked">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-info"></span>
                                       <span class="color bg-info-light"></span>
                                    </span>
                                            <span class="color bg-white"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="setting-color">
                                        <label data-load-css="css/theme-b.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-green"></span>
                                       <span class="color bg-green-light"></span>
                                    </span>
                                            <span class="color bg-white"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="setting-color">
                                        <label data-load-css="css/theme-c.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-purple"></span>
                                       <span class="color bg-purple-light"></span>
                                    </span>
                                            <span class="color bg-white"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="setting-color">
                                        <label data-load-css="css/theme-d.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-danger"></span>
                                       <span class="color bg-danger-light"></span>
                                    </span>
                                            <span class="color bg-white"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-flush mb-2">
                                <div class="col mb-2">
                                    <div class="setting-color">
                                        <label data-load-css="css/theme-e.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-info-dark"></span>
                                       <span class="color bg-info"></span>
                                    </span>
                                            <span class="color bg-gray-dark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="setting-color">
                                        <label data-load-css="css/theme-f.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-green-dark"></span>
                                       <span class="color bg-green"></span>
                                    </span>
                                            <span class="color bg-gray-dark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="setting-color">
                                        <label data-load-css="css/theme-g.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-purple-dark"></span>
                                       <span class="color bg-purple"></span>
                                    </span>
                                            <span class="color bg-gray-dark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="setting-color">
                                        <label data-load-css="css/theme-h.css">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-danger-dark"></span>
                                       <span class="color bg-danger"></span>
                                    </span>
                                            <span class="color bg-gray-dark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <h4 class="text-muted text-thin">Layout</h4>
                            <div class="clearfix">
                                <p class="float-left">Fixed</p>
                                <div class="float-right">
                                    <label class="switch">
                                        <input id="chk-fixed" type="checkbox" data-toggle-state="layout-fixed">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix">
                                <p class="float-left">Boxed</p>
                                <div class="float-right">
                                    <label class="switch">
                                        <input id="chk-boxed" type="checkbox" data-toggle-state="layout-boxed">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix">
                                <p class="float-left">RTL</p>
                                <div class="float-right">
                                    <label class="switch">
                                        <input id="chk-rtl" type="checkbox" checked="checked">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <h4 class="text-muted text-thin">Aside</h4>
                            <div class="clearfix">
                                <p class="float-left">Collapsed</p>
                                <div class="float-right">
                                    <label class="switch">
                                        <input id="chk-collapsed" type="checkbox" data-toggle-state="aside-collapsed">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix">
                                <p class="float-left">Collapsed Text</p>
                                <div class="float-right">
                                    <label class="switch">
                                        <input id="chk-collapsed-text" type="checkbox" data-toggle-state="aside-collapsed-text">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix">
                                <p class="float-left">Float</p>
                                <div class="float-right">
                                    <label class="switch">
                                        <input id="chk-float" type="checkbox" data-toggle-state="aside-float">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix">
                                <p class="float-left">Hover</p>
                                <div class="float-right">
                                    <label class="switch">
                                        <input id="chk-hover" type="checkbox" data-toggle-state="aside-hover">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix">
                                <p class="float-left">Show Scrollbar</p>
                                <div class="float-right">
                                    <label class="switch">
                                        <input id="chk-scroll" type="checkbox" data-toggle-state="show-scrollbar" data-target=".sidebar">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="app-chat" role="tabpanel">
                        <h3 class="text-center text-thin mt-4">Connections</h3>
                        <div class="list-group">
                            <!-- START list title-->
                            <div class="list-group-item border-0">
                                <small class="text-muted">ONLINE</small>
                            </div>
                            <!-- END list title-->
                            <div class="list-group-item list-group-item-action border-0">
                                <div class="media">
                                    <img class="align-self-center mr-3 rounded-circle thumb48" src="/admin/img/user/05.jpg" alt="Image">
                                    <div class="media-body text-truncate">
                                        <a href="/admin/#">
                                            <strong>Juan Sims</strong>
                                        </a>
                                        <br>
                                        <small class="text-muted">Designeer</small>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="circle bg-success circle-lg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action border-0">
                                <div class="media">
                                    <img class="align-self-center mr-3 rounded-circle thumb48" src="/admin/img/user/06.jpg" alt="Image">
                                    <div class="media-body text-truncate">
                                        <a href="/admin/#">
                                            <strong>Maureen Jenkins</strong>
                                        </a>
                                        <br>
                                        <small class="text-muted">Designeer</small>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="circle bg-success circle-lg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action border-0">
                                <div class="media">
                                    <img class="align-self-center mr-3 rounded-circle thumb48" src="/admin/img/user/07.jpg" alt="Image">
                                    <div class="media-body text-truncate">
                                        <a href="/admin/#">
                                            <strong>Billie Dunn</strong>
                                        </a>
                                        <br>
                                        <small class="text-muted">Designeer</small>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="circle bg-danger circle-lg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action border-0">
                                <div class="media">
                                    <img class="align-self-center mr-3 rounded-circle thumb48" src="/admin/img/user/08.jpg" alt="Image">
                                    <div class="media-body text-truncate">
                                        <a href="/admin/#">
                                            <strong>Tomothy Roberts</strong>
                                        </a>
                                        <br>
                                        <small class="text-muted">Designeer</small>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="circle bg-warning circle-lg"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- START list title-->
                            <div class="list-group-item border-0">
                                <small class="text-muted">OFFLINE</small>
                            </div>
                            <!-- END list title-->
                            <div class="list-group-item list-group-item-action border-0">
                                <div class="media">
                                    <img class="align-self-center mr-3 rounded-circle thumb48" src="/admin/img/user/09.jpg" alt="Image">
                                    <div class="media-body text-truncate">
                                        <a href="/admin/#">
                                            <strong>Lawrence Robinson</strong>
                                        </a>
                                        <br>
                                        <small class="text-muted">Designeer</small>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="circle bg-warning circle-lg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action border-0">
                                <div class="media">
                                    <img class="align-self-center mr-3 rounded-circle thumb48" src="/admin/img/user/10.jpg" alt="Image">
                                    <div class="media-body text-truncate">
                                        <a href="/admin/#">
                                            <strong>Tyrone Owens</strong>
                                        </a>
                                        <br>
                                        <small class="text-muted">Designeer</small>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="circle bg-warning circle-lg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-4 text-center">
                            <!-- Optional link to list more users-->
                            <a class="btn btn-purple btn-sm" href="/admin/#" title="See more contacts">
                                <strong>بارگذاری بیشتر..</strong>
                            </a>
                        </div>
                        <!-- Extra items-->
                        <div class="px-3 py-2">
                            <p>
                                <small class="text-muted">پایان وظیفه</small>
                            </p>
                            <div class="progress progress-xs m-0">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="sr-only">80% تکمیل شده </span>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2">
                            <p>
                                <small class="text-muted">بارگذاری quota</small>
                            </p>
                            <div class="progress progress-xs m-0">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% تکمیل شده </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END Off Sidebar (right)-->
    </aside>
    <!-- Main section-->
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>Data Tables
                    <small>جداول، یک قدم جلوتر.</small>
                </div>
            </div>
            <div class="container-fluid">
                <!-- DATATABLE DEMO 1-->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Zero configuration</div>
                        <div class="text-sm">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: $().DataTable();.</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped my-4 w-100" id="datatable1">
                            <thead>
                            <tr>
                                <th data-priority="1">Engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th class="sort-numeric">Engine version</th>
                                <th class="sort-alpha" data-priority="2">CSS grade</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td>4</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Trident</td>
                                <td>Internet Explorer 5.0</td>
                                <td>Win 95+</td>
                                <td>5</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 5.5</td>
                                <td>Win 95+</td>
                                <td>5.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 6</td>
                                <td>Win 98+</td>
                                <td>6</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td>7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Trident</td>
                                <td>AOL browser (AOL desktop)</td>
                                <td>Win XP</td>
                                <td>6</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Firefox 2.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Firefox 3.0</td>
                                <td>Win 2k+ / OSX.3+</td>
                                <td>1.9</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Camino 1.0</td>
                                <td>OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Camino 1.5</td>
                                <td>OSX.3+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Netscape 7.2</td>
                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Netscape Browser 8</td>
                                <td>Win 98SE+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Netscape Navigator 9</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.1</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.2</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.2</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.3</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.3</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.4</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.4</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.5</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.6</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.6</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.7</td>
                                <td>Win 98+ / OSX.1+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.8</td>
                                <td>Win 98+ / OSX.1+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Seamonkey 1.1</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Epiphany 2.20</td>
                                <td>Gnome</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>Safari 1.2</td>
                                <td>OSX.3</td>
                                <td>125.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>Safari 1.3</td>
                                <td>OSX.3</td>
                                <td>312.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>Safari 2.0</td>
                                <td>OSX.4+</td>
                                <td>419.3</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>Safari 3.0</td>
                                <td>OSX.4+</td>
                                <td>522.1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>OmniWeb 5.5</td>
                                <td>OSX.4+</td>
                                <td>420</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>iPod Touch / iPhone</td>
                                <td>iPod</td>
                                <td>420.1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>S60</td>
                                <td>S60</td>
                                <td>413</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 7.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 7.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 8.0</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 8.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 9.0</td>
                                <td>Win 95+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 9.2</td>
                                <td>Win 88+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 9.5</td>
                                <td>Win 88+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera for Wii</td>
                                <td>Wii</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Nokia N800</td>
                                <td>N800</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Nintendo DS browser</td>
                                <td>Nintendo DS</td>
                                <td>8.5</td>
                                <td>C/A<sup>1</sup></td>
                            </tr>
                            <tr class="gradeC">
                                <td>KHTML</td>
                                <td>Konqureror 3.1</td>
                                <td>KDE 3.1</td>
                                <td>3.1</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td>KHTML</td>
                                <td>Konqureror 3.3</td>
                                <td>KDE 3.3</td>
                                <td>3.3</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>KHTML</td>
                                <td>Konqureror 3.5</td>
                                <td>KDE 3.5</td>
                                <td>3.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Tasman</td>
                                <td>Internet Explorer 4.5</td>
                                <td>Mac OS 8-9</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Tasman</td>
                                <td>Internet Explorer 5.1</td>
                                <td>Mac OS 7.6-9</td>
                                <td>1</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Tasman</td>
                                <td>Internet Explorer 5.2</td>
                                <td>Mac OS 8-X</td>
                                <td>1</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Misc</td>
                                <td>NetFront 3.1</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Misc</td>
                                <td>NetFront 3.4</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Dillo 0.8</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Links</td>
                                <td>Text only</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Lynx</td>
                                <td>Text only</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Misc</td>
                                <td>IE Mobile</td>
                                <td>Windows Mobile 6</td>
                                <td>-</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td>-</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeU">
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td>-</td>
                                <td>U</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- DATATABLE DEMO 2-->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Export Buttons</div>
                        <div class="text-sm">When displaying data in a DataTable, it can often be useful to your end users for them to have the ability to obtain the data from the DataTable, extracting it into a file for them to use locally. This can be done with either HTML5
                            based buttons or Flash buttons.</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped my-4 w-100" id="datatable2">
                            <thead>
                            <tr>
                                <th data-priority="1">Engine</th>
                                <th>Browser</th>
                                <th>Platform</th>
                                <th class="sort-numeric">Engine version</th>
                                <th class="sort-alpha" data-priority="2">CSS grade</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td>4</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Trident</td>
                                <td>Internet Explorer 5.0</td>
                                <td>Win 95+</td>
                                <td>5</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 5.5</td>
                                <td>Win 95+</td>
                                <td>5.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 6</td>
                                <td>Win 98+</td>
                                <td>6</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td>7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Trident</td>
                                <td>AOL browser (AOL desktop)</td>
                                <td>Win XP</td>
                                <td>6</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Firefox 2.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Firefox 3.0</td>
                                <td>Win 2k+ / OSX.3+</td>
                                <td>1.9</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Camino 1.0</td>
                                <td>OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Camino 1.5</td>
                                <td>OSX.3+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Netscape 7.2</td>
                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Netscape Browser 8</td>
                                <td>Win 98SE+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Netscape Navigator 9</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.1</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.2</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.2</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.3</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.3</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.4</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.4</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.5</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.6</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.6</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.7</td>
                                <td>Win 98+ / OSX.1+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.8</td>
                                <td>Win 98+ / OSX.1+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Seamonkey 1.1</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Epiphany 2.20</td>
                                <td>Gnome</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>Safari 1.2</td>
                                <td>OSX.3</td>
                                <td>125.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>Safari 1.3</td>
                                <td>OSX.3</td>
                                <td>312.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>Safari 2.0</td>
                                <td>OSX.4+</td>
                                <td>419.3</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>Safari 3.0</td>
                                <td>OSX.4+</td>
                                <td>522.1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>OmniWeb 5.5</td>
                                <td>OSX.4+</td>
                                <td>420</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>iPod Touch / iPhone</td>
                                <td>iPod</td>
                                <td>420.1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>S60</td>
                                <td>S60</td>
                                <td>413</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 7.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 7.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 8.0</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 8.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 9.0</td>
                                <td>Win 95+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 9.2</td>
                                <td>Win 88+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 9.5</td>
                                <td>Win 88+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera for Wii</td>
                                <td>Wii</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Nokia N800</td>
                                <td>N800</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Nintendo DS browser</td>
                                <td>Nintendo DS</td>
                                <td>8.5</td>
                                <td>C/A<sup>1</sup></td>
                            </tr>
                            <tr class="gradeC">
                                <td>KHTML</td>
                                <td>Konqureror 3.1</td>
                                <td>KDE 3.1</td>
                                <td>3.1</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td>KHTML</td>
                                <td>Konqureror 3.3</td>
                                <td>KDE 3.3</td>
                                <td>3.3</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>KHTML</td>
                                <td>Konqureror 3.5</td>
                                <td>KDE 3.5</td>
                                <td>3.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Tasman</td>
                                <td>Internet Explorer 4.5</td>
                                <td>Mac OS 8-9</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Tasman</td>
                                <td>Internet Explorer 5.1</td>
                                <td>Mac OS 7.6-9</td>
                                <td>1</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Tasman</td>
                                <td>Internet Explorer 5.2</td>
                                <td>Mac OS 8-X</td>
                                <td>1</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Misc</td>
                                <td>NetFront 3.1</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Misc</td>
                                <td>NetFront 3.4</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Dillo 0.8</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Links</td>
                                <td>Text only</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Lynx</td>
                                <td>Text only</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Misc</td>
                                <td>IE Mobile</td>
                                <td>Windows Mobile 6</td>
                                <td>-</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td>-</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeU">
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td>-</td>
                                <td>U</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- DATATABLE DEMO 3-->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Key Table</div>
                        <div class="text-sm">KeyTable allows you to use keyboard navigation on a DataTables enhanced table, like an Excel spreadsheet.</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped my-4 w-100" id="datatable3">
                            <thead>
                            <tr>
                                <th data-priority="1">Engine</th>
                                <th>Browser</th>
                                <th>Platform</th>
                                <th class="sort-numeric">Engine version</th>
                                <th class="sort-alpha" data-priority="2">CSS grade</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="gradeX">
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td>4</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Trident</td>
                                <td>Internet Explorer 5.0</td>
                                <td>Win 95+</td>
                                <td>5</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 5.5</td>
                                <td>Win 95+</td>
                                <td>5.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 6</td>
                                <td>Win 98+</td>
                                <td>6</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Trident</td>
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td>7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Trident</td>
                                <td>AOL browser (AOL desktop)</td>
                                <td>Win XP</td>
                                <td>6</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Firefox 2.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Firefox 3.0</td>
                                <td>Win 2k+ / OSX.3+</td>
                                <td>1.9</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Camino 1.0</td>
                                <td>OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Camino 1.5</td>
                                <td>OSX.3+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Netscape 7.2</td>
                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Netscape Browser 8</td>
                                <td>Win 98SE+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Netscape Navigator 9</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.1</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.2</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.2</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.3</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.3</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.4</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.4</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.5</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.6</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.6</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.7</td>
                                <td>Win 98+ / OSX.1+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Mozilla 1.8</td>
                                <td>Win 98+ / OSX.1+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Seamonkey 1.1</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gecko</td>
                                <td>Epiphany 2.20</td>
                                <td>Gnome</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>Safari 1.2</td>
                                <td>OSX.3</td>
                                <td>125.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>Safari 1.3</td>
                                <td>OSX.3</td>
                                <td>312.8</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>Safari 2.0</td>
                                <td>OSX.4+</td>
                                <td>419.3</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>Safari 3.0</td>
                                <td>OSX.4+</td>
                                <td>522.1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>OmniWeb 5.5</td>
                                <td>OSX.4+</td>
                                <td>420</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>iPod Touch / iPhone</td>
                                <td>iPod</td>
                                <td>420.1</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Webkit</td>
                                <td>S60</td>
                                <td>S60</td>
                                <td>413</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 7.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 7.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 8.0</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 8.5</td>
                                <td>Win 95+ / OSX.2+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 9.0</td>
                                <td>Win 95+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 9.2</td>
                                <td>Win 88+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera 9.5</td>
                                <td>Win 88+ / OSX.3+</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Opera for Wii</td>
                                <td>Wii</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Nokia N800</td>
                                <td>N800</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Presto</td>
                                <td>Nintendo DS browser</td>
                                <td>Nintendo DS</td>
                                <td>8.5</td>
                                <td>C/A<sup>1</sup></td>
                            </tr>
                            <tr class="gradeC">
                                <td>KHTML</td>
                                <td>Konqureror 3.1</td>
                                <td>KDE 3.1</td>
                                <td>3.1</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td>KHTML</td>
                                <td>Konqureror 3.3</td>
                                <td>KDE 3.3</td>
                                <td>3.3</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeA">
                                <td>KHTML</td>
                                <td>Konqureror 3.5</td>
                                <td>KDE 3.5</td>
                                <td>3.5</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Tasman</td>
                                <td>Internet Explorer 4.5</td>
                                <td>Mac OS 8-9</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Tasman</td>
                                <td>Internet Explorer 5.1</td>
                                <td>Mac OS 7.6-9</td>
                                <td>1</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Tasman</td>
                                <td>Internet Explorer 5.2</td>
                                <td>Mac OS 8-X</td>
                                <td>1</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Misc</td>
                                <td>NetFront 3.1</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeA">
                                <td>Misc</td>
                                <td>NetFront 3.4</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>A</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Dillo 0.8</td>
                                <td>Embedded devices</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Links</td>
                                <td>Text only</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeX">
                                <td>Misc</td>
                                <td>Lynx</td>
                                <td>Text only</td>
                                <td>-</td>
                                <td>X</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Misc</td>
                                <td>IE Mobile</td>
                                <td>Windows Mobile 6</td>
                                <td>-</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeC">
                                <td>Misc</td>
                                <td>PSP browser</td>
                                <td>PSP</td>
                                <td>-</td>
                                <td>C</td>
                            </tr>
                            <tr class="gradeU">
                                <td>Other browsers</td>
                                <td>All others</td>
                                <td>-</td>
                                <td>-</td>
                                <td>U</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page footer-->
    <footer class="footer-container">
        <span>&copy; 2018 - Angle</span>
    </footer>
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<!-- MODERNIZR-->
<script src="/admin/vendor/modernizr/modernizr.custom.js"></script>
<!-- JQUERY-->
<script src="/admin/vendor/jquery/dist/jquery.js"></script>
<!-- BOOTSTRAP-->
<script src="/admin/vendor/popper.js/dist/umd/popper.js"></script>
<script src="/admin/vendor/bootstrap/dist/js/bootstrap.js"></script>
<!-- STORAGE API-->
<script src="/admin/vendor/js-storage/js.storage.js"></script>
<!-- JQUERY EASING-->
<script src="/admin/vendor/jquery.easing/jquery.easing.js"></script>
<!-- ANIMO-->
<script src="/admin/vendor/animo/animo.js"></script>
<!-- SCREENFULL-->
<script src="/admin/vendor/screenfull/dist/screenfull.js"></script>
<!-- LOCALIZE-->
<script src="/admin/vendor/jquery-localize/dist/jquery.localize.js"></script>
<!-- =============== PAGE VENDOR SCRIPTS ===============-->
<!-- Datatables-->
<script src="/admin/vendor/datatables.net/js/jquery.dataTables.js"></script>
<script src="/admin/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
<script src="/admin/vendor/datatables.net-buttons/js/dataTables.buttons.js"></script>
<script src="/admin/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.js"></script>
<script src="/admin/vendor/datatables.net-buttons/js/buttons.colVis.js"></script>
<script src="/admin/vendor/datatables.net-buttons/js/buttons.flash.js"></script>
<script src="/admin/vendor/datatables.net-buttons/js/buttons.html5.js"></script>
<script src="/admin/vendor/datatables.net-buttons/js/buttons.print.js"></script>
<script src="/admin/vendor/datatables.net-keytable/js/dataTables.keyTable.js"></script>
<script src="/admin/vendor/datatables.net-responsive/js/dataTables.responsive.js"></script>
<script src="/admin/vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="/admin/vendor/jszip/dist/jszip.js"></script>
<script src="/admin/vendor/pdfmake/build/pdfmake.js"></script>
<script src="/admin/vendor/pdfmake/build/vfs_fonts.js"></script>
<!-- =============== APP SCRIPTS ===============-->
<script src="/admin/js/app.js"></script>
</body>

</html>