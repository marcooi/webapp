@extends('layouts.app')

@section('styles')


<link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}" />
<link rel="stylesheet" src="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
<style>
    .select2-selection__rendered {
        line-height: 31px !important;
    }

    .select2-container .select2-selection--single {
        height: 35px !important;
    }

    .select2-selection__arrow {
        height: 34px !important;
    }
</style>
@endsection



@section('content')



<section class="panel">
    <header class="panel-heading">

        <h2 class="panel-title">Edit Journal</h2>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
    </header>

    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-2 control-label text-right">Type</label>
            <div class="col-sm-4">
                <select name="type_id" id="type_id" class="form-control select2-type" disabled>
                    <option value="{{ $journals -> type_id }}">
                        {{ $journals->type_name }}
                    </option>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label text-right">Date </span></label>
            <div class="col-sm-2">
                <input type="text" name='date' class="form-control datepicker" value="{{  date('d/m/yy', strtotime($journals -> date)) }}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label text-right">Company</label>
            <div class="col-sm-4">
                <select name="company_id" class="form-control" disabled>
                    <option value="{{ $journals -> company_id }}">
                        {{ $journals->company_description }}
                    </option>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label text-right">PO / Invoice #</label>
            <div class="col-sm-4">
                <select name="po_invoice_no" class="form-control" disabled>
                    <option value="{{ $journals -> po_invoice_no }}">
                        {{ $journals->po_invoice_no_desc }}
                    </option>

                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">

                <table class="table table-bordered" id="dynamicTable">
                    <thead>
                        <tr>
                            <th width=30%>Account</th>
                            <th width=30%>Description</th>
                            <th width=15%>Debit</th>
                            <th width=15%>Credit</th>
                            <th width=5%>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $key => $detail)
                        <tr>
                            <td>
                                <select type="text" name="coa_id[]" id="id[0]" placeholder="Select" class="form-control select2-coa" readonly>
                                    <option value="{{ $detail -> chart_of_account_id }}">
                                        {{ $detail -> coa_name }}
                                    </option>
                                </select>
                            </td>
                            <td><input type="text" name="description[]" id="description[0]" placeholder="Enter your Description" class="form-control" value=" {{ $detail -> description }}" readonly /></td>
                            <td><input type="number" name="debit[]" id="debit[0]" placeholder="..." min="0" class="form-control debit" value="{{ $detail -> debit }}" readonly /></td>
                            <td><input type="number" name="credit[]" id="credit[0]" placeholder="..." min="0" class="form-control credit" value="{{ $detail -> credit }}" readonly /></td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>


                </table>

                <table class="table" id="sumTable">
                    <thead>
                        <tr>
                            <th width=30%></th>
                            <th width=30%></th>
                            <th width=15%></th>
                            <th width=15%></th>
                            <th width=5%></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <p class="form-control text-right" style="border:none;"><strong>TOTAL</strong></p>
                            </td>
                            <td><input type="number" name="total_debit" id="total_debit" class="form-control" value="{{ format_uang($journals->total_debit) }}" readonly /></td>
                            <td><input type="number" name="total_credit" id="total_credit" min="0" class="form-control" value="{{ format_uang($journals->total_credit) }}" readonly /></td>
                        </tr>

                    </tbody>


                </table>



            </div>
        </div>

    </div>

    <footer class="panel-footer">
            <div class="row">
                <div class="mb-xs text-center">
                    <button class="btn btn-primary enableOnInput" disabled>Submit</button>
                    <a class="btn btn-default" href="{{ route('journals.index') }}"> Cancel</a>
                </div>
            </div>
        </footer>

</section>



@endsection

@section('scripts')

<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            orientation: 'bottom',
            autoclose: true
        });



    });
</script>
@endsection