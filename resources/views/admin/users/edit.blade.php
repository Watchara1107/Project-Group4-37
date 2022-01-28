@extends('admin/layouts/app')
@section('content')

<div class=" wrapper">
    <div class="table-responsive content-wrapper  table-margin">
        <h2>แก้ไขข้อมูล</h2>
        <form action="{{ route('update-background', $background) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="picture">รูปภาพ</label>
                <br>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="status">สถานะ</label>
                <select id="status" name="status">
                    <option value="1">เปิด</option>
                    <option value="0">ปิด</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection
