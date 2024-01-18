<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;

use Crypt;
use Mail;

class frontController extends Controller
{
    public function index(Request $request,$id='')
    {   
        $result['frontCategory']=DB::table('categories')
        ->where(['status'=>1])->get();

      foreach($result['frontCategory'] as $list) {
            $result['frontCategoryProduct'][$list->id]=DB::table('products')
            ->where(['categoryId'=>$list->id])->get();

        }

        $result['banner']=DB::table('banners')
        ->where(['status'=>1])->get();

        /* echo "<pre>";
        print_r($result);
        die(); */

        return view('front/index',$result);
    }

    public function product(Request $request,$name){


        $result['product']=DB::table('products')
        ->where(['status'=>1])
        ->where(['name'=>$name])->get();

        

        foreach($result['product'] as $list) {
            $result['productShow'][$list->id]=DB::table('products')
            ->where(['categoryId'=>$list->id])->get();

        }     

        return view('front/product',$result);
    }

    public function search(Request $request,$str){


        $result['product']=DB::table('products')
        ->where(['status'=>1])
        ->where('name','like',"%$str%")
        ->orwhere('decript','like',"%$str%")
        ->get();

        

        foreach($result['product'] as $list) {
            $result['productShow'][$list->id]=DB::table('products')
            ->where(['categoryId'=>$list->id])->get();

        } 
         
        return view('front/search',$result);
    }
    

    public function registration(Request $request)
    {
        $result=[];
       return view('front/registration',$result);
    }





    
    public function registerProcess(Request $request)
    {
      
       $valid=Validator::make($request->all(),[
            "name"=>"required",
            "email"=>"required|email|unique:customers,email",
            "password"=>"required",
            "city"=>"required",
       ]);
      
       if(!$valid->passes()){
            return response()->json(['status'=>'error',
            'error'=>$valid->errors()->toArray()]);
       }else{
        $arr=[
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$request->password,
            "city"=>$request->city,
            "status"=>1,
            "created_at"=>date('Y-m-d h:i:s'),
            "updated_at"=>date('Y-m-d h:i:s')

        ];
        $query=DB::table('customers')->insert($arr);
        if($query){
            return response()->json(['status'=>'success',
            'msg'=>"Registered Succesfuly"]);
        }
       }
    }


    public function loginProcess(Request $request)
    {
        
        $result=DB::table('customers')
            ->where(['email'=>$request->loginEmail])->get();

            if(isset($result[0])){
                $pass=$result[0]->password;
    
                if($pass==$request->loginPassword){
    
                    $request->session()->put('FRONT_USER_LOGIN',true);
                    $request->session()->put('FRONT_USER_ID',$result[0]->id);
                    $request->session()->put('FRONT_USER_NAME',$result[0]->name);
                    $status="success";
                    $msg="Login Succesful";

                    
                }else{
                    $status="error";
                    $msg="Please enter valid password";
                }
            }else{
                $status="error";
                $msg="Please enter valid email id";
            } 


        return response()->json(['status'=>$status,
            'msg'=>$msg]);
        
    }

    public function contact(){
        return view('front/contact');
    }
    
    public function catProducts(Request $request,$id='')
    {   
        $result['frontCategory']=DB::table('categories')
        ->where(['status'=>1])->get();

      foreach($result['frontCategory'] as $list) {
            $result['frontCategoryProduct'][$list->id]=DB::table('products')
            ->where(['categoryId'=>$list->id])->get();

        }

        return view('front/catProducts',$result);
    }

    public function cart(){

        return view('front/cart');
    }

    public function about(){

        return view('front/about');
    }


    
}
