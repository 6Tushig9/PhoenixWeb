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

<div class="login-wrapper">
  <div class="login-side">
        {{-- <a href="#" title="logo">
            <img src="./pics2use/logo old.png" alt="logo" class="logo">
        </a> --}}
        <div class="my-form_wrapper">
            <div class="login-welcome-row">
                <h1>Тавтай морил</h1>
                <p>Хэрэглэгчийн мэдээлэл оруулна уу</p>
            </div>
            <form class="my-form">
                <div class="socials-row">
                    <a href="#" title="Use Google">
                        <img src={{ asset("pics2use/icons/Google.png")}} alt="Google">
                        Google-р нэвтрэх
                    </a>
                    <a href="#" title="Use Facebook">
                        <img src={{ asset("pics2use/icons/Facebook.png")}} alt="Facebook">
                        Facebook-р нэвтрэх
                    </a>
                </div>
            <div class="divider">
                <div class="divider-line"></div>
                or
                <div class="divider-line"></div>
            </div>
            <div class="text-field">
                <label for="email">Е-мэйл:</label>
                <input type="email" 
                        id="email" 
                        name="email" 
                        placeholder="Таны Е-мэйл" 
                        required>
                <img src={{ asset("pics2use/icons/Email@.png")}} alt="Email Icon" title="Email Icon">
            </div>
                <div class="text-field">
                    <label for="email">Нууц үг:</label>
                    <input type="password" 
                            id="email" 
                            name="email" 
                            placeholder="Таны нууц үг" 
                            required>
                    <img src={{ asset("pics2use/icons/PassIcon.png")}} alt="Email Icon" title="Email Icon">
                </div>
                <input type="submit" 
                    class="my-form_button" 
                    value="Нэвтрэх">
                <div class="my-form_actions">
                    <div class="my-form_row">
                        <span>Нууц үгээ мартсан уу?</span>
                        <a href="#" title="Reset Password">Нууц үгээ солих</a>
                    </div>
                    <div class="my-form_signup">
                        <a href="#" title="Create Account">Бүртгүүлэх</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="info-side">
        <img src={{ asset("pics2use/PicEmployee.avif")}} alt="Mock" class="mockup">
        <div class="welcome-message">
        <h2>Phoenix-S Heaters</h2>
        <p>Бид хэрэглэгчдийнхээ ая тухтай амьдрахад шаардлагатай 
            нөхцлийг бүрдүүлэхэд туслалцаа үзүүлнэ.</p>
        </div>
    </div>
</div>
@endsection