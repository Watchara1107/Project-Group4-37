@extends('admin/layouts/app')
@section('content')

<div class=" wrapper ">
    <div class="content-wrapper table-margin">
        <h2>แก้ไขข้อมูล</h2>
        <form action="{{ route('update-content', $content) }}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">ชื่อ</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$content->name}}">
            </div>
            <div class="form-group">
                <label for="name">เนื้อหา</label>
                <input type="text" class="form-control" id="detail" name="detail" value="{{$content->detail}}">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection
