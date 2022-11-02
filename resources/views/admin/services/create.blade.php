@extends('admin.layouts.app')
@section('content')

 <div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">

            <div class="col-lg-12">
      <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
        <div>
          <h4 class="mb-3">Add Services</h4>

        </div>
        <a href="{{ url('admin/services/index') }}" class="btn btn-primary add-list">Services List</a>
      </div>
    </div>
            <div class="col-sm-8 offset-2">
                <div class="card">
                   
                    <div class="card-body">
                        <form action="{{ url('admin/services/store') }}" data-toggle="validator" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                            <div class="row">                                
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Service Title *</label>
                                        <input type="text" class="form-control" placeholder="Enter Service" name="title" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> 

                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Service Description *</label>
                                        <input type="text" class="form-control" placeholder="Enter Description" name="description" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Service Image *</label>
                                        <input type="file" class="form-control" name="image[]"
                                        multiple required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                                 
                               </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Add Service</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
      </div>

      @endsection