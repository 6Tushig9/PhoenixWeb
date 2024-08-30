@extends("main")
@section("Phoenix")
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.orderBtn').addEventListener('click', function() {
        document.querySelector('.zahialagchiinBulan').style.display = 'flex';
        document.querySelector('.tulburiinMedeelel').style.display = 'flex';
    });
});
</script>
    <div id="mainContnr">
        <div class="prodPicSide">
            <div class="bigImage">
                <img src={{ asset("pics2use/xmpl2.png")}}>
            </div>
            <div class="miniImage">
                <img src={{ asset("pics2use/xmpl2.png")}} class="mnimgs">
                <img src={{ asset("pics2use/xmpl2.png")}} class="mnimgs">
                <img src={{ asset("pics2use/xmpl2.png")}} class="mnimgs">
                <img src={{ asset("pics2use/xmpl2.png")}} class="mnimgs">
                <img src={{ asset("pics2use/xmpl2.png")}} class="mnimgs">
                <img src={{ asset("pics2use/xmpl2.png")}} class="mnimgs">
            </div>
            <div class="advantageImage">
                <div class="advntg">
                    <img src={{ asset("pics2use/TechSketch.jpg")}}>
                    Эрчим хүч хэмнэнэ
                </div>
                <div class="advntg">
                    <img src={{ asset("pics2use/TechSketch.jpg")}}>
                    Эрчим хүч хэмнэнэ
                </div>
                <div class="advntg">
                    <img src={{ asset("pics2use/TechSketch.jpg")}}>
                    Эрчим хүч хэмнэнэ
                </div>
            </div>
        </div>
        <div class="specSide">
            <div class="heaterinfoDiv">
                <div class="heaterName">
                    S1200 Төрлийн халаагуур
                </div>
                <div class="heaterDesc">
                    -Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
                    <br> 
                    -Expedita, aut. Aspernatur, totam! Perferendis, deleniti <br>
                    <br>
                    -fugit perspiciatis labore adipisci illum.
                </div>
                <div class="zagwaruudlabel">Загварууд</div>
                <div class="HeaterSelection">
                    <div class="selections">
                        <h2>S1200</h2>
                        <p>650'000₮</p>
                    </div>
                    <div class="selections">
                        <h2>S1200T</h2>
                        <p>690'000₮</p>
                    </div>
                    <div class="selections">
                        <h2>S1200TW</h2>
                        <p>730'000₮</p>
                    </div>
                </div>
                <div class="tooshirheg">
                    <div class="quantity-selector">
                        <label for="quantity">Тоо ширхэг</label>
                        <select id="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="10">11</option>
                            <option value="10">12</option>
                            <option value="10">13</option>
                            <option value="10">14</option>
                        </select>
                    </div>
                    <div class="uldegdel">
                        Энэ загварын халаагуур одоогоор 
                        бэлэн байхгүй байгаа тул захиалга нь 7-10 хонгийн 
                        дотор бэлэн болно.
                    </div>
                </div>
                <div class="bntsForOrder">
                    <button class="cartBtn">Сагсанд хийх</button>
                    <button class="orderBtn">Захиалга өгөх</button>
                </div>
            </div>
            <div class="zahialagchiinBulan">
                <h2>Захиалагчийн мэдээлэл</h2>
                <div class="NoaTdiv" id="ZahialagchDID">
                    <label for="NoaT">НӨАТ:</label>
                    <div id="NoaT">
                        <button class="opt">Хувь хүн</button>
                        <button class="opt">Байгууллага</button>
                    </div>
                </div>
                <div class="PersDiv" id="ZahialagchDID">
                    <label for="PersonalInfo">Хувийн мэдээлэл оруулах:</label>
                    <div id="PersonalInfo">
                        <input type="text" placeholder="Нэр">
                        <input type="text" placeholder="Утасны дугаар">
                        <input type="text" placeholder="Мэйл хаяг">
                    </div>
                </div>
                <div class="InstallDiv" id="ZahialagchDID">
                    <label for="Installment">Суурилуулалт хийлгэх эсэх:</label>
                    <div id="Installment">
                        <button class="instChoice" id="InstYes">Хийлгэнэ</button>
                        <button class="instChoice" id="InstNo">Хийлгэхгүй</button>
                    </div>
                </div>
                <div class="BairshilDiv" id="ZahialagchDID">
                    <!--irj awah songoltoos hamaarch idwehijdeg baih-->
                    <label for="Bairshil">Бараа хүлээн авах сонголт:</label>
                    <div id="Bairshil">
                        <button class="BChoice" id="Salbaraas">Салбараас ирж авах</button>
                        <button class="BChoice" id="HotDotor">Хот дотор хүргүүлэх</button>
                        <button class="BChoice" id="OronNutag">Орон нутагт хүргүүлэх</button>
                    </div>
                    <input type="text" placeholder="Хаяг">
                </div>
            </div>
            <div class="tulburiinMedeelel">
                <h2>Төлбөрийн мэдээлэл</h2>
                <div class="PaymentDetails">

                </div>
            </div>
        </div>
    </div>
@endsection