@extends('layouts.app')

@section('content')
    <div class="home-section">



        <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign up</h3>
            <form action="{{ route('register') }}" method="POST">
                <div class="form-outline mb-4">
                    @csrf
                    <input type="text" id="username"
                        class="form-control form-control-lg @error('username') is-invalid @enderror"
                        placeholder="ชื่อผู้ใช้" />
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-outline mb-4">
                    @csrf
                    <input type="text" id="name"
                        class="form-control form-control-lg @error('name') is-invalid @enderror"
                        placeholder="ชื่อ" />
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="password"
                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                        placeholder="รหัสผ่าน" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-outline mb-4">
                    <input type="password" id="password-confirm"
                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                        placeholder="ยืนยันรหัสผ่าน" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </form>
        </div>
    </div>









@endsection
