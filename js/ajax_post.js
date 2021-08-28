$("#loginForm").ready(function(events){

  $("#login").click( 
  
    function(){
    
        var username=$("#username").val();
        var password=$("#password").val();
      
        $.ajax({
        type: "POST",
        url: "<?php echo site_url();?>user/login",
        dataType: "json",
        data: "username="+username+"&password="+password,
        cache:false,
        success: 
          
        
        });

      return false;

    });
  
});