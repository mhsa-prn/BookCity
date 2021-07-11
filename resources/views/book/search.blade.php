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
                                    <h2><span>لیست کتاب ها</span>جستجو بر اساس: {{$request->title}}</h2>
                                </div>
                                <div class="tg-productgrid">


                                    @foreach($books as $book)
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tg-postbook">
                                            <figure class="tg-featureimg">
                                                <div class="tg-bookimg">
                                                    <div class="tg-frontcover"><img src={{$book->image}} alt="image description"></div>
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
                                                    @foreach($book->categories as $category)
                                                    <li><a href="/book?category_id={{$category->id}}">
                                                            {{$category->title}}
                                                        </a></li>
                                                    @endforeach
                                                </ul>
                                                <div class="tg-themetagbox"><span class="tg-themetag">فروش</span></div>
                                                <div class="tg-booktitle">
                                                    <h3><a href="javascript:void(0);">{{$book->title}}</a></h3>
                                                </div>
                                                <span class="tg-bookwriter">توسط: <a href="javascript:void(0);">{{$book->author->name}}</a></span>

                                                <span class="tg-bookprice">
															<ins>{{$book->price}} تومان</ins>

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

                </div>
            </div>
        </div>
    </div>

@endsection
