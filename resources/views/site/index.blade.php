@extends('layouts.app')
@section('body')

    <!--************************************
            Home Slider Start
    *************************************-->

    <div id="tg-homeslider" class="tg-homeslider tg-haslayout owl-carousel">
        <div class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 0% 50%">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
                        <div class="tg-slidercontent">
                            <figure class="tg-authorimg"><a href="javascript:void(0);"><img
                                        src="images/author/imag-01.jpg" alt="image description"></a></figure>
                            <h1>جودی مورفی</h1>
                            <h2>آخرین اثر منتشر شده</h2>
                            <div class="tg-description">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ کاربردهای متنوع با هدف
                                    بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده
                                    شناخت فراوان جامعه و متخصصان را می طلبد</p>
                            </div>
                            <div class="tg-btns">

                                <a class="tg-btn" href="javascript:void(0);">بیشتر بخوانید</a>
                                <a class="tg-btn" href="javascript:void(0);">خرید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 0% 50%">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
                        <div class="tg-slidercontent">
                            <figure class="tg-authorimg"><a href="javascript:void(0);"><img
                                        src="images/author/imag-01.jpg" alt="image description"></a></figure>
                            <h1>جودی مورفی</h1>
                            <h2>آخرین اثر منتشر شده</h2>
                            <div class="tg-description">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ کاربردهای متنوع با هدف
                                    بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده
                                    شناخت فراوان جامعه و متخصصان را می طلبد</p>
                            </div>
                            <div class="tg-btns">

                                <a class="tg-btn" href="javascript:void(0);">بیشتر بخوانید</a>
                                <a class="tg-btn" href="javascript:void(0);">خرید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Home Slider End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                All Status Start
        *************************************-->
        <section class="tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-allstatus">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-parallax tg-bgbookwehave" data-z-index="2" data-appear-top-offset="600"
                                 data-parallax="scroll" data-image-src="images/parallax/bgparallax-01.jpg">
                                <div class="tg-status">
                                    <div class="tg-statuscontent">
                                        <span class="tg-statusicon"><i class="icon-book"></i></span>
                                        <h2>تعداد کتاب‌ها<span>{{$book_count}}</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-parallax tg-bgtotalmembers" data-z-index="2" data-appear-bottom-offset="600"
                                 data-parallax="scroll" data-image-src="images/parallax/bgparallax-02.jpg">
                                <div class="tg-status">
                                    <div class="tg-statuscontent">
                                        <span class="tg-statusicon"><i class="icon-user"></i></span>
                                        <h2>تعداد کاربران<span>
                                                {{$user_count}}
                                            </span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-parallax tg-bghappyusers" data-z-index="2" data-appear-top-offset="600"
                                 data-parallax="scroll" data-image-src="images/parallax/bgparallax-03.jpg">
                                <div class="tg-status">
                                    <div class="tg-statuscontent">
                                        <span class="tg-statusicon"><i class="icon-heart"></i></span>
                                        <h2>تعداد خریداران خوشحال<span>1,267,539</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                All Status End
        *************************************-->
        <!--************************************
                Best Selling Start
        *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <h2><span>به انتخاب مردم</span>پرفروش‌ترین‌ها</h2>
                            <a class="tg-btn" href="javascript:void(0);">مشاهده همه</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="tg-bestsellingbooksslider"
                             class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">

                            @foreach($books as $book)
                                <div class="item">
                                    <div class="tg-postbook">
                                        <figure class="tg-featureimg">
                                            <div class="tg-bookimg">
                                                <div class="tg-frontcover"><img src="{{$book->image}}"
                                                                                alt="image description"></div>
                                                <div class="tg-backcover"><img src="{{$book->image}}"
                                                                               alt="image description"></div>
                                            </div>
                                            <a class="tg-btnaddtowishlist" href={{Route('addBookmark',$book->id)}}>
                                                <i class="icon-heart"></i>
                                                <span>افزودن به علاقه‌مندی‌ها</span>
                                            </a>
                                        </figure>
                                        <div class="tg-postbookcontent">
                                            <ul class="tg-bookscategories">
                                                <li><a href="javascript:void(0);">ماجراجویی</a></li>
                                                <li><a href="javascript:void(0);">سرگرم‌کننده</a></li>
                                            </ul>
                                            <div class="tg-themetagbox"><span class="tg-themetag">فروش</span></div>
                                            <div class="tg-booktitle">
                                                <h3><a href="javascript:void(0);">{{$book->title}}</a></h3>
                                            </div>
                                            <span class="tg-bookwriter">توسط: <a
                                                    href="javascript:void(0);">آنجلا گانینگ</a></span>
                                            <span class="tg-stars"><span></span></span>
                                            <span class="tg-bookprice">
												<ins>{{$book->price}} تومان</ins>
												<del>23000 تومان</del>
											</span>
                                            <a class="tg-btn tg-btnstyletwo" href="/add-to-Cart/{{$book->id}}">
                                                <i class="fa fa-shopping-Cart"></i>
                                                <em>افزودن به سبدخرید</em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Best Selling End
        *************************************-->
        <!--************************************
                Featured Item Start
        *************************************-->
        <section class="tg-bglight tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-featureditm">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-sm hidden-xs">
                            <figure><img src="images/img-02.png" alt="image description"></figure>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <div class="tg-featureditmcontent">
                                <div class="tg-themetagbox"><span class="tg-themetag">جدیدترین‌ها</span></div>
                                <div class="tg-booktitle">
                                    <h3><a href="javascript:void(0);">چیزهایی که راجع به طراحی فلت باید دونست </a></h3>
                                </div>
                                <span class="tg-bookwriter">توسط: <a href="javascript:void(0);">فرح شکوفا</a></span>
                                <span class="tg-stars"><span></span></span>
                                <div class="tg-priceandbtn">
										<span class="tg-bookprice">
											<ins>230 تومان</ins>
											<del>302 تومان</del>
										</span>
                                    <a class="tg-btn tg-btnstyletwo tg-active" href="/add-to-Cart/{{$book->id}}">
                                        <i class="fa fa-shopping-Cart"></i>
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
                Featured Item End
        *************************************-->
        <!--************************************
                New Release Start
        *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-newrelease">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="tg-sectionhead">
                                <h2><span>جدیدترن ها را تجربه کنید</span>کتابهای تازه منتشر شده </h2>
                            </div>
                            <div class="tg-description">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد. </p>
                            </div>
                            <div class="tg-btns">
                                <a class="tg-btn tg-active" href="javascript:void(0);">مشاهده همه</a>
                                <a class="tg-btn" href="javascript:void(0);">بیشتر بخوانید</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="tg-newreleasebooks">
                                    <div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
                                        <div class="tg-postbook">
                                            <figure class="tg-featureimg">
                                                <div class="tg-bookimg">
                                                    <div class="tg-frontcover"><img src="images/books/img-07.jpg"
                                                                                    alt="image description"></div>
                                                    <div class="tg-backcover"><img src="images/books/img-07.jpg"
                                                                                   alt="image description"></div>
                                                </div>
                                                <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                    <i class="icon-heart"></i>
                                                    <span>افزودن به علاقه‌مندی‌ها</span>
                                                </a>
                                            </figure>
                                            <div class="tg-postbookcontent">
                                                <ul class="tg-bookscategories">
                                                    <li><a href="javascript:void(0);">ماجراجویی</a></li>
                                                    <li><a href="javascript:void(0);">سرگرم‌کننده</a></li>
                                                </ul>
                                                <div class="tg-booktitle">
                                                    <h3><a href="javascript:void(0);">کمکم کن روحم را پیدا کنم</a></h3>
                                                </div>
                                                <span class="tg-bookwriter">توسط: <a href="javascript:void(0);">کاترین کالبوستون</a></span>
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
                                        <div class="tg-postbook">
                                            <figure class="tg-featureimg">
                                                <div class="tg-bookimg">
                                                    <div class="tg-frontcover"><img src="images/books/img-08.jpg"
                                                                                    alt="image description"></div>
                                                    <div class="tg-backcover"><img src="images/books/img-08.jpg"
                                                                                   alt="image description"></div>
                                                </div>
                                                <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                    <i class="icon-heart"></i>
                                                    <span>افزودن به علاقه‌مندی‌ها</span>
                                                </a>
                                            </figure>
                                            <div class="tg-postbookcontent">
                                                <ul class="tg-bookscategories">
                                                    <li><a href="javascript:void(0);">ماجراجویی</a></li>
                                                    <li><a href="javascript:void(0);">سرگرم‌کننده</a></li>
                                                </ul>
                                                <div class="tg-booktitle">
                                                    <h3><a href="javascript:void(0);">رانندگی امن، بدون سرعت گیر</a>
                                                    </h3>
                                                </div>
                                                <span class="tg-bookwriter">توسط: <a href="javascript:void(0);">سوزان اورلاندو</a></span>
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-4 hidden-md">
                                        <div class="tg-postbook">
                                            <figure class="tg-featureimg">
                                                <div class="tg-bookimg">
                                                    <div class="tg-frontcover"><img src="images/books/img-09.jpg"
                                                                                    alt="image description"></div>
                                                    <div class="tg-backcover"><img src="images/books/img-09.jpg"
                                                                                   alt="image description"></div>
                                                </div>
                                                <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                    <i class="icon-heart"></i>
                                                    <span>افزودن به علاقه‌مندی‌ها</span>
                                                </a>
                                            </figure>
                                            <div class="tg-postbookcontent">
                                                <ul class="tg-bookscategories">
                                                    <li><a href="javascript:void(0);">ماجراجویی</a></li>
                                                    <li><a href="javascript:void(0);">سرگرم‌کننده</a></li>
                                                </ul>
                                                <div class="tg-booktitle">
                                                    <h3><a href="javascript:void(0);">بذار وقت خوبی پیدا کنم</a></h3>
                                                </div>
                                                <span class="tg-bookwriter">توسط: <a href="javascript:void(0);">الیزابت رانین</a></span>
                                                <span class="tg-stars"><span></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                New Release End
        *************************************-->
        <!--************************************
                Collection Count Start
        *************************************-->
        <section class="tg-parallax tg-bgcollectioncount tg-haslayout" data-z-index="-100" data-appear-top-offset="600"
                 data-parallax="scroll" data-image-src="images/parallax/bgparallax-04.jpg">
            <div class="tg-sectionspace tg-collectioncount tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div id="tg-collectioncounters" class="tg-collectioncounters">
                            <div class="tg-collectioncounter tg-drama">
                                <div class="tg-collectioncountericon">
                                    <i class="icon-bubble"></i>
                                </div>
                                <div class="tg-titlepluscounter">
                                    <h2>درام</h2>
                                    <h3 data-from="0" data-to="6179213" data-speed="8000" data-refresh-interval="50">
                                        6,179,213</h3>
                                </div>
                            </div>
                            <div class="tg-collectioncounter tg-horror">
                                <div class="tg-collectioncountericon">
                                    <i class="icon-heart-pulse"></i>
                                </div>
                                <div class="tg-titlepluscounter">
                                    <h2>جنایی</h2>
                                    <h3 data-from="0" data-to="3121242" data-speed="8000" data-refresh-interval="50">
                                        3,121,242</h3>
                                </div>
                            </div>
                            <div class="tg-collectioncounter tg-romance">
                                <div class="tg-collectioncountericon">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="tg-titlepluscounter">
                                    <h2>عاشقانه</h2>
                                    <h3 data-from="0" data-to="2101012" data-speed="8000" data-refresh-interval="50">
                                        2,101,012</h3>
                                </div>
                            </div>
                            <div class="tg-collectioncounter tg-fashion">
                                <div class="tg-collectioncountericon">
                                    <i class="icon-star"></i>
                                </div>
                                <div class="tg-titlepluscounter">
                                    <h2>تاریخی</h2>
                                    <h3 data-from="0" data-to="1158245" data-speed="8000" data-refresh-interval="50">
                                        1,158,245</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Collection Count End
        *************************************-->
        <!--************************************
                Picked By Author Start
        *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <h2><span>بهترین کتاب ها</span>کتاب های پیشنهادی</h2>
{{--                            <a class="tg-btn" href="javascript:void(0);">مشاهده همه</a>--}}
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
                                    <a class="tg-btn tg-btnstyletwo" href="/add-to-Cart/{{$book->id}}">
                                        <i class="fa fa-shopping-Cart"></i>
                                        <em>افزودن به سبد خرید</em>
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
                Authors Start
        *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <h2><span>ذهن زیبا پنهان</span>نویسندگان فعال</h2>
                            <a class="tg-btn" href="javascript:void(0);">مشاهده همه</a>
                        </div>
                    </div>
                    <div id="tg-authorsslider" class="tg-authors tg-authorsslider owl-carousel">
                        <div class="item tg-author">
                            <figure><a href="javascript:void(0);"><img src="images/author/imag-03.jpg"
                                                                       alt="image description"></a></figure>
                            <div class="tg-authorcontent">
                                <h2><a href="javascript:void(0);">جودی مورفی</a></h2>
                                <span>21,658 کتاب منتشرشده</span>
                                <ul class="tg-socialicons">
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item tg-author">
                            <figure><a href="javascript:void(0);"><img src="images/author/imag-04.jpg"
                                                                       alt="image description"></a></figure>
                            <div class="tg-authorcontent">
                                <h2><a href="javascript:void(0);">باک باگر</a></h2>
                                <span>20,257 کتاب منتشرشده</span>
                                <ul class="tg-socialicons">
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item tg-author">
                            <figure><a href="javascript:void(0);"><img src="images/author/imag-05.jpg"
                                                                       alt="image description"></a></figure>
                            <div class="tg-authorcontent">
                                <h2><a href="javascript:void(0);">بوک شیپ و داتکو</a></h2>
                                <span>15,686 کتاب منتشرشده</span>
                                <ul class="tg-socialicons">
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item tg-author">
                            <figure><a href="javascript:void(0);"><img src="images/author/imag-06.jpg"
                                                                       alt="image description"></a></figure>
                            <div class="tg-authorcontent">
                                <h2><a href="javascript:void(0);">الن گلیسون</a></h2>
                                <span>12,435 کتاب منتشرشده</span>
                                <ul class="tg-socialicons">
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item tg-author">
                            <figure><a href="javascript:void(0);"><img src="images/author/imag-07.jpg"
                                                                       alt="image description"></a></figure>
                            <div class="tg-authorcontent">
                                <h2><a href="javascript:void(0);">خانه کتاب</a></h2>
                                <span>15,953 کتاب منتشرشده</span>
                                <ul class="tg-socialicons">
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item tg-author">
                            <figure><a href="javascript:void(0);"><img src="images/author/imag-08.jpg"
                                                                       alt="image description"></a></figure>
                            <div class="tg-authorcontent">
                                <h2><a href="javascript:void(0);">لینی کلیمک</a></h2>
                                <span>65,720 کتاب منتشرشده</span>
                                <ul class="tg-socialicons">
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item tg-author">
                            <figure><a href="javascript:void(0);"><img src="images/author/imag-05.jpg"
                                                                       alt="image description"></a></figure>
                            <div class="tg-authorcontent">
                                <h2><a href="javascript:void(0);">بوک شیپ و داتکو</a></h2>
                                <span>15,686 کتاب منتشرشده</span>
                                <ul class="tg-socialicons">
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item tg-author">
                            <figure><a href="javascript:void(0);"><img src="images/author/imag-06.jpg"
                                                                       alt="image description"></a></figure>
                            <div class="tg-authorcontent">
                                <h2><a href="javascript:void(0);">الن گلیسون</a></h2>
                                <span>12,435 کتاب منتشرشده</span>
                                <ul class="tg-socialicons">
                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Authors End
        *************************************-->
        <!--************************************
                Call to Action Start
        *************************************-->
        <section class="tg-parallax tg-bgcalltoaction tg-haslayout" data-z-index="-100" data-appear-top-offset="600"
                 data-parallax="scroll" data-image-src="images/parallax/bgparallax-06.jpg">
            <div class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-calltoaction">
                                <h3>مسئله این نیست که خرید کتاب چقدر گرون تموم میشه، مسئله اینه که اگه کتاب نخونی چقدر
                                    برات گرون تموم میشه!</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Call to Action End
        *************************************-->
        <!--************************************
                Latest News Start
        *************************************-->

        <!--************************************
                Latest News End
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->

@endsection
