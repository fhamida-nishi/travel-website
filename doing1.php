<?php 
$server_name="localhost";

$username="root";

$password="";

$database_name="database890";


$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)

{

    die("connection failed:".

    mysqli_connect_error());

}


if($_SERVER['REQUEST_METHOD']=='POST'){
    
    
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email_id"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $existssql = "select * from info_details where email_id= '$email'";
    $result = mysqli_query($conn, $existssql);
    $numexitrows = mysqli_num_rows($result);
    if ($numexitrows>0){
      	echo "username already exists";
    }
   else{

      if($password==$cpassword ){
        
        $sql ="INSERT INTO `info_details` (`first_name`, `last_name`, `email_id`, `password`) VALUES ('$first_name', '$last_name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
         	echo "Successful Entry Details";
        }
        else{
            echo "information wrong".mysqli_connect_error();    
          }
      }

    }
}

?>