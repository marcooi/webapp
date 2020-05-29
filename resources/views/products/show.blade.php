@extends('layouts.app')


@section('content')


<!-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div> -->

<div class="card shadow mb-4">

    <!-- <div class="pull-left">
        <h2> Show Product</h2>
    </div> -->

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Show Product</h6>
    </div>
    <div class="card-body">

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
        </p>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    {{ $product->detail }}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection