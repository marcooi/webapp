@extends('layouts.app')


@section('content')


<section class="panel">
    <header class="panel-heading">
        <div class="pull-right">
            @can('user-create')
            <a class="btn btn-sm btn-success" href="{{ route('users.create') }}"> Add User</a>
            @endcan
        </div>

        <h2 class="panel-title">Users Management</h2>
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
                        <th class="text-center">Email</th>
                        <th class="text-center">Roles</th>
                        <th class="text-center">Action</th>
                    </tr>
                <tbody>
                    @foreach ($data as $key => $user)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td class="text-center">
                            @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                            @endif
                        </td>
                        <td class="text-center">

                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                                @can('user-list')
                                <a class="btn btn-xs btn-info" href="{{ route('users.show',$user->id) }}"><i class="fa fa-eye"></i></a>
                                @endcan

                                @can('user-edit')
                                <a class="btn btn-xs btn-primary" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-pencil"></i></a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('user-delete')

                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>


            {!! $data->render() !!}
        </div>

</section>




@endsection
<!-- 

<div class="card shadow mb-4">


    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users Management</h6>
    </div>

    <div class="card-body">

        <div class="pull-right">
            @can('role-create')
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
            @endcan
        </div>


        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif


        </p>

        <table class="table table-bordered" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($data as $key => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                    @endif
                </td>
                <td>
                    

                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @can('user-list')
                        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                        @endcan

                        @can('user-edit')
                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                        @endcan

                        @csrf
                        @method('DELETE')
                        @can('user-delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
            @endforeach
        </table>


        {!! $data->render() !!}

    </div>
    <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>

</div>-->