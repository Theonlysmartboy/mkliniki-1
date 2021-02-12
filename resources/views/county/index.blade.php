@extends('layouts.admin.design')
@section('content')
<div class="span9">
<div class="content">
<div class="module">
    <div class="module-head">
        <h3>Services <button class="btn btn-success btn-md" id="addService"><i class="fa fa-plus" aria-hidden="true">Add</i></button></h3>
    </div>
    <div class="module-body table">
        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Desc</th>
                    <th>Emblem</th>
                    <th>action</th>
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
                    <td><a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
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