$(document).ready(function() {
  $("#conf_password").keyup(validate);
  $("#username").keyup(validate_email);
  


$('#submit_form').click(function() {
    var password1 = $("#password").val();
    var password2 = $("#conf_password").val();
   

     
    if ($.trim($("#fname").val()) === "" ) 
    {
        $("#validate-fname").text("Enter firstname"); 
        $("#validate-fname").css("color", "red");
        return false;
        
    }
   
    if ($.trim($("#fname").val()) != "" ) 
    {
         $("#validate-fname").text(""); 
    }
    
    if ($.trim($("#lname").val()) === "" ) 
    {
        $("#validate-lname").text("Enter lastname"); 
        $("#validate-lname").css("color", "red");
        return false;
        
    }
   
    if ($.trim($("#lname").val()) != "" ) 
    {
         $("#validate-lname").text(""); 
    }
    
    if ($.trim($("#username").val()) === "" ) 
    {
        $("#validate-username").text("Enter email address"); 
        $("#validate-username").css("color", "red");
        return false;
        
    }
   
    if ($.trim($("#username").val()) != "" ) 
    {
         $("#validate-username").text(""); 
    }
        

    if ($.trim($("#password").val()) === "" ) 
    {
        $("#validate-status").text("Enter Password");
        $("#validate-status").css("color", "red");
        return false;
    }
    if ($.trim($("#password").val()) != "" )
    {
       $("#validate-status").text("");
    }
        
    if ($.trim($("#conf_password").val()) === "" ) 
    {
        $("#validate-status").text("Enter Confirmation Password"); 
        $("#validate-status").css("color", "red");
        return false;
    }
    if ($.trim($("#conf_password").val()) != "" ) 
    {
        $("#validate-status").text(""); 
    }
    
    if (!$("#manager").is(':checked'))
    {
        $("#validate-manager").text("Please agree to the terms and conditions"); 
        $("#validate-manager").css("color", "red");
        return false;
    }
    
    if ($("#manager").is(':checked'))
    {
       $("#validate-manager").text(""); 
    }
    
    
    if(password1 != password2) 
    {
            $("#validate-status").text("passwords dont match"); 
            $("#validate-status").css("color", "red");
        
    }
    if(password1 == password2) 
    {
        if (password1.length < 8 ) 
        {
            $("#validate-status").text("password < 8 characters"); 
            $("#validate-status").css("color", "red");
            return false;
        }  
        if (!password1.match(/[a-z]/) )
        {
            $("#validate-status").text("passwords should contain atleast one lowercase alphabet"); 
            $("#validate-status").css("color", "red");
            return false;
        }
        if (!password1.match(/[A-Z]/) )
        {
            $("#validate-status").text("passwords should contain atleast one uppercase alphabet"); 
            $("#validate-status").css("color", "red");
            return false;
        }
         if (!password1.match(/\d/) )
        {
            $("#validate-status").text("passwords should contain atleast one digit"); 
            $("#validate-status").css("color", "red");
            return false;
        }
         if (!password1.match(/([!,%,&,@,#,$,^,*,?,_,~])/))
        {
            $("#validate-status").text("password should contain atleast one special character"); 
            $("#validate-status").css("color", "red");
            return false;
        }
        else
        {
            $("#validate-status").text("password accepted"); 
            $("#validate-status").css("color", "blue");
        }
        
        
    }
});

});

function validate() {
  var password1 = $("#password").val();
  var password2 = $("#conf_password").val();
    if(password1 != password2) 
    {
            $("#validate-status").text("passwords dont match"); 
            $("#validate-status").css("color", "red");
        
    }
    if(password1 == password2) 
    {
        if (password1.length < 8 ) 
        {
            $("#validate-status").text("password < 8 characters"); 
            $("#validate-status").css("color", "red");
            return false;
        }  
        if (!password1.match(/[a-z]/) )
        {
            $("#validate-status").text("passwords should contain atleast one lowercase alphabet"); 
            $("#validate-status").css("color", "red");
            return false;
        }
        if (!password1.match(/[A-Z]/) )
        {
            $("#validate-status").text("passwords should contain atleast one uppercase alphabet"); 
            $("#validate-status").css("color", "red");
            return false;
        }
         if (!password1.match(/\d/) )
        {
            $("#validate-status").text("passwords should contain atleast one digit"); 
            $("#validate-status").css("color", "red");
            return false;
        }
         if (!password1.match(/([!,%,&,@,#,$,^,*,?,_,~])/))
        {
            $("#validate-status").text("password should contain atleast one special character"); 
            $("#validate-status").css("color", "red");
            return false;
        }
        else
        {
            $("#validate-status").text("password accepted"); 
            $("#validate-status").css("color", "blue");
        }
        
        
    }
}

function validate_email() {

		var email_address = $("#username").val();
		var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
 
		if(!regex.test(email_address))
		{
			$("#validate-username").text("Enter valid email address"); 
			$("#validate-username").css("color", "red");
		}
		else
		{
			$("#validate-username").text("Valid email address"); 
        	$("#validate-username").css("color", "blue");
		}
}



