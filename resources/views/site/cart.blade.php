@extends('layouts.app')
@section('body')

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container bootdey">
        <div class="row bootstrap snippets">
            <div class="col-md-6 col-md-offset-3">
                <!-- Best Seller -->
                <div class="col-md-6 col-md-offset-3">


                    <div class="thumbnail col-lg-12 col-md-12 col-sm-6 visible-sm text-center">
                        <a href="#" class="link-p" style="overflow: hidden; position: relative;">
                            <img src="https://via.placeholder.com/700x500/00CED1/000000">
                        </a>
                        <div class="caption prod-caption">
                            <h4><a href="#">Ohio State College T-Shirt</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
                            <p>
                            </p>
                            <div class="btn-group">
                                <a href="#" class="btn btn-default">$ 924.25</a>
                                <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- End Best Seller -->
            </div>
            <div class="clearfix visible-sm"></div>

            <!-- Cart -->
            <div class="col-md-10 col-md-offset-1" style="padding: 30px 0">
                <div class="col-lg-12 col-sm-12">
                    <h3 class="title">سبد خرید</h3>
                </div>
                <div class="col-lg-12 col-sm-12 hero-feature">
                    @if(session()->get('my_cart'))
                        <div class="table-responsive">
                            <table class="table table-bordered tbl-cart">
                                <thead>
                                <tr>
                                    <td class="hidden-xs">تصویر</td>
                                    <td>نام کتاب</td>

                                    <td class="td-qty">تعداد</td>
                                    <td>قیمت واحد</td>
                                    <td>قیمت کل</td>
                                    <td>پاک کردن</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(session()->get('my_cart') as $item)

                                    <tr>
                                        <td class="hidden-xs">
                                            <a href="#">
                                                <img src={{session()->get('my_cart') ? $item['image'] : null}}  title=""
                                                     width="47" height="47">
                                            </a>
                                        </td>
                                        <td><a href="#">{{session()->get('my_cart') ? $item['title'] : null}}</a>
                                        </td>


                                        <td>
                                            <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><a
                                                        class="btn btn-default bootstrap-touchspin-down"
                                                        href="{{route('decreaseCartCount',$item['id'])}}">-</a></span><span
                                                    class="input-group-addon bootstrap-touchspin-prefix"
                                                    style="display: none;"></span><input type="text" name=""
                                                                                         value={{$item['count']}} class="input-qty
                                                                                         form-control text-center"
                                                style="display: block;">
                                                <span class="input-group-addon bootstrap-touchspin-postfix"
                                                      style="display: none;"></span><span class="input-group-btn"><a
                                                        class="btn btn-default bootstrap-touchspin-up"
                                                        href="{{route('increaseCartCount',$item['id'])}}">+</a></span>
                                            </div>
                                        </td>
                                        <td class="price">{{session()->get('my_cart') ? $item['price'] : null}}تومان
                                        </td>
                                        <td>{{session()->get('my_cart') ? $item['price']*$item['count'] : null}}</td>
                                        <td class="text-center">
                                            <a href={{route('removeItem',$item['id'])}} class="remove_cart" rel="2">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach
                                <tr>
                                    <td colspan="6" align="right">جمع کل</td>
                                    <td class="total" colspan="2">
                                        <b> {{session()->get('my_cart_total_info')['total_price']}} تومان</b>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-group btns-cart">
                            <a href="{{route('payment')}}" class="btn btn-success"><i class="fa fa-arrow-circle-left"></i> تکمیل
                                فرآیند خرید
                            </a>
                            <br>
                        </div>
                    @else
                        <h4 class="text-center alert alert-danger">سبد خرید خالی است.</h4>
                        <div class="btn-group btns-cart">
                            <a href="{{route('payment')}}" class="disabled btn btn-danger "><i class="fa fa-arrow-circle-left"></i> تکمیل
                                فرآیند خرید
                            </a>
                            <br>
                        </div>
                    @endif



                </div>
                <div>
                </div>
                <!-- End Cart -->
            </div>
        </div>

@endsection
