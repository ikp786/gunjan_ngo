<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Redirect;
Use App\Models\Service;

class ServiceController extends Controller
{
     //list service
     public function index(){

        $service_list = DB::table('services')->get();
         return view('admin.services.index',['data'=>$service_list]);

    }

    // add service
     public function create(){


        return view('admin.services.create');
    }

   
    //save service
    public function store(REQUEST $request){
    	 $data = array(
          'title' =>  $request->title ,
          'description' =>  $request->description ,
      );


    	  if($request->hasFile('property_image')){
                
                foreach($request->property_image as $multi_img) {
                    $multi_img_path = $multi_img->store('property'); 

                    PropertyImage::create([ 
                        'property_id'=>$property_id,
                        'image_name' => $multi_img_path,   
                    ]); 
                }
            }

    	 if (!empty($data)){
    	 $service_id = DB::table('services')->insertGetId($data, 'id');
			foreach ($request->file('image') as $images_data) {				
				$image_name = time() . '_' . rand(1111, 9999) . '_' . $service_id. '.' . $images_data->getClientOriginalExtension();
				$images_data->storeAs('service_images', $image_name, 'public');
			$service_data = ['service_id' =>$service_id,'image' => $image_name];
				DB::table('service_images')->insert($service_data);				
			}
    	 Redirect::to('admin/services/index')->send()->with('success',' Insert record successfully!');
       }else{
         Redirect::to('admin/services/index')->send()->with('failure',' Something went wrong');
       }

    }


    // edit service
     public function edit($id){
        $service = DB::table('services')->where('id',$id)->first();

        $service_image = DB::table('service_images')->where('service_id',$id)->get();

        // $service_list = service::find($id);
        return view('admin.services.edit',['service'=>$service , 'service_image'=>$service_image]);
    }

   
    //update service
    public function update(REQUEST $request , $service_id){
         $data = array(
          'title' =>  $request->title ,
          'description' =>  $request->description ,
      );
         if (!empty($data)){
         DB::table('services')->where('id',$service_id)->update($data);

       if (!empty($request->file('image'))) {

			DB::table('service_images')->where('service_id',$service_id)->delete();
			foreach ($request->file('image') as $images_data) {				
				$image_name = time() . '_' . rand(1111, 9999) . '_' . $service_id. '.' . $images_data->getClientOriginalExtension();
				$images_data->storeAs('service_images', $image_name, 'public');
			$service_data = ['service_id' =>$service_id,'image' => $image_name];
				DB::table('service_images')->insert($service_data);				
			}
			}

			


         Redirect::to('admin/services/index')->send()->with('success','Record update successfully!');
       }else{
         Redirect::to('admin/services/index')->send()->with('failure','something went wrong');
       }

    }

    // delete service
     public function destroy($id){
        $service_list = DB::table('services')->where('id',$id)->delete();
       Redirect::to('admin/services/index')->send()->with('success','Record delete successfully!');
    }

}
