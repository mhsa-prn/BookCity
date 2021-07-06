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
                                @if (session()->get('OK_payment'))
                                    <div class="alert alert-success text-center">
                                        {{session()->get('OK_payment')}}
                                    </div>
                                @else
                                    <div class="alert alert-danger text-center">
                                        {{session()->get('NOK_payment')}}
                                    </div>
                                @endif

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
