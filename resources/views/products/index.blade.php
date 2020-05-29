@extends('layouts.app')



@section('content')


<section class="panel">
    <header class="panel-heading">
        <div class="pull-right">
            @can('product-create')
            <a class="btn btn-sm btn-success" href="{{ route('products.create') }}"> Add Product</a>
            @endcan
        </div>

        <h2 class="panel-title">Product List</h2>
    </header>
    <div class="panel-body">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="table-responsive">

            <table class="table table-bordered table-striped table-condensed table-hover mb-none">
                <thead>
                    <tr>
                        <th class="text-center" width=5%>No</th>
                        <th class="text-center" width=20%>Name</th>
                        <th class="text-center">Detail</th>
                        
                        <th class="text-center" width=8% >Action</>
                    </tr>
                <tbody>

                    @foreach ($products as $product)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td class="text-center">{{ $product->name }}</td>
                        <td class="text-center">{{ $product->detail }}</td>
                        
                        <td class="text-center">

                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                           
                                @can('product-edit')
                                <a class="btn btn-xs btn-primary" href="{{ route('products.edit', $product->id) }}"><i class="fa fa-pencil"></i></a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('product-delete')

                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>


            {!! $products->links() !!}
        </div>

</section>


<!-- <div class="card shadow mb-4">


    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Products</h6>
    </div>

    <div class="card-body">

        <div class="pull-right">
            @can('product-create')
            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            @endcan
        </div>

        </p>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif


        <table class="table table-bordered" id="producttable">
            <thead>


                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            @can('product-list')
                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                            @endcan

                            @can('product-edit')
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                            @endcan

                            @csrf
                            @method('DELETE')
                            @can('product-delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</button>
                            @endcan
                        </form>



                    </td>
                </tr>
                @endforeach

            </thead>
        </table>


        {!! $products->links() !!}



    </div>
</div> -->

@endsection