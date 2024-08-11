@extends("main")
@section("Phoenix")
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
@endsection