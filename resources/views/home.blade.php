@extends('layouts/app')
@section('content')

<div class="container home-section text-center">
    <h2 class="home-font">ข้อมูลผู้ใช้</h2>
    <div class="col-auto-md">
        <img src="{{ asset('img/home-3.png') }}" class="profile-border">

        <form action="{{ route('update-profile', $user) }}" method="post">
            {{csrf_field()}}
            <label for="name" class="btn-text">ชื่อ</label>
            <div class="form-group d-flex justify-content-center pb-2">

                <input type="text" class="form-control user-name text-center btn-text " id="name" name="name"
                    value="{{$user->name}}">
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-text">บันทึกข้อมูล</button>

        </form>
    </div>
    <div class="pt-3">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            <p class="btn btn-danger btn-text">
                ออกจากระบบ
            </p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
@endsection
