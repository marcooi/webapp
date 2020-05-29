@extends('layouts.app')

@section('content')

<section class="panel">
    <header class="panel-heading">
        <div class="pull-right">
            @can('address-create')
            <a class="btn btn-sm btn-success" href="{{ route('addresses.create') }}"> Add Address</a>
            @endcan
        </div>

        <h2 class="panel-title">Company Shipping Address</h2>
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
                        <th class="text-center"width=8%>No</th>
                        <th class="text-center" width=20%>Vendor/Customer</th>
                        <th class="text-center">Address1</th>    
                        <th class="text-center" >Address2</th>                   
                        <th class="text-center"width=10%>Action</th>                   
                    </tr>
                <tbody>
                   
                    @foreach ($listaddress as $address)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td class="text-center" >{{ $address->description }}</td>
                        <td class="text-center">{{ $address->address1 }}</td>    
                        <td class="text-center">{{ $address->address2 }}</td>                        
                        <td class="text-center">

                            <form action="{{ route('addresses.destroy',$address->id) }}" method="POST">                               

                                @can('address-edit')
                                <a class="btn btn-xs btn-primary" href="{{ route('addresses.edit',$address->id) }}"><i class="fa fa-pencil"></i></a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('address-delete')

                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>


            {!! $listaddress->links() !!}
        </div>

</section>

@endsection