<header>
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
    <div class="navi">
        <div class="lftMenu">
            <a href="/company">БАЙГУУЛЛАГА</a>
            <a href="/ecological">Б.О.Н.З</a>
        </div>
        <a href="/phoenixsheater">
            <img src={{ asset("pics2use/LogoBlck.png")}} class="MenuLogo">
        </a>
        <div class="rghtMenu">
            <a href="/calculate">ТООЦООЛУУР</a>
            <a href="/advice">ЗӨВЛӨМЖ</a>
        </div>
        <div class="mnubtn">
            <span></span><span></span><span></span>
        </div>
    </div>
    <div class="mblMenu">
        <a href="/company">БАЙГУУЛЛАГА</a>
        <a href="/ecological">Б.О.Н.З</a>
        <a href="/calculate" class="CalcBtn">ТООЦООЛУУР</a>
        <a href="/advice">ЗӨВЛӨМЖ</a>
    </div>
    <div class="complaint-popup-wrapper" id="complaintPopup">
        <div class="complaint-popup">
            <span class="close-btn" id="closeComplaintPopup">&times;</span>
            <h2>Санал хүсэлтээ илгээх</h2>
            <section>
                <script>
                    $(document).ready(function() {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $('.submit-btn').click(function() {
                                $.ajax({
                                    type: 'post',
                                    url: '/sanal',
                                    dataType: 'json',
                                    data: {
                                        'name': $('#nameC').val(),
                                        'phone': $('#PhoneNumCom').val(),
                                        'post': $('#complaintDetail').val()
                                    },
                                    success: function(response) {
                                        console.log(response)
                                    }
                                });
                            });
                        });
                </script>
                <label for="nameC">Таны нэр:</label>
                <input type="text" id="nameC" placeholder="Нэрээ бичнэ үү" required>
                <label for="PhoneNumCom">Утасны дугаар:</label>
                <input type="text" id="PhoneNumCom" placeholder="Утасны дугаараа бичнэ үү" required>
                <label for="complaintDetail">Санал хүсэлт:</label>
                <textarea id="complaintDetail" placeholder="Санал хүсэлтээ бичнэ үү..." required></textarea>
                <button type="button" class="submit-btn">Илгээх</button>
            </section>
        </div>
    </div>
</header>