@extends('admin.layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="wrapper container-fluid">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="d-flex justify-content-between pl-3 pr-4">
                <h1>จัดการผู้ใช้</h1>

            </div>
        </div>
        <div class="row pl-4 pr-4 d-flex table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="col-md-2">ชื่อ</th>
                        <th scope="col" class="col-md-2">ชื่อผู้ใช้</th>
                        <th scope="col" class="col-md-2">สถานะ</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($user as $user)
                    <tr>

                        {{-- <td class="col-md-3"><img
                                src="{{ asset('admin/images/backgrounds/' . $background->image) }}"
                                class="background-img" />
                        </td> --}}
                        <td class="col-md-2">{{$user->name}}</td>
                        <td class="col-md-2">{{$user->username}}</td>
                        <td class="col-md-2">
                            @if($user->type==0)
                            <a href="#" class="btn btn-danger"
                                onclick="userstatus0('{{$user->id}}','{{$user->name}}')">User</a>
                            @else
                            @if ($user->username == "admin"||$user->id==auth()->user()->id)
                            <a href="#" class="btn btn-secondary">ไม่สามารถทำได้</a>
                            @else
                            <a href="#" class="btn btn-success"
                                onclick="userstatus1('{{$user->id}}','{{$user->name}}') ">Admin</a>
                            @endif
                            @endif
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
