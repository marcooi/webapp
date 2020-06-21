@extends('layouts.app')



@section('content')

<section class="panel">

    <header class="panel-heading">
        <div class="pull-right">
            <a class="btn btn-sm btn-success" href="{{ route('journals.create') }}"> Add Journal</a>

        </div>

        <h2 class="panel-title">List Journal</h2>
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
                        <th class="text-center">Date</th>
                        <th class="text-center">Company</th>
                        <th class="text-center">PO / Invoice #</th>
                        <th class="text-center">Journal</th>
                        <th class="text-center" width=120px>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($journals as $i => $journal)

                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td class="text-center">{{ tanggal_local($journal->date) }}</td>
                        <td class="text-center">{{ $journal->company->description }}</td>
                        <!-- <td class="text-center">{{ $journal->po_invoice_no }}}</td>                        -->
                        <td class="text-center">
                            @if($journal->type_id == 2)
                            @foreach ($purchases as $prc)
                            @if($journal->po_invoice_no == $prc->id)

                            {{ $prc->po_no }}
                            @endif

                            @endforeach
                            @endif

                            @if($journal->type_id == 1)
                            @foreach ($sales as $prc)
                            @if($journal->po_invoice_no == $prc->id)

                            {{ $prc->po_no }}
                            @endif

                            @endforeach
                            @endif
                           

                        </td>
                        <td class="text-left">
                            @foreach($journal->details as $key => $item)
                            <li>{{ $item->coa_id }} {{ $item->name }} (Debit : {{ number_format($item->pivot->debit) }} , Credit : {{ number_format($item->pivot->credit) }})</li>
                            @endforeach
                        </td>

                        <td class="text-center">

                            <form action="{{ route('journals.destroy',$journal->id) }}" method="POST">

                                @can('journal-edit')

                                <a class="btn btn-xs btn-primary" href="{{ route('journals.edit', $journal->id) }}"><i class="fa fa-pencil"></i></a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('journal-delete')

                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                                @endcan


                            </form>
                        </td>
                    </tr>

                    @endforeach

                </tbody>

            </table>


        </div>
    </div>

</section>

@endsection