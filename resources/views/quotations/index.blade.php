@extends('layouts.app')



@section('content')


<section class="panel">
    <header class="panel-heading">

        <div class="pull-right">
            @can('sale-create')
            <a class="btn btn-sm btn-success" href="{{ route('quotations.create') }}"> Add Quotation</a>
            @endcan
        </div>

        <h2 class="panel-title">Sales Quotation</h2>
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
                        <th class="text-center">Reff#</th>
                        <th class="text-center">Date</th>

                        <th class="text-center">Product</th>
                        <th class="text-center">Status</th>


                        <th class="text-center" width=120px>Action</th>
                    </tr>
                <tbody>

                    @foreach ($quotations as $index => $rcp)
                    <tr>
                        <td class="text-center">{{ ++$index }}</td>
                        <td class="text-center">{{ $rcp->description }}</td>
                        <td class="text-center">{{ $rcp->reff_no }}</td>
                        <td class="text-center">{{ tanggal_local($rcp->date) }}</td>

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

                            <form action="{{ route('quotations.destroy',$rcp->id) }}" method="POST">

                                @can('quotation-edit')

                                @if (($rcp -> is_confirmed) == 1)

                                <a class="btn btn-xs btn-primary print-order" href="{{ route('sale.printquotation',$rcp->id) }}" target="_blank"><i class="fa fa-print"></i></a>

                                @endif


                                @if (($rcp -> is_confirmed) == 0)
                                <a class="btn btn-xs btn-primary" href="{{ route('quotation.confirm', $rcp->id) }}" onclick="return confirm('Sure Want Confirm Sales Quotation?')"><i class="fa fa-save"></i></a>
                                @endif

                                <a class="btn btn-xs btn-primary" href="{{ route('quotations.edit', $rcp->id) }}"><i class="fa fa-pencil"></i></a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('quotation-delete')

                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                                @endcan


                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>


            {!! $quotations->links() !!}
        </div>


    </div>

</section>









@endsection