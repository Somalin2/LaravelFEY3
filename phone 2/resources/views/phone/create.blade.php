@extends('admin.layout')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Create Phone</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Static Navigation</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                @if(Session::has('phone_create'))
                <div class="alert alert-primary alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Primary!</strong> {!! session('phone_create') !!}
                </div>
                @endif
                @if (count($errors) > 0)
                <!-- Form Error List -->
                <div class="alert alert-danger">
                    <strong>Something is Wrong</strong>
                    <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!-- It Create the new Category -->

                {!! Form::open(array('url'=>'phone', 'files'=>'true')) !!}
                <br>
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name',null, array('class'=>'form-control')) !!}

                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description',null, array('class'=>'form-control')) !!}
                <br>

                {!! Form::label('price', ' $ Price:') !!}
                {!! Form::text('price',null, array('class'=>'form-control')) !!}
                <br>

                {!! Form::label('photo', 'Photo:') !!}
                {!! Form::file('photo', array('class'=>'form-control')) !!}
                <br>

            
                {!! Form::submit('Create', array('class'=>'btn btn-primary')) !!}

                <a class="btn btn-primary" href="{!! url('/phone')!!}">Back</a>

                {!! Form::close() !!}

            </div>
        </div>
        <div style="height: 100vh"></div>
        <div class="card mb-4">
            <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div>
        </div>
    </div>
</main>
@endsection
