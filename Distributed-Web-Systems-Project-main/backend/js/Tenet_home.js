$(document).ready(function() {
    $("#logout").click(function() {
        $.ajax({
            url:'/php/logout.php', success: function() {
                window.location = "/frontend/tenet/Login_Registration.html";
            }
        })
    })
})

