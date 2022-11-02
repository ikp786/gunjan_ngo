<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Redirect;
Use App\Models\Income;

class IncomeController extends Controller
{
  
   //list incomes
     public function index(){

        $income = DB::table('incomes')
            ->join('categories' , 'category_id' , '=' , 'categories.id')
            ->select('incomes.*' , 'categories.category_title')
            ->get();
         return view('admin.incomes.index',['data'=>$income]);

    }

    // add incomes
     public function create(){

      $income = DB::table('categories')->get();
         return view('admin.incomes.create',['data'=>$income]);
    }  

    //save incomes
    public function store(REQUEST $request){
       $data = array(
          'category_id' => $request->category_id ,
          'title' =>  $request->title,
          'description' => $request->description,
          'payment_mode' => $request->payment_mode,
          'amount' =>  $request->amount,
          'added_by' => $request->added_by,
          'others' => $request->others,
      );
       // dd($data);
       if (!empty($data)){
       DB::table('incomes')->insert($data);

       Redirect::to('admin/incomes/index')->send()->with('success','Insert record successfully!');
       }else{
         Redirect::to('admin/incomes/index')->send()->with('failure','Something wrnt wrong');
       }
    }


    // edit incomes
     public function edit($id){
        $income = DB::table('incomes')->where('id',$id)->first();
        // dd($income);

        $category = DB::table('categories')->get();

        // dd($income);
        return view('admin.incomes.edit',['income'=>$income , 'category'=>$category]);
    }

   
    //update category
    public function update(REQUEST $request , $id){
        $data = array(
          'category_id' => $request->category_id,
          'title' => $request->title,
          'description' => $request->description,
          'payment_mode' => $request->payment_mode,
          'amount' =>  $request->amount,
          'added_by' => $request->added_by,
          'others' => $request->others,
      );
         if (!empty($data)){
         DB::table('incomes')->where('id',$id)->update($data);

         Redirect::to('admin/incomes/index')->send()->with('success','Record update successfully!');
       }else{
         Redirect::to('admin/incomes/index')->send()->with('failure','something went wrong');
       }

    }

    // delete category
     public function destroy($id){
        $income_list = DB::table('incomes')->where('id',$id)->delete();
       Redirect::to('admin/incomes/index')->send()->with('success','Record delete successfully!');
    }
}
