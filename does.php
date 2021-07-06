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
    
    
    $email = $_POST["email_id"];
    $password = $_POST["password"];
    
    
    $sql = "Select * from info_details where email_id = '$email' && password = '$password'";
    
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num==1){
          $login=true;
          session_start();
          $_SESSION['loggedin']=True;
          $_SESSION['email_id']=$email;
          header("location: index.php");
          }
    else{
        echo "Invalid Credentials";
    }
    


}

?>