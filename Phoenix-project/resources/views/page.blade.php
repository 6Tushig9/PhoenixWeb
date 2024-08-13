<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CompanyPage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!--fontawesome-->
    <link rel="stylesheet" href={{ asset('css/CompanyCSS.css') }}>
    <link rel="stylesheet" href={{ asset('css/PSHStyle.css') }}>
</head>
<body>
    <div id="thinnav">
        <div class="Welcome">Тавтай морил</div>
        <div class="rightsd">
            <div class="FAQhelp">
                <a href="">Санал хүсэлт |</a>
                <a href="">Тусламж |</a>
            </div>
            <div class="miniicon">
                <div class="shpngcrt">
                    <a href="">
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
            <a href="/page">БАЙГУУЛЛАГА</a>
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
        <div id="HamtrahHuselt">
            <p>Хамтран ажиллах хүсэлт илгээх</p><img src="./pics2use/icons/PaperPlane.png">
        </div>
    </div>


    <footer>
        <div class="SocialCont">
            <a href="https://www.facebook.com/centralrich.mongolia">
                <img src="./pics2use/icons/FB.png" class="Facebookicon">
            </a>
            <a href="https://www.instagram.com/phoenix_s_heater">
                <img src="./pics2use/icons/IG.png" class="Instagramicon">
            </a>
            <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox">
                <img src="./pics2use/icons/GM.png" class="Emailicon">
            </a>
        </div>
        <div class="utas">+976-8939-0000 </div>
        <div class="hayg" id="Ohayg"> Оффис: Улаанбаатар хот, Амарсанаагын гудамж, Гандан 16р хороо, Колорадо бизнес төв, 202 тоот</div>
        <div class="hayg" id="bbhayg"> Борлуулалтын байр: Улаанбаатар хот, Аюушийн өргөн чөлөө, БГД 8р хороо, Хороолол барилгын материалын дэлгүүр, В1 давхар</div>
        <div class="hayg" id="Uhayg"> Үйлдвэр: Улаанбаатар хот, БЗД 29р хороо, Зохицол төсөл</div>
        <div class="MapsG" id="hayg">
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d397.4953074786357!2d106.89136437168035!3d47.916669180892505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d96938c1a939bbd%3A0xccb9803a93beb5cf!2z0JrQvtC70L7RgNCw0LTQviDQkdC40LfQvdC10YEg0KLTqdCy!5e0!3m2!1smn!2suk!4v1718384534368!5m2!1smn!2suk" 
            style=" width: 80vw; height: 15rem; overflow: hidden; 
            display: flex; justify-content: space-around; border-style: none;
            border-radius: 10px;"
            allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="line"></div>
            <div class="endcrdt">@ 2024 | Designed by SprouX</div>
        </div>
    </footer>
    
    <script src="./JS/PSHjs.js"></script>
</body>
</html>