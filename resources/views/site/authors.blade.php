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
                        <h1>نویسندگان</h1>
                        <ol class="tg-breadcrumb">
                            <li><a href="javascript:void(0);">خانه</a></li>
                            <li class="tg-active">نویسندگان</li>
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
                Authors Start
        *************************************-->
        <div class="tg-authorsgrid">
            <div class="container">
                <div class="row">
                    <div class="tg-authors">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <h2><span>ذهن زیبا پنهان</span>نویسندگان</h2>
                            </div>
                        </div>


                        @foreach($authors as $author)
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="tg-author">
                                    <figure><img src={{$author->image}}
                                                                               alt="imagedescription"></figure>
                                    <div class="tg-authorcontent">
                                        <h2>{{$author->name}}</h2>
                                        <span>{{$author->published_books}} کتاب منتشرشده</span>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!--************************************
                Authors End
        *************************************-->
                        <!--************************************
                                Testimonials Start
                        *************************************-->
                        <section class="tg-parallax tg-bgtestimonials tg-haslayout" data-z-index="-100"
                                 data-appear-top-offset="600" data-parallax="scroll"
                                 data-image-src="images/parallax/bgparallax-05.jpg">
                            <div class="tg-sectionspace tg-haslayout">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
                                            {{--                            quotes--}}
                                            <div id="tg-testimonialsslider" class="tg-testimonialsslider tg-testimonials owl-carousel">
                                                <div class="item tg-testimonial">
                                                    <figure><img src="/storage/my-images/WeIbeCjkMCm6125zRtti9VHUjnwn3IG5mz0lL4VA.jpg" alt="image description"></figure>
                                                    <blockquote><q>.خوشبخت، کسی است که به یکی از این دو چیز دسترسی دارد، یا کتاب های خوب یا دوستانی که اهل کتاب باشند</q></blockquote>
                                                    <div class="tg-testimonialauthor">
                                                        <h3>ویکتور هوگو</h3>

                                                    </div>
                                                </div>
                                                <div class="item tg-testimonial">
                                                    <figure><img src="/storage/my-images/MQpA5YXPbEfmZ3Twt25KKw6zKCHadPtczzZ5A12N.jpg" alt="image description"></figure>
                                                    <blockquote><q>
                                                            کتاب را حافظه بشریت خوانده‌اند. مجموعه دانش و معارف تاریخ مدّون چند هزار ساله را در کتاب می‌توان یافت. هیچ کدام از وسایل ارتباطی، ژرفای لازم را در اندیشه و تفکر و حوزه قدرت خلاقیت انسان آن گونه که خواندن و نوشتن پدید می‌آورد، ایجاد نمی‌کند. از این رو ترویج کتاب و کتاب خوانی، وظیفه و رسالت اصلی دست اندرکاران فرهنگ و دانش جامعه ما می‌باشد</q>


                                                    </blockquote>
                                                    <div class="tg-testimonialauthor">
                                                        <h3>صادق طباطبایی</h3>

                                                    </div>
                                                </div>
                                                <div class="item tg-testimonial">
                                                    <figure><img src="/storage/my-images/Da1olD3KzQsd306ulYhGN5feroaXAhFzKLL1wmsr.jpg" alt="image description"></figure>
                                                    <blockquote><q>!به عقیده‌ی کرم بسیار عجیب و احمقانه است که انسان کتاب‌هایش را نمی‌خورد</q></blockquote>
                                                    <div class="tg-testimonialauthor">
                                                        <h3>تاگور</h3>

                                                    </div>
                                                </div>
                                            </div>
                                            {{--                            end quotes--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--************************************
                                Testimonials End
                        *************************************-->

    </main>
    <!--************************************
            Main End
    *************************************-->
@endsection
