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
                <img id="bigImage" src="{{ asset('storage/'.$production->Зураг) }}" alt="">
            </div>
            <div class="miniImage">
                @foreach ($production->category as $sub_pro)
                    <!-- Each mini image -->
                    <img src="{{ asset('storage/'.$sub_pro->Зураг) }}" class="mnimgs" alt="">
                @endforeach
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all mini images
        const miniImages = document.querySelectorAll('.miniImage img');
        const bigImage = document.getElementById('bigImage');

        // Log to check if images are being selected correctly
        console.log('Mini images:', miniImages);
        console.log('Big image:', bigImage);

        // Check if bigImage is found
        if (bigImage) {
            // Add click event listener to each mini image
            miniImages.forEach(miniImage => {
                miniImage.addEventListener('click', function() {
                    // Store the current big image src
                    const currentBigImageSrc = bigImage.src;

                    // Switch the big image src with the clicked mini image src
                    bigImage.src = this.src;

                });
            });
        } else {
            console.error('Big image not found.');
        }



        //JS for medeelel awah heseg 
        // Elements for delivery options and fees
        const hotDotorButton = document.getElementById('HotDotor');
        const salbaraasButton = document.getElementById('Salbaraas');
        const oronNutagButton = document.getElementById('OronNutag');
        const hurgeltFeeDiv = document.querySelector('.hurgeltS + .dun'); // Next to .hurgeltS
        const suuriluulaltFeeDiv = document.querySelector('.suuriluulaltS + .dun'); // Next to .suuriluulaltS
        const totalDiv = document.querySelector('.dunTotal'); // Total amount
        const quantitySelect = document.getElementById('quantity');

        // Delivery fees based on selection
        hotDotorButton.addEventListener('click', () => {
            hurgeltFeeDiv.innerText = '10000₮'; // Set delivery fee to 10,000₮
            updateTotal(); // Update the total amount
        });

        salbaraasButton.addEventListener('click', () => {
            hurgeltFeeDiv.innerText = '0₮'; // No delivery fee
            updateTotal(); // Update the total amount
        });

        oronNutagButton.addEventListener('click', () => {
            hurgeltFeeDiv.innerText = '0₮'; // No delivery fee
            updateTotal(); // Update the total amount
        });

        // Elements for installation options
        const instYesButton = document.getElementById('InstYes');
        const instNoButton = document.getElementById('InstNo');

        // Installation fee calculation based on quantity
        instYesButton.addEventListener('click', () => {
            const quantity = parseInt(quantitySelect.value); // Get selected quantity
            const installFee = quantity * 5000; // Calculate installation fee: quantity * 5000₮
            suuriluulaltFeeDiv.innerText = `${installFee}₮`; // Update installation fee
            updateTotal(); // Update the total amount
        });

        instNoButton.addEventListener('click', () => {
            suuriluulaltFeeDiv.innerText = '0₮'; // No installation fee
            updateTotal(); // Update the total amount
        });

        // Update the total amount function
        function updateTotal() {
            const baraaDun = 1250000; // Example base amount for items
            const deliveryFee = parseInt(hurgeltFeeDiv.innerText.replace('₮', '')) || 0;
            const installFee = parseInt(suuriluulaltFeeDiv.innerText.replace('₮', '')) || 0;

            const totalAmount = baraaDun + deliveryFee + installFee;
            totalDiv.innerText = `${totalAmount}₮`; // Update total amount
        }

    });


    // Get the current date
    const today = new Date();
    const formattedDate = today.toISOString().slice(0, 10).replace(/-/g, '/'); // Format: YYYY/MM/DD

    // Set the "zahialgaNum" with the current date and an order suffix (e.g., "/01")
    const zahialgaNumDiv = document.querySelector('.zahialgaNum');
    zahialgaNumDiv.innerText = `${formattedDate}/01`; // You can change "/01" to reflect your order system

</script>

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
                            $(document).ready(function() {
                                $('.cartBtn').click(function() {
                                window.location.href = '/shoppingcart';
                                });
                            });
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
                            <div class="dun">0₮</div>
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
                <div class="detCont"></div>
            </div>
        @endif
</div>
@endsection
