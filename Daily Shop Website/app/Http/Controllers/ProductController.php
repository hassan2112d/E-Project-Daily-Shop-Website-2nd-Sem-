<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $result['data']=Product::all();
        return view('admin.product',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addproduct(Request $request,$id='')
    {   
        if ($id>0) {
           $arr=Product::where(['id'=>$id])->get();

           $result['categoryId']=$arr['0']->categoryId;
           $result['name']=$arr['0']->name;
           $result['image']=$arr['0']->image;
           $result['decript']=$arr['0']->decript;
           $result['price']=$arr['0']->price;
           $result['status']=1;
           $result['code']=$arr['0']->code;
           $result['id']=$arr['0']->id;
        }else{
            $result['categoryId']='';
            $result['name']='';
            $result['image']='';
            $result['decript']='';
            $result['price']='';
            $result['price']='';
            $result['code']='';
            $result['id']='';
        }

        $result['category']=DB::table('categories')->get();

        return view('admin/addProduct',$result);
        
    }

    public function addproductprocess(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'image'=>'required',

        ]);

        if ($request->post('id')>0) {

            $model =Product::find($request->post('id'));
            $msg="Product Updated";
        }else{
            $model = new Product();
            $msg="Product Inserted";
        }

        if($request->hasfile('image')){

            $image=$request->file('image');
            $ext=$image->extension();
            $imageName=time().'.'.$ext;
            $image->storeAs('/public/media',$imageName);
            $model->image=$imageName;
        }

        $model->categoryId=$request->post('categoryId');
        $model->name=$request->post('name');
        $model->decript=$request->post('decript');
        $model->price=$request->post('price');
        $model->image=$request->post('image');
        $model->code=$request->post('code');
        $model->status=1;
        $model->save();
        $request->session()->flash('messege',$msg);
        return redirect('admin/product');
    }

    
    public function delete(Request $request,$id)
    {
        $model=Product::find($id);
        $model->delete();
        $request->session()->flash('messege','Product Deleted');
        return redirect('admin/product');
    }

}
