@extends('layouts.app')
@section('body')

    <!--************************************
				Inner Banner Start
		*************************************-->
    <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-innerbannercontent">
                        <h1>ارتباط با ما</h1>
                        <ol class="tg-breadcrumb">
                            <li><a href="javascript:void(0);">خانه</a></li>
                            <li class="tg-active">ارتباط با ما</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Inner Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                Contact Us Start
        *************************************-->
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-contactus">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <h2><span>سلام</span>با ما در تماس باشید</h2>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div id="tg-locationmap" class="tg-locationmap tg-map"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <form class="tg-formtheme tg-formcontactus">
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="first-name" class="form-control" placeholder="نام * ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="last-name" class="form-control" placeholder=" نام خانوادگی * ">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder=" نام خانوادگی * ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder=" موضوع * ">
                                    </div>
                                    <div class="form-group tg-hastextarea">
                                        <textarea placeholder="نظر"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="tg-btn tg-active">ارسال</button>
                                    </div>
                                </fieldset>
                            </form>
                            <div class="tg-contactdetail">
                                <div class="tg-sectionhead">
                                    <h2>با ما در تماس باشید</h2>
                                </div>
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
                                <ul class="tg-socialicons">
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Contact Us End
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection
