@extends('front/layout')
@section('page_title','product')
@section('container')

<section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">  
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="{{asset('frontAssets/img/'.$product[0]->image)}}" class="simpleLens-lens-image"><img src="{{asset('frontAssets/img/'.$product[0]->image)}}" class="simpleLens-big-image"></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>{{$product[0]->name}}</h3>
                    <br>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">Rs.{{$product[0]->price}}</span> &nbsp;&nbsp;&nbsp;
                      <span class="aa-product-view-price">Code :{{$product[0]->code}}</span>
                    </div>
                    <br> 
                    <p>{{$product[0]->decript}}</p>
                    <div class="aa-prod-quantity">
                      <form action="">
                        <select id="qty" name="qty">
                          @for($i=1;$i<=8;$i++)
                            <option value="{{$i}}">{{$i}}</option>
                          @endfor
                        </select>
                      </form>
                      
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="javasript:void(0)" onclick="addCart('{{$product[0]->id}}')">Add To Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <form action="" method="post" id="frmCart">
      <input type="hidden" name="" id="productId">
      <input type="hidden" name="productQty" id="productQty">
      @csrf
    </form>
  </section>
  
@endsection
  
  


 