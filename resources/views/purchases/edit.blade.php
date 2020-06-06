@extends('layouts.app')

@section('styles')

<link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}" />
<link rel="stylesheet" src="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
<script src="{{ asset('plugins/select2/select2.min.js') }}"></script>

@endsection

@section('content')



@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<!-- <form action="{{ route('purchases.update', '$purchases->id') }}" method="POST" class="form-horizontal"> -->
<form action="{{ route('purchases.update', $purchases->id) }}" method="POST" class="form-horizontal">

    @csrf
    @method('PUT')

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Edit Purchase Order</h2>
        </header>
        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">Vendor</label>
                <div class="col-sm-4">
                    <select name="company_id" class="form-control select2-company" disabled required>
                        <option value="{{ $purchases -> company_id }}">
                            @foreach ($companies as $comp)
                            @if($comp->id == $purchases->company_id)
                            {{ $comp->description  }}

                            @endif
                            @endforeach
                        </option>
                    </select>
                    <input type="text" value="{{ $purchases->company_id }}" name="company_id" hidden>
                </div>

                <label class="col-sm-3 control-label">PO # </span></label>
                <div class="col-sm-3">
                    <input type="text" value="{{ $purchases -> po_no }}" name="po_no" class="form-control input-sm" required />
                </div>
            </div>

            <div class="form-group">


                <label class="col-sm-2 control-label">Time of Delivery</span></label>
                <div class="col-sm-3">
                    <input type="text" name="time_of_delivery" value="{{ $purchases -> time_of_delivery }}" class="form-control input-sm" required />
                </div>


                <label class="col-sm-4 control-label">Payment Type</span></label>
                <div class="col-sm-3">
                    <input type="text" name="payment_type" class="form-control input-sm" value="{{ $purchases -> payment_type }}" required />
                </div>
            </div>



            <div class="form-group">
                <label class="col-sm-2 control-label">Transaction Date  </span></label>
                <div class="col-sm-2">
                    <input type="text" name='date' value="{{ date('d/m/yy', strtotime($purchases -> date)) }}" class="form-control input-sm datepicker" required>
                </div>

                <label class="col-sm-5 control-label">Payment Due Date </span></label>
                <div class="col-sm-2">
                    <input type="text" name='due_date' class="form-control input-sm datepicker" value="{{ date('d/m/yy', strtotime($purchases -> due_date)) }}" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Remark 1</span></label>
                <div class="col-sm-5">
                    <input type="text" name="remark1" value="{{ $purchases -> remark1 }}" class="form-control input-sm" required />
                </div>

                <label class="col-sm-2 control-label">SO# </span></label>
                <div class="col-sm-2">
                    <input type="text" name='so_no' class="form-control input-sm" value="{{ $purchases -> so_no }}" required>
                </div>

            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Remark 2 </span></label>
                <div class="col-sm-5">
                    <input type="text" name="remark2" value="{{ $purchases -> remark2 }}" class="form-control input-sm" required />

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">

                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                            <tr>
                                <th class="text-center" width=5%> # </th>
                                <th class="text-center" width=50%> Product </th>
                                <th class="text-center"> Qty </th>
                                <th class="text-center"> Price </th>
                                <th class="text-center"> Total </th>
                                <th class="text-center" width=5%><button type="button" id="add_row" class="btn btn-success input-sm"><i class="fa fa-plus text-center"></i></button></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($purchasesdetail as $key => $detail)

                            <tr id='addr0'>
                                <td class="text-center">{{ ++$key }}</td>
                                <td>
                                    <select name="product_id[]" class="js-example-responsive select2-product" style="width: 100%" required>
                                        <option value="{{ $detail -> product_id }}">
                                            {{ $detail -> name }}
                                        </option>
                                    </select>
                                </td>
                                <td><input type="number" name='qty[]' value="{{ number_format($detail -> qty) }}" placeholder='Enter Qty' class="form-control input-sm qty" min="1" step="1" required /></td>
                                <td><input type="number" name='unit_price[]' value="{{ $detail -> unit_price }}" placeholder='Enter Unit Price' class="form-control input-sm price" step="0.00" min="0" required /></td>
                                <td><input type="number" name='total_price[]' value="{{ $detail -> total_price }}" placeholder='0.00' class="form-control input-sm total" readonly /></td>
                                <td><button type="button" id="delete_row" class="btn btn-danger input-sm remove"><i class="fa fa-minus"></i></button></td>
                            </tr>
                            <tr id='addr1'></tr>

                            @endforeach

                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-6 col-md-4"></div>
                        <div class="col-6 col-md-4"></div>
                        <div class="col-6 col-md-4">

                            <table class="table table-bordered table-hover" id="tab_logic_total">
                                <tbody>




                                    <tr>
                                        <th class="text-center">Sub Total</th>
                                        <td class="text-center"><input type="number" value="{{ $purchases -> sub_total }}" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" readonly /></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Discount</th>
                                        <td class="text-center"><input type="number" value="{{ $purchases -> discount }}" name='discount' id="discount" placeholder='0.00' class="form-control" value='0' required /></td>
                                    </tr>

                                    <tr>
                                        <th class="text-center">Tax</th>
                                        <td class="text-center">
                                            <div class="input-group mb-2 mb-sm-0">
                                                <input type="number" class="form-control" value="{{ $purchases -> ppn }}" name="ppn" id="tax" placeholder="0" value="10" required>
                                                <div class="input-group-addon"> %</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Tax Amount</th>
                                        <td class="text-center"><input type="number" name='ppn_amount' value="{{ $purchases -> ppn_amount }}" id="tax_amount" placeholder='0.00' class="form-control" readonly /></td>
                                    </tr>

                                    <tr>
                                        <th class="text-center">Grand Total</th>
                                        <td class="text-center"><input type="number" name='grand_total' value="{{ $purchases -> grand_total }}" id="total_amount" placeholder='0.00' class="form-control" readonly /></td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="mb-xs text-center">

                    @if($purchases->is_confirmed == 0)
                    <button class="btn btn-primary">Submit</button>

                    @endif
                    <a class="btn btn-default" href="{{ route('purchases.index') }}"> Cancel</a>
                </div>
            </div>
        </footer>
    </section>
</form>









@endsection

@section('scripts')

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script>
    $(document).ready(function() {

        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy', 
            orientation: 'bottom',
            autoclose: true
        });


        function initSelect2(strClass, strUrl) {
            $(strClass).select2({
                minimumInputLength: 2,
                allowClear: true,
                ajax: {
                    url: strUrl,
                    dataType: 'json',
                    delay: 250
                }
            });
        }

        initSelect2('.select2-company', '{{ route("getcompany") }}');
        initSelect2('.select2-product', '{{ route("getproduct") }}');


        var i = 1;
        $("#add_row").click(function() {
            $(".select2-product").select2("destroy");
            b = i - 1;
            $('#addr' + i).html($('#addr' + b).html()).find('td:first-child').html(i + 1);
            $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
            i++;

            initSelect2('.select2-product', '{{ route("getproduct") }}');

        });

        $("body").on("click", ".remove", function() {
            if (i > 1) {
                $("#addr" + (i - 1)).html('');
                i--;
            }
            calc();
        });

        $("#delete_row").click(function() {
            if (i > 1) {
                $("#addr" + (i - 1)).html('');
                i--;
            }
            calc();
        });

        $('#tab_logic tbody').on('keyup change', function() {
            calc();
        });
        $('#tax').on('keyup change', function() {
            calc_total();
        });

        $('#discount').on('keyup change', function() {
            calc_total();
        });


    });

    function calc() {
        $('#tab_logic tbody tr').each(function(i, element) {
            var html = $(this).html();
            if (html != '') {
                var qty = $(this).find('.qty').val();
                var price = $(this).find('.price').val();
                $(this).find('.total').val(qty * price);

                calc_total();
            }
        });
    }

    function calc_total() {
        total = 0;

        $('.total').each(function() {
            total += parseInt($(this).val());
        });
        $('#sub_total').val(total.toFixed(2));
        discount = $('#discount').val();
        tax_sum = (total - discount) / 100 * $('#tax').val();
        $('#tax_amount').val(tax_sum.toFixed(2));
        $('#total_amount').val((tax_sum + (total - discount)).toFixed(2));
    }
</script>

@endsection