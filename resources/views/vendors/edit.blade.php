@extends('layouts.app')


@section('content')

<section class="panel">
    <header class="panel-heading">
        <h2 class="panel-title">Edit Vendor / Customer Detail</h2>
    </header>

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


    <form action="{{ route('vendors.update',$vendor->id) }}" method="POST" class="form-horizontal">
        @csrf
        @method('PUT')

        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">Name </span></label>
                <div class="col-sm-2">
                    <input type="text" name="name" value="{{ $vendor->name }}" class="form-control" maxlength="6" readonly required />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Description </span></label>
                <div class="col-sm-6">
                    <input type="text" name="description" value="{{ $vendor->description }}" class="form-control" readonly required />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Address </span></label>
                <div class="col-sm-9">
                    <input type="text" name="address1" value="{{ $vendor->address1 }}" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></span></label>
                <div class="col-sm-9">
                    <input type="text" name="address2" value="{{ $vendor->address2 }}" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Kota</label>
                <div class="col-sm-3">
                    <input type="text" name="kota" value="{{ $vendor->kota }}" class="form-control" />
                </div>

                <label class="col-sm-3 control-label">Kode Pos</label>
                <div class="col-sm-3">
                    <input type="text" name="kode_pos" value="{{ $vendor->kode_pos }}" class="form-control" />
                </div>
            </div>



            <div class="form-group">
                <label class="col-sm-2 control-label">No. Telp </label>
                <div class="col-sm-3">
                    <input type="text" name="no_telp" value="{{ $vendor->no_telp }}" class="form-control" />
                </div>

                <label class="col-sm-3 control-label">No. Fax </label>
                <div class="col-sm-3">
                    <input type="text" name="no_fax" value="{{ $vendor->no_fax }}" class="form-control" />
                </div>
            </div>



            <div class="form-group">
                <label class="col-sm-2 control-label">Contact Person</label>
                <div class="col-sm-3">
                    <input type="text" name="contact" value="{{ $vendor->contact }}" class="form-control" />
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
                    <input type="text" name="npwp" value="{{ $vendor->npwp }}" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Negara </label>
                <div class="col-sm-4">
                    <input type="text" name="negara" value="{{ $vendor->negara }}" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label"> </label>
                <div class="col-sm-3">
                    <div class="checkbox-custom chekbox-primary">
                        {{ Form::checkbox('is_vendor', 1, ($vendor->is_vendor ===1) ? true : false) }}<label>Is Vendor</label>
                        <!-- <input class="form-check-input" type="checkbox" name="is_vendor" ><label>Is Vendor</label> -->
                    </div>

                    <div class="checkbox-custom chekbox-primary">
                        {{ Form::checkbox('is_customer', 1, ($vendor->is_customer ===1) ? true : false) }}<label>Is Customer</label>
                        <!-- <input class="form-check-input" type="checkbox" name="is_customer" ><label>Is Customer</label> -->
                    </div>

                    <div class="checkbox-custom chekbox-primary">
                        {{ Form::checkbox('is_active', 1, ($vendor->is_active ===1) ? true : false) }}<label>Is Active</label>
                        <!-- <input class="form-check-input" type="checkbox" name="is_active" ><label>Is Active</label> -->

                    </div>
                    <label class="error" for="for[]"></label>
                </div>
            </div>


            <footer class="panel-footer">
                <div class="row">
                    <div class="mb-xs text-center">
                        <button class="btn btn-primary">Submit</button>
                        <a class="btn btn-default" href="{{ route('vendors.index') }}"> Cancel</a>
                        <!-- <button type="reset" class="btn btn-default">Cancel</button> -->
                    </div>
                </div>
            </footer>

    </form>

</section>


<!-- <div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Vendor</h6>
    </div>


    <div class="card-body">

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('vendors.index') }}"> Back</a>
        </div>

        </p>


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


        <form action="{{ route('vendors.update',$vendor->id) }}" method="POST">
            @csrf
            @method('PUT')


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $vendor->name }}" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $vendor->detail }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>


        </form>


    </div>

</div> -->


@endsection