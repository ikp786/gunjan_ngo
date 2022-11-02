@extends('admin.layouts.app')
@section('content')



<div class="content-page">
   <div class="container-fluid add-form-list">
    <div class="row">

        <div class="col-lg-12">
          <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
              <h4 class="mb-3">Add Expense</h4>

          </div>
          <a href="{{ url('admin/expense/index') }}" class="btn btn-primary add-list">Expense List</a>
      </div>
  </div>

  <div class="col-sm-8 offset-2">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Add Expense</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/expenses/store') }}" data-toggle="validator" method="POST">
              {{ csrf_field() }}
              <div class="row">                                
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Select Category *</label>
                        <select name="category_id" class="selectpicker form-control" data-style="py-0">
                          @foreach($data as $key => $value) 
                          <option value="<?php echo $value->id; ?>" >
                              {{ $value->category_title}}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>  
                  <div class="col-md-12">                      
                    <div class="form-group">
                        <label>Title *</label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="title" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">                      
                    <div class="form-group">
                        <label>Description *</label>
                        <input type="text" class="form-control" placeholder="Enter Description" name="description" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">                      
                    <div class="form-group">
                        <label>Payment Mode *</label>
                        <input type="text" class="form-control" placeholder="Enter Payment Mode" name="payment_mode" required>
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
                        <label>Added-By *</label>
                        <input type="text" class="form-control" placeholder="Added By" name="added_by" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">                      
                    <div class="form-group">
                        <label>Others *</label>
                        <input type="text" class="form-control" placeholder="Other" name="others" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>                                 
            </div>                            
            <button type="submit" class="btn btn-primary mr-2">Add category</button>
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