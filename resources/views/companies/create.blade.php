@extends('layouts.app')


@section('content')


<section class="panel">
    <header class="panel-heading">
        <h2 class="panel-title">Add Company</h2>
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


    <form action="{{ route('companies.store') }}" method="POST" class="form-horizontal">
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
                        <input class="form-check-input" type="checkbox" name="is_owner"><label>Is Owner</label>
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
                        <a class="btn btn-default" href="{{ route('companies.index') }}"> Cancel</a>
                    </div>
                </div>
            </footer>

        </div>
    </form>


</section>
    
 


</section>


<!-- <div class="card shadow mb-4">
    <div class="card-header py-3">

        <div class="row">
            <div class="col-auto mr-auto">
                <h6 class="m-0 font-weight-bold text-primary">Create New Company</h6>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>
            </div>
        </div>

    </div>


    <div class="card-body">

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


        <form class="form-horizontal" action="{{ route('companies.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address1">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right"></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address2">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">Kota</label>
                    <div class="col-4">
                        <input type="text" class="form-control" name="kota">
                    </div>

                    <label class="col-sm-2 col-form-label text-right">Kode Pos</label>
                    <div class="col-2">
                        <input type="text" class="form-control" name="kode_pos">
                    </div>

                </div>

                <div class="form-group row">

                    <label class="col-sm-2 col-form-label text-right">No Telp</label>
                    <div class="col-3">
                        <input type="text" class="form-control" name="no_telp">
                    </div>

                    <label class="col-sm-3 col-form-label text-right">No Fax</label>
                    <div class="col-3">
                        <input type="text" class="form-control" name="no_fax">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">NPWP</label>
                    <div class="col-4">
                        <input type="text" class="form-control" name="npwp">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">Email</label>
                    <div class="col-3">
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>

                <div class="card-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div> -->


@endsection