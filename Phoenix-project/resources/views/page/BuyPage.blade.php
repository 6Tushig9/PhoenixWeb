@extends("main")
@section("Phoenix")

<x-buypagescript/>

<div id="mainContnr">
        @if(!isset($production) || $production == null)
            <div>Мэдээлэл байхгүй байна.</div>
        @else
            <div class="prodPicSide">
                <div class="bigImage">
                    <img src={{ asset("storage/".$production->Зураг)}} alt="">
                </div>
                <div class="miniImage">
                    @foreach ($production->category as $sub_pro)
                        <img src={{ asset("storage/".$sub_pro->Зураг)}} class="mnimgs" alt="">
                    @endforeach
                </div>
                <div class="advantageImage">
                    <div class="advntg">
                        <img src={{ asset("pics2use/EnergyEfficient.png")}}>
                        Эрчим хүч хэмнэнэ
                    </div>
                    <div class="advntg">
                        <img src={{ asset("pics2use/humidity.png")}}>
                        Агаарыг шатааж, хуурайшуулахгүй
                    </div>
                    <div class="advntg">
                        <img src={{ asset("pics2use/healthy.png")}}>
                        Харшил үүсгэхгүй, эрүүл мэндэд ээлтэй
                    </div>
                </div>
            </div>
            <div class="specSide">
                <div class="heaterinfoDiv">
                    <div class="heaterName">
                        {{ $production->Бүтээгдэхүүн }} Төрлийн халаагуур
                    </div>
                    <div class="heaterDesc">
                        {{ '- '.$production->Товч_мэдээлэл }}
                    </div>
                    <div class="zagwaruudlabel">Загварууд</div>
                    <div class="HeaterSelection">
                        @foreach ($production->category as $sub_pro)
                            <div class="selections">
                                <h2>{{ $sub_pro->Загвар }}</h2>
                                <p>{{ $sub_pro->Үнэ.'₮' }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="tooshirheg">
                        <div class="quantity-selector">
                            <span>Тоо ширхэг</span>
                            <span>{{ $production->Тоон_хэмжээ }}</span>
                        </div>
                    </div>
                    <div class="bntsForOrder">
                        <script>
                            $(document).ready(function() {
                                $('.cartBtn').click(function() {
                                window.location.href = '/shoppingcart';
                                });
                            });
                        </script>
                        <a href={{ route('shopping', $production->id)}}>
                            <button class="cartBtn">Сагсанд хийх</button>
                        </a>
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
                        <div class="zahDugaar">
                            <div class="zahialga">Захиалгын дугаар</div>
                            <div class="zahialgaNum">2024/09/24/01</div>
                        </div>
                        <div class="sepLine"></div>
                        <div class="zahDetails">
                            <div class="baraaS">Барааны дүн</div>
                            <div class="dun">1250000₮</div>
                        </div>
                        <div class="zahDetails">
                            <div class="hurgeltS">Хүргэлтийн төлбөр</div>
                            <div class="dun">40000₮</div>
                        </div>
                        <div class="zahDetails">
                            <div class="suuriluulaltS">Суурилуулалтын төлбөр</div>
                            <div class="dun">50000₮</div>
                        </div>
                        <div class="sepLine"></div>
                        <div class="totalS">
                            <div class="niitTuluh">Нийт төлөх дүн</div>
                            <div class="dunTotal">1340000₮</div>
                        </div>
                    </div>
                    <div class="btnOrder">
                        <button class="continueBtn">Үргэлжлүүлэх</button>
                        <button class="cancelBtn">Цуцлах</button>
                    </div>
                </div>
            </div>
            <div class="paymentDisp">
                <div class="detCont"></div>
            </div>
        @endif
</div>
@endsection
