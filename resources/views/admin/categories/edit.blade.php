 @extends('admin.layouts.app')
@section('content')

 <div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">

             @include('admin.inc.validation_message')
        @include('admin.inc.auth_message')
            <div class="col-sm-8 offset-2">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add category</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/categories/update/'.$category->id) }}" data-toggle="validator" method="POST">
                          {{ csrf_field() }}
                            <div class="row">                                
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Category Title *</label>
                                        <input type="text" class="form-control" placeholder="Enter Category" name="category_title" value="{{$category->category_title}}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                                 
                               <!--  <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Category *</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Beauty</option>
                                            <option>Grocery</option>
                                            <option>Food</option>
                                            <option>Furniture</option>
                                            <option>Shoes</option>
                                            <option>Frames</option>
                                            <option>Jewellery</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Code *</label>
                                        <input type="text" class="form-control" placeholder="Enter Code" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> -->                                 
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