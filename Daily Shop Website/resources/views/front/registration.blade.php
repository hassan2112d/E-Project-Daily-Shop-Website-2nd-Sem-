@extends('front/layout')
@section('page_title','Register')
@section('container')


 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              
              <div class="col-md-8">
                <div class="aa-myaccount-register">                 
                 <h4>Register</h4>
                 <form action="" class="aa-login-form" id="frmRegistration" method="post">
                    <label for="">Name<span>*</span></label>
                    <input type="text" name="name" placeholder="Name">
                    <div id="name_error" class="field_error"></div>
                    
                    <label for="">Email<span>*</span></label> 
                    <input type="email" name="email" placeholder="Email">
                    <div id="email_error" class="field_error"></div>

                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="password">
                    <div id="password_error" class="field_error"></div> 

                    <label for="">City<span>*</span></label>
                    <input type="text" name="city" placeholder="City">
                    <div id="city_error" class="field_error"></div>

                    <button type="submit" class="aa-browse-btn" id="btnRegistration">Register</button>  
                    @csrf             
                  </form>
                </div>
                <div id="thank_you_msg" class="field_error"></div>

                
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>

@endsection