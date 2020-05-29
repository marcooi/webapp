@extends('layouts.app')


@section('content')



<section class="panel">
    <header class="panel-heading">
        <h2 class="panel-title">Edit Company Profile</h2>
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


    <form action="{{ route('companies.update',$company->id) }}" method="POST" class="form-horizontal">
        @csrf
        @method('PUT')

        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">Name </label>
                <div class="col-sm-6">
                    <input type="text" name="name" value="{{ $company->name }}" class="form-control" required />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Description </span></label>
                <div class="col-sm-6">
                    <input type="text" name="description" value="{{ $company->description }}" class="form-control" required />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Address </label>
                <div class="col-sm-9">
                    <input type="text" name="address1" value="{{ $company->address1 }}" class="form-control" required />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-9">
                    <input type="text" name="address2" value="{{ $company->address2 }}" class="form-control"  />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Kota</label>
                <div class="col-sm-4">
                    <input type="text" name="kota" value="{{ $company->kota }}" class="form-control"  />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Kode Pos </label>
                <div class="col-sm-2">
                    <input type="text" name="kode_pos" value="{{ $company->kode_pos }}" class="form-control"  />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">No. Telp </label>
                <div class="col-sm-3">
                    <input type="text" name="no_telp" value="{{ $company->no_telp }}" class="form-control"  />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">No. Fax </label>
                <div class="col-sm-3">
                    <input type="text" name="no_fax" value="{{ $company->no_fax }}" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Contact Person</label>
                <div class="col-sm-3">
                    <input type="text" name="contact" value="{{ $company->contact }}" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-3">
                    <input type="email" name="email" value="{{ $company->email }}" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">NPWP </label>
                <div class="col-sm-4">
                    <input type="text" name="npwp" value="{{ $company->npwp }}" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Negara </label>
                <div class="col-sm-4">
                    <input type="text" name="negara" value="{{ $company->negara }}" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label"> </label>
                <div class="col-sm-3">
                    <div class="checkbox-custom chekbox-primary">
                        {{ Form::checkbox('is_vendor', 1, ($company->is_vendor ===1) ? true : false) }}<label>Is Vendor</label>                       
                    </div>

                    <div class="checkbox-custom chekbox-primary">
                        {{ Form::checkbox('is_customer', 1, ($company->is_customer ===1) ? true : false) }}<label>Is Customer</label>                       
                    </div>

                    <div class="checkbox-custom chekbox-primary">
                        {{ Form::checkbox('is_owner', 1, ($company->is_owner ===1) ? true : false) }}<label>Is Owner</label>                        
                    </div>

                    <div class="checkbox-custom chekbox-primary">
                        {{ Form::checkbox('is_active', 1, ($company->is_active ===1) ? true : false) }}<label>Is Active</label>                       

                    </div>
                    <label class="error" for="for[]"></label>
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

    </form>
</section>




@endsection