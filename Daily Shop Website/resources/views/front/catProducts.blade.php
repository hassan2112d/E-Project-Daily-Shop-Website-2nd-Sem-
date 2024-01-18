@extends('front/layout')
@section('page_title','All products')
@section('container')

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


@endsection
  
  


 