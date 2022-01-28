@extends('admin.layouts.app')
@section('content')

<div class=" wrapper ">
    <div class="content-wrapper table-margin">
        <h2>เพิ่มข้อมูลหน้าแรก</h2>
        <form action="{{route('create-content')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">ชื่อ</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">เนื้อหา</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" id="detail" name="detail"
                    rows="10"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success">เพิ่มข้อมูล</button>
        </form>
    </div>
</div>
@endsection
