@extends('admin.layouts.app')
@section('content')

<div class=" wrapper ">
    <div class="content-wrapper table-margin">
        <h2>เพิ่มรูปภาพพื้นหลัง</h2>
        <form action="{{route('create-background')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="picture">รูปภาพ</label>
                <br>
                <input type="file" name="image" id="image">
            </div>
            <button type="submit" name="submit" class="btn btn-success">เพิ่มข้อมูล</button>
        </form>
    </div>
</div>
@endsection
