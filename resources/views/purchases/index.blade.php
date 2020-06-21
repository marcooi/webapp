@extends('layouts.app')



@section('content')



<section class="panel">
    <header class="panel-heading">
        <div class="pull-right">
            @can('purchase-create')
            <a class="btn btn-sm btn-success" href="{{ route('purchases.create') }}"> Add Purchase</a>
            @endcan
        </div>

        <h2 class="panel-title">Purchase</h2>
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
                        <th class="text-center">Company</th>
                        <th class="text-center">PO NO</th>
                        <th class="text-center">Product</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" width=120px>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($purchases as $i as $purc)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <!-- <td class="text-center">{{ $purc->description }}</td> -->
                        <td class="text-center">

                            @foreach ($companies as $comp)
                            @if($comp->id == $purc->company_id)

                            {{ $comp->description }}
                            @endif

                            @endforeach
                        </td>
                        <td class="text-center">{{ $purc->po_no }}</td>

                        <td class="text-left">
                            @foreach($purc->products as $key => $item)
                            <li>{{ $item->name }} ({{ $item->pivot->qty }} x Rp{{ number_format($item->pivot->unit_price) }})</li>
                            @endforeach

                        </td>

                        <td class="text-center">{{ number_format($purc->grand_total) }}</td>
                        <td class="text-center">{{ tanggal_local($purc->date) }}</td>
                        <td class="text-center">
                            @if (($purc -> is_confirmed) == 1)
                            <span class="badge badge-success">Approved</span>
                            @else
                            <label class="badge badge-success">Draft</span>

                                @endif
                        </td>
                        <td class="text-center">

                            <form action="{{ route('purchases.destroy',$purc->id) }}" method="POST">
                                @if (($purc -> is_confirmed) == 1)

                                <a class="btn btn-xs btn-primary" href="{{ route('purchase.printorder',$purc->id) }}" target="_blank"><i class="fa fa-print"></i></a>

                                @endif
                                @can('purchase-edit')

                                @if (($purc -> is_confirmed) == 0)
                                @can('purchase-approve')
                                <a class="btn btn-xs btn-primary" href="{{ route('purchase.confirm', $purc->id) }}" onclick="return confirm('Sure Want Confirm / Approve PO?')"><i class="fa fa-save"></i></a>
                                @endcan
                                @endif

                                <a class="btn btn-xs btn-primary" href="{{ route('purchases.edit', $purc->id) }}"><i class="fa fa-pencil"></i></a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('purchase-delete')

                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                                @endcan


                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>


            {!! $purchases->links() !!}
        </div>

    </div>

</section>


@endsection

@section('scripts')


@endsection