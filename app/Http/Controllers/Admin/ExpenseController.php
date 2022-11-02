<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Redirect;
Use App\Models\Expense;

class ExpenseController extends Controller
{
   
    //list expenses
     public function index(){

        $expense = DB::table('expenses')
            ->join('categories' , 'category_id' , '=' , 'categories.id')
            ->select('expenses.*' , 'categories.category_title')
            ->get();
         return view('admin.expenses.index',['data'=>$expense]);

    }

    // add expenses
     public function create(){

      $expense = DB::table('categories')->get();
         return view('admin.expenses.create',['data'=>$expense]);
    }  

    //save expenses
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
       DB::table('expenses')->insert($data);

       Redirect::to('admin/expenses/index')->send()->with('success','Insert record successfully!');
       }else{
         Redirect::to('admin/expenses/index')->send()->with('failure','Something wrnt wrong');
       }
    }


    // edit expenses
     public function edit($id){
        $expense = DB::table('expenses')->where('id',$id)->first();
        // dd($income);

        $category = DB::table('categories')->get();

        // dd($income);
        return view('admin.expenses.edit',['expense'=>$expense , 'category'=>$category]);
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
         DB::table('expenses')->where('id',$id)->update($data);

         Redirect::to('admin/expenses/index')->send()->with('success','Record update successfully!');
       }else{
         Redirect::to('admin/expenses/index')->send()->with('failure','something went wrong');
       }

    }

    // delete category
     public function destroy($id){
        $expense_list = DB::table('expenses')->where('id',$id)->delete();
       Redirect::to('admin/expenses/index')->send()->with('success','Record delete successfully!');
    }
}
