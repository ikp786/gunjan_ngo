 @extends('admin.layouts.app')
@section('content')


    

 <div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-8 offset-2">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add income</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/incomes/update/'.$income->id) }}" data-toggle="validator" method="POST">
                          {{ csrf_field() }}
                          <input type="hidden" name="category_id" value="1">
                            <div class="row">                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Category Title *</label>
                                            <select name="title" class="selectpicker form-control" data-style="py-0">
                                                <option value="">Select Category</option>
                                              @foreach($category as $key => $value)
                                                <option value="<?php echo $value->id; ?>" <?php if($value->id == $income->category_id){
                                                    echo "selected";
                                                } ?> >
                                                {{ $value->category_title}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Title *</label>
                                        <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{$income->title}}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>  
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Description *</label>
                                        <input type="text" class="form-control" placeholder="Enter Description" name="description" value="{{$income->description}}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Payment Mode *</label>
                                        <input type="text" class="form-control" placeholder="Enter Payment Mode" name="payment_mode" value="{{$income->payment_mode}}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Amount *</label>
                                        <input type="text" class="form-control" placeholder="Enter Amount" value="{{$income->amount}}" name="amount" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Added-By *</label>
                                        <input type="text" class="form-control" placeholder="Added By" value="{{$income->added_by}}" name="added_by" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Others *</label>
                                        <input type="text" class="form-control" placeholder="Other" value="{{$income->others}}" name="others" required>
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