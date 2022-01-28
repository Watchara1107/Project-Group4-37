@extends('admin.layouts.app')
@section('content')

<div class="wrapper container-fluid">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="d-flex justify-content-between pl-3 pr-4">
                <h1>จัดการเนื้อหาหน้าแรก</h1>

                <a href="{{route('add-content')}}" class="btn btn-primary ">เพิ่มข้อมูล</a>
            </div>
        </div>
        <div class="row pl-4 pr-4 d-flex table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="col-md-2">ชื่อ</th>
                        <th scope="col" class="col-md-2">เนื้อหา</th>
                        <th scope="col" class="col-md-2">การกระทำ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($content as $content)
                    <tr>
                        <td class="col-2">{{$content->name}}</td>
                        <td class="col-3">{{$content->detail}}</td>
                        <td class="col-3">
                            <a href="{{url('/admin/contents/edit/'.$content->id)}}" class="btn btn-success">แก้ไข</a>
                            <a href="#" onclick="deleteConfirm('{{$content->id}}','contents') " class="btn btn-danger">ลบ</a>
                        </td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
