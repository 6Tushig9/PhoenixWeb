<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Phoenix</title>
    <link rel="stylesheet" href={{ asset("css/CompanyCSS.css") }}>
    <link rel="stylesheet" href={{ asset("css/PSHStyle.css") }}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href={{ asset("css/swiper-bundle.min.css") }}>
</head>
<body>
        <header class="w-full">
            <div id="thinnav">
                <div class="Welcome">Тавтай морил</div>
                <div class="rightsd">
                    <div class="FAQhelp">
                        <a href="">Санал хүсэлт |</a>
                        <a href="">Тусламж |</a>
                    </div>
                    <div class="miniicon">
                        <div class="shpngcrt px-1">
                            <a href="">
                                <img src={{ asset("pics2use/icons/Shoppingcart.png") }} class="shoppingC">
                            </a>
                        </div>
                        <div class="miniSocial px-1">
                            <a href="https://www.facebook.com/centralrich.mongolia">
                                <img src={{ asset("pics2use/icons/facebookwhite.png") }} class="mini fb">
                            </a>
                            <a href="https://www.facebook.com/centralrich.mongolia">
                                <img src={{ asset("pics2use/icons/fbgroup.png") }} class="mini group">
                            </a>
                            <a href="https://www.instagram.com/phoenix_s_heater">
                                <img src={{ asset("pics2use/icons/igwhite.png") }} class="mini insta">
                            </a>
                        </div>
                        <div class="anglihel">
                            <a href="">
                                <img src={{ asset("pics2use/icons/Anglihel.png") }} class="lang">
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
                <a href="/PhoenixSheater">
                    <img src="./pics2use/LogoBlck.png" class="MenuLogo">
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
        </header>
    <section>
        @yield("Phoenix")
    </section>
    <footer>
    </footer>
</body>
</html>