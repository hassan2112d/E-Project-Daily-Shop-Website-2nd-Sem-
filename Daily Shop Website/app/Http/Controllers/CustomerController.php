<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   
    public function index()
    {   
        $result['data']=Customer::all();
        return view('admin.customer',$result);
    }

    public function show(Request $request,$id='')
    {   
           $arr=Customer::where(['id'=>$id])->get();
           $result['customerdata']=$arr['0'];
            return view('admin/showCustomer',$result);
    }


}
