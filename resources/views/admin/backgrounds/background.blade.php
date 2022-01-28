@extends('admin.layouts.app')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="wrapper container-fluid">
        <div class="content-wrapper">
            <div class="content-header">
                <div class="d-flex justify-content-between pl-3 pr-4">
                    <h1>จัดการรูปภาพพื้นหลัง</h1>

                    <a href="#" onclick="insertimg()" class="btn btn-primary ">เพิ่มข้อมูล</a>
                </div>
            </div>
            <div class="row pl-4 pr-4 d-flex table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="col-md-2">รูปภาพ</th>
                            <th scope="col" class="col-md-2">สถานะ</th>
                            <th scope="col" class="col-md-2">การกระทำ</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($background as $background)
                            <tr>

                                <td class="col-md-5"><img
                                        src="{{ asset('admin/images/backgrounds/' . $background->image) }}"
                                        class="background-img" />
                                </td>
                                <td class="col-md-3">
                                    @if ($background->status == 0)
                                        <a href="#" class="btn btn-success"
                                            onclick="changestatus0('{{ $background->id }}','background') ">เปิด</a>
                                    @else
                                        <a href="#" class="btn btn-danger"
                                            onclick="changestatus1('{{ $background->id }}','background')">ปิด</a>
                                    @endif
                                </td>
                                <td class="col-md-4">
                                    <a href="#" class="btn btn-success"
                                        onclick="editimg('{{ $background->id }}','background')">แก้ไข</a>
                                    <a href="#" onclick="deleteConfirm('{{ $background->id }}','background') "
                                        class="btn btn-danger">ลบ</a>
                                </td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
