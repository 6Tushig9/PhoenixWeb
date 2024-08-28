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


    <div class="grid">
        <div class="grid-1"></div>
        <div class="grid-2">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="grid-3">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="grid-4"></div>
    </div>
    
@endsection