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
                    <td><a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>&nbsp; <a href="" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> &nbsp; <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a></td>
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
                    <label for="service_provider_name" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Enter name of Service Provider" name="service_provider_name">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  <div class="form-group">
                    <label for="registration_details" class="form-label">Description</label>
                    <input type="text" class="form-control" placeholder="Registration Details" name="registration_details">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  <div class="form-group">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" placeholder="Age" name="age">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="Address" name="address">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  <div class="form-group">
                    <label for="telephone" class="form-label">Telephone</label>
                    <input type="text" class="form-control" placeholder="telephone" name="telephone">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" placeholder="email" name="email">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  <div class="form-group">
                    <label for="website" class="form-label">Website</label>
                    <input type="text" class="form-control" placeholder="Website Address" name="website">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  <div class="form-group">
                    <label for="town" class="form-label">Town</label>
                    <input type="text" class="form-control" placeholder="Town" name="town">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  <div class="form-group">
                    <label for="duration" class="form-label">Duration</label>
                    <input type="text" class="form-control" placeholder="Duration" name="duration">
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  <div class="form-group">
                    <label for="age" class="form-label">Category</label>
                    <select name="category" id="" class="form_control">
                      <?php echo $category_dropdown; ?>
                    </select>
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="county" class="form-label">County</label>
                        <select name="county" id="" class="form-control">
                         <?php echo $county_dropdown ?>
                        </select>
                        <p class="error text-center alert alert-danger hidden" hidden></p>
                      </div>
                    </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label for="SubCounty" class="form-label">Sub County</label>
                    <select name="subcounty" id="" class="form-control">
                     <?php echo $subcounty_dropdown ?>
                    </select>
                    <p class="error text-center alert alert-danger hidden" hidden></p>
                  </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="ward" class="form-label">Ward</label>
                        <select name="ward" id="" class="form-control">
                         <?php echo $ward_dropdown ?>
                        </select>
                        <p class="error text-center alert alert-danger hidden" hidden></p>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="save_service_provider_btn">Save changes</button>
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
    $("#save_service_provider_btn").click(function(){
      $.ajax({
        type : 'POST',
        url : 'serviceprovider',
        data : {
          '_token' : $('input[name=_token]').val(),
          'service_provider_name' : $('input[name=service_provider_name]').val(),
          'registration_details' : $('input[name=registration_details]').val(),
          'age' : $('input[name=age]').val(),
          'address' : $('input[name=address]').val(),
          'email' : $('input[name=email]').val(),
          'telephone' : $('input[name=telephone]').val(),
          'website' : $('input[name=website]').val(),
          'ward' : $('input[name=ward]').val(),
          'town' : $('input[name=town]').val(),
          'category' : $('input[name=category]').val(),
          'duration' : $('input[name=dutration]').val(),

          },
          success : function(data){
            if((data.errors)){
              $('.error').show();
              $('.error').prop('hidden',false);
              $('.error').text(data.errors.service_provider_name);
              $('.error').text(data.errors.service_provider_description);
              $('.error').text(data.errors.county);
              $('.error').text(data.errors.subcounty);
              $('.error').text(data.errors.ward);
              
            }else{
              $('.error').remove();
              $('#example1').append(" <tr>"+
                      "<td>" + data.id + "</td>"+
                      "<td>" + data.name + "</td>"+
                      "<td>" + data.registration_details + "</td>"+
                      "<td>" + data.age + "</td>"+
                      "<td>" + data.address + "</td>"+
                      "<td>" + data.email + "</td>"+
                      "<td>" + data.telephone + "</td>"+
                      "<td>" + data.website + "</td>"+
                      "<td>" + data.ward + "</td>"+
                      "<td>" + data.town + "</td>"+
                      "<td>" + data.category + "</td>"+
                      "<td>" + data.duration + "</td>"+
                      "<td><a href='' class='btn btn-sm btn-primary'><i class='fa fa-eye' aria-hidden='true'></i></a></td>"+
                      "</tr>")
            }
          },
      })
    })
    </script>
@endsection