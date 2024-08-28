<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Phoenix</title>
    <link rel="stylesheet" href={{ asset("css/PSHStyle.css") }}>
    <link rel="stylesheet" href={{ asset("css/swiper-bundle.min.css") }}>
    <script src={{asset('js/javascript/PSHjs.js')}}></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
   <header>
        <div class="navi">
            <div class="lftMenu">
                <a href="/Company">БАЙГУУЛЛАГА</a>
                <a href="/Ecological">Б.О.Н.З</a>
            </div>
            <a href="/PhoenixSheater">
                <img src={{ asset("pics2use/LogoBlck.png")}} class="MenuLogo">
            </a>
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
                    <button type="button" class="submit-btn">Илгээх</button>
                </form>
            </div>
        </div>
   </header>
<section>
    @yield("Phoenix")
</section>
    <!--        From local file          -->
    <footer>
        <div class="SocialCont">
            <a href="https://www.facebook.com/centralrich.mongolia">
                <img src={{ asset("pics2use/icons/FB.png")}} class="Facebookicon">
            </a>
            <a href="https://www.instagram.com/phoenix_s_heater">
                <img src={{ asset("pics2use/icons/IG.png")}} class="Instagramicon">
            </a>
            <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox">
                <img src={{ asset("pics2use/icons/GM.png")}} class="Emailicon">
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
    
</body>
</html>
