 @extends('admin.layouts.app')
@section('content')


    

 <div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-8 offset-2">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Doner</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/doners/update/'.$doner->id) }}" data-toggle="validator" method="POST">
                          {{ csrf_field() }}
                          <!-- <input type="hidden" name="category_id" value="1"> -->
                            <div class="row">                                
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Name *</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{$doner->name}}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>  
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Contact *</label>
                                        <input type="text" class="form-control" placeholder="Enter Contact no" name="contact_no" value="{{$income->contact_no}}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Amount *</label>
                                        <input type="text" class="form-control" placeholder="Enter Amount" name="amount" value="{{$income->amount}}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Image *</label>
                                        <input type="file" class="form-control" value="{{$income->image}}" name="added_by" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
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