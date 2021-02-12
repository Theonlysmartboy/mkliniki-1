@extends('layouts.admin.design')
@section('content')
<div class="span9">
<div class="content">
<div class="module">
    <div class="module-head">
        <h3>Services <button class="btn btn-success btn-md" id="addServiceProvider"><i class="fa fa-plus" aria-hidden="true">Add</i></button></h3>
    </div>
    <div class="module-body table">
        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Registration details</th>
                    <th>age</th>
                    <th>gender</th>
                    <th>address</th>
                    <th>email</th>
                    <th>telephone</th>
                    <th>ward</th>
                    <th>town</th>
                    <th>category</th>
                    <th>duration</th>
                    <th>website</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($serviceproviders as $serviceprovider)
                    <tr>
                    <td>{{ $serviceprovider->id }}</td>
                    <td>{{ $serviceprovider->name }}</td>
                    <td>{{ $serviceprovider->registration_details }}</td>
                    <td>{{ $serviceprovider->age }}</td>
                    <td>{{ $serviceprovider->gender }}</td>
                    <td>{{ $serviceprovider->address }}</td>
                    <td>{{ $serviceprovider->email }}</td>
                    <td>{{ $serviceprovider->telephone }}</td>
                    <td>{{ $serviceprovider->ward }}</td>
                    <td>{{ $serviceprovider->town }}</td>
                    <td>{{ $serviceprovider->category }}</td>
                    <td>{{ $serviceprovider->duration }}</td>
                    <td>{{ $serviceprovider->webiste }}</td>
                    <td><a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Registration details</th>
                    <th>age</th>
                    <th>gender</th>
                    <th>address</th>
                    <th>email</th>
                    <th>telephone</th>
                     <th>ward</th>
                    <th>town</th>
                    <th>category</th>
                    <th>duration</th>
                    <th>website</th>
                    <th>action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div><!--/.module-->
</div><!--/.content-->
</div><!--/.span9-->
</div>
</div><!--/.container-->
</div><!--/.wrapper-->
@endsection