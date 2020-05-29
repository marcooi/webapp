@extends('layouts.app')



@section('content')

<div class="card shadow mb-4">



    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Permission</h6>
    </div>

    <div class="card-body">

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('permissions.index') }}"> Back</a>
        </div>


        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        </P>


        <form action="{{ route('permissions.update',$permission->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $permission->name }}" class="form-control" placeholder="Name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

</div>

@endsection