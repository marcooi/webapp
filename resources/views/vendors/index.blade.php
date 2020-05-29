@extends('layouts.app')


@section('content')


<section class="panel">
    <header class="panel-heading">
        <div class="pull-right">
            @can('user-create')
            <a class="btn btn-sm btn-success" href="{{ route('vendors.create') }}"> Add Vendor/Customer</a>
            @endcan
        </div>

        <h2 class="panel-title">Vendor/Customer</h2>
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
                        <th class="text-center" width=10%>Name</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Address</th>
                        <th class="text-center" width=8%>Isvendor</th>
                        <th class="text-center" width=8%>IsCustomer</th>
                        <th class="text-center" width=8%>IsActive</th>
                        <th class="text-center" width=10%>Action</th>
                    </tr>
                <tbody>
                    @foreach ($vendors as $vendor)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td class="text-center">{{ $vendor->name }}</td>
                        <td class="text-center">{{ $vendor->description }}</td>
                        <td class="text-center">{{ $vendor->address1 }}</td>
                        <td class="text-center">{{ $vendor->is_vendor }}</td>
                        <td class="text-center">{{ $vendor->is_customer }}</td>
                        <td class="text-center">{{ $vendor->is_active }}</td>
                        <td class="text-center">

                            <form action="{{ route('vendors.destroy', $vendor->id) }}" method="POST">

                                @can('vendor-edit')
                                <a class="btn btn-xs btn-primary" href="{{ route('vendors.edit',$vendor->id) }}"><i class="fa fa-pencil"></i></a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('vendor-delete')

                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>


            {!! $vendors->render() !!}
        </div>

</section>




<!-- <div class="card shadow mb-4">


    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Vendors</h6>
    </div>

    <div class="card-body">

        <div class="pull-right">
            @can('product-create')
            <a class="btn btn-success" href="{{ route('vendors.create') }}"> Create New Vendor</a>
            @endcan
        </div>

        </p>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif


        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($vendors as $vendor)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $vendor->name }}</td>
                <td>{{ $vendor->detail }}</td>
                <td>
                    <form action="{{ route('vendors.destroy',$vendor->id) }}" method="POST">
                        @can('vendor-list')
                        <a class="btn btn-info" href="{{ route('vendors.show',$vendor->id) }}">Show</a>
                        @endcan

                        @can('vendor-edit')
                        <a class="btn btn-primary" href="{{ route('vendors.edit',$vendor->id) }}">Edit</a>
                        @endcan

                        @csrf
                        @method('DELETE')
                        @can('vendor-delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
            @endforeach
        </table>


        {!! $vendors->links() !!}



    </div>
</div> -->

@endsection