@extends('layouts.app')



@section('content')

<section class="panel">


    <header class="panel-heading">
        <div class="pull-right">
            <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal"> Add Chart of Account</a>
        </div>

        <h2 class="panel-title">List Chart of Account</h2>
    </header>

    <div class="panel-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif



        <div class="table-responsive">
            <table class="table table-bordered table-striped table-condensed table-hover mb-none">

                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">COA ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Parent ID</th>
                    <th class="text-center">Action</th>
                </tr>


                @foreach ($coas as $coa)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td class="text-center">{{ $coa->no_akun }}</td>
                    <td class="text-center">{{ $coa->nama }}</td>
                    <td class="text-center">{{ $coa->parent_akun }}</td>

                    <td class="text-center">

                        <form action="{{ route('chart-of-accounts.destroy',$coa->id) }}" method="POST">

                            @can('coa-edit')
                            <a class="btn btn-xs btn-primary" href="{{ route('chart-of-accounts.edit',$coa->id) }}"><i class="fa fa-pencil"></i></a>
                            @endcan

                            @csrf
                            @method('DELETE')
                            @can('coa-delete')

                            <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>




            {!! $coas->links() !!}
        </div>

    </div>

</section>




<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Chart of Account</h4>
            </div>
            <div class="modal-body">


                <form name="coaForm" action="{{ route('chart-of-accounts.store') }}" class="form-horizontal" method="POST">

                    @csrf

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Coa ID</label>
                        <div class="col-sm-6">
                            <input type="text" name="no_akun" class="form-control" required />
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" class="form-control" required />
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Parent Account</label>
                        <div class="col-sm-4">
                            <input type="text" name="parent_akun" class="form-control" required />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default"  onclick="form_submit()">Print</button> -->
                        <!-- <a class="btn  btn-primary">Save</a> -->
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes</button>


                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

                </form>
            </div>



        </div>


    </div>
</div>


@endsection

@section('')

<script>

</script>

@endsection