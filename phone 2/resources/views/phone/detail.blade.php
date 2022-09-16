@extends('admin.layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Phone Detail</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Static Navigation</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">

                <div class="panel-body">
                    <div>

                        <div>ID : {!! $phone->id !!}</div><br>

                        <div>Name : {!! $phone->name !!}</div><br>
                        <div>Price : {!! $phone->price !!}</div><br>
                        <div>Description : {!! $phone->description !!}</div><br>

                        <div>Image : {!! Html::image('img/'.$phone->photo, $phone->name, array('width'=>'300')) !!}</div><br>

                    </div>
                </div>
                <br>
                <a class="btn btn-primary" href="{{url('/phone')}}">Back</a>
            </div>

        </div>
    </div>
    <div style="height: 300vh"></div>
    </div>
</main>
@endsection
