@extends('layouts.app')
@section('body')


    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                Contact Us Start
        *************************************-->
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-contactus">
                        <div class="col-md-6 col-md-offset-3">
                            @if(count($errors)>0)
                                <div class="col-md-6 alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p>
                                            {{$error}}
                                        </p>
                                    @endforeach
                                </div>
                            @endif

                            <form class="tg-formtheme tg-formcontactus" method="post" action="/users/register">
                                {{@csrf_field()}}
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control" placeholder="نام * "
                                               value="{{old('first_name')}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="last_name" class="form-control"
                                               placeholder=" نام خانوادگی * " value="{{old('last_name')}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control"
                                               placeholder=" نام کاربری * " value="{{old('username')}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder=" ایمیل * "
                                               value="{{old('email')}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                               placeholder=" کلمه عبور * ">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="tg-btn tg-active">ارسال</button>
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Contact Us End
        *************************************-->
    </main>

@endsection
