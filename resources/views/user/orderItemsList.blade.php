@extends('layouts.userTemplate')
@section('user_body')

    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">سفارش شماره {{$count}}</div>
        <!-- First category table-->
        <div class="card card-default">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="h4" style="width: 50%">سفارش ها</th>
                    <th class="h4 text-center d-none d-lg-table-cell">وضعیت</th>
                    <th class="h4 text-center d-none d-lg-table-cell">قیمت</th>
                    <th class="h4 text-center d-none d-lg-table-cell">تاریخ سفارش</th>
                </tr>
                <tr>
                    <td>
                        <h4>
                                <strong>سفارش شماره {{$count}}</strong>
                        </h4>

                    </td>
                    <td class="text-muted text-center d-none d-lg-table-cell">
                        <strong>

                            @if($factor->status==1)
                                <div class="alert-success">در حال آماده سازی</div>
                            @elseif($factor->status==2)
                                <div class="alert-danger">پرداخت ناموفق/لغو شده</div>
                            @elseif($factor->status==3)
                                <div class="alert-primary">در حال ارسال</div>
                            @elseif($factor->status==4)
                                <div class="alert-info">تحویل داده شده</div>
                            @else
                                -
                            @endif
                        </strong>
                    </td>
                    <td class="text-muted text-center d-none d-lg-table-cell">
                        <strong>{{$factor->amount}} تومان</strong>
                    </td>
                    <td class="text-muted text-center d-none d-lg-table-cell">
                        <strong>{{jdate($factor->created_at)->format('%d %B %Y')}}</strong>
                    </td>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="card card-default">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="h4" style="width: 50%">کتاب ها</th>
                    <th class="h4 text-center d-none d-lg-table-cell">تعداد</th>
                    <th class="h4 text-center d-none d-lg-table-cell">قیمت واحد</th>
                    <th class="h4 text-center d-none d-lg-table-cell">قیمت کل</th>
                </tr>

                @foreach($orders->items as $item)

                <tr>
                    <td>
                        <h4>
                            <a style="color: #77b748"  href="/book/show-details/{{$item->book->id}}">
                                {{$item->book->title}}
                            </a>
                        </h4>

                    </td>
                    <td class="text-muted text-center d-none d-lg-table-cell">
                        <strong>

                            <div>{{$item->count}}</div>


                        </strong>
                    </td>
                    <td class="text-muted text-center d-none d-lg-table-cell">
                        <strong>{{$item->book->price}} تومان</strong>
                    </td>
                    <td class="text-muted text-center d-none d-lg-table-cell">
                        <strong>{{$item->book->price*$item->count}}</strong>
                    </td>
                </tr>
                @endforeach
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

    </div>

@endsection
