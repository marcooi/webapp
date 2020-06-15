@extends('layouts.app')

@section('styles')

<link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}" />
<link rel="stylesheet" src="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">

@endsection


@section('content')



<section class="panel">

    <header class="panel-heading">
        <div class="pull-right">


        </div>

        <h2 class="panel-title">Create New Journal</h2>
    </header>

    <!-- <div class="select2-container form-control font-size-12 invoice_refund check_currency_list select2-allowclear" id="s2id_invoice_deposit_to"><a href="javascript:void(0)" class="select2-choice" style="font-weight:normal;" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-6">(1-10001) - Kas (Cash &amp; Bank)</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen6" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-6" id="s2id_autogen6">
        <div class="select2-drop select2-display-none select2-with-searchbox select2-drop-active" style="font-weight: normal; display: none; left: 225px; width: 558px; bottom: auto; top: 284.575px; position: fixed;">
            <div class="select2-search"> <label for="s2id_autogen6_search" class="select2-offscreen"></label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-6" id="s2id_autogen6_search" placeholder=""> </div>
            <ul class="select2-results" role="listbox" id="select2-results-6"></ul>
        </div>
    </div> -->


    <div class="panel-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="form-group">
            <label class="col-sm-2 control-label">Company</label>
            <div class="col-sm-4">
                <select name="company_id" class="form-control select2-company" style="height: 100px" required></select>
            </div>



        </div>


        <table class="table table-bordered" id="dynamicTable">
            <tr>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <tr>

                <!-- <td><input type="text" name="name[0]" placeholder="Enter your Name" class="form-control" /></td>
                <td><input type="text" name="qty[0]" placeholder="Enter your Qty" class="form-control" /></td>
                <td><input type="text" name="price[0]" placeholder="Enter your Price" class="form-control" /></td>
                <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus text-center"></i></button></td> -->
                <td><select type="text" id="name[0]" placeholder="Enter your Name" class="form-control select2-company"></select></td>
                <td><input type="text" name="qty[0]" placeholder="Enter your Qty" class="form-control" /></td>
                <td><input type="text" name="price[0]" placeholder="Enter your Price" class="form-control" /></td>
                <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus text-center"></i></button></td>
            </tr>
        </table>
    </div>

</section>



@endsection


@section('scripts')


<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/select2/select2.min.js') }}"></script>

<script type="text/javascript">

</script>

<script>
    $(document).ready(function() {

        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            orientation: 'bottom',
            autoclose: true
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

      initSelect2('.select2-company', '{{ route("getcustomer") }}');


        var i = 0;
        $("#add").click(function() {
           
            ++i;
            let x1 = '<tr><td><select type="text" id="name[' + i + ']" placeholder="Enter your Name" class="form-control select2-company"></select></td>';
            let x2 = '<td><input type="text" name="qty[' + i + ']" placeholder="Enter your Qty" class="form-control" /></td>';
            let x3 = '<td><input type="text" name="price[' + i + ']" placeholder="Enter your Price" class="form-control" /></td>';
            let x4 = '<td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-minus"></i></button></td></tr>';

            $("#dynamicTable").append(x1 + x2 + x3 + x4);

            initSelect2('.select2-company', '{{ route("getcustomer") }}');

        });

        $(document).on('click', '.remove-tr', function() {
            $(this).parents('tr').remove();
        });


    });
</script>


@endsection