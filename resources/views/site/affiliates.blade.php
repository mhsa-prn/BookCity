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
                        <h1>شرکت های وابسته</h1>
                        <ol class="tg-breadcrumb">
                            <li><a href="{{route('home')}}">خانه</a></li>
                            <li class="tg-active">شرکت های وابسته</li>
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
                                <h4>
                                    اشخاص زیادی در کنار ما هستند که بهتر بتونیم در خدمت رسانی شما حاضر باشیم؛
                                    انتشارات های مختلف نویسندگان و طراحان صفحه،
                                    حتی از گوینده های خوش صدا هم کمک گرفتیم!
                                    <br>
                                    این تیم یک شریک بزرگ داره. حدس میزنی اون کیه؟ آره! خود تو‌...
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
