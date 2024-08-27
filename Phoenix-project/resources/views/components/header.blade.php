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
                <button type="submit" class="submit-btn">Илгээх</button>
            </form>
        </div>
    </div>
</header>