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

    <!-- main info -->
    <div id="mnContnr">
        <div class="firstInfo">
            <div class="frstPic"> 
                <img src="./pics2use/PicEmployee.avif">
            </div>
            <div class="frstIfno">
                <h3>Яаж эхэлсэн бэ</h3>
                Lorem ipsum dolor sit, amet consectetur 
                adipisicing elit. Velit exercitationem reprehenderit deleniti 
                iste dolore rerum provident dicta. Ad, ut, vel possimus quo 
                est veritatis accusantium facilis, illum consequuntur 
                maiores debitis! Ad, ut, vel possimus quo 
                est veritatis accusantium facilis, illum consequuntur 
                maiores debitis!
            </div>
        </div>
        <div class="secondInfo">
            <div class="scndIfno">
                <h3>Яаж эхэлсэн бэ</h3>
                Lorem ipsum dolor sit, amet consectetur 
                adipisicing elit. Velit exercitationem reprehenderit deleniti 
                iste dolore rerum provident dicta. Ad, ut, vel possimus quo 
                est veritatis accusantium facilis, illum consequuntur 
                maiores debitis! Velit exercitationem reprehenderit deleniti 
                iste dolore rerum provident dicta.
            </div>
            <div class="scndPic"><img src="./pics2use/TechSketch.jpg"></div>
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
                <img src="./pics2use/LogoBlck.png">
                <img src="./pics2use/LogoBlck.png">
                <img src="./pics2use/LogoBlck.png">
                <img src="./pics2use/LogoBlck.png">
                <img src="./pics2use/LogoBlck.png">
                <img src="./pics2use/LogoBlck.png">
                <img src="./pics2use/LogoBlck.png">
                <img src="./pics2use/LogoBlck.png">
                <img src="./pics2use/LogoBlck.png">
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
                    <button type="submit" class="send-btn">Send</button>
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