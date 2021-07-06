@extends('layouts.userTemplate')
@section('user_body')

        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">لیست سفارشات</div>
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
                    </thead>
                    <tbody>

                    @foreach($orders as $order)
                    <tr>
                        <td>
                            <h4>
                                <a href="default.htm">
                                    <strong>سفارش شماره {{$count++}}</strong>
                                </a>
                            </h4>

                        </td>
                        <td class="text-muted text-center d-none d-lg-table-cell">
                            <strong>
                                @if($order->status==1)
                                    <div class="alert-success">در حال آماده سازی</div>
                                @elseif($order->status==2)
                                    <div class="alert-danger">لغو شده</div>
                                @elseif($order->status==3)
                                    <div class="alert-primary">در حال ارسال</div>
                                @elseif($order->status==4)
                                    <div class="alert-info">تحویل داده شده</div>
                                @else
                                    -
                                @endif
                            </strong>
                        </td>
                        <td class="text-muted text-center d-none d-lg-table-cell">
                            <strong>{{$order->amount}} تومان</strong>
                        </td>
                        <td class="text-muted text-center d-none d-lg-table-cell">
                            <strong>{{jdate($order->created_at)->format('%d %B %Y')}}</strong>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

@endsection
