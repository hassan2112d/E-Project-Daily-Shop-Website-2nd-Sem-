@extends('front/layout')
@section('page_title','Contact Us')
@section('container')


<section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
           <div class="aa-contact-top">
             <h2>We are wating to assist you..</h2>
             <p>Get in touch with us tou can contact us by sending us a messege</p>
           </div>
           <!-- contact map -->
           <div class="aa-contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.9024865686533!2d67.02205231432025!3d24.867179851113832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e6b1566c46f%3A0x65318f4eb62c7aa8!2sAptech%20Computer%20Education%20Garden%20Center!5e0!3m2!1sen!2s!4v1669548212863!5m2!1sen!2s" width="100%" height="300" frameborder="0"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                <h2 id="contact">Contact Us</h2>
                 <div class="aa-contact-address-left">
                   <form class="comments-form contact-form" action="">
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">                        
                          <input type="text" placeholder="Your Name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-10">
                        <div class="form-group">                        
                          <input type="email" placeholder="Email" class="form-control">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">                        
                          <input type="number" placeholder="Phone" class="form-control">
                        </div>
                      </div>
                    </div>                  
                     
                    <div class="form-group">                        
                      <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button class="aa-secondary-btn">Send</button>
                  </form>
                 </div>
               </div>

               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                   <div class="aa-logo">
                    <a href="{{url('/')}}">
                      <p class="myLogo">daily<strong>Shop</strong> <br><span>Your Shopping Partner</span></p>
                    </a>
                    </div>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum modi dolor facilis! Nihil error, eius.</p>
                     <p><span class="fa fa-home"></span>Address: Aptech Garden Center <br>APWA Complex </p>
                     <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                     <p><span class="fa fa-envelope"></span>Email: support@dailyshop.com</p>
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

@endsection