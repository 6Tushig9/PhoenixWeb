@extends("main")
@section("Phoenix")
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
        {{-- <div class="navi">
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
        </div> --}}

<!--Sanal huseltiin heseg-->
        {{-- <div class="complaint-popup-wrapper" id="complaintPopup">
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
        </div> --}}

<!--Sanal huseltiin heseg END-->
    <div id="cartMainCont">
        <div class="selectedHtrs">
            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S600</h2>
                <span class="price">399000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S600T</h2>
                <span class="price">439000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S600TW</h2>
                <span class="price">489000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S800</h2>
                <span class="price">520000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S800T</h2>
                <span class="price">570000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S800TW</h2>
                <span class="price">610000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S900</h2>
                <span class="price">520000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S900T</h2>
                <span class="price">570000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S900TW</h2>
                <span class="price">610000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S1000</h2>
                <span class="price">520000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S1000T</h2>
                <span class="price">570000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S1000TW</h2>
                <span class="price">610000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S1200</h2>
                <span class="price">520000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S1200T</h2>
                <span class="price">570000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S1200TW</h2>
                <span class="price">730000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">S400T</h2>
                <span class="price">610000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">TX900TW</h2>
                <span class="price">610000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">G1800</h2>
                <span class="price">610000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

            <div class="selectionByOrder">
                <button class="close-btn">X</button>
                <div><img src={{ asset("pics2use/xmpl2.png")}}></div>
                <h2 class="OrdrHtrName">G2200</h2>
                <span class="price">610000₮</span>
                <div class="quantity-selector1">
                    <button class="qty-btn minus">−</button>
                    <span class="quantity">1</span>
                    <button class="qty-btn plus">+</button>
                </div>
            </div>

        </div>
        <div class="PaymentDetailsDiv">
            <div class="zahialagchiinBulan1">
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
                        <button class="instChoice" id="InstYes">Хийлнэгэ</button>
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
            <div class="tulburiinMedeelel1">
                <h2>Төлбөрийн мэдээлэл</h2>
                <div class="PaymentDetails">
    
                </div>
            </div>
        </div>
    </div>

@endsection