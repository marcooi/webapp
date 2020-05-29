@extends('layouts.app')


@section('content')



<section class="panel">
    <header class="panel-heading">
        <div class="pull-right">
            @can('role-create')           
            <a class="btn btn-sm btn-success" href="{{ route('roles.create') }}"> Add Role</a>
            @endcan
        </div>

        <h2 class="panel-title">Role Management</h2>
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
                        <th class="text-center" width="280px">Action</th>
                    </tr>
                <tbody>

                    @foreach ($roles as $key => $role)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td class="text-center">{{ $role->name }}</td>
                        <td class="text-center">

                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                @can('role-list')
                                <a class="btn btn-xs btn-info" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-eye"></i></a>
                                @endcan

                                @can('role-edit')
                                <a class="btn btn-xs btn-primary" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-pencil"></i></a>                               
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('role-delete')

                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>                                
                                @endcan
                            </form>




                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>


            {!! $roles->render() !!}
        </div>

</section>


<!-- 
<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Role Management</h6>
    </div>

    <div class="card-body">

        <div class="pull-right">
            @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
        </div>


        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        </p>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($roles as $key => $role)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->name }}</td>
                <td>              

                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                        @can('role-list')
                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                        @endcan

                        @can('role-edit')
                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                        @endcan

                        @csrf
                        @method('DELETE')
                        @can('role-delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</button>
                        @endcan
                    </form>

                    


                </td>
            </tr>
            @endforeach
        </table>


        {!! $roles->render() !!}


    </div>
</div> -->


@endsection

@section('js')

<!-- 
<script>
    $(".delete").on("submit", function() {
        return confirm("Do you want to delete this item?");
    });
</script> -->

@endsection