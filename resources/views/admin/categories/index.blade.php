@extends('admin.layouts.app')
@section('content')

<div class="content-page">
 <div class="container-fluid">
  <div class="row">

     @include('admin.inc.validation_message')
        @include('admin.inc.auth_message')
    <div class="col-lg-12">
      <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
        <div>
          <h4 class="mb-3">Category List</h4>

        </div>
        <a href="{{ url('admin/categories/create') }}" class="btn btn-primary add-list">Add Category</a>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="table-responsive rounded mb-3">
        <table class="data-table table mb-0 tbl-server-info">
          <thead class="bg-white text-uppercase">
            <tr class="ligth ligth-data">

              <th>Category Title</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="ligth-body">


            @foreach($data as $key => $value)                  

            <tr>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <p class="mb-0"><small>{{$value->category_title}}</small></p>
                  </div>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center list-action">
                                    <!-- <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                                      href="#"><i class="ri-eye-line mr-0"></i></a> -->
                                      <a href="{{ url('admin/categories/edit/'.$value->id) }}" class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                      ><i class="ri-pencil-line mr-0"></i></a>
                                      <a href="{{ url('admin/categories/destroy/'.$value->id) }}" class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" onclick="return confirm('Are you sure you want to delete this category?');" title="" data-original-title="Delete"
                                      ><i class="ri-delete-bin-line mr-0"></i></a>
                                    </div>
                                  </td>
                                </tr>


                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <!-- Page end  -->
                    </div>

                  </div>
                  

                  @endsection