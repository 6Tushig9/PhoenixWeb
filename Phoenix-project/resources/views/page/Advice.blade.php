@extends("main")
@section("Phoenix")
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
    <div class="navi">
            <div class="lftMenu">
                <a href="/Company">БАЙГУУЛЛАГА</a>
                <a href="/Ecological">Б.О.Н.З</a>
            </div>
            <img src={{ asset("pics2use/LogoBlck.png")}} class="MenuLogo">
            <div class="rghtMenu">
                <a href="/Calculate">ТООЦООЛУУР</a>
                <a href="/Advice">ЗӨВЛӨМЖ</a>
            </div>
            <div class="mnubtn">
                <span></span><span></span><span></span>
            </div>
        </div>
        <div class="mblMenu">
            <a href="/Company">БАЙГУУЛЛАГА</a>
            <a href="/Ecological">Б.О.Н.З</a>
            <a href="/Calculate" class="CalcBtn">ТООЦООЛУУР</a>
            <a href="/Advice">ЗӨВЛӨМЖ</a>
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
        <div class="cardd" id="card2">
            <img src={{ asset("pics2use/TechSketch.jpg")}}>
            <div>
                <h2>Тосоо сольж байх</h2>
                <h3>Нийтэлсэн 2024.03.04</h3>
                <p>
                    Та хөдөлгүүрийн тосоо тос хэмжигчийн дээд болон доод цэгийн дунд байгаа 
                    эсэхийг шалгаарай. Хэрвээ доод цэгээс доош буюу тос тань хэт бага байгаа 
                    бол мотор эвдэрч гэмтэх аюултайг анхаарна уу. Үүнтэй адил хэт их тос хийх 
                    нь мөн аюултай учир тосоо тааруулж хийж хэвшээрэй.
                </p>
                <button id="More2" onclick="More2()">Дэлгэрэнгүй...</button>
            </div>
        </div>
        <div class="cardd" id="card3">
            <img src={{ asset("pics2use/TechSketch.jpg")}}>
            <div>
                <h2>Баттерэй шалгах</h2>
                <h3>Нийтэлсэн 2024.03.04</h3>
                <p>
                    Боломжтой бол 3жил тутамд баттерэй-г сольж байх хэрэгтэй. Алдаатай 
                    баттерейнаас болж хөдөлгүүрийн гэмтэх аюул байдаг тул анхаарна уу. 
                    "Green flag"-т нийтэлснээр, баттерэйн алдаатай ажиллагааг анхааруулах 
                    тэмдэг ассан үед хөдөлгүүр энгийнээс удаан асдаг байна. Мөн машинаа барьж 
                    байхад баттерейн улаан анхааруулах тэмдэг хяналтын самбарт анивчих эсвэл 
                    удаан хугацаанд унтрахгүй удах гэх мэтээр баттерей муудсаныг мэдэх боломжтой.
                </p>
                <button id="More3" onclick="More3()">Дэлгэрэнгүй...</button>
            </div>
        </div>
        <div class="cardd" id="card4">
            <img src={{ asset("pics2use/TechSketch.jpg")}}>
            <div>
                <h2>Хөргөгч шингэнээ хянах</h2>
                <h3>Нийтэлсэн 2024.03.04</h3>
                <p>
                    Хөргөгч шингэн буюу coolant(antifreeze болон уснаас бүрддэг) нь зөвхөн зун л моторыг 
                    хөргөх үүрэгтэй зүйл биш юм. Энэ шингэн нь өвлийн хүйтнээс ч гэсэн моторыг 
                    хамгаалах үүрэгтэй учир жилийн 4н улиралд ашиглагддаг. Машины "Manual" ном 
                    дээрх зөвлөгөөтөй сайн танилцаж хөргөх шингэнээ хянаж байх нь чухал юм.
                </p>
                <button id="More4" onclick="More4()">Дэлгэрэнгүй...</button>
            </div>
        </div>
        <div class="cardd" id="card5">
            <img src={{ asset("pics2use/TechSketch.jpg")}}>
            <div>
                <h2>Тормосоо шалгах</h2>
                <h3>Нийтэлсэн 2024.03.04</h3>
                <p>
                    Зогсоолын тоормос(гар тоормос) болон хөл тоормосоо энгийн ажиллаж байгааг 
                    шалгах нь таныг гэнэтийн осол аюулаас хамгаалж болох юм.
                    замын хөдөлгөөнд оролцохоос өмнө эсвэл ойр хавьд тань ямар ч машин 
                    байхгүй газар шалгаж байх нь хамгийн аюулгүй юм.
                </p>
                <button id="More5" onclick="More5()">Дэлгэрэнгүй...</button>
            </div>
        </div>
        <div class="cardd" id="card6">
            <img src={{ asset("pics2use/TechSketch.jpg")}}>
            <div>
                <h2>Хяналтийн самбарт анхаарал хандуулах</h2>
                <h3>Нийтэлсэн 2024.03.04</h3>
                <p>
                    Маш олон хүмүүс хяналтын самбар дээрх тэмдгүүд ямар учиртайг мэддэггүй.
                    Цаг гаргаж байгаад хяналтын самбар дээрх тэмдэг тэмдэглэгээг нэг бүрчлэн 
                    мэдэж ассан тохиолдолд ямар арга хэмжээ авах ёстойг сурах нь жолооч болгонд 
                    байвал зохих мэдлэг юм.
                </p>
                <button id="More6" onclick="More6()">More</button>
            </div>
        </div>
</div>
@endsection
