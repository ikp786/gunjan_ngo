@extends('admin.layouts.app')
@section('content')

<div class="content-page">
 <div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
        <div>
          <h4 class="mb-3">Expense List</h4>

        </div>
        <a href="{{ url('admin/expenses/create') }}" class="btn btn-primary add-list">Add Expense</a>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="table-responsive rounded mb-3">
        <table class="data-table table mb-0 tbl-server-info">
          <thead class="bg-white text-uppercase">
            <tr class="ligth ligth-data">

              <th>Category</th>
              <th>Title</th>
              <th>Desciption</th>
              <th>Payment Mode</th>
              <th>Amount</th>
              <th>Added By</th>
              <th>Others</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="ligth-body">


            @foreach($data as $key => $value)                  

            <tr>

              <td>
                <div class="d-flex align-items-center">
                    <p class="mb-0">{{$value->category_title}}</p>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                    <p class="mb-0">{{$value->title}}</p>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                    <p class="mb-0">{{$value->description}}</p>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                    <p class="mb-0">{{$value->payment_mode}}</p>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                    <p class="mb-0">{{$value->amount}}</p>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                    <p class="mb-0">{{$value->added_by}}</p>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                    <p class="mb-0">{{$value->others}}</p>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center list-action">
                                      <a href="{{ url('admin/expenses/edit/'.$value->id) }}" class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                      ><i class="ri-pencil-line mr-0"></i></a>
                                      <a href="{{ url('admin/expenses/destroy/'.$value->id) }}" class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" onclick="return confirm('Are you sure you want to delete this category?');" title="" data-original-title="Delete"
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