@extends('front/layout')
@section('page_title','search')
@section('container')
<section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <div class="col-lg-12">
                  <div class="tab-pane">
                      <ul class="aa-product-catg" >
                        @foreach($product as $list)
                          <li>
                            <figure>
                              <a class="aa-product-img" href="{{url('product/')}}/{{$list->name}}"><img width="200px" src="{{asset('frontAssets/img/'.$list->image)}}" alt=""></a>
                              <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                <figcaption>
                                <h4 class="aa-product-title"><a href="#">{{$list->name}}</a></h4>
                                <span class="aa-product-price">Rs.{{$list->price}}</span>
                              </figcaption>
                            </figure>                        
                          </li>  
                        @endforeach 
                            
                      </ul>
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
  
  


 