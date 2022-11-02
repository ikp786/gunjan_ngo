 @extends('admin.layouts.app')
@section('content')

 <div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-8 offset-2">
                <div class="card">
                   
                    <div class="card-body">
                        <form action="{{ url('admin/login/loginUser') }}" data-toggle="validator" method="POST">
                          {{ csrf_field() }}
                            <div class="row">                                
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                                     
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
      </div>

@endcontent