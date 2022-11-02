<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Redirect;
Use App\Models\Category;

class CategoryController extends Controller
{

     //list category
     public function index(){

        $category_list = DB::table('categories')->get();
         return view('admin.categories.index',['data'=>$category_list]);

    }

    // add category
     public function create(){
        return view('admin.categories.create');
    }
   
    //save category
    public function store(REQUEST $request){
      $this->validate($request,[
        'category_title' => 'required|min:3',
        
      ]);
    	 $data = array(
          'category_title' =>  $request->category_title ,
      );
    	 if (!empty($data)){
    	 DB::table('categories')->insert($data);

    	 Redirect::to('admin/categories/index')->send()->with('success','Insert record successfully!');
       }else{
         Redirect::to('admin/categories/index')->send()->with('failure','Something wrnt wrong');
       }

    }


    // edit category
     public function edit($id){
        $category = DB::table('categories')->where('id',$id)->first();

        // $category_list = Category::find($id);
        return view('admin.categories.edit',['category'=>$category]);
    }

   
    //update category
    public function update(REQUEST $request , $id){
         $data = array(
          'category_title' =>  $request->category_title ,
      );
         if (!empty($data)){
         DB::table('categories')->where('id',$id)->update($data);

         Redirect::to('admin/categories/index')->send()->with('success','Record update successfully!');
       }else{
         Redirect::to('admin/categories/index')->send()->with('failure','something went wrong');
       }

    }

    // delete category
     public function destroy($id){
        $category_list = DB::table('categories')->where('id',$id)->delete();
       Redirect::to('admin/categories/index')->send()->with('success','Record delete successfully!');
    }

}
