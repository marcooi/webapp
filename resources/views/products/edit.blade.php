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


<form action="{{ route('products.update',$product->id) }}" method="POST" class="form-horizontal">
    @csrf
    @method('PUT')

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Add Product</h2>
        </header>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Name </span></label>
                <div class="col-sm-6">
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" required />
                </div>
            </div>
           
            <div class="form-group">
                <label class="col-sm-2 control-label">Detail </label>
                <div class="col-sm-9">
                    <input type="text" name="detail" value="{{ $product->detail }}" class="form-control" required />
                </div>
            </div>

          

        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="mb-xs text-center">
                    <button class="btn btn-primary"  onclick="return confirm('Are you sure want update?')">Submit</button>
                    <a class="btn btn-default" href="{{ route('products.index') }}"> Cancel</a>                    
                </div>
            </div>
        </footer>
    </section>
</form>



@endsection