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


<form action="{{ route('quotations.store') }}" method="POST" class="form-horizontal" autocomplete="off">
    @csrf

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Add Sales Quotation</h2>
        </header>
        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">Company</label>
                <div class="col-sm-4">
                    <select name="company_id" class="form-control select2-company" required></select>
                </div>

                <label class="col-sm-3 control-label">Reff No </span></label>
                <div class="col-sm-3">
                    <input type="text" name="reff_no" class="form-control input-sm" value="{{ Request::old('reff_no') }}" required />
                </div>


            </div>

            <!-- <div class="form-group">
                <label class="col-sm-2 control-label">Shipping Address</label>
                <div class="col-sm-5">
                    <select name="shipping_address_id" class="form-control select2-address" required></select>
                </div>            

            </div> -->

            <div class="form-group">

                <label class="col-sm-2 control-label">Contact Person </span></label>
                <div class="col-sm-3">
                    <input type="text" name="contact_person" class="form-control input-sm" value="{{ Request::old('contact_person') }}" required />
                </div>

                <label class="col-sm-4 control-label">Sales Person</label>
                <div class="col-sm-3">
                    <select name="sales_person_id" class="form-control select2-sales-person" required></select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Remark 1</span></label>
                <div class="col-sm-5">
                    <input type="text" name="remark1" class="form-control input-sm" value="{{ Request::old('remark1') }}" required />
                </div>

                <label class="col-sm-2 control-label">Date </span></label>
                <div class="col-sm-2">
                    <input type="text" name='date' class="form-control input-sm datepicker" value="{{ Request::old('date') }}" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Remark 2 </span></label>
                <div class="col-sm-5">
                    <input type="text" name="remark2" class="form-control input-sm" value="{{ Request::old('remark2') }}" required />
                </div>

                <label class="col-sm-2 control-label">Term of Payment </span></label>
                <div class="col-sm-3">
                    <input type="text" name="payment_type" class="form-control input-sm" value="{{ Request::old('payment_type') }}" required />
                </div>


            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Product</label>
                <div class="col-sm-4">
                    <select class="form-control select2-product" required>
                    </select>

                   
                </div>
                <input type="button" class="col-sm-1 add-row" value="Add Row">
                
                <label class="col-sm-2 control-label">Delivery Time </span></label>
                <div class="col-sm-3">
                    <input type="text" name="time_of_delivery" class="form-control input-sm" value="{{ Request::old('time_of_delivery') }}" required />
                </div>

            

            </div>



            <div class="form-group">
                <div class="col-md-12">

                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                            <tr>
                                <th class="text-center" width=5%> # </th>
                                <!-- <th class="text-center" style='display:none;' width=5%> ID </th> -->
                                <th class="text-center" style='display:none;' width=5%> Product ID </th>
                                <th class="text-center" style='display:none;' width=5%> ID </th>

                                <th class="text-center" width=30%> Product </th>
                                <th class="text-center" width=7%> Stock </th>
                                <th class="text-center"> Qty </th>
                                <th class="text-center"> Price </th>
                                <th class="text-center"> PPH23 </th>
                                <th class="text-center"> PPH23 Amount </th>
                                <th class="text-center"> Total </th>
                                <!-- <th width=5%><button type="button" id="add_row" class="btn btn-success input-sm"><i class="fa fa-plus text-center"></i></button></th> -->
                            </tr>
                        </thead>
                        <tbody id="tbody1">
                            <!-- <tr id='addr0'> -->
                            <!-- <td>1</td>
                                <td><select name="product_id[]" class="js-example-responsive select2-productx" style="width: 100%" required></select></td>
                                <td><input type="number" name='qty[]' placeholder='Enter Qty' class="form-control input-sm qty" min="1" step="1" required /></td>
                                <td><input type="number" name='unit_price[]' placeholder='Enter Unit Price' class="form-control input-sm price" step="0.00" min="0" required /></td>

                                <td><input type="number" name='pph_23[]' placeholder='0.00' class="form-control input-sm pph-23" value="0" /></td>
                                <td><input type="number" name='pph_23_amount[]' placeholder='0.00' class="form-control input-sm pph-23-amount" value="0" readonly /></td>

                                <td><input type="number" name='total_price[]' placeholder='0.00' class="form-control input-sm total" readonly /></td>
                                <td><button type="button" id="delete_row" class="btn btn-danger input-sm remove"><i class="fa fa-minus"></i></button></td> -->
                            <!-- </tr> -->

                        </tbody>
                    </table>

                    <div class="row">

                        <div class="col-4 col-md-4 pull-right">

                            <table class="table table-bordered table-hover" id="tab_logic_total">
                                <tbody>
                                    <tr>
                                        <th class="text-center" width=30%>Sub Total</th>
                                        <td class="text-center"><input type="number" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" readonly /></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Discount</th>
                                        <td class="text-center"><input type="number" name='discount' id="discount" placeholder='0.00' class="form-control" value='0' required /></td>
                                    </tr>

                                    <tr>
                                        <th class="text-center">Shipping</th>
                                        <td class="text-center"><input type="number" name='shipping_fee' id="shipping_fee" placeholder='0.00' class="form-control" value='0' required /></td>
                                    </tr>

                                    <tr>
                                        <th class="text-center">Tax</th>
                                        <td class="text-center">
                                            <div class="input-group mb-2 mb-sm-0">
                                                <input type="number" class="form-control" name="ppn" id="tax" placeholder="0" value="10" readonly>
                                                <div class="input-group-addon"> %</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Tax Amount</th>
                                        <td class="text-center"><input type="number" name='ppn_amount' id="tax_amount" placeholder='0.00' class="form-control" readonly /></td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">PPH 23</th>
                                        <td class="text-center">
                                            <div class="input-group mb-2 mb-sm-0">
                                                <input type="number" class="form-control" name="total_pph_23" id="total_pph_23" placeholder="0" value="0" readonly>
                                                <div class="input-group-addon"> %</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">PPH 23 Amount</th>
                                        <td class="text-center"><input type="number" name='total_pph_23_amount' id="total_pph_23_amount" placeholder='0.00' class="form-control" readonly /></td>
                                    </tr>

                                    <tr>
                                        <th class="text-center">Grand Total</th>
                                        <td class="text-center"><input type="number" name='grand_total' id="total_amount" placeholder='0.00' class="form-control" readonly /></td>
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
                    <button class="btn btn-primary">Submit</button>
                    <a class="btn btn-default" href="{{ route('purchases.index') }}"> Cancel</a>
                </div>
            </div>
        </footer>
    </section>
</form>









@endsection

@section('scripts')

<!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
<script src="{{ asset('plugins/axios/axios.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/select2/select2.min.js') }}"></script>

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


        initSelect2('.select2-company', '{{ route("getcustomer") }}');
        initSelect2('.select2-product', '{{ route("getproduct") }}');
        // initSelect2('.select2-product', '{{ route("getinventory") }}');
        initSelect2('.select2-sales-person', '{{ route("employee.all") }}');



        function initSelectAddress(strClass, strUrl) {
            $('.select2-company').on('select2:select', function(e) {
                let datax = e.params.data;
                axios.get('/address/' + datax.id)
                    .then(function(response) {

                        console.log(response);
                        var len = response.data.length;
                        $(".select2-address").append("<option></option>");
                        for (var i = 0; i < len; i++) {
                            var id = response.data[i]['id'];
                            var name = response.data[i]['text'];

                            var newOption = new Option(name, id, false, false);
                            $('.select2-address').append(newOption).trigger('change');
                        }
                    });
            });
        };


        initSelectAddress();

        // function findProductId() {
        //     $("#onpressofabutton").click(function() {
        //         var data1 = $(this).find("td:eq(0) input[type='text']").val();

        //     });
        // };

        function getData() {
            let datax = $(".select2-product").val();
                  
            axios.get('/getproductid/' + datax)
                .then(function(response) {
                   
                    var len = response.data.length;     
                    for (let i = 0; i < len; i++) {
                        let id = response.data[i]['id'];
                        let name = response.data[i]['name'];
                        let detail = response.data[i]['detail'];
                        let stock = response.data[i]['qty'];

                        // console.log(response.data[i]);


                        let markup = "<tr><td><input type='text' class='form-control' value='" + (i + 1) + "' readonly>" + "</td>";
                        // let markup2 = "<td style='display:none;'> <input type='text' class='form-control' name='inventory_id[]' value='" + id + "'  readonly>" + "</td>";
                        let markup2 = "<td style='display:none;'> <input type='text' class='form-control' name='product_id[]' value='" + id + "'  readonly>" + "</td>";
                        let markup3 = "<td style='display:none;'> <input type='text' class='form-control' name='inventory_id[]' value='" + id + "'  readonly>" + "</td>";
                        let markup4 = "<td> <input type='text' class='form-control' name='product_name[]' value='" + name + "' readonly>" + "</td>";
                        let markup5 = "<td><input type='text' class='form-control stock' name='stock[]' value='" + stock + "'readonly></td>";
                        let markup6 = "<td><input type='number' class='form-control qty' name='qty[]' value='0'></td>"
                        let markup7 = "<td><input type='text' class='form-control price' name='unit_price[]' value='0'></td>"
                        let markup8 = "<td><input type='text' class='form-control pph-23' name='pph_23[]' value='0'></td>"
                        let markup9 = "<td><input type='text' class='form-control pph-23-amount' name='pph_23_amount[]' value='0'></td>"
                        let markup10 = "<td><input type='text' class='form-control total' name='total_price[]' value='0'></td></tr>"

                        $("#tbody1").append(markup + markup2 + markup3 + markup4 + markup5 + markup6 + markup7 + markup8 + markup9 + markup10);

                    }

                });
        };

        $(".add-row").click(function() {
            getData();
        });


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
                let pph23amount = $(this).find('.pph-23-amount').val((qty * price) * (pph23 / 100));

                $(this).find('.total').val(qty * price);

                calc_total();
            }
        });
    }

    function calc_total() {
        total = 0;
        pph23 = 0

        $('.total').each(function() {
            total += parseInt($(this).val());
        });
        $('.pph-23-amount').each(function() {
            pph23 += parseInt($(this).val());
        });

        if (pph23 > 0) {
            $('#total_pph_23').val(2);
        } else {
            $('#total_pph_23').val(0);
        }



        $('#total_pph_23_amount').val(pph23.toFixed(2));

        $('#sub_total').val(total.toFixed(2));
        discount = $('#discount').val();
        tax_sum = (total - discount) / 100 * $('#tax').val();
        $('#tax_amount').val(tax_sum.toFixed(2));




        $('#total_amount').val(((tax_sum + (total - discount)) - pph23).toFixed(2));
    }
</script>

</script>

@endsection