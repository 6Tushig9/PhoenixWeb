@extends("main")
@section("Phoenix")
<div class="main">
        <div id="thinnav">
            <div class="Welcome">Тавтай морил</div>
            <div class="rightsd">
                <div class="FAQhelp">
                    <button id="complaintBtn" class="open-popup-btn">Санал хүсэлт |</button>
                    <a href="FAQ.html">Тусламж |</a>
                </div>
                <div class="miniicon">
                    <div class="shpngcrt">
                        <a href="ShoppingCart.html">
                            <img src="./pics2use/icons/Shoppingcart.png" class="shoppingC">
                        </a>
                    </div>
                    <div class="miniSocial">
                        <a href="https://www.facebook.com/centralrich.mongolia">
                            <img src="./pics2use/icons/facebookwhite.png" class="mini fb">
                        </a>
                        <a href="https://www.facebook.com/centralrich.mongolia">
                            <img src="./pics2use/icons/fbgroup.png" class="mini group">
                        </a>
                        <a href="https://www.instagram.com/phoenix_s_heater">
                            <img src="./pics2use/icons/igwhite.png" class="mini insta">
                        </a>
                    </div>
                    <div class="anglihel">
                        <a href="">
                            <img src="./pics2use/icons/Anglihel.png" class="lang">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navi">
            <div class="lftMenu">
                <a href="Company.html">БАЙГУУЛЛАГА</a>
                <a href="Ecological.html">Б.О.Н.З</a>
            </div>
            <img src="./pics2use/LogoBlck.png" class="MenuLogo">
            <div class="rghtMenu">
                <a href="Calculate.html">ТООЦООЛУУР</a>
                <a href="Advice.html">ЗӨВЛӨМЖ</a>
            </div>
            <div class="mnubtn">
                <span></span><span></span><span></span>
            </div>
        </div>
        <div class="mblMenu">
            <a href="Company.html">БАЙГУУЛЛАГА</a>
            <a href="Ecological.html">Б.О.Н.З</a>
            <a href="Calculate.html" class="CalcBtn">ТООЦООЛУУР</a>
            <a href="Advice.html">ЗӨВЛӨМЖ</a>
        </div>

        <!--Sanal huseltiin heseg-->
        <div class="complaint-popup-wrapper" id="complaintPopup">
            <div class="complaint-popup">
                <span class="close-btn" id="closeComplaintPopup">&times;</span>
                <h2>Санал хүсэлтээ илгээх</h2>
                <form>
                    <label for="nameC">Таны нэр:</label>
                    <input type="text" id="nameC" placeholder="Нэрээ бичнэ үү" required>
                    <label for="PhoneNumCom">Утасны дугаар:</label>
                    <input type="text" id="PhoneNumCom" placeholder="Утасны дугаараа бичнэ үү" required>
                    <label for="complaintDetail">Санал хүсэлт:</label>
                    <textarea id="complaintDetail" placeholder="Санал хүсэлтээ бичнэ үү..." required></textarea>
                    <button type="submit" class="submit-btn">Илгээх</button>
                </form>
            </div>
        </div>
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
                        <div class="fnctbtn buy">Худалдан авах</div>
                        <div class="fnctbtn cart">Сагсанд хийх</div>
                    </div>
                </div>
                <div class="zurag1">
                    <img src="./pics2use/xmpl2.png">
                </div>
            </div>
            <div class="BusadProd">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <div class="card-image">
                                        <img src="./pics2use/xmpl2.png" alt="" class="card-img">
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
                                        <img src="./pics2use/xmpl2.png" alt="" class="card-img">
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
                                        <img src="./pics2use/xmpl2.png" alt="" class="card-img"">
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
                                        <img src="./pics2use/xmpl2.png" alt="" class="card-img">
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
                                        <img src="./pics2use/xmpl2.png" alt="" class="card-img">
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
                                        <img src="./pics2use/xmpl2.png" alt="" class="card-img">
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
                                        <img src="./pics2use/xmpl2.png" alt="" class="card-img">
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
                                        <img src="./pics2use/xmpl2.png" alt="" class="card-img">
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