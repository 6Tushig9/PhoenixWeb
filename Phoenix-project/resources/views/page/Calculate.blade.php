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



        <div class="tootsoolohW">
            <div class="hariu">
                <div class="songolt">
                    <div class="songolt1"></div>
                    <div class="songolt2"></div>
                </div>
                <div class="warningmsg">
                    Энэ тооцоололд байшингийн шалнаас тааз хүртэлх өндөрийг 
                    2.8м гэж үзэв. Хэрэв өөр хэмжээсээр тооцоолуулах бол манай 
                    ажилтанд хандана уу. Утас: 89390000
                </div>
                <div class="MonthlySSS">
                    <h2>Сард гарах цахилгааны зардал</h2>
                    <h1>129000₮</h1>
                </div>
                <div class="SumSSS">
                    <h2>Халаагуурын нийт үнэ</h2>
                    <h1>2589000₮</h1>
                </div>
            </div>
            <div class="VertLine"></div>
            <div class="baishinInfo">
                <h1>Тооцоолол хийлгэх байшингийн мэдээлэл оруулна уу</h1>
                <div class="numinfo">
                    <div class="tailbarUg">
                        <div>Нийт талбай(м2) =</div>
                        <div>Өрөөний тоо(ш) =</div>
                        <div>Цонхны тоо(ш) =</div>
                        <div>Шалнаас тааз хүртэлх зай(см) =</div>
                    </div>
                    <div class="ToonUtga">
                        <input type="number" name="m2" id="m2input" min="0">
                        <input type="number" name="RoomNum" id="m2input" min="0">
                        <input type="number" name="WindowNum" id="m2input" min="0">
                        <input type="number" name="WindHeight" id="m2input" min="0">
                    </div>
                </div>
                <button>ТООЦООЛОХ</button>
            </div>
        </div>
    </div>
@endsection