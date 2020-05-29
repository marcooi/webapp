@extends('layouts.app')

@section('styles')

<link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}" />
<script src="{{ asset('plugins/select2/select2.min.js') }}"></script>


@endsection

@section('content')

<section class="panel">
    <header class="panel-heading">
        <h2 class="panel-title">Add Ship Address</h2>
    </header>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{ route('addresses.store') }}" method="POST" class="form-horizontal">
        @csrf


        <div class="panel-body">

            <div class="form-group">
                <label class="col-md-2 control-label">Company</label>
                <div class="col-md-6">
                    <select name="company_id" class="form-control select2-company"></select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Address </span></label>
                <div class="col-sm-9">
                    <input type="text" name="address1" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></span></label>
                <div class="col-sm-9">
                    <input type="text" name="address2" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Kota</label>
                <div class="col-sm-3">
                    <input type="text" name="kota" class="form-control" />
                </div>

                <label class="col-sm-3 control-label">Kode Pos</label>
                <div class="col-sm-3">
                    <input type="text" name="kode_pos" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">No. Telp </label>
                <div class="col-sm-3">
                    <input type="text" name="no_telp" class="form-control" />
                </div>

                <label class="col-sm-3 control-label">No. Fax </label>
                <div class="col-sm-3">
                    <input type="text" name="no_fax" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Contact Person</label>
                <div class="col-sm-3">
                    <input type="text" name="contact" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-3">
                    <input type="email" name="email" class="form-control" />
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Negara </label>
                <div class="col-sm-4">
                    <input type="text" name="negara" class="form-control" />
                </div>
            </div>
        </div>

        <footer class="panel-footer">
            <div class="row">
                <div class="mb-xs text-center">
                    <button class="btn btn-primary">Submit</button>
                    <a class="btn btn-default" href="{{ route('companies.index') }}"> Cancel</a>
                </div>
            </div>
        </footer>

        </div>
    </form>


</section>



@endsection

@section('scripts')



<script type="text/javascript">
    $(document).ready(function() {

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

        $('.select2-product').on('select2:select', function(e) {
            let datax = e.params.data;
            axios.get('/getproductid/' + datax.id)
                .then(function(response) {
                    // console.log(response.data['0'].detail);                   
                    document.getElementById("productdescr").value = response.data['0'].detail;
                });
        });
        initSelect2('.select2-company', '{{ route("getcompany") }}');

        // $('#select2-vendor').select2({
        //     minimumInputLength: 2,
        //     ajax: {
        //         // url: '/api/getvendor',
        //         // url: '/getvendor',
        //         url: '{{ route("getcompany") }}',
        //         dataType: 'json',
        //         delay: 250
        //     },
        // });
    });
</script>

@endsection