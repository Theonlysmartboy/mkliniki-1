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
                <h3 class="card-title btn btn-sm btn-success" data-toggle="modal" data-target="#provider_modal"><i class="fa fa-plus" id="addprovider"></i></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Registration details</th>
                    <th>age_gender</th>
                    <th>address</th>
                    <th>category</th>
                    <th>town</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($service_providers as $serviceprovider)
                    <tr>
                    <td>{{ $serviceprovider->id }}</td>
                    <td>{{ $serviceprovider->name }}</td>
                    <td>{{ $serviceprovider->registration_details }}</td>
                    <td>{{ $serviceprovider->age }}{{ $serviceprovider->gender }}</td>
                    <td>{{ $serviceprovider->address }},{{ $serviceprovider->email }},{{ $serviceprovider->telephone }}</td>
                             
                    <td>{{ $serviceprovider->category_name }}</td>
                    <td>{{ $serviceprovider->town }}</td>
                    <td><a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    </tr>
                @endforeach                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Registration details</th>
                    <th>age_gender</th>
                    <th>address</th>
                    <th>category</th>
                    <th>town</th>
                    <th>action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="modal fade" id="provider_modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Add service  Provider</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                <form action="">
                  <div class="form-group">
                    <label for="service_provider_name" class="form-label">
                      Name
                    </label>
                    <input type="text" class="form-control" placeholder="Enter name of Service Provider" name="service_provider_name">
                  </div>
                  <div class="form-group">
                    <label for="service_name_description" class="form-label">Description</label>
                    <input type="text" class="form-control" placeholder="Description" name="service_name_description">
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="county" class="form-label">County</label>
                        <select name="county" id="" class="form-control">
                         <?php echo $county_dropdown ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label for="SubCounty" class="form-label">Sub County</label>
                    <select name="subcounty" id="" class="form-control">
                     <?php echo $subcounty_dropdown ?>
                    </select>
                  </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="ward" class="form-label">Ward</label>
                        <select name="ward" id="" class="form-control">
                         <?php echo $ward_dropdown ?>
                        </select>
                      </div>
                    </div>
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