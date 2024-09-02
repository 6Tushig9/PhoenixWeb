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
    <div id="thinnav">
        <div class="Welcome">Тавтай морил</div>
        <div class="rightsd">
            <div class="FAQhelp">
                <button id="complaintBtn" class="open-popup-btn">Санал хүсэлт |</button>
                <a href="/faq">Тусламж |</a>
            </div>
            <div class="miniicon">
                <div class="shpngcrt">
                    <a href="/shoppingcart">
                        <img src={{ asset("pics2use/icons/Shoppingcart.png") }} class="shoppingC"><!-- src={{ asset("pics2use/icons/Shoppingcart.png") }}-->
                    </a>
                </div>
                <div class="miniSocial">
                    <a href="https://www.facebook.com/centralrich.mongolia">
                        <img src= {{ asset("pics2use/icons/facebookwhite.png")}} class="mini fb">
                    </a>
                    <a href="https://www.facebook.com/centralrich.mongolia">
                        <img src={{ asset("pics2use/icons/fbgroup.png")}} class="mini group">
                    </a>
                    <a href="https://www.instagram.com/phoenix_s_heater">
                        <img src={{ asset("pics2use/icons/igwhite.png")}} class="mini insta">
                    </a>
                </div>
                <div class="anglihel">
                    <a href="">
                        <img src={{ asset("pics2use/icons/Anglihel.png")}} class="lang">
                    </a>
                </div>
            </div>
        </div>
    </div>



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