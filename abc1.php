<?php
echo "rgtrgr";
if(isset($_POST['btn-upload']))
{    
    
	print_r($_FILES); 
 $file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file) or die( mysql_error());
 //$sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$file','$file_type','$file_size')";
 //mysql_query($sql); 
}
?>
