@extends('layouts.app')


@section('content')



<section class="panel">
    <header class="panel-heading">
        <h2 class="panel-title">Edit Vendor / Customer Detail</h2>
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


    <form action="{{ route('vendors.store') }}" method="POST" class="form-horizontal">
        @csrf


        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">Name </span></label>
                <div class="col-sm-2">
                    <input type="text" name="name" class="form-control" maxlength="6"  required />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Description </span></label>
                <div class="col-sm-6">
                    <input type="text" name="description" class="form-control"  required />
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
                <label class="col-sm-2 control-label">NPWP </label>
                <div class="col-sm-4">
                    <input type="text" name="npwp" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Negara </label>
                <div class="col-sm-4">
                    <input type="text" name="negara" class="form-control" />
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label"> </label>
                <div class="col-sm-3">
                    <div class="checkbox-custom chekbox-primary">
                        <input class="form-check-input" type="checkbox" name="is_vendor"><label>Is Vendor</label>
                    </div>

                    <div class="checkbox-custom chekbox-primary">
                        <input class="form-check-input" type="checkbox" name="is_customer"><label>Is Customer</label>
                    </div>

                    <div class="checkbox-custom chekbox-primary">
                        <input class="form-check-input" type="checkbox" name="is_active"><label>Is Active</label>

                    </div>
                    <label class="error" for="for[]"></label>
                </div>
            </div>


            <footer class="panel-footer">
                <div class="row">
                    <div class="mb-xs text-center">
                        <button class="btn btn-primary">Submit</button>
                        <a class="btn btn-default" href="{{ route('vendors.index') }}"> Cancel</a>
                    </div>
                </div>
            </footer>

        </div>
    </form>


</section>






@endsection