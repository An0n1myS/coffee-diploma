
@extends('layout.app')

@section('content')


    <div class="z-0">
        <!-- Slider main container -->
        <div class="swiper-logo w-100% h-100% overflow-hidden">

            <div class="swiper-wrapper w-full h-full">
                <div class="swiper-slide ">
                    <img class="" src="{{asset('/image/slider-1.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('/image/slider-2.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('/image/slider-2.jpg')}}" alt="">
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>


        </div>
    </div>

    <br>
    <br>

    <div class="">
        <!-- Slider main container -->
        <div class="swiper w-4/6 ">

            <div class="swiper-wrapper">
                @foreach($products as $product)
                    <div class="swiper-slide">
                        <div class="min-w-100% min-h-[180px] max-h-[180px] overflow-hidden border">
                            <img src="data:image/png;base64,{{ base64_encode($product->image_url) }}" alt="Image">
                            <div class="">

                            </div>
                        </div>
                        <p class="text-">{{$product->name}}</p>
                        <p>${{$product->price}}</p>
                        <br>
                    </div>
                @endforeach
            </div>

            <div class="swiper-scrollbar"></div>

        </div>

    </div>
    <br>
    <hr>
    <br>
    <div class="">
        <!-- Slider main container -->
        <div class="swiper w-11/12 ">
            <!-- Additional required wrapper -->

            <div class="swiper-wrapper">

                @foreach($new_products as $new_product)
                    <div class="swiper-slide">
                        {{$new_product->name}}
                        <img src="data:image/png;base64,{{ base64_encode($new_product->image_url) }}" alt="Image">

                    </div>
                @endforeach
            </div>
            <div class="swiper-scrollbar"></div>
        </div>

    </div>



@endsection
