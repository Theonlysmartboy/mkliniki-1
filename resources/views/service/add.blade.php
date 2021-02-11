@extends('layouts.admin.design')
@section('content')
<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Add services</h3>
            </div>
            <div class="module-body">
                    
                    <form class="form-horizontal row-fluid" action="{{ route('service.store') }}" method="POST">
                        @csrf
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Name</label>
                            <div class="controls">
                                <input type="text" id="basicinput" placeholder="name here..." class="span8" name="service_name">
                                <span class="help-inline"></span>
                            </div>
                        </div>

                        

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Description</label>
                            <div class="controls">
                                <input data-title="A tooltip for the input" type="text" placeholder="Describe the service" data-original-title="" class="span8 tip" name="service_description">
                            </div>
                        </div>
                    
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn">Submit Form</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>

        
        
    </div><!--/.content-->
</div><!--/.span9-->
@endsection