@extends('admin.layout')
@section('content')
<main>
  <div class="container-fluid">
    <h1 class="mt-4">Edit Phone</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="/phone">View all phone</a></li>
      <li class="breadcrumb-item active"><a href="phone/create">Create post</a></li>
    </ol>
    <div class="card mb-4">
      <div class="card-body">
            @if(Session::has('phone_update'))
                <div class="alert alert-primary alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Primary!</strong> {!! session('phone_update') !!}
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

                {!! Form::model($phone , array('route' => array('phone.update', $phone->id), 'method'=>'PUT','files'=>'true')) !!}
                <br>
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name',null, array('class'=>'form-control')) !!}

            <br>
                {!! Form::label('price', '$ Price:') !!}
                {!! Form::text('price',null, array('class'=>'form-control')) !!}

                {!! Form::label('photo', 'Image:') !!}
                {!! Form::file('photo', array('class'=>'form-control')) !!}
                <br>

                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description',null, array('class'=>'form-control')) !!}
                <br>
                {!! Form::submit('Update', array('class'=>'btn btn-primary')) !!}
                <a class="btn btn-primary" href="{!! url('/phone')!!}">Back</a>
                {!! Form::close() !!}
      </div>
    </div>
  </div>
</main>
@endsection
