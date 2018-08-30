var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

var filename = location.pathname.substr(location.pathname.lastIndexOf("/")+1);
    function validate()
    {
        var lent;
        var l;
        if(register.name.value == "")
        {
            alert ("please enter your name");
            return false;
        }
        else if(!isNaN(register.name.value))
        {
            alert ("please enter a valid name");
            return false;
        }
        else if(!register.name.value.match(/^[a-zA-Z]+[?;[_. ]?[a-zA-Z]*]?$/) && register.name.value !="")
        {   
            register.name.value="";
            register.name.focus();
            alert ("please enter a valid name");
            return false;
        }
        
         if(register.clgname.value == "")
        {
            alert ("please enter your college name");
            return false;
        }
        else if(!isNaN(register.clgname.value))
        {
            alert ("please enter a valid college name");
            return false;
        }
     else if (register.email.value =="") 
{
alert (" Please Enter Your Email  !");
return false;
} 
else if(!register.email.value.match(emailExp))
{ 
alert("You Need to Enter a Valid Email Address !");    
   return false;      
 }else if(register.password1.value == "")
 {
     alert ("Enter your password");
     return false;
 }else if(register.password2.value == "")
 {
     alert("Please enter your password again");
     register.password2.focus();
     return false;
 }
        else if(register.password1.value!=register.password2.value)
        {
            alert ("Your Passwords does not match");
            return false;
        }else if(register.branch.value==null)
        {
            alert ("Select a Branch");
            return false;
        }

        
        
        
        return true;

        
    }


       $(document).ready(function(){
              $('.dropdown-toggle').dropdown();
            $("input#submit").click(function(){
                if(validate())
{
                $.ajax({
                type:"POST",
                    url: "save.php",
                    data : $('form.register').serialize(),
                    success : function(msg){
if(msg == "registered")
{
                      window.location.replace(filename);}
else if(msg == "exists")
{
	alert ("Duplicate Id's are not allowed.Try with different mail id");
}
else if(msg == "errorinsert")
{
alert("Unable to Register right now.Please Try after some time");
}
                    },
                    error : function(){
                    alert ("error");
                    }
                });}
                
            });
               
            $("input#login").click(function(evt){	
                $.ajax({
                type:"POST",
                    url: "login.php",
                    data : $('form.login').serialize(),
                    success : function(msg){
		if(msg == "in")
{
                  window.location.replace(filename);}
else if(msg == "wrong")
{
alert ("Incorrect mail or password");
}
                    },
                    error : function(){
                    alert ("error");
                    }
                });
                
            });
            
              $("#logout").click(function(){
                
                $.ajax({
                type:"POST",
                    url: "manual.php",
                   
                    success : function(msg){
                         window.location.replace(filename);
                    },
                    error : function(){
                    alert ("error");
                    }
                });
                
            });
         $("#regtech").click(function(){
              $.ajax({
                type:"POST",
                    url: "regtech.php",
                   
                    success : function(msg){
                           $('#myModal4').modal('show');
                        var delay = 2000;
                        setTimeout(function(){
                             window.location.replace(filename);
                        },delay);
                        
                         //window.location.replace(filename);
                        
                       
                    },
                    error : function(){
                    alert ("error");
                    }
                });
         });
           
            $("#unregtech").click(function(){
              $.ajax({
                type:"POST",
                    url: "unregtech.php",
                   
                    success : function(msg){
                       $('#myModal5').modal('show');
                        var delay = 2000;
                        setTimeout(function(){
                             window.location.replace(filename);
                        },delay);
                    },
                    error : function(){
                    alert ("error");
                    }
                });
         });
           
              $("#regnontech").click(function(){
              $.ajax({
                type:"POST",
                    url: "regnontech.php",
                   
                    success : function(msg){
                           $('#myModal4').modal('show');
                        var delay = 2000;
                        setTimeout(function(){
                            window.location.replace(filename);
                        },delay);
                    
                         //window.location.replace(filename);
                        
                       
                    },
                    error : function(){
                    alert ("error");
                    }
                });
         });
           
           
           
              $("#regethical").click(function(){
              $.ajax({
                type:"POST",
                    url: "regethical.php",
                   
                    success : function(msg){
                           $('#myModal8').modal('show');
                        var delay = 2000;
                        setTimeout(function(){
                            window.location.replace(filename);
                        },delay);
                    
                         //window.location.replace(filename);
                        
                       
                    },
                    error : function(){
                    alert ("error");
                    }
                });
         });
         
           $("#regiot").click(function(){
              $.ajax({
                type:"POST",
                    url: "regiot.php",
                   
                    success : function(msg){
                           $('#myModal10').modal('show');
                        var delay = 2000;
                        setTimeout(function(){
                            window.location.replace(filename);
                        },delay);
                    
                         //window.location.replace(filename);
                        
                       
                    },
                    error : function(){
                    alert ("error");
                    }
                });
         });
           
              $("#regwireless").click(function(){
              $.ajax({
                type:"POST",
                    url: "regwireless.php",
                   
                    success : function(msg){
                           $('#myModal12').modal('show');
                        var delay = 2000;
                        setTimeout(function(){
                            window.location.replace(filename);
                        },delay);
                    
                         //window.location.replace(filename);
                        
                       
                    },
                    error : function(){
                    alert ("error");
                    }
                });
         });
           
           
              $("#unregtech").click(function(){
              $.ajax({
                type:"POST",
                    url: "unregtech.php",
                   
                    success : function(msg){
                       $('#myModal5').modal('show');
                        var delay = 2000;
                        setTimeout(function(){
                             window.location.replace(filename);
                        },delay);
                    },
                    error : function(){
                    alert ("error");
                    }
                });
         });
         
           $("#unregiot").click(function(){
              $.ajax({
                type:"POST",
                    url: "unregiot.php",
                   
                    success : function(msg){
                       $('#myModal11').modal('show');
                        var delay = 2000;
                        setTimeout(function(){
                             window.location.replace(filename);
                        },delay);
                    },
                    error : function(){
                    alert ("error");
                    }
                });
         });
         
          $("#unregwireless").click(function(){
              $.ajax({
                type:"POST",
                    url: "unregwireless.php",
                   
                    success : function(msg){
                       $('#myModal13').modal('show');
                        var delay = 2000;
                        setTimeout(function(){
                             window.location.replace(filename);
                        },delay);
                    },
                    error : function(){
                    alert ("error");
                    }
                });
         });
           
           
                $("#unregethical").click(function(){
              $.ajax({
                type:"POST",
                    url: "unregethical.php",
                   
                    success : function(msg){
                       $('#myModal9').modal('show');
                        var delay = 2000;
                        setTimeout(function(){
                             window.location.replace(filename);
                        },delay);
                    },
                    error : function(){
                    alert ("error");
                    }
                });
         });
         
      
        
        });

$('#reg').click(function(){
        $('#myModal').modal('hide');
        });