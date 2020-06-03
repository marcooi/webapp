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



<form action="{{ route('receipts.update', $headers->id) }}" method="POST" class="form-horizontal" id="myForm" autocomplete="off">
    @csrf
    @method('PUT')



    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Edit Goods Receipt</h2>
        </header>
        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">Company</label>
                <div class="col-sm-4">
                    <select name="company_id" class="form-control select2-company" disabled>
                        <option value="{{ $headers->company_id }}">{{ $headers->description }}</option>
                    </select>
                </div>

                <label class="col-sm-3 control-label">Received Date </span></label>
                <div class="col-sm-2">
                    <input type="text" name='receive_at' class="form-control input-sm datepicker" value="{{ date('d/m/yy', strtotime($headers->receive_at)) }}" required>
                </div>


            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Purchase Order</label>
                <div class="col-sm-4">
                    <select name="purchase_id" class="form-control po-no" disabled>
                        <option value="{{ $headers->purchase_id }}">{{ $headers->po_no }}</option>
                    </select>
                </div>

            </div>



            <div class="form-group">
                <div class="col-md-12">

                    <table class="table table-bordered table-hover" id="tab_logic">

                        <thead>
                            <tr>
                                <th class="text-center" width=5%> # </th>
                                <!-- <th class="text-center" style="display:none;"> ID </th> -->
                                <th class="text-center" style="display:none;"> ID </th>
                                <th class="text-center" style="display:none;"> InventoryId </th>
                                <th class="text-center" width=30%> Product </th>
                                <th class="text-center" style="display:none;"> Product ID</th>
                                <th class="text-center"> OrderQty </th>
                                <th class="text-center"> ReceiveQty </th>
                                <th class="text-center" style="display:none;"> OriQty </th>
                                <th class="text-center"> Serial# </th>
                                <th class="text-center"> SuratJalan# </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $index => $detail)

                            <td class="text-center"><input type='text' class='form-control text-center' value="{{ ++$index }}" readonly></td>
                            <td class="text-center" style="display:none;"><input type='text' class='form-control text-center' name="id[]" value="{{ $detail->id }}" readonly></td>
                            <td class="text-center" style="display:none;"><input type='text' class='form-control text-center' name="inventory_id[]" value="{{ $detail->inventory_id }}" readonly></td>
                            <td class="text-center"><input type='text' class='form-control' name="name[]" value="{{ $detail->name }}" readonly></td>
                            <td class="text-center" style="display:none;"><input type='text' class='form-control' name="product_id[]" value="{{ $detail->product_id }}" readonly></td>
                            <td class="text-center"><input type='text' class='form-control text-right' name="order_qty[]" value="{{ number_format($detail->order_qty) }}" readonly></td>

                            <td class="text-center"><input type='text' class='form-control text-right' name="qty[]" value="{{ number_format($detail->qty) }}"></td>
                            <td class="text-center" style="display:none;"><input type='text' class='form-control text-right' name="ori_qty[]" value="{{ number_format($detail->qty) }}" readonly></td>
                            <td class="text-center"><input type='text' class='form-control' name="serial_no[]" value="{{ $detail->serial_no }}"></td>
                            <td class="text-center"><input type='text' class='form-control' name="surat_jalan_no[]" value="{{ $detail->surat_jalan_no }}"></td>


                            @endforeach
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

                    <a class="btn btn-default" href="{{ route('receipts.index') }}"> Cancel</a>
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


    });
</script>

@endsection