$(document).ready(function() {
  $("#e1").click(function() {
   window.location = "/frontend/tenet/Tenet_home.php";
  })
  $("#e2").click(function() {
    var name = $("#Name").val();
    var unit = $("#Unit").val();
    var email = $("#Email").val();
    var phone = $("#Phone").val();
    var descr = $("#Description").val();
       
    if(unit != "" && email != "" && phone != "" && descr != "") {
      $.ajax({
        url:'/php/submitForm.php', type:'post', data:{unit:unit,email:email,phone:phone,descr:descr}, success:function(success) {
          if(success == 1) {    
            window.location = "/frontend/tenet/Tenet_home.php";
          } 
          else {
            $("#Error-message").html("Maintenance form could not be submitted at this time.");
          }
        }
      })
    }
  })
})

