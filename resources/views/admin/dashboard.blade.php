@extends('admin/layouts.app')

@section('content')

<div class="wrapper">
    <div class="content-wrapper">
        <p class="home-font text-center">ยินดีต้อนรับ</p>
        <p class="text-center btn-text">เข้าสู่ระบบจัดการของ"คลินิกสมุนไพรทางเลือก"</p>
        <div class="row justify-content-center ">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ \App\Herb::all()->count() }}</h3>
                        <p>สมุนไพรที่มีอยู่</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{route('herb')}}" class="small-box-footer">รายละเอียด <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ \App\Background::all()->count() }}</h3>

                        <p>ภาพพื้นหลังที่มี</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{route('background')}}" class="small-box-footer">รายละเอียด <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ \App\User::all()->count() }}</h3>
                        <p>ผู้ใช้ทั้งหมด</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">รายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

        </div>

        @endsection('content')
