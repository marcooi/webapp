@extends('layouts.app')

@section('styles')

<link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}" />
<link rel="stylesheet" src="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">

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


<form action="{{ route('quotations.update', $quotations->id) }}" method="POST" class="form-horizontal" id="myForm" autocomplete="off">
    @csrf
    @method('PUT')

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Edit Sales Quotations</h2>
        </header>
        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">Company</label>
                <div class="col-sm-4">
                    <!-- <select name="company_id" class="form-control select2-company" required></select> -->
                    <select name="company_id" class="form-control select2-company" disabled>
                        <option value="{{ $quotations->company_id }}">{{ $quotations->description }}</option>
                    </select>
                </div>

                <label class="col-sm-3 control-label">Reff No </span></label>
                <div class="col-sm-3">
                    <input type="text" name="reff_no" class="form-control input-sm" value="{{ $quotations->reff_no }}" required />
                </div>
            </div>

            <div class="form-group">
               

                <label class="col-sm-9 control-label">Sales Person</label>
                <div class="col-sm-3">
                    <select name="sales_person_id" class="form-control select2-sales-person" required>
                        <option value="{{ $quotations->sales_person_id }}">{{ $quotations->name }}</option>
                    </select>
                </div>

            </div>


            <div class="form-group">

            <label class="col-sm-2 control-label">Contact Person </span></label>
                <div class="col-sm-3">
                    <input type="text" name="contact_person" class="form-control input-sm" value="{{ $quotations->contact_person }}" required />
                </div>

                <label class="col-sm-4 control-label">Date </span></label>
                <div class="col-sm-2">
                    <input type="text" name='date' class="form-control input-sm datepicker" value="{{ date('d/m/yy', strtotime($quotations->date))  }}" required>
                </div>
            </div>



            <div class="form-group">
            <label class="col-sm-2 control-label">Remark 1</span></label>
                <div class="col-sm-5">
                    <input type="text" name="remark1" class="form-control input-sm" value="{{ $quotations->remark1 }}" required />
                </div>

                <label class="col-sm-2 control-label">Term of Payment </span></label>
                <div class="col-sm-3">
                    <input type="text" name="payment_type" class="form-control input-sm" value="{{ $quotations->payment_type }}" required />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Remark 2 </span></label>
                <div class="col-sm-5">
                    <input type="text" name="remark2" class="form-control input-sm" value="{{ $quotations->remark2 }}" required />
                </div>

                <label class="col-sm-2 control-label">Delivery Time </span></label>
                <div class="col-sm-3">
                    <input type="text" name="time_of_delivery" class="form-control input-sm" value="{{ $quotations->time_of_delivery }}" required />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">

                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                            <tr>
                                <th class="text-center" width=5%> # </th>
                                <th class="text-center" width=5% style='display:none;'>ID </th>
                                <th class="text-center" width=30%> Product </th>
                                <th class="text-center" width=10%> Qty </th>
                                <th class="text-center" width=15%> Price </th>
                                <th class="text-center" width=10%> PPH23 </th>
                                <th class="text-center" width=10%> PPH23 Amount </th>
                                <th class="text-center" width=10%> Total </th>
                                <th width=5%><button type="button" id="add_row" class="btn btn-success input-sm"><i class="fa fa-plus text-center"></i></button></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $index => $detail)

                            <tr id='addr0'>
                                <td class="text-center"><input type='text' class='form-control text-center' value="{{ ++$index }}" readonly></td>
                                <td class="text-center" style='display:none;'><input type='text' name="id[]" class='form-control text-center' value="{{ $detail->id }}" readonly></td>

                                <td><select name="product_id[]" class="js-example-responsive select2-product" style="width: 100%" required>
                                        <option value="{{ $detail->product_id }}">{{ $detail->name }}</option>
                                    </select></td>
                                <td><input type="decimal" name='qty[]' placeholder='Enter Qty' class="form-control input-sm qty" min="1" step="1" value="{{ $detail->qty }}" required /></td>
                                <td><input type="decimal" name='unit_price[]' placeholder='Enter Unit Price' class="form-control input-sm price" step="0.00" min="0" value="{{ $detail->unit_price }}" required /></td>

                                <td><input type="decimal" name='pph_23[]' placeholder='0.00' class="form-control input-sm pph-23" value="{{ $detail->pph_23 }}" value="0" /></td>
                                <td><input type="decimal" name='pph_23_amount[]' placeholder='0.00' class="form-control input-sm pph-23-amount" value="{{ $detail->pph_23_amount }}" /></td>

                                <td><input type="decimal" name='total_price[]' placeholder='0.00' class="form-control input-sm total" value="{{ $detail->total_price }}" readonly /></td>
                                <td><button type="button" id="delete_row" class="btn btn-danger input-sm remove"><i class="fa fa-minus"></i></button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="row">

                        <div class="col-4 col-md-4 pull-right">

                            <table class="table table-bordered table-hover" id="tab_logic_total">
                                <tbody>
                                    <tr>
                                        <th class="text-center" width=30%>Sub Total</th>
                                        <td class="text-center"><input type="decimal" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" value="{{ $quotations->sub_total }}" readonly /></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Discount</th>
                                        <td class="text-center"><input type="decimal" name='discount' id="discount" placeholder='0.00' class="form-control" value='{{ $quotations->discount }}' required /></td>
                                    </tr>

                                    <tr>
                                        <th class="text-center">Shipping</th>
                                        <td class="text-center"><input type="decimal" name='shipping_fee' id="shipping" placeholder='0.00' class="form-control" value='{{ $quotations->shipping_fee }}' required /></td>
                                    </tr>

                                    <tr>
                                        <th class="text-center">Tax</th>
                                        <td class="text-center">
                                            <div class="input-group mb-2 mb-sm-0">
                                                <input type="decimal" class="form-control" name="ppn" id="tax" placeholder="0" value="{{ $quotations->ppn }}" required>
                                                <div class="input-group-addon"> %</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Tax Amount</th>
                                        <td class="text-center"><input type="decimal" name='ppn_amount' id="tax_amount" placeholder='0.00' class="form-control" value="{{ $quotations->ppn_amount }}" readonly /></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">PPH 23</th>
                                        <td class="text-center">
                                            <div class="input-group mb-2 mb-sm-0">
                                                <input type="decimal" class="form-control" name="total_pph_23" id="total_pph_23" placeholder='0.00' placeholder="0" value="{{ ($quotations->pph_23) }}" readonly>
                                                <div class="input-group-addon"> %</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">PPH 23 Amount</th>
                                        <td class="text-center"><input type="decimal" name='total_pph_23_amount' id="total_pph_23_amount" placeholder='0.00' class="form-control" value="{{ $quotations->pph_23_amount }}" readonly /></td>
                                    </tr>

                                    <tr>
                                        <th class="text-center">Grand Total</th>
                                        <td class="text-center"><input type="decimal" name='grand_total' id="total_amount" placeholder='0.00' class="form-control" value="{{ $quotations->grand_total }}" readonly /></td>
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
                    @if($quotations->is_confirmed == 0)
                    <button class="btn btn-primary">Submit</button>
                    @endif
                    <a class="btn btn-default" href="{{ route('quotations.index') }}"> Cancel</a>
                </div>
            </div>
        </footer>
    </section>
</form>









@endsection

@section('scripts')

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/select2/select2.min.js') }}"></script>

<script>
    // $(document).ready(function() {
    //     let row_number = 1;
    //     $("#add_row").click(function(e) {
    //         e.preventDefault();
    //         let new_row_number = row_number - 1;
    //         $('#product' + row_number).html($('#product' + new_row_number).html()).find('td:first-child');
    //         $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
    //         row_number++;
    //     });

    //     $("#delete_row").click(function(e) {
    //         e.preventDefault();
    //         if (row_number > 1) {
    //             $("#product" + (row_number - 1)).html('');
    //             row_number--;
    //         }
    //     });
    // });

    $(document).ready(function() {


        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            orientation: 'bottom',
            autoclose: true
        });

        $('#myForm').submit(function() {
            $('select').removeAttr('disabled');
            // $(".select2-po-no").attr('disabled', true);
            // $(".select2-company").attr('disabled', true);
        });



        // $('.select2-vendor').select2({
        //     minimumInputLength: 2,
        //     ajax: {
        //         url: '{{ route("getcompany") }}',
        //         dataType: 'json',
        //         delay: 250
        //     },
        // });

        // function initSelect2Product() {
        //     $('.select2-product').select2({
        //         minimumInputLength: 2,
        //         allowClear: true,
        //         ajax: {
        //             url: '{{ route("getproduct") }}',
        //             dataType: 'json',
        //             delay: 250
        //         }
        //     });
        // }

        // $('#select_id').change(function() {
        //     alert($(this).val());
        // })

        // $('.select-address').on('change', function() {
        //     alert(this.value);
        // });

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

        // initSelect2Product();
        initSelect2('.select2-company', '{{ route("getcompany") }}');
        initSelect2('.select2-product', '{{ route("getproduct") }}');
        initSelect2('.select2-sales-person', '{{ route("employee.all") }}');



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
            // $(this).closest("tr").remove();
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
            let html = $(this).html();
            if (html != '') {
                let qty = $(this).find('.qty').val();
                let price = $(this).find('.price').val();

                let pph23 = $(this).find('.pph-23').val();
                if (pph23 > 0) {
                    $(this).find('.pph-23').val(2);
                } else {
                    $(this).find('.pph-23').val(0);
                }

                console.log((qty * price) * (pph23 / 100));

                let pph23amount = $(this).find('.pph-23-amount').val((qty * price) * (pph23 / 100));

                $(this).find('.total').val(qty * price);

                calc_total();
            }
        });
    }

    function calc_total() {
        let total = 0;
        pph23 = 0

        $('.total').each(function() {
            total += parseFloat($(this).val());
        });

        $('.pph-23-amount').each(function() {
            pph23 += parseFloat($(this).val());
        });

        if (pph23 > 0) {
            $('#total_pph_23').val(2);
        } else {
            $('#total_pph_23').val(0);
        }




        $('#total_pph_23_amount').val(pph23.toFixed(2));

        $('#sub_total').val(total.toFixed(2));
        let discount = parseFloat($('#discount').val());
        let tax_sum = parseFloat((total - discount) / 100 * $('#tax').val());
        let shipping = parseFloat($('#shipping').val());
        // console.log(shipping+ tax_sum);

        $('#tax_amount').val(tax_sum.toFixed(2));


        $('#total_amount').val(((tax_sum + shipping + (total - discount)) - pph23).toFixed(2));
        // $('#total_amount').val(tax_sum).toFixed(2);
    }
</script>


@endsection