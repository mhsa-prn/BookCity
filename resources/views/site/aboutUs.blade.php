@extends('layouts.app')
@section('body')

    <!--************************************
				Inner Banner Start
		*************************************-->
    <div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100"
         data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-innerbannercontent">
                        <h1>درباره ما</h1>
                        <ol class="tg-breadcrumb">
                            <li><a href="{{route('home')}}">خانه</a></li>
                            <li class="tg-active">درباره ما</li>
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
                                <h2><span>درباره ما</span>سلام!</h2>
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <h4>
                                    ما این سایت رو طراحی کردیم برای دوستداران کتاب و کلمات<br>
صداشون رو میشنوی؟ میخوان باهات حرف بزنند. کلی حرف برای گفتن دارند.<br>
هزاران کتاب هست که منتظرند تو بخونیشون؛ کتاب های فلسفی، تاریخی، علمی و آموزشی و کلی رمان و داستان
 اینجا ایستگاه انتظارشونه
چند لحظه کنارشون بمون و به صداشون گوش بده...<br>
بمون و بخون...
                                </h4>
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
