@extends('layouts.app')
@section('body')
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-products">
                                <div class="tg-sectionhead">
                                    <h2><span>به انتخاب مردم</span>لیست کتاب ها</h2>
                                </div>
                                <div class="tg-productgrid">


                                    @foreach($books as $book)
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tg-postbook">
                                            <figure class="tg-featureimg">
                                                <div class="tg-bookimg">
                                                    <div class="tg-frontcover"><img src="images/books/img-02.jpg" alt="image description"></div>
                                                    <div class="tg-backcover"><img src="images/books/img-02.jpg" alt="image description"></div>
                                                </div>
                                                @if(!\App\Models\Bookmark::where('book_id',$book->id)->first())
                                                    <a class="tg-btnaddtowishlist"
                                                       href={{Route('addToBookmark',$book->id)}}>
                                                        <i class="icon-heart"></i>
                                                        <span>افزودن به علاقه‌مندی‌ها</span>
                                                    </a>
                                                @else
                                                    <a class="tg-btnaddtowishlist"
                                                       href={{Route('removeBookmark',$book->id)}}>

                                                        <span>پاک کردن از علاقه‌مندی‌ها</span>
                                                    </a>
                                                @endif
                                            </figure>
                                            <div class="tg-postbookcontent">
                                                <ul class="tg-bookscategories">
                                                    <li><a href="javascript:void(0);">کتاب کودکان</a></li>
                                                </ul>
                                                <div class="tg-themetagbox"><span class="tg-themetag">فروش</span></div>
                                                <div class="tg-booktitle">
                                                    <h3><a href="javascript:void(0);">{{$book->title}}</a></h3>
                                                </div>
                                                <span class="tg-bookwriter">توسط: <a href="javascript:void(0);">آنجلا گانینگ</a></span>
                                                <span class="tg-stars"><span></span></span>
                                                <span class="tg-bookprice">
															<ins>{{$book->price}} تومان</ins>
															<del>23000 تومان</del>
														</span>
                                                <a class="tg-btn tg-btnstyletwo" href="/add-to-Cart/{{$book->id}}">
                                                    <i class="fa fa-shopping-basket"></i>
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
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                        <aside id="tg-sidebar" class="tg-sidebar">
                            <div class="tg-widget tg-widgetsearch">
                                <form class="tg-formtheme tg-formsearch">
                                    <div class="form-group">
                                        <button type="submit"><i class="icon-magnifier"></i></button>
                                        <input type="search" name="search" class="form-group" placeholder="جستجو با نام، نویسنده و ... ">
                                    </div>
                                </form>
                            </div>
                            <div class="tg-widget tg-catagories">
                                <div class="tg-widgettitle">
                                    <h3>دسته‌بندی‌ها</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        @foreach($categories as $category)
                                        <li><a href="javascript:void(0);"><span>{{$category->title}}</span><em>28245</em></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="tg-widget tg-widgetblogers">
                                <div class="tg-widgettitle">
                                    <h3>برترین نویسندگان</h3>
                                </div>
                                <div class="tg-widgetcontent">
                                    <ul>
                                        <li>
                                            <div class="tg-author">
                                                <figure><a href="javascript:void(0);"><img src="images/author/imag-03.jpg" alt="image description"></a></figure>
                                                <div class="tg-authorcontent">
                                                    <h2><a href="javascript:void(0);">جودی مورفی</a></h2>
                                                    <span>21,658 کتاب منتشرشده</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-author">
                                                <figure><a href="javascript:void(0);"><img src="images/author/imag-04.jpg" alt="image description"></a></figure>
                                                <div class="tg-authorcontent">
                                                    <h2><a href="javascript:void(0);">جودی مورفی</a></h2>
                                                    <span>21,658 کتاب منتشرشده</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-author">
                                                <figure><a href="javascript:void(0);"><img src="images/author/imag-05.jpg" alt="image description"></a></figure>
                                                <div class="tg-authorcontent">
                                                    <h2><a href="javascript:void(0);">جودی مورفی</a></h2>
                                                    <span>21,658 کتاب منتشرشده</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-author">
                                                <figure><a href="javascript:void(0);"><img src="images/author/imag-06.jpg" alt="image description"></a></figure>
                                                <div class="tg-authorcontent">
                                                    <h2><a href="javascript:void(0);">جودی مورفی</a></h2>
                                                    <span>21,658 کتاب منتشرشده</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
