@extends('layouts.app')

@section('styles')

<link rel="stylesheet" src="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}" />
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

<form action="{{ route('receipts.store') }}" method="POST" class="form-horizontal" id="myForm" autocomplete="off">
    @csrf

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Add Goods Receipt</h2>
        </header>
        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">Company</label>
                <div class="col-sm-4">
                    <select name="company_id" class="form-control select2-company" required></select>
                </div>

                <label class="col-sm-3 control-label">Date </span></label>
                <div class="col-sm-2">
                    <input type="text" name='receive_at' class="form-control input-sm datepicker" value="{{ Request::old('date') }}" required>
                </div>


                <!-- <label class="col-sm-4 control-label">Purchase Order </span></label>
                <div class="col-sm-3">
                    <input type="text" name="po_no" class="form-control input-sm" value="{{ Request::old('po_no') }}" required />
                </div> -->
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Purchase Order</label>
                <div class="col-sm-4">
                    <select name="purchase_id" class="form-control select2-po-no" required>
                    </select>
                </div>

            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Product</label>
                <div class="col-sm-4">
                    <select  class="form-control select2-product" required>
                    </select>
                </div>

                <input type="button" class="add-row" value="Add Row">
                <!-- <input type="button" class="clear-row" value="Clear Row"> -->

            </div>

            <!-- <div class="form-group">
                <label class="col-sm-2 control-label">Product</label>
                <div class="col-sm-4">
                    <select name="po_no" class="form-control po-no" required>
                    </select>
                </div>
            </div> -->


            <div class="form-group">
                <div class="col-md-12">

                    <table class="table table-bordered table-hover" id="tab_logic">

                        <thead>
                            <tr>
                                <th class="text-center" width=5%> # </th>
                                <th class="text-center" style="display:none;"> ID </th>
                                <th class="text-center" width=30%> Product </th>
                                <th class="text-center"> OrderQty </th>
                                <th class="text-center"> ReceiveQty </th>
                                <th class="text-center"> Serial# </th>
                                <th class="text-center"> SuratJalan# </th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
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
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>


<!-- <script src="{{ asset('plugins/autoNumeric.min.js') }}"></script> -->

<!-- <script src="https://unpkg.com/autonumeric"></script> -->
<script>
    // function myFunction() {
    //     var str = $("#myInput").val();
    //     var xx = anElement.getNumericString();
    //     alert(xx);

    //}
</script>

<script>
    $(document).ready(function() {

        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            orientation: 'bottom',
            autoclose: true
        });


        $(".select2-company").select2({
            placeholder: "",
            minimumInputLength: 2,
            ajax: {
                url: '{{ route("getvendor") }}',
                dataType: 'json',
                delay: 250
            }
        });


        $(".select2-po-no").select2({
            placeholder: ""
        });
        $(".select2-product").select2({
            placeholder: ""
        });

        $('#myForm').submit(function() {
            $('select').removeAttr('disabled');
            // $(".select2-po-no").attr('disabled', true);
            // $(".select2-company").attr('disabled', true);
        });

        // $("select.po-no").change(function() {
        //     var selectedCountry = $(this).children("option:selected").val();
        //     alert("You have selected the country - " + selectedCountry);
        //     console.log(response.data[i]['id']);
        // });

        // $('select.po-no').change(function() {
        //     // alert(this.value);
        //     var selectedCountry = $(this).children("option:selected").val();
        //     alert("You have selected the country - " + selectedCountry);
        //     // let datax = this.value;
        //     // axios.get('/getpurchasedetail/' + datax)
        //     // .then(function(response) {
        //     //     console.log(response);

        //     // });
        // });

        function initSelectPo(strClass, strUrl) {
            $('.select2-company').on('select2:select', function(e) {
                let datax = e.params.data;
                axios.get('/getpurchase/' + datax.id)
                    .then(function(response) {

                        var len = response.data.length;
                        $(".select2-po-no").append("<option></option>");
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

        function initSelectProduct() {
            $('.select2-po-no').on('select2:select', function(e) {
                let datax = e.params.data;

                // console.log(datax);
                // $('.select2-product').val(null).trigger('change');
                $('.select2-product').html('').select2({
                    data: [{
                        id: '',
                        text: ''
                    }]
                });


                $(".select2-product").append("<option></option>");
                axios.get('/getpurchasedetail/' + datax.id)
                    .then(function(response) {

                        var len = response.data.length;
                        for (var i = 0; i < len; i++) {
                            var id = response.data[i]['product_id'];
                            var name = response.data[i]['name'];

                            $(".select2-product").append("<option value='" + id + "'>" + name + "</option>");
                        }
                    });
            });
        };

        initSelectPo();
        initSelectProduct();


        function getData() {


            let datax = $(".select2-product").val();
            axios.get('/getpurchaseproduct/' + datax)
                .then(function(response) {

                    // $('#tab_logic tbody').empty();
                    var len = response.data.length;

                    for (let i = 0; i < len; i++) {
                        let id = response.data[i]['product_id'];
                        let name = response.data[i]['name'];
                        let orderQty = response.data[i]['qty'];

                        let markup = "<tr><td><input type='text' class='form-control' value='" + (i + 1) + "' readonly>" + "</td>";
                        let markup2 = "<td  style='display:none;'> <input type='text' class='form-control' name='product_id[]' value='" + id + "'  readonly>" + "</td>";
                        let markup3 = "<td> <input type='text' class='form-control' name='name[]' value='" + name + "' readonly>" + "</td>";
                        let markup4 = "<td><input type='text' class='form-control price ' name='order_qty[]' value='" + orderQty + "'readonly></td>";
                        let markup5 = "<td><input type='number' class='form-control price ' name='qty[]' ></td>"
                        let markup6 = "<td><input type='text' class='form-control price ' name='serial_no[]'></td>"
                        let markup7 = "<td><input type='text' class='form-control price' name='surat_jalan_no[]'></td></tr>"


                        $("table tbody").append(markup + markup2 + markup3 + markup4 + markup5 + markup6 + markup7);

                        // console.log(name);

                        // $(".po-no").append("<option value='" + id + "'>" + name + "</option>");
                    }

                });
        };




        $(".add-row").click(function() {

            $(".select2-po-no").attr('disabled', true);
            $(".select2-company").attr('disabled', true);

            // let datax = $(".select2-po-no").val();
            // console.log(datax);

            getData();
        });

        // $(".save-row").click(function() {

        //     $("tr.item").each(function() {
        //         var quantity1 = $(this).find("input.id").val(),
        //             quantity2 = $(this).find("input.qty").val();

        //             console.log(quantity1);
        //     });

        // });



    });

    // function initSelect2Address(strClass, strUrl) {
    //     $('.select2-company').on('select2:select', function(e) {
    //         let datax = e.params.data;
    //         axios.get('/getpurchase/' + datax.id)
    //             .then(function(response) {
    //                 $.each(data, function(key, value) {
    //                     $('.po-no').append('<option value=' + key + '>' + value + '</option>');
    //                 });
    //                 // console.log(response.data['0'].detail);
    //                 // document.getElementById("address").value = response.data['0'].detail;
    //             });
    //     });

    // };
</script>
@endsection