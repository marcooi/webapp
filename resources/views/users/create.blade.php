@extends('layouts.app')


@section('content')


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


<form action="{{ route('users.store') }}" method="POST" class="form-horizontal">
    @csrf

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Add User</h2>
        </header>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label">Name <span class="required">*</span></label>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" placeholder="eg.: John Doe" required />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Email <span class="required">*</span></label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <input type="email" name="email" class="form-control" placeholder="eg.: email@email.com" required />
                    </div>
                </div>
                <div class="col-sm-9">

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control" placeholder="Password" required />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Confirm Password</label>
                <div class="col-sm-6">
                    <input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password" required />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Company</label>
                <div class="col-sm-6">
                    <select name="roles[]" class="form-control" multiple required>
                        @foreach ($roles as $role)
                        <option value="{{ $role }}">
                            {{ $role }}
                        </option>
                        @endforeach
                    </select>
                    <label class="error" for="company"></label>
                </div>
            </div>

        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="mb-xs text-center">
                    <button class="btn btn-primary">Submit</button>
                    <a class="btn btn-default" href="{{ route('users.index') }}"> Cancel</a>
                    <!-- <button type="reset" class="btn btn-default">Cancel</button> -->
                </div>
            </div>
        </footer>
    </section>
</form>



<!-- 

<section class="panel">
    <header class="panel-heading">
        <div class="pull-right">

            <a class="btn btn-sm btn-success" href="{{ route('users.index') }}"> Cancel</a>

        </div>

        <h2 class="panel-title">Add User</h2>
    </header>
    <div class="panel-body">

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



        {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Role:</strong>
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        {!! Form::close() !!}

    </div>

</section> -->

<!-- 
<div class="card shadow mb-4">


    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create New User</h6>
    </div>

    <div class="card-body">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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

        </p>

        {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Role:</strong>
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        {!! Form::close() !!}



    </div>
</div> -->


@endsection