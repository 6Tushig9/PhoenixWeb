@extends("main")
@section("Phoenix")
<div class="main">
        <div id="thinnav">
            <div class="Welcome">Тавтай морил</div>
            <div class="rightsd">
                <div class="FAQhelp">
                    <button id="complaintBtn" class="open-popup-btn">Санал хүсэлт |</button>
                    <a href="/FAQ">Тусламж |</a>
                </div>
                <div class="miniicon">
                    <div class="shpngcrt">
                        <a href="/ShoppingCart">
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
        {{-- <div class="navi">
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
        </div> --}}
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

    <!-- main info -->
    <div id="mnContnr">
        <div class="firstInfo">
            <div class="frstPic"> 
                <img src={{ asset("pics2use/PicEmployee.avif")}}>
            </div>
            <div class="frstIfno">
                <h3>Бидний эхэлсэн шалтгаан</h3>
                   Бид 2014 онд байгаль орчинд ээлтэй дэвшилтэт халаагуур эх орондоо 
                   үйлдвэрлэн гэсэн маш тодорхой зорилготойгоор үүсгэн байгуулагдсан. 
                   7 жилийн турш судалгаа, хөгжүүлэлт тасралтгүй хийгдсэний үндсэн дээр 
                   2021 онд анхны цахилгаан халаагуураа зах зээлд нэвтрүүлсэн. Борлуулалт 
                   хийж эхэлсэн цагаас хэрэглэгчдээс тасралтгүй эерэг сэтгэгдэл ирж 
                   байгаа тул бид бахархалтайгаар бүтээгдэхүүн маань хэрэглэгчдийн 
                   хэрэгцээ, шаардлагыг хангасан гэж дүгнэнэ. <br>
                    Бүтээгдэхүүн маань утааг бууруулахад бодит хувь нэмэр оруулахаас гадна 
                    хэрэглэгчдэдээ санхүүгийн хэмнэлт үүсгэж чадахыг бид мэдэж байгаа тул цаашид 
                    уламжлалт мод, нүүрс түлдэг өрх бүрд цахилгааны хэмнэлттэй халаагуурын 
                    шийдлээ хэрэглүүлэхийг зорьж байна. Цаашид бид шинэ төрлийн бүтээгдэхүүн 
                    хөгжүүлэлтийг тасралтгүй хийсээр байх төдийгүй айл өрхийг тав тухтай, эко 
                    амьдрах орчныг бүрдүүлэхээр зорин ажиллаж байна. 

            </div>
        </div>
        <div class="secondInfo">
            <div class="scndIfno">
                <h3>Бидний үнэ цэн бол чанар</h3>
                   Бид үүсгэн байгуулагдсан зорилгоо биелүүлэхийн тулд бүтээгдэхүүний 
                   чанарыг хамгийн эхэнд тавьж бүтээгдэхүүн хөгжүүлэлт дээр нухацтай 
                   хандсаар ирсэн. Тиймдээ ч “Шинжлэх ухааны академийн Физик, Технологийн 
                   хүрээлэн, Хэрэглээний физикийн салбар, Технологи хөгжүүлэлтийн 
                   лаборатори”, “МУ-ын ШУТИС-ын Барилгын эрчим хүч хэмнэлтийн төв” болон 
                   “Эрчим хүчний Аудитор”-ын газар тус бүрээр бүтээгдэхүүндээ дүн шинжилгээ 
                   хийлгэсний дүгнэлтэд манай Phoenix-S брэндийн халаагуур нь“Эрчим хүчний 
                   хэмнэлттэй” болохыг албан ёсоор баталгаажуулсан. Үүгээр ч зогсолтгүй 
                   “Чанар, стандартын MNS 6780:2019” гэрчилгээ авч үйл ажиллагаагаа дүгнүүлсэн. 
                   Манай хамт олны хамгийн их бахархдаг  нь бид Оюуны өмчийн газраас "Ашигтай 
                   загварын гэрчилгээ" 2-ыг эзэмшдэг явдал юм. <br>
                    Дээрх шинжилгээ, баталгаажуулалт, гэрчилгээнүүд нь бидний бүтээгдэхүүн бүрэн 
                    аюулгүй, агаар шатаах, хуурайшуулах, халалтаас шалтгаалсан ямар нэгэн үнэр 
                    гарах, харшил үүсгэх зэрэг сөрөг үр дагаваргүй, цахилгааны хэмнэлттэй эко 
                    бүтээгдэхүүн болохыг илтгэнэ. <br>
                    Мөн бид хэзээ ч цахилгаан халаагуураа гар утаснаасаа өөрийн хүссэнээр 
                    удирдах, өрөөний температурыг хэмжих, хянах инновацлаг шийдлүүдийг нэвтрүүлснээр 
                    гаднын аль ч төрлийн ижил бүтээгдэхүүнтэй өрсөлдөж чадна. бүтээгдэхүүнтэй 
                    өрсөлдөх чадвартай бүтээгдэхүүн бүтээсэн.

            </div>
            <div class="scndPic"><img src={{ asset("pics2use/TechSketch.jpg")}}></div>
        </div>
        <div id="Milestone">
            <div class="section">
                <div class="Numbers">3</div>
                <div class="descrptnOfNumber">Жил</div>
            </div>
            <div class="section">
                <div class="Numbers">500'000</div>
                <div class="descrptnOfNumber">Нийт айл өрх</div>
            </div>
            <div class="section">
                <div class="Numbers">5мВт</div>
                <div class="descrptnOfNumber">Хэмнэсэн цахилгаан</div>
            </div>
            <div class="section">
                <div class="Numbers">3.5сая Тн</div>
                <div class="descrptnOfNumber">Бууруулсан нүүрс хүчлийн хий</div>
            </div>
        </div>
        <h2 style="font-weight: 300;">ХАМТРАГЧ БАЙГУУЛЛАГУУД</h2>
        <div class="Hamtragchid">
            <div class="Hamtragchid-slide">
                <img src={{ asset("pics2use/Companions/KhaanBank.png")}}>
                <img src={{ asset("pics2use/Companions/XacBank.png")}}>
                <img src={{ asset("pics2use/Companions/TuriinBank.png")}}>
                <img src={{ asset("pics2use/Companions/Pocket.png")}}>
                <img src={{ asset("pics2use/Companions/StorePay.png")}}>
                <img src={{ asset("pics2use/Companions/Gund.png")}}>
                <img src={{ asset("pics2use/Companions/Socratus.png")}}>
                <img src={{ asset("pics2use/Companions/MAOSIHT.png")}}>
                <img src={{ asset("pics2use/Companions/TumenHouse.png")}}>
                <img src={{ asset("pics2use/Companions/Tuss.png")}}>
                <img src={{ asset("pics2use/Companions/Tomo.png")}}>
                <img src={{ asset("pics2use/Companions/chatBot.png")}}>
            </div>
        </div>
<script>
    //company tsesnii company-d-n logo duplicate
     var copy = document.querySelector(".Hamtragchid-slide").cloneNode(true)
    document.querySelector(".Hamtragchid").appendChild(copy);
</script>

        <div class="email-popup-wrapper" id="emailPopup">
            <div class="email-popup">
                <span class="close-btn" id="closePopup">&times;</span>
                <h2>Хамтран ажиллах хүсэлт илгээх</h2>
                <form>
                    <label for="NameOfSender">Нэр:</label>
                    <input type="text" id="NameOfSender" placeholder="Хүсэлт илгээгчийн нэр" required>
                    <label for="phoneNum">Утасны дугаар:</label>
                    <input type="text" id="phoneNum" placeholder="Утасны дугаар" required>
                    <label for="message">Мессеж:</label>
                    <textarea id="message" placeholder="Таны илгээх мессеж" required></textarea>
                    <button type="submit" class="send-btn">Илгээх</button>
                </form>
            </div>
        </div>

        <button id="sendEmailBtn" class="open-popup-btn">
            Хамтран ажиллах хүсэлт илгээх<img src="./pics2use/icons/PaperPlane.png">
        </button>
    </div>
<script>
document.getElementById("sendEmailBtn").addEventListener("click", function() {
document.getElementById("emailPopup").style.display = "flex";
document.body.classList.add("no-scroll");
});

document.getElementById("closePopup").addEventListener("click", function() {
    document.getElementById("emailPopup").style.display = "none";
    document.body.classList.remove("no-scroll");
});

// Close the popup if the user clicks outside of it
window.addEventListener("click", function(event) {
    const popup = document.getElementById("emailPopup");
    if (event.target === popup) {
        popup.style.display = "none";
        document.body.classList.remove("no-scroll");
    }
});
</script>

@endsection