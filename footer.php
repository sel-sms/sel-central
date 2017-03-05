
<div class="container-fluid footer">
            <div class="container">
            	<div class="row">
                	<div class=" col-md-12">
                                <div class=" col-md-3" style="border-right:rgba(226, 213, 213, 0.27) 1px solid;">
                                <h1>TELEPHONE</h1>
                                <ul class="telp">
                                	<li><a>+14106601903</a></li>
                                </ul>
                           
                                </div>
                                <div class=" col-md-3" style="border-right:rgba(226, 213, 213, 0.27) 1px solid;">
                                <h1>E-MAIL US</h1>
                                <p>selcentreal@gmail.com</p>
                                </div>
                                <div class=" col-md-3" style="border-right:rgba(226, 213, 213, 0.27) 1px solid;">
                                <h1>FOLLOW US</h1>
                                
                                 <ul class="social">
                                	<li><a> <i class="fa fa-facebook"></i></a></li>
                                    <li><a> <i class="fa fa-google-plus"></i></a></li>
                                    <li><a> <i class="fa fa-rss"></i></a></li>
                                    <li><a> <i class="fa fa-pinterest"></i></a></li>
                                    <li><a> <i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                
                                
                                </div>
                                <div class=" col-md-3" style="float:left;">
                                <h1>ADDRESS</h1>
                                <p>TBD</p>
                                </div>
          	</div>	  </div>
    </div> 
</div>
 
 
 <div class="container-fluid footer-bottom">
            <div class="container">
            
            <h6>COPYRIGHT &#169; 2016 Privacy Policy</h6>
            </div>
   </div>
   
   
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog width">
      <div class="modal-content">
        <div class="modal-header">
        <div class="circle crl"> <i class="fa fa-user"></i> </div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <div class="modal-body login">
        <div class="col-md-12" >
          <form method="post" action="login_connect.php" role="form" >
          <h3 class="text-center account" style="    font-family: 'Lato', sans-serif;">Login using your E-mail</h3>
          <div id="msgs" style="font-size: 11px;padding: 7px;color: red;text-transform: capitalize;"></div>
         
            <div class="form-group">
              <input type="text" class="form-control smail1" name="username" id="smail" placeholder="E-mail*">
            </div>
            <div class="form-group">
              <input type="password" class="form-control pwd1" name="password" id="pwd" placeholder="Password*">
            </div>
            <div align="center" class="form-group">
              Student <input  checked="checked" type="radio"  name="user" value="student"  >
             Employer <input type="radio"  name="user" value="employer"  >
            </div>
            <div align="center" class="form-group">
            <input name="submit" id="llloing" class="btn btn-default btn_2" value="LOGIN" type="button">
             <a  data-toggle="modal" data-target="#forget"><input name="submit" id="" class="btn btn-default btn_2" value="Reset Passsword" type="submit"></a>
            </div>
            
 <!--            <div class="col-md-6">
            <a  data-toggle="modal" data-target="#forget">Forgot password ?  </a>
            </div>
     -->       </form>
             </div>
          </div>
        </div>
        <div class="modal-footer">
         </div>
      </div>
      
    </div>
  </div>
 <script>
 $( document ).ready(function() {
	 $( "#llloing" ).click(function() {
	 var username = $(".smail1").val();
	 var password = $(".pwd1").val();
	 var user = $("input[name=user]:checked").val();
	$.ajax({
  method: "POST",
  url: "login_connect.php",
  data: { username:username,password:password,user:user }
  })
  .done(function( msg ) {
     $("#msgs").html(msg);
      $(".smail1").val('');
	  $(".pwd1").val('');
	  $("#msgs").show();
  });
  });
});
$(".smail1").click(function() {
	 $("#msgs").hide();
});
 </script>
 
   
   <div class="modal fade" id="forget" role="dialog">
    <div class="modal-dialog width">
      <div class="modal-content">
        <div class="modal-header">
        <div class="circle crl"> <i class="fa fa-key"></i> </div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <div class="modal-body login">
        <div class="col-md-12" >
          <form method="post" action="forget.php" role="form" >
          <h3 class="text-center account" style="    font-family: 'Lato', sans-serif;">Reset your Password</h3>
            <div class="form-group">
              <input type="text" class="form-control" name="email" id="smail" placeholder="Registered E-mail ID">
            </div>
            <div align="center" class="form-group">
              Student <input  checked="checked" type="radio"  name="usertype" value="student"  >
             Employer <input type="radio"  name="usertype" value="employer"  >
            </div>
            <div align="center" class="form-group">
            <input name="reset" id="" class="btn btn-default btn_2" value="Reset Now" type="submit">
            </div>
            <div class="col-md-6">
<!--           <input type="checkbox" />Remember me
-->           </div>
             <div class="col-md-6">
<!--            <a>Forgot password?  </a>
-->            </div>
            </form>
             </div>
          </div>
        </div>
        <div class="modal-footer">
         </div>
      </div>
      
    </div>
  </div>
 
 
   <div class="modal fade" id="signin" role="dialog">
    <div class="modal-dialog width">
      <div class="modal-content">
        <div class="modal-header">
        <div class="circle crl"> <i class="fa fa-user"></i> </div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <div class="modal-body login">
        <div class="col-md-12" >
          <form method="post" action="signup1_connect.php" role="form" >
          <h3 class="text-center account" style="font-family: 'Lato', sans-serif;">Create your account</h3>
          
            <div class="form-group">
              <input type="text" name="name" class="form-control"   placeholder=" Name*">
            </div>
             
              <div class="form-group">
              <input type="text" class="form-control emailrr" id="empwd" name="email" placeholder="Email Id*">
              <div id="emailal" style="color: red;font-size: 10px;text-transform: capitalize;"></div>
            </div>
            <script type="text/javascript" >
				password = document.getElementById("password");
				confirm_password = document.getElementById("confirm_password");
			
			function validatePassword(){
			  if(password == confirm_password) {
				document.getElementById("msg").innerHTML = "Password  match";
								} else {
				document.getElementById("msg").innerHTML = "Password not match";

			  }
			}
		  </script>
             <div class="form-group">
              <input type="Password" name="password" onchange="validatePassword()" class="form-control" id="password" placeholder="Password*">
            </div>
            
           <div style="display:none;" class="form-group">
              <input type="date" class="form-control" id="pwd" name="dob" placeholder="Date of Birth">
            </div>
             <div class="form-group" style="display:none;" >
              <input type="text" class="form-control" id="pwd" name="mobno" placeholder="Contact no*">
            </div>
            
            
             <div class="form-group">
           <input type="radio" class="regrad"  checked="checked" value="student" name="usertype" /> <span class="regrad"> Student</span>   
           <input type="radio" value="employer" class="regrad" name="usertype" /> <span class="regrad"> Employer</span> 
              
            </div>
             
            <div align="center" class="form-group">
            <input name="submit" id="" class="btn btn-default btn_2" value="Register" type="submit">
            </div>
             
              
            </form>
             </div>
          </div>
        </div>
        <div class="modal-footer">
         </div>
      </div>
       <script>
 $(document).ready(function() {
 	$("#empwd").change(function() {
		var em = $(this).val();
		 var user = $("input[name=usertype]:checked").val();
		$.ajax({
  method: "POST",
  url: "emailcheck.php",
  data: { email:em,usertype:user}
  })
  .done(function( msg ) {
	   if(msg == 1){
		 $("#emailal").html('Your Email alredy used.please Enter new..');  
		 $("#empwd").val('');
		  $("#emailal").show();
	   }
     //$("#msgs").html(msg);
  });
	});
 });

$("#empwd").click(function() {
	 $("#emailal").hide();
});
 </script>
    </div>
  </div> 
    <div class="modal fade" id="contact" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
        <div class="circle crl"> <i class="fa fa-envelope"></i> </div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <div class="modal-body login">
        <div class="col-md-12" >
                    <form method="post" action="send_email.php" role="form" >
          <h3 class="text-center account" style="font-family: 'Lato', sans-serif;">Send Email</h3>
          
            <div class="form-group">
              <input type="text" name="subject" class="form-control"   placeholder="Subject*">
            </div>
             
              <div class="form-group">
              <textarea type="text" class="form-control" name="message"  placeholder="Your Messages"></textarea>
            </div>
 <div class="form-group" align="center">
            <input name="submit" id="" class="btn btn-default btn_2" value="Send" type="submit">
            </div>
             
              
            </form>
             </div>
          </div>
        </div>
        <div class="modal-footer">
         </div>
      </div>
      
    </div>
  </div> 

<script src="js/bootstrap.js">	
</script>
<script>
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});

$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');
		
		
		var winwid = $(window).width();
		if(winwid<415)
			{
		$("#second").insertBefore("#first");		
			}
		else 	{
			$("#first").insertBefore("#second");	
		}
});
$( window ).resize(function() {
		
		var winwid = $(window).width();
		if(winwid<415)
			{
		$("#second").insertBefore("#first");		
			}
		else 	{
			$("#first").insertBefore("#second");	
		}
});








$(function() {
  return $(".modal").on("show.bs.modal", function() {
	  $("#msgs").hide();
    var curModal;
    curModal = this;
	 $(".modal").each(function() {
      if (this !== curModal) {
        $(this).modal("hide");
      }
    });
  });
});
</script>
</body>
</html>
