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

    
<div id="AdvPage">
        <div class="cardd" id="card1">
            <img src={{ asset("pics2use/TechSketch.jpg")}}>
            <div>
                <h2>Дугуйгаа шалгаж байх</h2>
                <h3> Нийтэлсэн 2024.03.04</h3>
                <p>
                    Дугуйн даралтыг сайн шалгаж, шаардлагатай үед нэмэх. Дугуй хэт өндөр 
                    эсвэл хэт нам даралттай байх нь таны жолоодлогот болон дугуйн элэгдэлд 
                    нөлөөлдөг, мөн дугуйн насжилтыг багасгадаг байна. Дугуй нь таны унаж 
                    буй машины модельд тохирсон төрөл болон хэмжээтэй байх нь чухал. Дугуйн 
                    хээ хамгийн багадаа 1.66мм байдаг. Машиныхаа жолоодлогыг жигд байлгахын 
                    тулд та тогтмол үзлэгт орж байгаарай.
                </p>
                <button id="More1" onclick="More1()">Дэлгэрэнгүй...</button>
            </div>
        </div>
</div>
@endsection
