@extends('admin/layout')
@section('page_title','Customer Detail')
@section('customer_detail','active')
@section('container')
<h2>Customer Details</h2>

<div class="container-fluid">
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Feilds</th>
                        <th>Values</th>
                    </tr>
                </thead>

                <tbody>
                    
                    <tr>
                        <td><strong>Name</strong></td>
                        <td>{{$customerdata->name}}</td>
                    </tr>
                    <tr>
                    <td><strong>Email</strong></td>
                        <td>{{$customerdata->email}}</td>
                    </tr>
                    <tr>
                    <td><strong>City</strong></td>
                        <td>{{$customerdata->city}}</td>
                    </tr>
                    <tr>
                    <td><strong>Created Time</strong></td>
                        <td>{{\Carbon\Carbon::parse($customerdata->created_at)->format('d-M-Y')}}</td>
                    </tr>
                    <tr>
                    <td><strong>Updated Time</strong></td>
                    <td>{{\Carbon\Carbon::parse($customerdata->created_at)->format('d-M-Y')}}</td>
                    </tr>
                
                    
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection