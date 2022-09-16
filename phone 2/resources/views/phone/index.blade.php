@extends('admin.layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Collection</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Static Navigation</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <a class="btn btn-primary" href="{{url('/phone/create')}}">Create New</a>
                <br>

                @if(Session::has('phone_delete'))
                <div class="alert alert-primary alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Primary!</strong> {!! session('phone_delete') !!}
                </div>
                @endif
                @if (count($phones) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">

                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Photo</th>
                                <th> Info</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach ($phones as $phone)
                                <tr>
                                    <td>
                                        <div>{!! $phone->name !!}</div>
                                    </td>

                                    <td>
                                        <div>{!! $phone->description !!}</div>
                                    </td>
                                    <td>
                                        <div>{!! $phone->price !!}</div>
                                    </td>
                                    <td>
                                        <div>{!! Html::image('img/'.$phone->photo, $phone->name, array('width'=>'60')) !!}</div>
                                    </td>
                                    <td><a class="btn btn-primary" href="{!! url('phone/' . $phone->id . '/detail') !!}">Detail</a></td>
                                    <td><a class="btn btn-primary" href="{!! url('phone/' . $phone->id . '/edit') !!}">Edit</a></td>

                                    <td>
                                        {!! Form::open(array('url'=>'phone/'. $phone->id, 'method'=>'DELETE')) !!}
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}
                                        <button class="btn btn-danger delete">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <script>
                    $(".delete").click(function() {
                        var form = $(this).closest('form');
                        $('<div></div>').appendTo('body')
                            .html('<div><h6> Are you sure ?</h6></div>')
                            .dialog({
                                modal: true,
                                title: 'Delete message',
                                zIndex: 10000,
                                autoOpen: true,
                                width: 'auto',
                                resizable: false,
                                buttons: {
                                    Yes: function() {
                                        $(this).dialog('close');
                                        form.submit();
                                    },
                                    No: function() {
                                        $(this).dialog("close");
                                        return false;
                                    }
                                },
                                close: function(event, ui) {
                                    $(this).remove();
                                }
                            });
                        return false;
                    });
                </script>
                @endif
            </div>
        </div>
        <div style="height: 300vh"></div>
    </div>
</main>
@endsection
