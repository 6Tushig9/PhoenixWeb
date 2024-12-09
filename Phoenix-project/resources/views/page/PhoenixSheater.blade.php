@extends("main")
@section("Phoenix")

<x-phoenixsheaterscript/>

        <div id="landingP">
            <div class="SanalBolgoh">
                @if ($first_item == null)
                    <div>Мэдээлэл байхгүй байна</div>
                @else
                    <div class="medeelliinheseg">
                        <h1>{{ $first_item->product_name }}</h1>
                        <h2>{{ $first_item->ontslog_shinj }}</h2>
                        <h3>{{ $first_item->brief_information }}</h3>
                        <div class="shuudhudaldah">
                            <script>
                                $(document).ready(function() {
                                    $('#buying').click(function() {
                                        window.location.href = '/buypage';
                                    });
                                    // $('#basketing').click(function(){
                                    //     window.location.href='/shoppingcart';
                                    // });
                                });
                            </script>
                            <div class="fnctbtn buy" id="buying">Худалдан авах</div>
                            <div class="fnctbtn cart" id="basketing">Сагсанд хийх</div>
                        </div>
                    </div>
                    <div class="zurag1">
                        <img src={{ asset("pics2use/BackPic.png")}} >
                    </div>
                @endif
            </div>
            <div class="BusadProd">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            @if ($menu->isEmpty())
                                <div>Мэдээлэл байхгүй байна</div>
                            @else
                                @foreach ($menu as $pro)
                                    <div class="card swiper-slide">
                                        <div class="image-content">
                                            <div class="card-image">
                                                <img src={{ asset("storage/".$pro->image)}} class="card-img">
                                            </div>
                                            <div class="card-content">
                                                <h2 class="name">{{ $pro->product_name }}</h2>
                                                <p class="descrptn">{{ $pro->ontslog_shinj }}</p>
                                            </div>
                                            <a href={{ route('buy', $pro->id) }}>
                                                <button class="VMore VMoring">Дэлгэрэнгүй</button>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
