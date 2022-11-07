<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Redirect;
Use App\Models\Doner;

class DonerController extends Controller
{
    //
     //list category
     public function index(){

        $doner_list = DB::table('doners')->get();
         return view('admin.doners.index',['data'=>$doner_list]);

    }

    // add category
     public function create(){
        return view('admin.doners.create');
    }
   
    //save category
    public function store(REQUEST $request){
      $this->validate($request,[
        'name' => 'required|min:3',
        
      ]);
    	 $data = array(
          'name' =>  $request->name ,
          'contact_no' =>  $request->contact_no ,
          'amount' =>  $request->amount ,
          'image' =>  $request->image ,
      );
    	 if (!empty($data)){
    	 DB::table('doners')->insert($data);

    	 Redirect::to('admin/doners/index')->send()->with('success','Insert record successfully!');
       }else{
         Redirect::to('admin/doners/index')->send()->with('failure','Something went wrong');
       }

    }



    // edit category
     public function edit($id){
        $doner = DB::table('doners')->where('id',$id)->first();

        // $category_list = Category::find($id);
        return view('admin.doners.edit',['doner'=>$doner]);
    }

   
    //update category
    public function update(REQUEST $request , $id){
         $data = array(
          'name' =>  $request->name ,
          'contact_no' =>  $request->contact_no ,
          'amount' =>  $request->amount ,
          'image' =>  $request->image ,
      );
         if (!empty($data)){
         DB::table('doners')->where('id',$id)->update($data);

         Redirect::to('admin/doners/index')->send()->with('success','Record update successfully!');
       }else{
         Redirect::to('admin/doners/index')->send()->with('failure','something went wrong');
       }

    }

    // delete category
     public function destroy($id){
        $doner_list = DB::table('doners')->where('id',$id)->delete();
       Redirect::to('admin/doners/index')->send()->with('success','Record delete successfully!');
    }

}
