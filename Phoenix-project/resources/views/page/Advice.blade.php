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

<div id="AdvPage">
    @if (count($advice) > 0)
       @foreach ($advice as $item) 
        <div class="cardd">
            <img src={{ asset("storage/".$item->Зураг) }}>
            <div>
                <h2>{{ $item->Гарчиг }}</h2>
                <h3> Нийтэлсэн {{ $item->created_at }}</h3>
                <p class="advice-content">
                    {{ $item->Зөвлөгөө }}
                </p>
                <button class="more-btn" onclick="toggleContent(this)">Дэлгэрэнгүй...</button>
            </div>
        </div>
        @endforeach
    @else
        <div class="cardd" id="card1">
            <img src={{ asset("pics2use/TechSketch.jpg")}}>
            <div>
                <h2>Финекс-эс халаагуурын блогууд</h2>
                <h3> Нийтэлсэн 0000.00.00</h3>
                <p>
                    Одоогоор нийтэлсэн блог байхгүй хоосон байна.
                </p>
                <button id="More1" onclick="More1()">Дэлгэрэнгүй...</button>
            </div>
        </div>
    @endif
</div>
@endsection
