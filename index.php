<?php
ob_start();
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"     ){
    $first_name = filter_var($_POST["fname"],FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST["lname"],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
    $_SESSION["fname"] = $first_name;
    $_SESSION["lname"] = $second_name;
    $_SESSION["email"] = $email;

$extention_allowed = array("png","jpg","jpeg");
    
@$extention = strtolower(end(explode(".",$image_name)));
if(in_array($extention,$extention_allowed)){
    $avatar = rand(0,1000000) . "_" . $image_name ;
    $destination = "up-image/" . $avatar ;
    move_uploaded_file($image_temp,$destination);
}
else{
    echo "<div class=\"container\"><div class=\"alert alert-danger\" role=\"alert\">
                Sorry Extention Not Allowed
                </div></div>";
                   

}
}
?>

<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    

        
        <div class="main">
            
       <div class="opp">
        <form action="profile.php" method="post" enctype="multipart/form-data">
            
                <div class="head">
            <h1>sign up</h1>
            <p>Welcome to the Abo7adeed Organizathion</p>
        </div>
            <div class="inputbox">
                <input type="text" required="required" name="fname">
                <span>First Name</span>
                <i></i>
            </div>
             <div class="inputbox">
                <input type="text" required="required" name="lname">
                <span>Last Name</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="email" required="required" name="email">
                <span>email</span>
                <i></i>
            </div>
           
            
            <div class="inputbox">
                <input type="password" required="required"name="pass">
                <span>password</span>
                <i></i>
            </div>
            
            <div class="inputbox">
                <input type="file" required="required" name="my_work">
                <!-- <span>file</span> -->
                <i></i>
            </div>
           <div class="sub">
            <input type="submit" value="submit">
           </div>
        
        </form>
    </div>
   </div>
    

 </body>
</html>
<?php
ob_end_flush();