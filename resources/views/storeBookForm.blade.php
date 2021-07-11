@extends('layouts.app')
@section('body')

    <main id="tg-main" class="tg-main tg-haslayout">

        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-contactus">

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <form class="tg-formtheme tg-formcontactus" method="post"
                                  action="{{route('admin.storeBook')}}"
                                  enctype="multipart/form-data">
                                {{@csrf_field()}}
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control" placeholder="Title * ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="author_id" class="form-control"
                                               placeholder=" Author_id * ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="price" class="form-control" placeholder=" Price * ">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" placeholder=" Image * ">
                                    </div>



                                    <div class="form-group">
                                        <input type="text" name="pages" class="form-control" placeholder=" pages ">
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="published_date" class="form-control" placeholder=" published_date ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="publisher" class="form-control" placeholder=" publisher ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="language" class="form-control" placeholder=" language ">
                                    </div>



                                    <div class="form-group tg-hastextarea">
                                        <textarea name="description" placeholder="Description"></textarea>
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
