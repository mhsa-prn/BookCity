<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>کتابخانه - بهترین قالب کتابخانه آنلاین</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/transitions.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/color.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="tg-home tg-homeone">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Wrapper Start
*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <!--************************************
            Header Start
    *************************************-->
    @if (session()->get('success'))
        <div class="alert alert-success text-center">
            {{session()->get('success')}}
        </div>
    @endif
    <header id="tg-header" class="tg-header tg-haslayout">
        <div class="tg-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="tg-addnav">
                            <li>
                                <a href={{Route('contactUs')}}>
                                    <i class="icon-envelope"></i>
                                    <em>ارتباط با ما</em>
                                </a>
                            </li>
                        </ul>
                        @if(auth()->check())
                            <div class="tg-userlogin">
                                <a href="{{route('user.profile')}}">
                                    <span>سلام، {{$user_firstname}}</span>
                                </a>
                            </div>
                        @else
                            <div>
                                <ul class="tg-addnav" style="float: left!important;">
                                    <li>
                                        <a href={{Route('register')}}>

                                            <em>ثبت نام</em>
                                        </a>
                                    </li>

                                    <li>
                                        <a href={{Route('login')}}>

                                            <em>ورود</em>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-middlecontainer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <strong class="tg-logo"><a href="index-2.html"><img src="/images/logo.png"
                                                                            alt="company name here"></a></strong>


                        @if(auth()->check())
                            <div class="tg-wishlistandcart">
                                <div class="dropdown tg-themedropdown tg-wishlistdropdown">
                                    <a href="{{route('bookmarks')}}" id="tg-wishlisst" class="tg-btnthemedropdown">

                                        <span class="tg-themebadge">{{$bookmarks_count}}</span>
                                        <i class="icon-heart"></i>
                                        <span>علاقه‌مندی‌ها</span>
                                    </a>

                                </div>
                                <div class="dropdown tg-themedropdown tg-minicartdropdown">
                                    <a href="javascript:void(0);" id="tg-minicart" class="tg-btnthemedropdown"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span
                                        class="tg-themebadge">{{session()->get('my_cart_total_info') ? session()->get('my_cart_total_info')['total_count'] :  0}}</span>
                                        <i class="icon-cart"></i>
                                        <span>{{session()->get('my_cart_total_info') ? session()->get('my_cart_total_info')['total_price'] :  0}} تومان</span>
                                    </a>
                                    <div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-minicart">
                                        <div class="tg-minicartbody">
                                            @if(session()->get('my_cart'))
                                                @foreach(session()->get('my_cart') as $Cart)
                                                    <div class="tg-minicarproduct">
                                                        <figure>
                                                            <img src={{$Cart['image']}} alt="image" width="70"
                                                                 height="70">
                                                        </figure>
                                                        <div class="tg-minicarproductdata">
                                                            <h5><a href="javascript:void(0);">{{$Cart['title']}}
                                                                    (تعداد: {{$Cart['count']}})</a></h5>
                                                            <h6><a href="javascript:void(0);">{{$Cart['price']}}
                                                                    تومان</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                        <div class="tg-minicartfoot">
                                            <a class="tg-btnemptycart" href={{Route('destroyCart')}}>
                                                <i class="fa fa-trash-o"></i>
                                                <span>پاک کردن سبد</span>
                                            </a>
                                            <span class="tg-subtotal">جمع کل: <strong>{{session()->get('my_cart_total_info') ? session()->get('my_cart_total_info')['total_price'] :  0}} تومان</strong></span>
                                            <div class="tg-btns">
                                                <a class="tg-btn tg-active" href={{route('cart')}}>مشاهده سبد خرید</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif


                        <div class="tg-searchbox">
                            <form action="/search" class="tg-formtheme tg-formsearch">
                                <fieldset>
                                    <input type="text" name="title" class="typeahead form-control"
                                           placeholder=" عنوان کتاب را وارد کنید...">
                                    <button type="submit"><i class="icon-magnifier"></i></button>
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="tg-navigationarea">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <nav id="tg-nav" class="tg-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#tg-navigation" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                <ul>
                                    <li class="menu-item-has-children menu-item-has-mega-menu">
                                        <a href="javascript:void(0);">دسته‌بندی‌ها</a>
                                        <div class="mega-menu">

                                            <ul class="tg-themetabnav">
                                                @foreach($categories as $category)
                                                    <li role="presentation" class="">
                                                        <a href="book?category_id={{$category->id}}"
                                                           role="tab">
                                                            {{$category->title}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>

                                        </div>
                                    </li>
                                    <li class="">
                                        <a href={{Route('home')}}>خانه</a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('author.authorsList')}}">نویسندگان</a>
                                        <ul class="sub-menu">
                                            <li><a href="authors.html">نویسندگان</a></li>

                                        </ul>
                                    </li>
                                    <li><a href={{route('book.booksList')}}>کتاب ها</a></li>

                                    <li><a href={{Route('contactUs')}}>ارتباط با ما</a></li>
                                    <li><a href={{Route('aboutUs')}}>درباره ما</a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->


@yield('body')



<!--************************************
            Footer Start
    *************************************-->
    <footer id="tg-footer" class="tg-footer tg-haslayout">
        <div class="tg-footerarea">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="tg-clientservices">
                            <li class="tg-devlivery">
                                <span class="tg-clientserviceicon"><i class="icon-rocket"></i></span>
                                <div class="tg-titlesubtitle">
                                    <h3>ارسال سریع</h3>
                                    <p>به تمام نقاط</p>
                                </div>
                            </li>
                            <li class="tg-discount">
                                <span class="tg-clientserviceicon"><i class="icon-tag"></i></span>
                                <div class="tg-titlesubtitle">
                                    <h3>تخفیف همیشگی</h3>
                                    <p>برای همه ی محصولات</p>
                                </div>
                            </li>
                            <li class="tg-quality">
                                <span class="tg-clientserviceicon"><i class="icon-leaf"></i></span>
                                <div class="tg-titlesubtitle">
                                    <h3>تضمین کیفیت</h3>
                                    <p>با انتشار بهترین کارها</p>
                                </div>
                            </li>
                            <li class="tg-support">
                                <span class="tg-clientserviceicon"><i class="icon-heart"></i></span>
                                <div class="tg-titlesubtitle">
                                    <h3>پشتیبانی شبانه‌روزی</h3>
                                    <p>خدمت در هر لحظه</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tg-threecolumns">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="tg-footercol">
                                <strong class="tg-logo"><a href="javascript:void(0);"><img src="/images/flogo.png"
                                                                                           alt="image description"></a></strong>
                                <ul class="tg-contactinfo">
                                    <li>
                                        <i class="icon-apartment"></i>
                                        <address>برج کتاب واقع در خیابان رز ، رز 27 ، پ 525</address>
                                    </li>
                                    <li>
                                        <i class="icon-phone-handset"></i>
                                        <span>
												<em>0800 12345 - 678 - 89</em>
												<em>+4 1234 - 4567 - 67</em>
											</span>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i>
                                        <span>ساعت کاری، هر روزه، 9 الا 5 </span>
                                    </li>
                                    <li>
                                        <i class="icon-envelope"></i>
                                        <span>
												<em><a href="mailto:support@domain.com">support@domain.com</a></em>
												<em><a href="mailto:info@domain.com">info@domain.com</a></em>
											</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="tg-footercol tg-widget tg-widgetnavigation">
                                <div class="tg-widgettitle">
                                    <h3>اطلاع رسانی و درباره ما</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        <li><a href={{Route('privacy')}}>حریم شخصی</a></li>
                                        <li><a href={{Route('contactUs')}}>ارتباط با ما</a></li>
                                        <li><a href={{Route('affiliates')}}>شرکت‌های وابسته</a></li>
                                        <li><a href={{Route('goal')}}>هدف و بینش</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href={{Route('aboutUs')}}>داستان ما</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="tg-footercol tg-widget tg-widgettopsellingauthors">
                                <div class="tg-widgettitle">
                                    <h3>نویسندگان برتر</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        @foreach($picked_authors as $picked_author)
                                        <li>
                                            <figure><a href="javascript:void(0);"><img width="50px" height="50px" src="{{$picked_author->image}}" alt="image"></a>
                                            </figure>
                                            <div class="tg-authornamebooks">
                                                <h4><a href="javascript:void(0);">{{$picked_author->name}}</a></h4>
                                                <p>{{$picked_author->published_books}} کتاب منتشرشده</p>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tg-footerbar">
            <a id="tg-btnbacktotop" class="tg-btnbacktotop" href="javascript:void(0);"><i
                    class="icon-chevron-up"></i></a>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <span class="tg-paymenttype"><img src="/images/paymenticon.png" alt="image description"></span>
                        <span class="tg-copyright">1399 - تمامی حقوق محفوظ است</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--************************************
            Footer End
    *************************************-->
</div>
<!--************************************
        Wrapper End
*************************************-->
<script src="/js/vendor/jquery-library.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.vide.min.js"></script>
<script src="/js/countdown.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/parallax.js"></script>
<script src="/js/countTo.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/gmap3.js"></script>
<script src="/js/main.js"></script>
</body>

</html>

@section('homeRoute','<li><a href="javascript:void(0);">خانه</a></li>')
