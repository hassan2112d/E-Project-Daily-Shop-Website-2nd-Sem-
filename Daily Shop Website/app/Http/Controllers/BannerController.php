<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function index()
    {   
        $result['data']=Banner::all();
        return view('admin.banner',$result);
    }

    
    public function addBanner(Request $request,$id='')
    {   
        if ($id>0) {
           $arr=Banner::where(['id'=>$id])->get();
           $result['image']=$arr['0']->image;
           $result['btnText']=$arr['0']->btnText;
           $result['btnLink']=$arr['0']->btnLink;
           $result['status']=1;
           $result['id']=$arr['0']->id;

        }else{
            $result['image']='';
            $result['btnText']='';
            $result['btnLink']='';
            $result['status']='';
            $result['id']='';
        }
        return view('admin/addBanner',$result);
        
    }

    public function addBannerProcess(Request $request)
    {
        $request->validate([

            'image'=>'required'

        ]);

        if ($request->post('id')>0) {

            $model =Banner::find($request->post('id'));
            $msg="Banner Updated";
        }else{
            $model = new Banner();
            $msg="Banner Inserted";
        }

        if($request->hasfile('image')){

            $image=$request->file('image');
            $ext=$image->extension();
            $imageName=time().'.'.$ext;
            $image->storeAs('frontAssets/img/',$imageName);
            $model->image=$imageName;
        }

        $model->image=$request->post('image');
        $model->btnText=$request->post('btnText');
        $model->btnLink=$request->post('btnLink');
        $model->status=1;
        $model->save();
        $request->session()->flash('messege',$msg);
        return redirect('admin/banner');
    }

    
    public function delete(Request $request,$id)
    {
        $model=Banner::find($id);
        $model->delete();
        $request->session()->flash('messege','Banner Deleted');
        return redirect('admin/banner');
    }


}
