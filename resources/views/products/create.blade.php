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


<form action="{{ route('products.store') }}" method="POST" class="form-horizontal" autocomplete="off">
    @csrf

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Add Product</h2>
        </header>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Name </span></label>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" required />
                </div>
            </div>
           
            <div class="form-group">
                <label class="col-sm-2 control-label">Detail </label>
                <div class="col-sm-9">
                    <textarea name="detail" rows="3" class="form-control" required ></textarea>
                </div>
            </div>

          

        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="mb-xs text-center">
                    <button class="btn btn-primary">Submit</button>
                    <a class="btn btn-default" href="{{ route('products.index') }}"> Cancel</a>
                    <!-- <button type="reset" class="btn btn-default">Cancel</button> -->
                </div>
            </div>
        </footer>
    </section>
</form>



<!-- <div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add New Product</h6>
    </div>

    <div class="card-body">

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>

        </p>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <form action="{{ route('products.store') }}" method="POST">
            @csrf


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>


        </form>


    </div>
</div> -->


@endsection