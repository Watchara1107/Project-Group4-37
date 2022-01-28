@extends('admin/layouts/app')
@section('content')

<div class=" wrapper ">
    <div class="content-wrapper table-margin">
        <h2>แก้ไขข้อมูล</h2>
        <form action="{{ route('update-herb', $herb) }}" method="post" enctype="multipart/form-data"  onsubmit="return editherb(this)">
            {{csrf_field()}}
            <div class=" form-group">
                <label for="name">ชื่อ</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$herb->name}}">
            </div>
            <div class="form-group">
                <label for="name">สรรพคุณ</label>
                <textarea class="form-control" id="description" name="description"
                    rows="10" >{{$herb->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="picture">รูปภาพ</label>
                <br>
                <input class="form-control form-control-lg" id="image" name="image" type="file">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection
