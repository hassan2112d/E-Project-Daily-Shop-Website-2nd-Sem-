@extends('front/layout')
@section('page_title','About Us')
@section('container')

<section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
           <div class="aa-contact-top">
             <h2>About Us</h2>
             <p class="aboutTxt">Daily Shop is a stationary shop which shops dailu use items such as 
                files,arts,gift articles,hand bags <br> and many more things related to men
                and women collections such as beauty products and men's products such as wallet etc.. <br>
                As there is a demand for the greeting cards and many more things related to arts which are used in daily life <br> At this website you can explore a lot of products and can place order online by your home
             </p>
           </div>
          <div class="row">
            <div class="col-md-6">
                <h2>Beauty Products</h2>
                <p class="aboutPara">At this website you can see many beauty products for your skin care and many accesories that are important for you As there is a demand for the greeting cards and many more things related to arts which are used in daily life At this website you can explore a lot of products and can place order online by your home</p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('frontAssets/img/category3.jpg')}}" alt="image">
            </div>
          </div>
            <br><br>
          <div class="row">
            <div class="col-lg-6">
                <img width="500px" src="{{asset('assets/images/banner4.jpg')}}" alt="image">
            </div>
            <div class="col-md-6">
                <h2>Hand Bags</h2>
                <p class="aboutPara">At this website you can see many beauty products for your skin care and many accesories that are important for you As there is a demand for the greeting cards and many more things related to arts which are used in daily life At this website you can explore a lot of products and can place order online by your home</p>
            </div>
          </div>
          
         </div>
       </div>
     </div>
   </div>
 </section>

@endsection