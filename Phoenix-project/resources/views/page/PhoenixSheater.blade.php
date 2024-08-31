@extends("main")
@section("Phoenix")

<script>

</script>
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
        <!--Sanal huseltiin heseg END-->

        <div id="landingP">
            <div class="SanalBolgoh">
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
                    <img src={{ asset("pics2use/S1200TW.png")}} >
                </div>
            </div>
            <div class="BusadProd">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <div class="card-image">
                                        <img src={{ asset("pics2use/S600TW.png")}} class="card-img">
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">S600</h2>
                                        <p class="descrptn">8-10м2</p>
                                    </div>

                                    <button class="VMore">Дэлгэрэнгүй</button>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <div class="card-image">
                                        <img src={{ asset("pics2use/xmpl2.png")}} class="card-img">
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">S800</h2>
                                        <p class="descrptn">8-10м2</p>
                                    </div>

                                    <button class="VMore">Дэлгэрэнгүй</button>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <div class="card-image">
                                        <img src={{ asset("pics2use/xmpl2.png")}} class="card-img"">
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">S900</h2>
                                        <p class="descrptn">8-10м2</p>
                                    </div>

                                    <button class="VMore">Дэлгэрэнгүй</button>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <div class="card-image">
                                        <img src={{ asset("pics2use/xmpl2.png")}} class="card-img">
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">S1000</h2>
                                        <p class="descrptn">8-10м2</p>
                                    </div>

                                    <button class="VMore">Дэлгэрэнгүй</button>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <div class="card-image">
                                        <img src={{ asset("pics2use/xmpl2.png")}} class="card-img">
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">S1200</h2>
                                        <p class="descrptn">8-10м2</p>
                                    </div>

                                    <button class="VMore">Дэлгэрэнгүй</button>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <div class="card-image">
                                        <img src={{ asset("pics2use/xmpl2.png")}} class="card-img">
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">TX900</h2>
                                        <p class="descrptn">8-10м2</p>
                                    </div>

                                    <button class="VMore">Дэлгэрэнгүй</button>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <div class="card-image">
                                        <img src={{ asset("pics2use/xmpl2.png")}} class="card-img">
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">H400</h2>
                                        <p class="descrptn">8-10м2</p>
                                    </div>

                                    <button class="VMore">Дэлгэрэнгүй</button>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <div class="card-image">
                                        <img src={{ asset("pics2use/xmpl2.png")}} class="card-img">
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">Гэрийн халаагуур</h2>
                                        <p class="descrptn">8-10м2</p>
                                    </div>

                                    <button class="VMore">Дэлгэрэнгүй</button>
                                </div>
                            </div>
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