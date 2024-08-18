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



        <div class="tootsoolohW">
            <div class="hariu">
                <div class="songolt">
                    <div class="songolt1">
                        
                    </div>
                    <div class="songolt2">
                        
                    </div>
                </div>
                <div class="warningmsg">
                    Энэ тооцоололд байшингийн шалнаас тааз хүртэлх өндөрийг 
                    2.8м гэж үзэв. Хэрэв өөр хэмжээсээр тооцоолуулах бол манай 
                    ажилтанд хандана уу. Утас: 89390000
                </div>
                <div class="MonthlySSS">
                    <h2>Сард гарах цахилгааны зардал</h2>
                    <h1>129000₮</h1>
                </div>
                <div class="SumSSS">
                    <h2>Халаагуурын нийт үнэ</h2>
                    <h1>2589000₮</h1>
                </div>
            </div>
            <div class="VertLine"></div>
            <div class="baishinInfo">
                <h1>Тооцоолол хийлгэх байшингийн мэдээлэл оруулна уу</h1>
                <div class="numinfo">
                    <div class="tailbarUg">
                        <div>Нийт талбай(м2) =</div>
                        <div>Өрөөний тоо(ш) =</div>
                        <div>Цонхны тоо(ш) =</div>
                        <div>Шалнаас тааз хүртэлх зай(см) =</div>
                    </div>
                    <div class="ToonUtga">
                        <input type="number" name="m2" id="m2input" min="0">
                        <input type="number" name="RoomNum" id="m2input" min="0">
                        <input type="number" name="WindowNum" id="m2input" min="0">
                        <input type="number" name="WindHeight" id="m2input" min="0">
                    </div>
                </div>
                <button>ТООЦООЛОХ</button>
            </div>
            <!--<div class="DulaanAld">
                    <h2>Таны байшин хэр дулаан алдагдалтай вэ?</h2>
                    <input type="radio" name="ih" id="ih">
                    <label for="ih">Их</label>
                    <input type="radio" name="engiin" id="engiin">
                    <label for="engiin">Энгийн</label>
                    <input type="radio" name="baga" id="baga">
                    <label for="baga">Бага</label>
            </div>-->
        </div>
    </div>
@endsection