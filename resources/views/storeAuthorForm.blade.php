@extends('layouts.app')
@section('body')

    <main id="tg-main" class="tg-main tg-haslayout">

        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-contactus">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <form class="tg-formtheme tg-formcontactus" method="post"
                                  action="{{route('admin.storeAuthor')}}"
                                  enctype="multipart/form-data">
                                {{@csrf_field()}}
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name * ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="published_books" class="form-control" placeholder="Published books * ">
                                    </div>

                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" placeholder=" Image * ">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="tg-btn tg-active">Submit</button>
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
