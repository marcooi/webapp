@extends('layouts.app')

@section('content')


<section class="panel">
    <header class="panel-heading">
        <div class="pull-right">
            @can('company-create')
            <a class="btn btn-sm btn-success" href="{{ route('companies.create') }}"> Add Company</a>
            @endcan
        </div>

        <h2 class="panel-title">List Company</h2>
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
                        <th class="text-center" width=8%>Name</th>
                        <th class="text-center" width=25%>Description</th>
                        <th class="text-center" width=25%>Address1</th>
                        <th class="text-center" width=15%>NPWP</th>
                        <th class="text-center" width=5%>Vendor</th>
                        <th class="text-center" width=5%>Customer</th>
                        <th class="text-center" width=6%>Owner</th>
                        <th class="text-center" width=6%>Action</th>
                    </tr>
                <tbody>

                    @foreach ($company as $comp)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td class="text-center">{{ $comp->name }}</td>
                        <td class="text-center">{{ $comp->description }}</td>
                        <td class="text-center">{{ $comp->address1 }}</td>
                        <td class="text-center">{{ $comp->npwp }}</td>
                        <td class="text-center">{{ $comp->is_vendor }}</td>
                        <td class="text-center">{{ $comp->is_customer }}</td>
                        <td class="text-center">{{ $comp->is_owner }}</td>
                        <td class="text-center">

                            <form action="{{ route('companies.destroy',$comp->id) }}" method="POST">

                                @can('company-edit')
                                <a class="btn btn-xs btn-primary" href="{{ route('companies.edit',$comp->id) }}"><i class="fa fa-pencil"></i></a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('company-delete')

                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>


            {!! $company->links() !!}
        </div>

</section>




@endsection