@extends('front/layout')
@section('page_title','Home')
@section('container')

<section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
          @foreach($banner as $bnr)
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('assets/images/'.$bnr->image)}}" alt="Men slide img" />
              </div>
              <div class="seq-title">
                <h2>Welcome To <strong>Daily Shop</strong></h2>
                <a data-seq href="{{$bnr->btnLink}}" class="aa-shop-now-btn aa-secondary-btn">{{$bnr->btnText}}</a>
              </div>
            </li>
          @endforeach
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <h2 class="text-center">Categories</h2>
              <div class="col-md-12 no-padding"> 
                <div class="aa-promo-right">
                    @foreach($frontCategory as $list)
                    <div class="aa-single-promo-right">   
                  <div class="aa-promo-banner">                    
                    <img src="{{asset('frontAssets/img/'.$list->image)}}" alt="image">                    
                    <div class="aa-prom-content">
                      <h4><a href="javascript:void(0)">{{$list->categoryName}}</a></h4>                    
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                  @foreach($frontCategory as $list)
                    <li class=""><a href="#{{$list->id}}" data-toggle="tab">{{$list->categoryName}}</a></li>
                  @endforeach
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                  @php
                  $active= 1;
                  @endphp
                  @foreach($frontCategory as $list)
                  @php
                  $class = "";
                  if($active == 1){
                    $class = "in active";
                    $active++;
                  }
                  @endphp

                    <div class="tab-pane fade {{$class}}" id="{{$list->id}}">
                      <ul class="aa-product-catg">
                      @if(isset($frontCategoryProduct[$list->id][0]))
                      @foreach($frontCategoryProduct[$list->id] as $product)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="{{url('product/')}}/{{$product->name}}"><img src="{{asset('frontAssets/img/'.$product->image)}}" width="200px" alt="{{$product->name}}"></a>
                            <a class="aa-add-card-btn" href="javascript:void(0)" onclick="addCart('{{$product->id}}')"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="">{{$product->name}}</a></h4>
                              <span class="aa-product-price">Rs.{{$product->price}}</span><span class="aa-product-price"></span>
                            </figcaption>
                          </figure>                          
                        </li>  
                        @endforeach    
                        @else
                        <li>
                          <figure class="text-center prd">
                            Ooop's ! No Data Found... 
                          <figure>
                        <li>
                        @endif
                      </ul>
                    </div>
                    @endforeach
                </div>
                               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
 
  
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Latest Blog -->
@endsection