@extends('layouts.app')



@section('content')

<section class="panel">


    <header class="panel-heading">
        <div class="pull-right">
            <!-- <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal"> Add Chart of Account</a> -->
            <!-- <a href="javascript:void(0)" class="btn btn-success mb-2" id="create-new-coa">Add Chart of Account</a> -->
            <a href="javascript:void(0)" class="btn btn-success mb-2" id="create-new-coa">Add User</a>
        </div>

        <h2 class="panel-title">List Chart of Account</h2>
    </header>

    <div class="panel-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif



        <div class="table-responsive">
            <table class="table table-bordered table-striped table-condensed table-hover mb-none">

                <tr>
                    <th class="text-center">ID</>
                    <th class="text-center">COA</>
                    <th class="text-center">Name</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Action</th>
                </tr>


                @foreach ($coas as $coa)
                <tr>
                    <td class="text-center">{{ $coa->id }}</td>
                    <td class="text-center">{{ $coa->coa_id }}</td>
                    <td class="text-left">{{ $coa->name }}</td>
                    <td class="text-center">{{ $coa->nama_kategori }}</td>


                    <td class="text-center">
                        <form action="{{ route('chart-of-accounts.destroy',$coa->id) }}" method="POST">
                            @can('coa-edit')
                            <!-- <a class="btn btn-xs btn-primary" href="{{ route('chart-of-accounts.edit',$coa->id) }}"><i class="fa fa-pencil"></i></a> -->
                            <a href="javascript:void(0)" id="edit-user" data-id="{{ $coa->id }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>

                            @endcan

                            @csrf
                            @method('DELETE')
                            @can('coa-delete')

                            <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash-o"></i></button>
                            @endcan
                        </form>
                        </>
                </tr>
                @endforeach
            </table>



        </div>

    </div>

</section>


<!-- <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Chart of Account</h4>
            </div>
            <div class="modal-body">


                <form name="coaForm" action="{{ route('chart-of-accounts.store') }}" class="form-horizontal" autocomplete="off">

                    @csrf
                    @method('POST')

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Number</label>
                        <div class="col-sm-6">
                            <input type="text" name="no_akun" class="form-control" placeholder="ex : 1-10001" required />
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" class="form-control" required />
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Category</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="category_id[]">
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

                </form>
            </div>



        </div>


    </div>
</div> -->


<div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="userCrudModal"></h4>
            </div>

            <form id="userForm" name="userForm" class="form-horizontal">

                <div class="modal-body">


                    <div id="formerrors"></div>


                  

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Coa Id</label>
                        <div class="col-sm-6">
                            <input type="text" name="coa_id" id="coa_id" class="form-control"  autocomplete="off" required />
                            <input type="hidden" name="id" id="id" class="form-control" value="0" readonly>
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" id="name" class="form-control" required />
                        </div>
                    </div>



                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Category</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="category_id" id="category_id">
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>




                </div>


                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-save" value="create">
                        Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /*  When user click add user button */
        $('#create-new-coa').click(function() {
            $('#btn-save').val("create-user");
            $('#userForm').trigger("reset");
            $('#userCrudModal').html("Add New Chart of Account");
            $('#ajax-crud-modal').modal('show');
        });

        /* When click edit user */
        $('body').on('click', '#edit-user', function() {
            var id = $(this).data('id');

            $.get("{{ route('chart-of-accounts.index') }}" + '/' + id + '/edit', function(data) {

                console.log(data);

                $('#userCrudModal').html("Edit User");
                $('#btn-save').val("edit-user");
                $('#ajax-crud-modal').modal('show');
                $('#id').val(data.id);
                $('#coa_id').val(data.coa_id);
                $('#name').val(data.name);
                $('#category_id').val(data.category_id);
            })
        });
        //delete user login
        $('body').on('click', '.delete-user', function() {
            var id = $(this).data("id");
            if (confirm("Are You sure want to delete !")) {

                $.ajax({
                    type: "DELETE",
                    url: "{{ url('ajax-crud')}}" + '/' + id,
                    success: function(data) {
                        $("#id_" + id).remove();
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            }
        });
    });

    if ($("#userForm").length > 0) {
        $("#userForm").validate({

            submitHandler: function(form) {

                var actionType = $('#btn-save').val();
                $('#btn-save').html('Sending..');

                var x = $('#userForm').serialize();


                $.ajax({
                    data: $('#userForm').serialize(),
                    url: "{{ route('chart-of-accounts.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        // console.log(data);

                        location.reload();
                        // var user = '<tr id="user_id_' + data.id + '"><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.email + '</td>';
                        // user += '<td colspan="2"><a href="javascript:void(0)" id="edit-user" data-id="' + data.id + '" class="btn btn-info mr-2">Edit</a>';
                        // user += '<a href="javascript:void(0)" id="delete-user" data-id="' + data.id + '" class="btn btn-danger delete-user ml-1">Delete</a></td></tr>';


                        // if (actionType == "create-user") {
                        //     $('#users-crud').prepend(user);
                        // } else {
                        //     $("#user_id_" + data.id).replaceWith(user);
                        // }

                        // $('#userForm').trigger("reset");
                        // $('#ajax-crud-modal').modal('hide');
                        // $('#btn-save').html('Save Changes');

                    },
                    error: function(data) {
                        console.log('Error:', data.responseJSON);
                        $('#btn-save').html('Save Changes');
                        // $('#errorMessage').html(data.responseText);
                        var errors = data.responseJSON['errors'];
                        errorHtml = '<div class="alert alert-danger"><ul>';
                        $.each(errors, function(key, value) {
                            errorHtml += '<li>' + value[0] + '</li>';
                        });
                        errorHtml += '</ul></div>';
                        $('#formerrors').html(errorHtml);
                    }
                });
            }
        })
    }
</script>
@endsection