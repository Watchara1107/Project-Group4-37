@extends('layouts.app')
@section('content')
<span class="anchor" id="herb"></span>

<div class="container home-section">
    <h2>รายชื่อสมุนไพร</h2>
    @foreach ($herbs as $herb)

    <div class="row border-herb">
        <div class="col-3">
            <img src="{{ asset('admin/images/herbs/' . $herb->image) }}" style="width:200px;height:200px;">
        </div>
        <div class="col ">
            <span class="size-large ">{{$herb->name}}</span><br>

            <span class="size-large">{{$herb->description}}</span>
        </div>

    </div>

    @endforeach
</div>


@endsection
