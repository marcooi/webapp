@extends('layouts.app')
@section('content')



<section class="panel">
    <header class="panel-heading">
        <div class="pull-right">
            @can('permission-create')
            <a class="btn btn-sm btn-success" href="{{ route('permissions.create') }}"> Add Permission</a>
            @endcan
        </div>

        <h2 class="panel-title">Permission Management</h2>
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
                        <th class="text-center">No</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Action</th>
                    </tr>
                <tbody>

                    @foreach ($permissions as $key => $permission)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td class="text-center">{{ $permission->name }}</td>
                        <td class="text-center">

                            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST">

                                @can('permission-edit')
                                <a class="btn btn-xs btn-primary" href="{{ route('permissions.edit',$permission->id) }}"><i class="fa fa-pencil"></i></a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('permission-delete')

                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                                @endcan

                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>


            {!! $permissions->render() !!}
        </div>

</section>




<!-- <div class="card shadow mb-4">


    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Permission Management</h6>


    </div>

    <div class="card-body">

        <div class="pull-right">

            @can('permission-create')
            <a class="btn btn-success" href="{{ route('permissions.create') }}"> Create New Permission</a>
            @endcan
        </div>


        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        </p>

        <table class="table table-bordered" id="permissiontable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th width="180px">Action</th>
                </tr>
                @foreach ($permissions as $key => $permission)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>

                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST">

                            @can('permission-edit')
                            <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
                            @endcan

                            @csrf
                            @method('DELETE')
                            @can('permission-delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</button>
                            @endcan
                        </form>


                    </td>
                </tr>
                @endforeach

            </thead>
        </table>


        {!! $permissions->render() !!}


    </div>
</div> -->


@endsection