@extends('admin.layouts.app')
@section('content')



<div class="content-page">
   <div class="container-fluid add-form-list">
    <div class="row">

        <div class="col-lg-12">
          <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
              <h4 class="mb-3">Add Doner</h4>

          </div>
          <a href="{{ url('admin/doners/index') }}" class="btn btn-primary add-list">Doner List</a>
      </div>
  </div>
  <div class="col-sm-8 offset-2">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Add Doner</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/doners/store') }}" data-toggle="validator" method="POST">
              {{ csrf_field() }}
              <div class="row">                                
                  <div class="col-md-12">                      
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">                      
                    <div class="form-group">
                        <label>Contact *</label>
                        <input type="text" class="form-control" placeholder="Enter Contact number" name="contact_no" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">                      
                    <div class="form-group">
                        <label>Amount *</label>
                        <input type="text" class="form-control" placeholder="Enter Amount" name="amount" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">                      
                    <div class="form-group">
                        <label>Image *</label>
                        <input type="file" class="form-control" name="image">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                                                 
            </div>                            
            <button type="submit" class="btn btn-primary mr-2">Add Doner</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</div>
</div>
</div>
<!-- Page end  -->
</div>
</div>
<!-- </div> -->
<!-- Wrapper End-->

@endsection