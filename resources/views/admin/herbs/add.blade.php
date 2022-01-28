@extends('admin.layouts.app')
@section('content')

    <div class=" wrapper ">
        <div class="content-wrapper table-margin">
            <h2>เพิ่มสมุนไพร</h2>
            <form action="{{ route('create-herb') }}" method="post" enctype="multipart/form-data"
                onsubmit="return newherb(this);">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">ชื่อ</label>
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">สรรพคุณ</label>
                    <textarea class="form-control" id="description" name="description" rows="10"></textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="picture">รูปภาพ</label>
                    <br>
                    <input class="form-control form-control-lg" id="image" name="image" type="file">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-success">เพิ่มข้อมูล</button>
            </form>
        </div>
    </div>


@endsection
