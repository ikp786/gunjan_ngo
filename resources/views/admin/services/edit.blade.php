 @extends('admin.layouts.app')
@section('content')

 <div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-8 offset-2">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add services</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/services/update/'.$service->id) }}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                            <div class="row">                                
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Service Title *</label>
                                        <input type="text" class="form-control" placeholder="Enter Category" name="title" value="{{$service->title}}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> 

                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Service Description *</label>
                                        <input type="text" class="form-control" placeholder="Enter Category" name="description" value="{{$service->description}}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> 

                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Service Image *</label>
                                        <input type="file" class="form-control" placeholder="Enter Category" name="image[]" multiple>


                                        @foreach ($service_image as $image)
                                                
                                                <img src="{{ asset('storage/service_images/' . $image->image) }}"
                                                    style="height: 100px; width:100px; margin:10px auto 10px;text-align: center;border-radius: 50%;">
                                            @endforeach

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