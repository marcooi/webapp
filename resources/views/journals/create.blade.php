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
        <div class="pull-right">


        </div>

        <h2 class="panel-title">Create New Journal</h2>
    </header>


    <div class="panel-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <form action="" autocomplete="off">

            <div class="form-group">
                <label class="col-sm-2 control-label">Type</label>
                <div class="col-sm-4">
                    <select name="company_id" class="form-control select2-type" required>

                        <option value="1">Receipt</option>
                        <option value="2">Payment</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Date </span></label>
                <div class="col-sm-2">
                    <input type="text" name='date' class="form-control input-sm datepicker" value="{{ Request::old('date') }}" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Company</label>
                <div class="col-sm-4">
                    <select name="company_id" class="form-control select2-company" required></select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">PO#</label>
                <div class="col-sm-4">
                    <select name="company_id" class="form-control select2-po-no" required></select>
                </div>
            </div>

            <div class="form-group">

                <table class="table table-bordered" id="dynamicTable">
                    <tr>
                        <th width=30%>Account</th>
                        <th width=30%>Description</th>
                        <th width=15%>Debit</th>
                        <th width=15%>Credit</th>
                        <th width=5%>Action</th>
                    </tr>
                    <tr>
                        <td><select type="text" name="id[]" id="id[0]" placeholder="Select" class="form-control select2-coa" required></select></td>
                        <td><input type="text" name="description[]" id="description[0]" placeholder="Enter your Description" class="form-control" required /></td>
                        <td><input type="number" name="debit[]" id="debit[0]" placeholder="..." min="0" class="form-control" value="0" required /></td>
                        <td><input type="number" name="credit[]" id="credit[0]" placeholder="..." min="0" class="form-control" value="0" required /></td>
                        <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus text-center"></i></button></td>
                    </tr>
                </table>

            </div>

        </form>


    </div>

</section>



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
                width: '100%',
                allowClear: true,
                ajax: {
                    url: strUrl,
                    dataType: 'json',
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

      

        function initSelectPo(strClass, strUrl) {
            $('.select2-company').on('select2:select', function(e) {
                let datax = e.params.data;
                axios.get('/getpurchase/' + datax.id)
                    .then(function(response) {

                        var len = response.data.length;
                        // $(".select2-po-no").append("<option></option>");
                        for (var i = 0; i < len; i++) {
                            var id = response.data[i]['id'];
                            var name = response.data[i]['po_no'];

                            // $(".po-no").append("<option value='" + id + "'>" + name + "</option>");                        
                            // $(".select2-po-no").append("<option value='" + id + "' >" + name + "</option>");

                            var newOption = new Option(name, id, false, false);
                            $('.select2-po-no').append(newOption).trigger('change');
                        }
                    });
            });
        };

        initSelectPo();
        // initSelect2('.select2-company', '{{ route("getcustomer") }}');
        initSelect2('.select2-company', '{{ route("getvendor") }}');
        initSelect2('.select2-coa', '{{ route("getcoa") }}');




        var i = 0;
        $("#add").click(function() {

            ++i;
            let x1 = '<tr><td><select type="text" name="id[]" id="id[' + i + ']" placeholder="Select" class="form-control select2-coa"></select></td>';
            let x2 = '<td><input type="text" name="description[]" id="description[' + i + ']" placeholder="Enter your Description" class="form-control" /></td>';
            let x3 = '<td><input type="number" name="debit[]" id="debit[' + i + ']" placeholder="Enter your Price" value="0" min="0" class="form-control" /></td>';
            let x4 = '<td><input type="number" name="credit[]" id="credit[' + i + ']"placeholder="Enter your Price" value="0" min="0" class="form-control" /></td>';
            let x5 = '<td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-minus"></i></button></td></tr>';

            $("#dynamicTable").append(x1 + x2 + x3 + x4 + x5);

            initSelect2('.select2-coa', '{{ route("getcoa") }}');

        });

        $(document).on('click', '.remove-tr', function() {
            $(this).parents('tr').remove();
        });


    });
</script>


@endsection