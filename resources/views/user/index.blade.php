@extends('layouts.admin.design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Services</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title btn btn-sm btn-success" data-toggle="modal" data-target="#service_modal"><i class="fa fa-plus" id="addprovider"></i></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php //$count = 0; ?>
                    @foreach ($users as $user)
                    <?php //$count++;?>
                    <tr>
                    <td> {{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp; <a href="" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> &nbsp; <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a></td>
                    </tr>
                @endforeach                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="modal fade" id="service_modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Add User </h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                <form class="form-horizontal" role="form">
                @csrf
                  <div class="form-group">
                    <label for="service_name" class="control-label">Name</label>
                    <input type="text" class="form-control" placeholder="Enter name of Service" name="service_name" required>
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  <div class="form-group">
                    <label for="service_description" class="control-label">Email</label>
                    <input type="text" class="form-control" placeholder="Description" name="service_description" required>
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="save_service_btn">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
  //check if save_service_button has been clicked
  $("#save_service_btn").click(function(){
    $.ajax({
      type : 'POST',
      url : 'service',
      data : {
        '_token' : $('input[name=_token]').val(),
        'service_name' : $('input[name=service_name]').val(),
        'service_description' : $('input[name=service_description]').val(),
        },
        success : function(data){
          if((data.errors)){
            $('.error').show();
            $('.error').prop('hidden',false);
            $('.error').text(data.errors.service_name);
            $('.error').text(data.errors.service_description);
          }else{
            $('.error').remove();
            $('#example1').append(" <tr>"+
                    "<td>" + data.id + "</td>"+
                    "<td>" + data.name + "</td>"+
                    "<td>" + data.description + "</td>"+
                    "<td><a href='' class='btn btn-sm btn-primary'><i class='fa fa-eye' aria-hidden='true'></i></a></td>"+
                    "</tr>")
          }
        },
    })
  })
  </script>
@endsection