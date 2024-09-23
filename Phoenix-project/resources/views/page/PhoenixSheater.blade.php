@extends("main")
@section("Phoenix")
<script>
    document.getElementById("complaintBtn").addEventListener("click", function() {
        document.getElementById("complaintPopup").style.display = "flex";
        document.body.classList.add("no-scroll");
    });
    document.getElementById("closeComplaintPopup").addEventListener("click", function() {
        document.getElementById("complaintPopup").style.display = "none";
        document.body.classList.remove("no-scroll");
    });
    window.addEventListener("click", function(event) {
        const popup = document.getElementById("complaintPopup");
        if (event.target === popup) {
            popup.style.display = "none";
            document.body.classList.remove("no-scroll");
        }
    });
</script>
        <div id="landingP">
            <div class="SanalBolgoh">
                @if ($first_item == null)
                    <div class="medeelliinheseg">
                    <h1>S1200TW</h1>
                    <h2>22м2 талбай халаах хүчин чадалтай</h2>
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ducimus ullam voluptate sapiente expedita nisi voluptates 
                        perspiciatis doloremque est eligendi consequatur animi.</h3>
                    <div class="shuudhudaldah">
                         <script>
                        $(document).ready(function() {
                            $('#buying').click(function() {
                                window.location.href = '/buypage';
                            });
                            $('#basketing').click(function(){
                                window.location.href='/shoppingcart';
                            });
                        });
                        </script>
                        <div class="fnctbtn buy" id="buying">Худалдан авах</div>
                        <div class="fnctbtn cart" id="basketing">Сагсанд хийх</div>
                    </div>
                </div>
                <div class="zurag1">
                    <img src={{ asset("pics2use/Heaters/S1200TWbig.png")}} >
                </div>
                @endif
                <div class="medeelliinheseg">
                    <h1>{{ $first_item->Бүтээгдэхүүн }}</h1>
                    <h2>{{ $first_item->Онцлог_шинж }}</h2>
                    <h3>{{ $first_item->Товч_мэдээлэл }}</h3>
                    <div class="shuudhudaldah">
                         <script>
                        $(document).ready(function() {
                            $('#buying').click(function() {
                                window.location.href = '/buypage';
                            });
                            $('#basketing').click(function(){
                                window.location.href='/shoppingcart';
                            });
                        });
                        </script>
                        <div class="fnctbtn buy" id="buying">Худалдан авах</div>
                        <div class="fnctbtn cart" id="basketing">Сагсанд хийх</div>
                    </div>
                </div>
                <div class="zurag1">
                    <img src={{ asset("storage/". $first_item->Зураг)}} alt="">
                </div>
            </div>
            <div class="BusadProd">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            @if (count($menu)>0)
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <div class="card-image">
                                            <img src={{ asset("pics2use/Heaters/SD600.png")}} class="card-img">
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">SD600</h2>
                                            <p class="descrptn">8-12м2</p>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $('.VMoring').click(function() {
                                                    window.location.href = '/buypage';
                                                });
                                            });
                                        </script>
                                        <button class="VMore VMoring">Дэлгэрэнгүй</button>
                                    </div>
                                </div>
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <div class="card-image">
                                            <img src={{ asset("pics2use/Heaters/S600TW.png")}} class="card-img">
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">S600TW</h2>
                                            <p class="descrptn">8-12м2</p>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $('.VMoring').click(function() {
                                                    window.location.href = '/buypage';
                                                });
                                            });
                                        </script>
                                        <button class="VMore VMoring">Дэлгэрэнгүй</button>
                                    </div>
                                </div>
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <div class="card-image">
                                            <img src={{ asset("pics2use/Heaters/S800TW.png")}} class="card-img">
                                        </div>
                                        <div class="card-content">
                                            <h2 class="name">S800TW</h2>
                                            <p class="descrptn">14-18м2</p>
                                        </div>
                                        <button class="VMore">Дэлгэрэнгүй</button>
                                    </div>
                                </div>
                                            <div class="card swiper-slide">
                                                <div class="image-content">
                                                    <div class="card-image">
                                                        <img src={{ asset("pics2use/Heaters/S900TW.png")}} class="card-img"">
                                                    </div>

                                                    <div class="card-content">
                                                        <h2 class="name">S900TW</h2>
                                                        <p class="descrptn">16-20м2</p>
                                                    </div>

                                                    <button class="VMore">Дэлгэрэнгүй</button>
                                                </div>
                                            </div>
                                            <div class="card swiper-slide">
                                                <div class="image-content">
                                                    <div class="card-image">
                                                        <img src={{ asset("pics2use/Heaters/S1000TW.png")}} class="card-img">
                                                    </div>

                                                    <div class="card-content">
                                                        <h2 class="name">S1000TW</h2>
                                                        <p class="descrptn">18-22м2</p>
                                                    </div>

                                                    <button class="VMore">Дэлгэрэнгүй</button>
                                                </div>
                                            </div>
                                            <div class="card swiper-slide">
                                                <div class="image-content">
                                                    <div class="card-image">
                                                        <img src={{ asset("pics2use/Heaters/S1200TW.png")}} class="card-img">
                                                    </div>

                                                    <div class="card-content">
                                                        <h2 class="name">S1200TW</h2>
                                                        <p class="descrptn">20-24м2</p>
                                                    </div>

                                                    <button class="VMore">Дэлгэрэнгүй</button>
                                                </div>
                                            </div>
                                            <div class="card swiper-slide">
                                                <div class="image-content">
                                                    <div class="card-image">
                                                        <img src={{ asset("pics2use/Heaters/TX900TW.png")}} class="card-img">
                                                    </div>

                                                    <div class="card-content">
                                                        <h2 class="name">TX900TW</h2>
                                                        <p class="descrptn">18-20м2</p>
                                                    </div>

                                                    <button class="VMore">Дэлгэрэнгүй</button>
                                                </div>
                                            </div>
                                            <div class="card swiper-slide">
                                                <div class="image-content">
                                                    <div class="card-image">
                                                        <img src={{ asset("pics2use/Heaters/S400TW.png")}} class="card-img">
                                                    </div>

                                                    <div class="card-content">
                                                        <h2 class="name">S400TW</h2>
                                                        <p class="descrptn">6-8м2</p>
                                                    </div>

                                                    <button class="VMore">Дэлгэрэнгүй</button>
                                                </div>
                                            </div>
                                            <div class="card swiper-slide">
                                                <div class="image-content">
                                                    <div class="card-image">
                                                        <img src={{ asset("pics2use/Heaters/G2200TW.png")}} class="card-img">
                                                    </div>

                                                    <div class="card-content">
                                                        <h2 class="name">Гэрийн халаагуур</h2>
                                                        <p class="descrptn">25-33м2</p>
                                                    </div>

                                                    <button class="VMore">Дэлгэрэнгүй</button>
                                                </div>
                                            </div>
                                            <div class="card swiper-slide">
                                                <div class="image-content">
                                                    <div class="card-image">
                                                        <img src={{ asset("pics2use/Heaters/G1800R.png")}} class="card-img">
                                                    </div>

                                                    <div class="card-content">
                                                        <h2 class="name">Гэрийн халаагуур</h2>
                                                        <p class="descrptn">18-25м2</p>
                                                    </div>

                                                    <button class="VMore">Дэлгэрэнгүй</button>
                                                </div>
                                            </div>
                            @else
                                
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