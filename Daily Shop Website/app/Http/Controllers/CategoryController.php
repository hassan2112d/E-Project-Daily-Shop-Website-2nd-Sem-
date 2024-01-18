<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $result['data']=Category::all();
        return view('admin.category',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcategory(Request $request,$id='')
    {   
        if ($id>0) {
           $arr=Category::where(['id'=>$id])->get();
           $result['categoryName']=$arr['0']->categoryName;
           $result['status']=1;
           $result['image']=$arr['0']->image;
           $result['id']=$arr['0']->id;
        }else{
            $result['categoryName']='';
            $result['status']='';
            $result['image']='';
            $result['id']='';
        }
        return view('admin/addCategory',$result);
        
    }

    public function addCategoryProcess(Request $request)
    {
        $request->validate([

            'categoryName'=>'required',
            'image'=>'required',
            'status'=>'required',

        ]);

        if ($request->post('id')>0) {

            $model =Category::find($request->post('id'));
            $msg="Category Updated";
        }else{
            $model = new Category();
            $msg="Category Inserted";
        }

        if($request->hasfile('image')){

            $image=$request->file('image');
            $ext=$image->extension();
            $imageName=time().'.'.$ext;
            $image->storeAs('frontAssets/img/',$imageName);
            $model->image=$imageName;
        }

        $model->categoryName=$request->post('categoryName');
        $model->status=$request->post('status');
        $model->image=$request->post('image');
        $model->save();
        $request->session()->flash('messege',$msg);
        return redirect('admin/category');
    }

    
    public function delete(Request $request,$id)
    {
        $model=Category::find($id);
        $model->delete();
        $request->session()->flash('messege','Category Deleted');
        return redirect('admin/category');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
