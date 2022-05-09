// function confirmer(){
//     alert("inscription reussite")
// }

// document.addEventListener('DOMContentLoaded',function(){

//     document.forms["myForm"]["bt_confirm"].addEventListener("click", confirmer);
// });
$(document).ready(function () {
    $('#btn').click(function () {
        $.ajax("http://localhost/bonjour.php", {
            type: "GET",
            success: function (resultat) {
                $("#result").html(resultat);
            }
        });
    });
}); 