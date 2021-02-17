@extends('layouts.admin.design')
@section('content')
<div class="span9">
<div class="content">
<div class="module">
    <div class="module-head">
        <h3>Services <button class="btn btn-success btn-md" id="addServiceProvider"><i class="fa fa-plus" aria-hidden="true">Add</i></button></h3>
    </div>
    <div class="module-body table">
        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped"  width="100%">
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
</div><!--/.module-->
</div><!--/.content-->
</div><!--/.span9-->
</div>
</div><!--/.container-->
</div><!--/.wrapper-->
@endsection