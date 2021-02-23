@extends('layouts.admin.design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Counties</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Counties</li>
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
                    <th>Code</th>
                    <th>Desc</th>
                    <th>Emblem</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($counties as $county)
                    <tr>
                    <td>{{ $county->id }}</td>
                    <td>{{ $county->name }}</td>
                    <td>{{ $county->code }}</td>
                    <td>{{ $county->desc }}</td>
                    <td>{{ $county->emblem }}</td>
                    
                    <td><a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp; <a href="" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> &nbsp; <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a></td>
                    </tr>
                @endforeach                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Desc</th>
                    <th>Emblem</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="modal fade" id="service_modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Add County</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                <form action="">
                  <div class="form-group">
                    <label for="county_name" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Enter name of County" name="county_name">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  <div class="form-group">
                    <label for="county_code" class="form-label">Code</label>
                    <input type="text" class="form-control" placeholder="Code of county" name="county_code">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  
                  <div class="form-group">
                    <label for="county_description" class="form-label">Description</label>
                    <input type="text" class="form-control" placeholder="Description of County" name="county_description">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>

                  <div class="form-group">
                    <label for="county_emblem" class="form-label">Emblem</label>
                    <input type="text" class="form-control" placeholder="Emblem of county" name="county_emblem">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  
                </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="save_county_btn">Save changes</button>
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
    //check if save_county_button has been clicked
    $("#save_county_btn").click(function(){
      $.ajax({
        type : 'POST',
        url : 'county',
        data : {
          '_token' : $('input[name=_token]').val(),
          'county_name' : $('input[name=county_name]').val(),
          'county_code':$('input[name=county_code]').val(),
          'county_description' : $('input[name=county_description]').val(),
          'county_emblem':$('input[name=county_emblem]').val(),
          },
          success : function(data){
            if((data.errors)){
              $('.error').show();
              $('.error').prop('hidden',false);
              $('.error').text(data.errors.county_name);
              $('.error').text(data.errors.county_description);
              $('.error.').text(data.errors.county_code);
              $('.error.').text(data.errors.county_emblem);
            }else{
              $('.error').remove();
              $('#example1').append(" <tr>"+
                      "<td>" + data.id + "</td>"+
                      "<td>" + data.name + "</td>"+
                      "<td>" + data.code + "</td>"+
                      "<td>" + data.desc + "</td>"+
                      "<td>" + data.emblem + "</td>"+
                      "<td><a href='' class='btn btn-sm btn-primary'><i class='fa fa-eye' aria-hidden='true'></i></a></td>"+
                      "</tr>")
            }
          },
      })
    })
    </script>
@endsection


