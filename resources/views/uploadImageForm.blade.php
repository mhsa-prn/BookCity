<form action="{{route('admin.uploadImage')}}" method="post" enctype="multipart/form-data">
    {{@csrf_field()}}
    <input type="file" name="image">
    <button type="submit" value="Submit">Submit</button>
</form>
