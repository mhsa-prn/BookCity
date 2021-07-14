@extends('layouts.userTemplate')
@section('user_body')

    <div class="content-wrapper">
        <div class="content-heading">لیست سفارشات</div>
    <form class="tg-formtheme tg-formcontactus" style="margin-top: 20px">
        <fieldset>
            <div class="form-group">
                نام:
                <input type="text" name="first_name" class="form-control col-xs-2 disabled" disabled value="{{$user->first_name}}"
                       >
            </div>
            <div class="form-group">
                نام خانوادگی:
                <input type="text" name="last_name" class="form-control disabled"
                       disabled value="{{$user->last_name}}" >
            </div>
            <div class="form-group">
                نام کاربری:
                <input type="text" name="username" class="form-control disabled"
                       disabled value="{{$user->username}}" >
            </div>
            <div class="form-group">
                ایمیل:
                <input type="text" name="email" class="form-control disabled" disabled value="{{$user->email}}">

            </div>
        </fieldset>
    </form>
    </div>
@endsection
