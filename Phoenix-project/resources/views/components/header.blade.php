<header>
    <div class="navi">
        <div class="lftMenu">
            <a href="/company">БАЙГУУЛЛАГА</a>
            <a href="/ecological">Б.О.Н.З</a>
        </div>
        <a href="/">
            <img src={{ asset("pics2use/LogoBlck.png")}} class="MenuLogo">
        </a>
        <div class="rghtMenu">
            <a href="/calculate">ТООЦООЛУУР</a>
            <a href="/advice">ЗӨВЛӨМЖ</a>
        </div>
        <div class="mnubtn">
            
        </div>
    </div>
    <div class="mblMenu">
        <a href="/company">БАЙГУУЛЛАГА</a>
        <a href="/ecological">Б.О.Н.З</a>
        <a href="/calculate" class="CalcBtn">ТООЦООЛУУР</a>
        <a href="/advice">ЗӨВЛӨМЖ</a>
    </div>
    <div class="complaint-popup-wrapper" id="complaintPopup">
        <div class="complaint-popup">
            <span class="close-btn" id="closeComplaintPopup">&times;</span>
            <h2>Санал хүсэлтээ илгээх</h2>
            <section>
                <script>
                    $(document).ready(function() {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $('.submit-btn').click(function() {
                                $.ajax({
                                    type: 'post',
                                    url: '/sanal',
                                    dataType: 'json',
                                    data: {
                                        'name': $('#nameC').val(),
                                        'phone': $('#PhoneNumCom').val(),
                                        'post': $('#complaintDetail').val()
                                    },
                                    success: function(response) {
                                        alert('Амжилттай хүлээж авлаа.')
                                    }
                                });
                            });
                        });
                </script>
                <label for="nameC">Таны нэр:</label>
                <input type="text" id="nameC" placeholder="Нэрээ бичнэ үү" required>
                <label for="PhoneNumCom">Утасны дугаар:</label>
                <input type="text" id="PhoneNumCom" placeholder="Утасны дугаараа бичнэ үү" required>
                <label for="complaintDetail">Санал хүсэлт:</label>
                <textarea id="complaintDetail" placeholder="Санал хүсэлтээ бичнэ үү..." required></textarea>
                <button type="button" class="submit-btn">Илгээх</button>
            </section>
        </div>
    </div>
</header>