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



<form action="{{ route('journals.store') }}" method="POST" class="form-horizontal" id="myForm" autocomplete="off">
    @csrf
    <section class="panel">

        <header class="panel-heading">

            <h2 class="panel-title">Create New Journal</h2>
        </header>


        <div class="panel-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="form-group">
                <label class="col-sm-2 control-label text-right">Type</label>
                <div class="col-sm-4">
                    <select name="type_id" id="type_id" class="form-control select2-journal-type" required>
                        <option value="0"></option>
                        @foreach($types as $project)
                        <option value="{{ $project->id }}">{{ $project->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label text-right">Date </span></label>
                <div class="col-sm-2">
                    <input type="text" name='date' class="form-control datepicker" value="{{ Request::old('date') }}" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label text-right">Company</label>
                <div class="col-sm-4">
                    <select name="company_id" class="form-control input-sm select2-company" required></select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label text-right">PO / Invoice #</label>
                <div class="col-sm-4">
                    <select name="po_invoice_no" class="form-control select2-po-no" required></select>
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
                            <tr>
                                <td><select type="text" name="coa_id[]" id="id[0]" placeholder="Select" class="form-control select2-coa" required></select></td>
                                <td><input type="text" name="description[]" id="description[0]" placeholder="Enter your Description" class="form-control" required /></td>
                                <td><input type="number" name="debit[]" id="debit[0]" placeholder="..." min="0" class="form-control debit" value="0" required /></td>
                                <td><input type="number" name="credit[]" id="credit[0]" placeholder="..." min="0" class="form-control credit" value="0" required /></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus text-center"></i></button></td>
                            </tr>

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
                                <td><input type="number" name="total_debit" id="total_debit" class="form-control" value="0" readonly /></td>
                                <td><input type="number" name="total_credit" id="total_credit" min="0" class="form-control" value="0" readonly /></td>
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

</form>

@endsection


@section('scripts')


<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/select2/select2.min.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script type="text/javascript">

</script>

<script>
    $(document).ready(function() {

        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            orientation: 'bottom',
            autoclose: true
        }).datepicker("setDate", new Date());

        $('.select2-po-no').select2({
            placeholder: 'Select...',
            width: '100%',
            allowClear: true
        });

        function initSelect2(strClass, strUrl) {
            $(strClass).select2({
                placeholder: 'Select...',
                // minimumInputLength: 2,
                width: '100%',
                allowClear: true,
                ajax: {
                    url: strUrl,
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term || '',
                            page: params.page || 1
                        }
                    },
                    cache: true
                }
            });
        }

        function onchangeSelectCompany() {
            $('.select2-company').on('select2:select', function(e) {
                let ex = document.getElementById("type_id");
                let result = ex.options[ex.selectedIndex].value;

                let strUrl = '';
                if (result == 1) {
                    strUrl = '/getsale/';
                } else if (result == 2) {
                    strUrl = '/getpurchase/';
                }

                let datax = e.params.data;
                axios.get(strUrl + datax.id)
                    .then(function(response) {

                        var len = response.data.length;


                        $('.select2-po-no').val(null).empty();

                        for (var i = 0; i < len; i++) {
                            var id = response.data[i]['id'];
                            var name = response.data[i]['po_no'];

                            var newOption = new Option(name, id, false, false);

                            $('.select2-po-no').append(newOption).trigger('change');
                        }
                    });
            });
        };

        onchangeSelectCompany('/getsale/');
        initSelect2('.select2-coa', '{{ route("getcoa") }}');
      
        $("#type_id").change(function() {
            let e = document.getElementById("type_id");
            let result = e.options[e.selectedIndex].value;

            switch (result) {
                case "1":
                    $('.select2-company').val(null).empty();
                    $('.select2-po-no').val(null).empty();
                    initSelect2('.select2-company', '{{ route("getcustomer") }}');

                    break;

                case "2":
                    $('.select2-company').val(null).empty();
                    $('.select2-po-no').val(null).empty();
                    initSelect2('.select2-company', '{{ route("getvendor") }}');

                    break;

                case "0":
                    initSelect2('.select2-company', '');
                    $('.select2-company').val(null).empty();
                    $('.select2-po-no').val(null).empty();

                    break;
            }
        });

        var i = 0;
        $("#add").click(function() {

            ++i;
            let x1 = '<tr><td><select type="text" name="coa_id[]" id="id[' + i + ']" placeholder="Select" class="form-control select2-coa"></select></td>';
            let x2 = '<td><input type="text" name="description[]" id="description[' + i + ']" placeholder="Enter your Description" class="form-control" /></td>';
            let x3 = '<td><input type="number" name="debit[]" id="debit[' + i + ']" placeholder="Enter your Price" value="0" min="0" class="form-control debit" /></td>';
            let x4 = '<td><input type="number" name="credit[]" id="credit[' + i + ']"placeholder="Enter your Price" value="0" min="0" class="form-control credit" /></td>';
            let x5 = '<td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-minus"></i></button></td></tr>';

            $("#dynamicTable").append(x1 + x2 + x3 + x4 + x5);

            initSelect2('.select2-coa', '{{ route("getcoa") }}');

        });

        $(document).on('click', '.remove-tr', function() {
            $(this).parents('tr').remove();
            calc();
            disableSubmit();
        });

        $('#dynamicTable tbody').on('keyup change', function() {
            calc();
            disableSubmit();

        });

        function calc() {
            $('#dynamicTable tbody tr').each(function(i, element) {
                let html = $(this).html();
                if (html != '') {

                    let totalDebit = 0;
                    let totalCredit = 0;
                    $('.debit').each(function() {
                        totalDebit += parseInt($(this).val());
                    });
                    $('.credit').each(function() {
                        totalCredit += parseInt($(this).val());
                    });

                    $('#total_debit').val(totalDebit.toFixed());
                    $('#total_credit').val(totalCredit.toFixed());
                }
            });
        }

        function disableSubmit() {
            let totalDebit = $('#total_debit').val();
            let totalCredit = $('#total_credit').val();
            if ((totalDebit - totalCredit) != 0) {
                $('.enableOnInput').prop('disabled', true);
            } else {
                $('.enableOnInput').prop('disabled', false);
            }
            // console.log(totalDebit-totalCredit)
        }




    });
</script>


@endsection