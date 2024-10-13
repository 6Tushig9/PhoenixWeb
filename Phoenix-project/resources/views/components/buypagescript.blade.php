
    <script>

    document.addEventListener("DOMContentLoaded", function () {
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
        document.querySelector(".continueBtn").addEventListener("click", function() {
            document.querySelector(".paymentDisp").style.display = "flex";
            document.body.classList.remove("no-scroll");
        });
        window.addEventListener("click", function(event) {
            const popupBuy = document.querySelector(".paymentDisp");
            if (event.target === popupBuy) {
                popupBuy.style.display = "none";
                document.body.classList.remove("no-scroll");
            }
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.orderBtn').addEventListener('click', function() {
        document.querySelector('.zahialagchiinBulan').style.display = 'flex';
        document.querySelector('.tulburiinMedeelel').style.display = 'flex';
        });
    });
    $('#Salbaraas, #HotDotor, #OronNutag').click(function() {
    if ($(this).attr('id') !== 'Salbaraas') {
        $('input[placeholder="Хаяг"]').show();
    } else {
        $('input[placeholder="Хаяг"]').hide();
    }
    });

</script>

