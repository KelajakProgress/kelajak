$(document).ready(function (){
    $("#user").change(function (){
        var user = $(this).val();
        if (user != ''){

            $.post('views/moduls/test.php', {username:user}, function (e){

                if (e == 1){
                    $('#usern').text("Bunday foydalanuvchi mavjud!")
                } else {
                    $('#usern').addClass('d-none');
                }
            })
        } else {
            alert("Iltimos foydalanuvchi nomini kiriting!")
        }
    })
    $("#btn").click(function (){

        $.post('views/moduls/signtest.php', {username:$("#username").val(), password:$("#password").val()}, function (f){
            if (f == 1){
                window.location="index.php";
            } else {}
            alert("Tashrifingiz  uchun Rahmat!")
        })
    })
})