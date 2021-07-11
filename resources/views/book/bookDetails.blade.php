@extends('layouts.app')
@section('body')

    <!--************************************
				Inner Banner Start
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-innerbannercontent">
                        <h1>محصولات</h1>
                        <ol class="tg-breadcrumb">
                            <li><a href="{{route('home')}}">خانه</a></li>
                            <li><a href="{{route('book.booksList')}}">کتاب ها</a></li>
                            <li class="tg-active">{{$book[0]->title}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <--************************************
            Inner Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                News Grid Start
        *************************************-->
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-twocolumns" class="tg-twocolumns">
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                            <div id="tg-content" class="tg-content">

                                <div class="tg-productdetail">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="tg-postbook">
                                                <figure class="tg-featureimg"><img src="{{$book[0]->image}}"
                                                                                   alt="imagujkihyuoik"></figure>
                                                <div class="tg-postbookcontent">
														<span class="tg-bookprice">
															<ins>{{$book[0]->price}} تومان</ins>

														</span>

                                                    <ul class="tg-delevrystock">
                                                        <li><i class="icon-rocket"></i><span>ارسال به تمام نقاط</span>
                                                        </li>
                                                        <li>
                                                            <i class="icon-checkmark-circle"></i><span>ارسال دو روز کاری</span>
                                                        </li>
                                                        <li>
                                                            <i class="icon-store"></i><span>موجودی: <em>در انبار</em></span>
                                                        </li>
                                                    </ul>
                                                    <div class="input-group bootstrap-touchspin">
                                                <span class="input-group-btn">
                                                    <a class="btn btn-default bootstrap-touchspin-down"
                                                       href="{{session()->get('my_cart') ? route('decreaseCartCount',$book[0]->id) : ""}}">-</a></span>

                                                        <span class="input-group-addon bootstrap-touchspin-prefix"
                                                              style="display: none;"></span><input type="text" name=""
                                                                                                   value="{{session()->get('my_cart') ? session()->get('my_cart')[$book[0]->id]['count'] : 0}}"
                                                                                                   class="input-qty
                                                                                         form-control text-center"
                                                                                                   style="display: block;">
                                                        <span class="input-group-addon bootstrap-touchspin-postfix"
                                                              style="display: none;"></span><span
                                                            class="input-group-btn"><a
                                                                class="btn btn-default bootstrap-touchspin-up"
                                                                href="{{session()->get('my_cart') ? route('increaseCartCount',$book[0]->id) : ""}}">+</a></span>
                                                    </div>
                                                    <a class="tg-btn tg-active tg-btn-lg"
                                                       href="/add-to-Cart/{{$book[0]->id}}">افزودن به سبدخرید</a>
                                                    <a class="tg-btnaddtowishlist"
                                                       href="{{Route('addToBookmark',$book[0]->id)}}">
                                                        <span>افزودن به علاقه‌مندی‌ها</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                            <div class="tg-productcontent">
                                                <ul class="tg-bookscategories">
                                                    @foreach($book[0]->categories as $category)
                                                    <li><a href="javascript:void(0);">{{$category->title}}</a></li>
                                                    @endforeach
                                                </ul>
                                                <div class="tg-themetagbox"><span class="tg-themetag">فروش</span></div>
                                                <div class="tg-booktitle">
                                                    <h3>{{$book[0]->title}}</h3>
                                                </div>
                                                <span class="tg-bookwriter">توسط: <a
                                                        href="javascript:void(0);">{{$book[0]->author->name}}</a></span>

                                                <div class="tg-description">
                                                    <p>{{$book[0]->description}}</p>
                                                </div>
                                                <div class="tg-sectionhead">
                                                    <h2>جزییات</h2>
                                                </div>
                                                <ul class="tg-productinfo">
                                                    <li><span>صفحات:</span><span>{{$book[0]->pages}} صفحات</span></li>
                                                    <li><span>تاریخ انتشار:</span><span>{{jdate($book[0]->pages)->format('%d %B %Y')}}</span></li>
                                                    <li><span>انتشارات:</span><span>{{$book[0]->publisher}}</span></li>
                                                    <li><span>زبان:</span><span>{{$book[0]->language}}</span></li>

                                                </ul>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                            <aside id="tg-sidebar" class="tg-sidebar">

                                <div class="tg-widget tg-catagories">
                                    <div class="tg-widgettitle">
                                        <h3>دسته‌بندی‌ها</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>
                                            @foreach($categories as $category)
                                                <li>
                                                    <a href="/book?category_id={{$category->id}}"><span>{{$category->title}}</span><em>{{count($category->books)}}</em></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                News Grid End
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->
@endsection
