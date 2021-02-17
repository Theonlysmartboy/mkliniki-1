@extends('layouts.admin.design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Service Providers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service Providers</li>
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
                    <th>Descrption</th>
                    <th>County</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($subcounties as $subcounty)
                    <tr>
                    <td>{{ $subcounty->id }}</td>
                    <td>{{ $subcounty->name }}</td>
                    <td>{{ $subcounty->desc }}</td>
                    <td>{{ $subcounty->county }}</td>

                    <td><a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp; <a href="" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> &nbsp; <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a></td>
                    </tr>
                @endforeach                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Descrption</th>
                    <th>County</th>
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
                        <label for="county" class="form-label">County</label>
                        <select name="county" id="" class="form-control">
                         <?php echo $county_dropdown ?>
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="subcounty_name" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Enter name of SubCounty" name="subcounty_name">
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="subcounty_description" class="form-label">Description</label>
                    <input type="text" class="form-control" placeholder="Description of SubCounty" name="subcounty_description">
                  </div>

                                  
                </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
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
@endsection


