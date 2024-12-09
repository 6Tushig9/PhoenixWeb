@extends("main")
@section("Phoenix")

<x-buypagescript/>

<div id="mainContnr">
        @if(!isset($production) || $production == null)
            <div>Мэдээлэл байхгүй байна.</div>
        @else
        <div class="prodPicSide">
            <div class="bigImage">
                <!-- Default big image -->
                <img id="bigImage" src="{{ asset('storage/'.$production->image) }}" alt="">
            </div>
            <div class="miniImage" role="region" aria-label="Image gallery">
                <div class="image-container">
                    @foreach ($production->images as $image)
                        @for ($i = 1; $i <= 8; $i++)
                            @if ($image->{'picture_' . $i})
                                <img 
                                    src="{{ asset('storage/' . $image->{'picture_' . $i}) }}" 
                                    class="mnimgs" 
                                    alt="Image {{ $i }} from {{ $production->name }}" 
                                    tabindex="0" 
                                    role="button"
                                >
                            @endif
                        @endfor
                    @endforeach
                </div>
            </div>
            <div class="advantageImage">
                <div class="advntg">
                    <img src="{{ asset('pics2use/EnergyEfficient.png') }}">
                    Эрчим хүч хэмнэнэ
                </div>
                <div class="advntg">
                    <img src="{{ asset('pics2use/humidity.png') }}">
                    Агаарыг шатааж, хуурайшуулахгүй
                </div>
                <div class="advntg">
                    <img src="{{ asset('pics2use/healthy.png') }}">
                    Харшил үүсгэхгүй, эрүүл мэндэд ээлтэй
                </div>
            </div>
        </div>
            <div class="specSide">
                <div class="heaterinfoDiv">
                    <div class="heaterName">
                        {{ $production->product_name }} Төрлийн халаагуур
                    </div>
                    <div class="heaterDesc">
                        {{ '- '.$production->brief_information }}
                    </div>
                    <div class="zagwaruudlabel">Загварууд</div>
                    <div class="HeaterSelection">
                        @foreach ($production->category as $sub_pro)
                            <div class="selections" data-price="{{ $sub_pro->price }}">
                                <h2>{{ $sub_pro->model }}</h2>
                                <p>{{ $sub_pro->price.'₮' }}</p>
                            </div>
                        @endforeach
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
                            </select>
                        </div>
                    </div>
                    <div class="bntsForOrder">
                        <script>
                            // $(document).ready(function() {
                            //     $('.cartBtn').click(function() {
                            //     window.location.href = '/shoppingcart';
                            //     });
                            // });
                        </script>
                        {{-- <a href={{ route('shopping', $production->id)}}>
                            <button class="cartBtn">Сагсанд хийх</button>
                        </a> --}}
                        <button class="cartBtn">Сагсанд хийх</button>
                        <button class="orderBtn">Захиалга өгөх</button>
                    </div>
                </div>
                <div class="zahialagchiinBulan">
                    <h2>Захиалагчийн мэдээлэл</h2>
                    {{-- <div class="NoaTdiv" id="ZahialagchDID">
                        <label for="NoaT">НӨАТ:</label>
                        <div id="NoaT">
                            <button class="opt" id="opt1">Хувь хүн</button>
                            <button class="opt" id="opt2">Байгууллага</button>
                        </div>
                        <input type="text" placeholder="Байгууллагын регистер" style="display: none;"> <!-- Initially hidden -->
                    </div> --}}
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
                            <div class="dun">0₮</div> <!-- This is where the product price will be displayed -->
                        </div>
                        <div class="zahDetails">
                            <div class="hurgeltS">Хүргэлтийн төлбөр</div>
                            <div class="dun">0₮</div>
                        </div>
                        <div class="zahDetails">
                            <div class="suuriluulaltS">Суурилуулалтын төлбөр</div>
                            <div class="dun">0₮</div>
                        </div>
                        <div class="sepLine"></div>
                        <div class="totalS">
                            <div class="niitTuluh">Нийт төлөх дүн</div>
                            <div class="dunTotal">0₮</div>
                        </div>
                    </div>
                    <div class="btnOrder">
                        <button class="continueBtn">Үргэлжлүүлэх</button>
                        <button class="cancelBtn">Цуцлах</button>
                    </div>
                </div>
            </div>
            <div class="paymentDisp">
                <div class="detCont">
                    <h1 class="tulburmedeelel">Төлбөрийн мэдээлэл</h1>
                    <div class="dans">
                        <p class="dansner">Централ Рич Монголиа ХХК</p>
                        <p class="dansDugaar">Хаан банк : 5122040846</p>
                    </div>
                    <div class="guilgeeUtga">
                        <p>Гүйлгээний утга : 00000000 Хэрэглэгч</p>
                        <p>Гүйлгээний дүн : 0₮</p>
                    </div>
                    <p class="anhaaruulga">Та гүйлгээ хийхээс өмнө ажилтантай 
                        холбогдож дэлгэрэнгүй мэдээллээ өгсөнөөр илүү нарийн 
                        хэмжилт хийж тохирсон халаагуураа сонгох боломжтой. <br>
                        утас : 8939-0000</p>
                </div>
            </div>
        @endif
</div>
@endsection
