@extends('layouts.app')



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

  
    <form action="{{ route('addresses.update', $address->id) }}" method="POST" class="form-horizontal">
        @csrf
        @method('PUT')


        <div class="panel-body">

            <div class="form-group">
                <label class="col-md-2 control-label">Company</label>
                <div class="col-md-6">
                    <select name="company_id" class="form-control select2-company" disabled>
                        <option value="{{ $address->company_id }}" selected="selected">{{ $companyname }}</option>
                    </select>
                    <input type="text" value="{{ $address->company_id }}" name="company_id" hidden>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Address </span></label>
                <div class="col-sm-9">
                    <input type="text" name="address1" value="{{ $address->address1 }}" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></span></label>
                <div class="col-sm-9">
                    <input type="text" name="address2" value="{{ $address->address2 }}" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Kota</label>
                <div class="col-sm-3">
                    <input type="text" name="kota" value="{{ $address->kota }}" class="form-control" />
                </div>

                <label class="col-sm-3 control-label">Kode Pos</label>
                <div class="col-sm-3">
                    <input type="text" name="kode_pos" value="{{ $address->kode_pos }}" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">No. Telp </label>
                <div class="col-sm-3">
                    <input type="text" name="no_telp" value="{{ $address->no_telp }}" class="form-control" />
                </div>

                <label class="col-sm-3 control-label">No. Fax </label>
                <div class="col-sm-3">
                    <input type="text" name="no_fax" value="{{ $address->no_fax }}" class="form-control" />
                </div>
            </div>

        </div>

        <footer class="panel-footer">
            <div class="row">
                <div class="mb-xs text-center">
                    <button class="btn btn-primary">Submit</button>
                    <a class="btn btn-default" href="{{ route('addresses.index') }}"> Cancel</a>
                </div>
            </div>
        </footer>

    </form>

</section>



@endsection

@section('scripts')




@endsection