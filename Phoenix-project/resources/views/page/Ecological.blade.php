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
    

    <div class="grid">
        <div class="grid-1"></div>
        <div class="grid-2">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="grid-3">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="grid-4"></div>
    </div>
    
@endsection