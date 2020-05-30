@extends('layouts.app')



@section('content')


<section class="panel">
    <header class="panel-heading">

        <div class="pull-right">
            @can('sale-create')
            <a class="btn btn-sm btn-success" href="{{ route('sales.create') }}"> Add Quotation</a>
            @endcan
        </div>

        <h2 class="panel-title">Sales Order</h2>
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
                        <th class="text-center">PO#</th>
                        <th class="text-center">Invoice#</th>
                        <th class="text-center">TT#</th>
                        <th class="text-center">Delivery#</th>
                        <th class="text-center">Product</th>
                        <th class="text-center">Status</th>


                        <th class="text-center" width=120px>Action</th>
                    </tr>
                <tbody>

                    @foreach ($sales as $index => $rcp)
                    <tr>
                        <td class="text-center">{{ ++$index }}</td>
                        <td class="text-center">{{ $rcp->description }}</td>
                        <td class="text-center">{{ $rcp->po_no }}</td>
                        <td class="text-center">{{ $rcp->invoice_no }}</td>
                        <td class="text-center">{{ $rcp->tt_invoice_no }}</td>
                        <td class="text-center">{{ $rcp->delivery_no }}</td>

                        <td class="text-left">
                            @foreach($rcp->products as $key => $item)
                            <li>{{ $item->name }} ({{ $item->pivot->qty }} x Rp{{ number_format($item->pivot->unit_price) }})</li>
                            @endforeach

                        </td>

                        <td class="text-center">
                            @if (($rcp -> is_confirmed) == 1)
                            <span class="badge badge-success">Confirmed</span>
                            @else
                            <label class="badge badge-success">Draft</span>

                                @endif
                        </td>

                        <td class="text-center">

                            <form action="{{ route('sales.destroy',$rcp->id) }}" method="POST">

                                @can('sale-edit')

                                @if (($rcp -> is_confirmed) == 1)

                                <a class="btn btn-xs btn-primary print-order" data-toggle="modal" data-target="#myModal" data-url="{{ route('sale.printorder',$rcp->id) }}"><i class="fa fa-print"></i></a>

                                @endif


                                @if (($rcp -> is_confirmed) == 0)
                                <a class="btn btn-xs btn-primary" href="{{ route('sale.confirm', $rcp->id) }}" onclick="return confirm('Sure Want Confirm Sales Order?')"><i class="fa fa-save"></i></a>
                                @endif

                                <a class="btn btn-xs btn-primary" href="{{ route('sales.edit', $rcp->id) }}"><i class="fa fa-pencil"></i></a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('sale-delete')

                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                                @endcan


                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>


            {!! $sales->links() !!}
        </div>


    </div>

</section>






<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Print Order</h4>
            </div>
            <div class="modal-body">


                <form action="{{ route('sale.printorder', $rcp->id  ?? '0') }}" id="printForm" target="_blank" class="form-horizontal mb-lg" novalidate="novalidate">


                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Select</label>
                        <div class="col-sm-6">
                            <select name="print_option" class="form-control">
                                <option value="1">Print Invoice</option>
                                <option value="2">Print TT Invoice</option>
                                <option value="3">Print Delivery Order</option>
                            </select>
                        </div>
                    </div>



                </form>

            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default"  onclick="form_submit()">Print</button> -->
                <a class="btn  btn-primary" onclick="form_submit()" target="_blank">Print</a>


                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>




@endsection

@section('scripts')

<script>
    function form_submit() {
        document.getElementById("printForm").submit();
        // console.log('PRINT');
    }

    $(document).ready(function() {



    });
</script>

@endsection