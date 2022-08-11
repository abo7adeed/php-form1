<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<?php 


if($_SERVER['REQUEST_METHOD']=='POST'){
$image=$_FILES['my_work'];
$first=$_POST['fname'];
$last=$_POST['lname'];
$password=$_POST['pass'];
$em=$_POST['email'];
echo"first nmae:".$first . '<br>';
echo"last nmae:".$last . '<br>';
echo"password:".$password . '<br>';
echo"email:".$em . '<br>';
echo '<pre>';
echo'//////image informations//////'.'<br>';
print_r($image);
echo '<pre>';
$image_name=$_FILES['my_work']['name']; 
$image_type=$_FILES['my_work']['type']; 
$image_temp=$_FILES['my_work']['tmp_name']; 
$image_size=$_FILES['my_work']['size'];

echo'image_name:'.$image_name .'<br>';
echo'image_type:'.$image_type .'<br>';
echo'image_temp:'.$image_temp .'<br>';
echo'image_size:'.$image_size .'<br>';
$extention_allowed = array("png","jpg","jpeg");
    
@$extention = strtolower(end(explode(".",$image_name)));
if(in_array($extention,$extention_allowed)){
    $avatar = rand(0,1000000) . "_" . $image_name ;
    $destination = "up-image/" . $avatar ;
    move_uploaded_file($image_temp,$destination);
}else{
    echo "<div class=\"container\"><div class=\"alert alert-danger\" role=\"alert\">
                Sorry Extention Not Allowed pless back to the sign up page and upload another picture
                </div></div>";
}   


//move_uploaded_file($image_temp,$_SERVER['DOCUMENT_ROOT'] .'\projects\up-image'. $image_name );
}  

?>