@extends('admin/layouts.app')
@section('content')
<div class="wrapper container-fluid">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="d-flex justify-content-between pl-3 pr-4">
                <h1>จัดการสมุนไพร</h1>

                <a href="{{route('add-herb')}}" class="btn btn-primary ">เพิ่มข้อมูล</a>
            </div>
        </div>
        <div class="row pl-4 pr-4 d-flex table-responsive ">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="col-md-3">รูปภาพ</th>

                        <th scope="col" class="col-md-2">ชื่อ</th>
                        <th scope="col" class="col-md-4">สรรพคุณ</th>
                        <th scope="col" class="col-md-3">การกระทำ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($herb as $herb)
                    <tr>
                        <td class="col-md-3"><img  style="width:200px;height:200px;border-radius:10%;" src="{{ asset('admin/images/herbs/' . $herb->image) }}" /></td>

                        <td class="col-md-2">{{$herb->name}}</td>
                        <td class="col-md-4">{{$herb->description}}</td>
                        <td class="col-md-3">
                            <a href="{{url('/admin/herbs/edit/'.$herb->id)}}" class="btn btn-success">แก้ไข</a>
                            <a href="#" onclick="deleteConfirm('{{$herb->id}}','herbs') " class="btn btn-danger">ลบ</a>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>
</div>












@endsection
