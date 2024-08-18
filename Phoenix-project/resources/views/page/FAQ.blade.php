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

<script>
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isOpen = question.classList.contains('active');
        
                // Collapse all open answers
                document.querySelectorAll('.faq-answer').forEach(answer => {
                    answer.style.maxHeight = null;
                });
                document.querySelectorAll('.faq-question').forEach(q => {
                    q.classList.remove('active');
                });
        
                // Toggle the current answer
                if (!isOpen) {
                    question.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });
</script>

    <div class="faq-container">
        <h1>Хэрэглэгчдээс ирдэг асуултууд</h1>
        
        <div class="faq-item">
            <button class="faq-question">Баталгаат хугацаа хэдэн жил вэ?</button>
            <div class="faq-answer">
                <p>Манай халаагуурын баталгаат хугацаа 3 жил</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Баталгаат хугацаа хэдэн жил вэ?</button>
            <div class="faq-answer">
                <p>Манай халаагуурын баталгаат хугацаа 3 жил</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Баталгаат хугацаа хэдэн жил вэ?</button>
            <div class="faq-answer">
                <p>Манай халаагуурын баталгаат хугацаа 3 жил</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Баталгаат хугацаа хэдэн жил вэ?</button>
            <div class="faq-answer">
                <p>Манай халаагуурын баталгаат хугацаа 3 жил</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Баталгаат хугацаа хэдэн жил вэ?</button>
            <div class="faq-answer">
                <p>Манай халаагуурын баталгаат хугацаа 3 жил</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Баталгаат хугацаа хэдэн жил вэ?</button>
            <div class="faq-answer">
                <p>Манай халаагуурын баталгаат хугацаа 3 жил</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Баталгаат хугацаа хэдэн жил вэ?</button>
            <div class="faq-answer">
                <p>Манай халаагуурын баталгаат хугацаа 3 жил</p>
            </div>
        </div>
    </div>

@endsection