//2 redirectHome? If needed uncomment
function redirectHome(){
    if(document.getElementById("Username") == "Usernname" && document.getElementById("Password") == "Password"){
        window.location.replace("homePageLogin.html");
    }
}

function redirectHome(){
    window.location.replace("/frontend/mainpageview/homePage.html");
}
    
$(document).ready(function() {
    $("#Login-button").click(function() {
        var user = $("#Username").val();
        var pass = $("#Password").val();
            
        if(user != "" && pass != "") {
            $.ajax({
                url:'/php/validate.php', type:'post', data:{user:user,pass:pass}, success:function(success) {
                        
                    if (success == 1) {    
                        window.location = "/frontend/tenet/Tenet_home.php";
                    } 
                    else {
                        $("#Error-message").html("Username and/or password are invalid. Please try again.");
                    }
                }
            })
        }
    })
                    
    $("#Registration-button").click(function() {
        var name = $("#Name").val();
        var ruser = $("#RUsername").val();
        var rpass = $("#RPassword").val();
        var rpass2 = $("#RRPassword").val();
            
        if(name != "" && ruser != "" && rpass != "" && rpass2 != "") {
            $.ajax({
                url:'/php/register.php', type:'post', data:{name:name,ruser:ruser,rpass:rpass,rpass2:rpass2}, success:function(success) {
                        
                    if (success == 1) {    
                        window.location = "/frontend/mainpageview/homePage.html";
                    } 
                    else if (success == 2) {
                        $("#Error-message2").html("User already exists.");
                    } 
                    else if (success == 3) {
                        $("#Error-message2").html("Passwords don't match");
                    }
                }
            })
        }
    })
})

       
