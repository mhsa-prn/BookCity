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
                        <h1>علاقه‌مندی‌ها</h1>
                        <ol class="tg-breadcrumb">
                            <li><a href={{Route('home')}}>خانه</a></li>
                            <li class="tg-active">علاقه‌مندی‌ها</li>
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
                                <h2><span></span>لیست علاقه‌مندی‌ها</h2>
                            </div>
                        </div>
                        @foreach($bookmarks as $bookmarked_book)
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <div class="tg-author">
                                    <figure><a href="javascript:void(0);"><img
                                                src={{$bookmarked_book->books->image}} alt="image description"></a>
                                    </figure>
                                    <div class="tg-authorcontent">
                                        <h2><a href="javascript:void(0);">{{$bookmarked_book->books->title}}</a></h2>

                                        <ul class="tg-socialicons">
                                            <li class="tg-facebook"><a href="javascript:void(0);"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li class="tg-linkedin"><a href="javascript:void(0);"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Authors End
        *************************************-->
        <!--************************************
                Testimonials Start
        *************************************-->
        <section class="tg-parallax tg-bgtestimonials tg-haslayout" data-z-index="-100" data-appear-top-offset="600"
                 data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
            <div class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
                            <div id="tg-testimonialsslider" class="tg-testimonialsslider tg-testimonials owl-carousel">
                                <div class="item tg-testimonial">
                                    <figure><img src="images/author/imag-02.jpg" alt="image description"></figure>
                                    <blockquote><q>حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها
                                            شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو
                                            در زبان فارسی ایجاد کرد.</q></blockquote>
                                    <div class="tg-testimonialauthor">
                                        <h3>هالی فنترمنچر</h3>
                                        <span>مدیر سی آی اف پی</span>
                                    </div>
                                </div>
                                <div class="item tg-testimonial">
                                    <figure><img src="images/author/imag-02.jpg" alt="image description"></figure>
                                    <blockquote><q>حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها
                                            شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو
                                            در زبان فارسی ایجاد کرد.</q></blockquote>
                                    <div class="tg-testimonialauthor">
                                        <h3>هالی فنترمنچر</h3>
                                        <span>مدیر سی آی اف پی</span>
                                    </div>
                                </div>
                                <div class="item tg-testimonial">
                                    <figure><img src="images/author/imag-02.jpg" alt="image description"></figure>
                                    <blockquote><q>حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها
                                            شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو
                                            در زبان فارسی ایجاد کرد.</q></blockquote>
                                    <div class="tg-testimonialauthor">
                                        <h3>هالی فنترمنچر</h3>
                                        <span>مدیر سی آی اف پی</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Testimonials End
        *************************************-->
        <!--************************************
                Picked By Author Start
        *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <h2><span>بهترین کتاب ها</span>به انتخاب نویسندگان</h2>
                            <a class="tg-btn" href="javascript:void(0);">مشاهده همه</a>
                        </div>
                    </div>
                    <div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">
                        <div class="item">
                            <div class="tg-postbook">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover"><img src="images/books/img-10.jpg"
                                                                        alt="image description"></div>
                                    </div>
                                    <div class="tg-hovercontent">
                                        <div class="tg-description">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. </p>
                                        </div>
                                        <strong class="tg-bookpage">صفحات: 206</strong>
                                        <strong class="tg-bookcategory">دسته بندی: ماجراجویی، سرگرمی</strong>
                                        <strong class="tg-bookprice">قیمت: 231800 تومان</strong>
                                        <div class="tg-ratingbox"><span class="tg-stars"><span></span></span></div>
                                    </div>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href="javascript:void(0);">هفت دقیقه در بهشت</a></h3>
                                    </div>
                                    <span class="tg-bookwriter">توسط: <a
                                            href="javascript:void(0);">سوزان اورلاندو</a></span>
                                    <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>افزودن به سبدخرید</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-postbook">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover"><img src="images/books/img-11.jpg"
                                                                        alt="image description"></div>
                                    </div>
                                    <div class="tg-hovercontent">
                                        <div class="tg-description">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. </p>
                                        </div>
                                        <strong class="tg-bookpage">صفحات: 206</strong>
                                        <strong class="tg-bookcategory">دسته بندی: ماجراجویی، سرگرمی</strong>
                                        <strong class="tg-bookprice">قیمت: 231800 تومان</strong>
                                        <div class="tg-ratingbox"><span class="tg-stars"><span></span></span></div>
                                    </div>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href="javascript:void(0);">آرام و قوی ادامه بده</a></h3>
                                    </div>
                                    <span class="tg-bookwriter">توسط: <a href="javascript:void(0);">دورسیلا گلاندون</a></span>
                                    <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>افزودن به سبدخرید</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-postbook">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover"><img src="images/books/img-12.jpg"
                                                                        alt="image description"></div>
                                    </div>
                                    <div class="tg-hovercontent">
                                        <div class="tg-description">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. </p>
                                        </div>
                                        <strong class="tg-bookpage">صفحات: 206</strong>
                                        <strong class="tg-bookcategory">دسته بندی: ماجراجویی، سرگرمی</strong>
                                        <strong class="tg-bookprice">قیمت: 231800 تومان</strong>
                                        <div class="tg-ratingbox"><span class="tg-stars"><span></span></span></div>
                                    </div>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href="javascript:void(0);">جز حالا هیچ وقتی نداری</a></h3>
                                    </div>
                                    <span class="tg-bookwriter">توسط: <a
                                            href="javascript:void(0);">پاتریک سلر</a></span>
                                    <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>افزودن به سبدخرید</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-postbook">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover"><img src="images/books/img-10.jpg"
                                                                        alt="image description"></div>
                                    </div>
                                    <div class="tg-hovercontent">
                                        <div class="tg-description">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. </p>
                                        </div>
                                        <strong class="tg-bookpage">صفحات: 206</strong>
                                        <strong class="tg-bookcategory">دسته بندی: ماجراجویی، سرگرمی</strong>
                                        <strong class="tg-bookprice">قیمت: 231800 تومان</strong>
                                        <div class="tg-ratingbox"><span class="tg-stars"><span></span></span></div>
                                    </div>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href="javascript:void(0);">هفت دقیقه در بهشت</a></h3>
                                    </div>
                                    <span class="tg-bookwriter">توسط: <a
                                            href="javascript:void(0);">سوزان اورلاندو</a></span>
                                    <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>افزودن به سبدخرید</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-postbook">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover"><img src="images/books/img-11.jpg"
                                                                        alt="image description"></div>
                                    </div>
                                    <div class="tg-hovercontent">
                                        <div class="tg-description">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است. </p>
                                        </div>
                                        <strong class="tg-bookpage">صفحات: 206</strong>
                                        <strong class="tg-bookcategory">دسته بندی: ماجراجویی، سرگرمی</strong>
                                        <strong class="tg-bookprice">قیمت: 231800 تومان</strong>
                                        <div class="tg-ratingbox"><span class="tg-stars"><span></span></span></div>
                                    </div>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <div class="tg-booktitle">
                                        <h3><a href="javascript:void(0);">آرام و قوی ادامه بده</a></h3>
                                    </div>
                                    <span class="tg-bookwriter">توسط: <a href="javascript:void(0);">دورسیلا گلاندون</a></span>
                                    <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>افزودن به سبدخرید</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Picked By Author End
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->
@endsection
