@extends('layouts.app')

@section('content')

<body class="is-welcome login">
    <div class="container">
        <div class="card-wrap">
            <div class="card border-0 shadow card--welcome is-show" id="welcome">
                <div class="card-body">
                    <h2 class="card-title">ยินดีต้อนรับ</h2>
                    <p>เลือกเข้าสู่ระบบสำหรับผู้ที่เป็นสมาชิกแล้ว</p>
                    <div class="btn-wrap"><a class="btn btn-lg btn-register js-btn"
                            data-target="register">สมัครสมาชิก</a><a class="btn btn-lg btn-login js-btn"
                            data-target="login">ลงชื่อเข้าใช้</a></div>
                </div>
            </div>
            <div class="card border-0 shadow card--register" id="register">
                <div class="card-body">
                    <h2 class="card-title">สมัครสมาชิก</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="ชื่อ">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="username" type="text"
                                class="form-control @error('username') is-invalid @enderror" name="username"
                                value="{{ old('username') }}" placeholder="ชื่อผู้ใช้">

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="รหัสผ่าน">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="ยืนยันรหัสผ่าน">
                        </div>
                        <button type="submit" class="btn btn-lg">
                            สมัครสมาชิก
                        </button>
                    </form>
                </div>
                <button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button>
            </div>
            <div class="card border-0 shadow card--login" id="login">
                <div class="card-body">
                    <h2 class="card-title">เข้าสู่ระบบ</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input id="username" type="text"
                                class="form-control @error('username') is-invalid @enderror" name="username"
                                value="{{ old('username') }}" required autocomplete="username" autofocus
                                placeholder="ชื่อผู้ใช้">

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="รหัสผ่าน">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <p> @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                ลืมรหัสผ่าน
                            </a>
                            @endif
                        </p>
                        <button type="submit" class="btn btn-lg"> เข้าสู่ระบบ</button>
                    </form>
                </div>
                <button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button>
            </div>
        </div>
    </div>
    @endsection
