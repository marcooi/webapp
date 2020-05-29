@extends('layouts.app')



@section('content')



<section class="panel">
    <header class="panel-heading">

        <div class="pull-right">
            @can('goodreceipt-create')
            <a class="btn btn-sm btn-success" href="{{ route('receipts.create') }}"> Add Goods Receipt</a>
            @endcan
        </div>

        <h2 class="panel-title">Goods Receipt</h2>
    </header>

    <div class="panel-body">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-block">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="table-responsive">

            <table class="table table-bordered table-striped table-condensed table-hover mb-none">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Company</th>
                        <th class="text-center">PO NO</th>
                        <th class="text-center">Product</th>
                        <th class="text-center">Rcv Qty</th>
                        <th class="text-center">Rcv Date</th>
                        <th class="text-center">SJ#</th>
                        <th class="text-center">Serial#</th>
                        <th class="text-center" width=120px>Action</th>
                    </tr>
                <tbody>

                    @foreach ($receipts as $index => $rcp)
                    <tr>
                        <td class="text-center">{{ ++$index }}</td>
                        <td class="text-center">{{ $rcp->description }}</td>
                        <td class="text-center">{{ $rcp->po_no }}</td>
                        <td class="text-left"> {{ $rcp->name }} </td>
                        <td class="text-center">{{ number_format($rcp->qty) }}</td>
                        <td class="text-center">{{ date('d/m/yy', strtotime($rcp->receive_at)) }}</td>
                        <td class="text-center">{{ $rcp->surat_jalan_no }}</td>
                        <td class="text-center">{{ $rcp->serial_no }}</td>
                        <td class="text-center">

                            <form action="{{ route('receipts.destroy',$rcp->id) }}" method="POST">

                                @can('goodreceipt-edit')

                                <a class="btn btn-xs btn-primary" href="{{ route('receipts.edit', $rcp->id) }}"><i class="fa fa-pencil"></i></a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('goodreceipt-delete')

                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                                @endcan


                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>


            {!! $receipts->links() !!}
        </div>

    </div>

</section>


@endsection

@section('scripts')


@endsection