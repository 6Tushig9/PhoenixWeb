<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://v1.fontapi.ir/css/SFProDisplay" rel="stylesheet">
    <title>Phoenix</title>
    <link rel="stylesheet" href={{ asset("css/PSHStyle.css") }}>
    <link rel="stylesheet" href={{ asset("css/swiper-bundle.min.css") }}>
    <script src={{asset('js/javascript/PSHjs.js')}}></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll("#Luser").forEach(function (element) {
            element.addEventListener("click", function() {
                document.getElementById("loginPopup").style.display = "grid";
                document.body.classList.add("no-scroll");
            });
        });

        document.getElementById("closeloginPopup").addEventListener("click", function() {
            document.getElementById("loginPopup").style.display = "none";
            document.body.classList.remove("no-scroll");
        });

        window.addEventListener("click", function(event) {
            const popuplog = document.getElementById("loginPopup");
            if (event.target === popuplog) {
                popuplog.style.display = "none";
                document.body.classList.remove("no-scroll");
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector('.my-form_signup a').addEventListener('click', function(event) {
            event.preventDefault();
            document.querySelector('.register-side').style.display = 'block';
                document.getElementById("login-side").style.display = "none";
        });

        document.getElementById('closeRegPopup').addEventListener('click', function() {
            document.getElementById('loginPopup').style.display = 'none';
            document.querySelector('.register-side').style.display = 'none';
            document.getElementById("login-side").style.display = "flex";
        });

        window.addEventListener("click", function(event) {
            const popuplog = document.getElementById("loginPopup");
            if (event.target === popuplog) {
                popuplog.style.display = "none";
                document.body.classList.remove("no-scroll");
                document.querySelector('.register-side').style.display = 'none';
                document.getElementById("login-side").style.display = "flex";
            }
        });

        document.getElementById('passwordRep').addEventListener('input', function () {
            const password = document.getElementById('password').value;
            const passwordRep = document.getElementById('passwordRep').value;

            if (password !== passwordRep) {
                this.setCustomValidity('Нууц үгс хоорондоо таарахгүй байна.');
            } else {
                this.setCustomValidity('');
            }
        });
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
                {{-- <div class="shpngcrt">
                    <a href="/shoppingcart">
                        <img src="{{ asset('pics2use/icons/Shoppingcart.png') }}" class="">
                        <span class="notification-count">{{ $notifications->where('read_at', null)->count() }}</span>
                    </a>
                </div> --}}
                <div class="miniSocial">
                    <a href="https://www.facebook.com/centralrich.mongolia" target="_blank">
                        <img src= {{ asset("pics2use/icons/facebookwhite.png")}} class="mini fb">
                    </a>
                    <a href="https://www.facebook.com/centralrich.mongolia" target="_blank">
                        <img src={{ asset("pics2use/icons/fbgroup.png")}} class="mini group">
                    </a>
                    <a href="https://www.instagram.com/phoenix_s_heater" target="_blank">
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
   <x-header/>
<section>
    @yield("Phoenix")
</section>
    <x-footer/>
</body>
</html>
