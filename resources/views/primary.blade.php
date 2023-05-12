@extends('layouts.app')
@section('content')
<div class="primary_page">
    
    <div class="w-100 z-n1">
        <img class="w-100" src="assets/images/Asset.png" alt="">
    </div>
    <div class="w-100 z-1">
        <img class="w-100" src="assets/images/Assets9.png" alt="">
    </div>
     <div class="container py-5">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse">
            <div class="col-12 col-md-12 col-lg-6 mt-4 misimg">
                <div id="carouselExample22" class="carousel slide">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset($primary->sec1_img[0])}}" alt="" class="h-100 rounded-3">
                      </div>
                      @foreach ($primary->sec1_img as $key => $item)
                      @if ($key != 0)
                      <div class="carousel-item">
                        <img src="{{asset($item)}}" alt="" class="h-100 rounded-3">
                      </div>                          
                            
                      @endif

                      @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample22" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample22" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    
                  </div>
    
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <h2 class="pb-3 m-0">{!!$primary->sec1_head!!}</h2>
                <p class="pb-3 lh-lg m-0 Open_Sans_font">
                    {!!$primary->sec1_p!!}
                </p>
            </div>
        </div>
    </div>

    <div class="second_color_bg py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row">
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <div class="row flex-column-reverse flex-md-row-reverse flex-lg-row flex-xl-row flex-xxl-row h-100">
                        <div class=" 0">
                            <img src="{{asset($primary->sec2_img)}}" alt=""
                                 class="img-fluid rounded-3">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 mt-3 mt-md-0 mt-lg-0">
                            <img src="{{asset($primary->sec2_head)}}" alt="" class="img-fluid rounded-3">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <h3 class="pb-3"> {!!$primary->sec2_head!!}</h3>
                    <p class="pb-3 lh-lg m-0 Open_Sans_font">
                        {!!$primary->sec2_p!!}
                    </p>
                </div>
            </div>
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <img src="{{asset($primary->sec3_img)}}" alt="" class="w-100 rounded-3">
                     <div class="col-12 col-md-12 col-lg-6 mt-4">
                </div>
                </div>
                
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <h3 class="pb-3 lh-lg">{!!$primary->sec3_head!!}</h3>
                    <p class="pb-3 lh-lg m-0 Open_Sans_font">
                        {!!$primary->sec3_p!!}
                    </p>
                    
                </div>
                
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row mt-5">
            <div class="col-12 col-md-12 col-lg-6 mt-4 misimg">
                <img src="{{asset($primary->sec4_img)}}" alt="" class="h-100 rounded-3">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <h2 class="pb-3 m-0 Open_Sans_font">{!!$primary->sec4_head!!}</h2>

                <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                    {!!$primary->sec4_p!!}
                </p>
            </div>
            <div class="d-flex justify-content-end me-5 mt-5">
                <a class="fs-7 py-1 px-4 first_color Open_Sans_font fw-bold text-capitalize rounded-2 hover_btn _borders " href="https://test.cambridge.edu.jo/tuition-fees">APPLY NOW</a>
            </div>
        </div>
    </div>
</div>
@endsection