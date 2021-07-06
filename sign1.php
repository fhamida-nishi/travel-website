<?php
$server_name="localhost";
$user_name="root";
$userpass="";
$database_name="entry123";


$conn=mysqli_connect($server_name,$user_name,$userpass,$database_name);

if(!$conn)
{
    die("connection failed:".
    mysqli_connect_error());
    
}


if(isset($_post['save']))
{
  
          
           $email_id=
        $_post['email_id'];
            $userpass=
        $_post['userpass'];
        $sql_query="INSERT INTO entry_details(email_id,userpass)
        VALUES
        ('$email_id','$userpass')";

 if(mysqli_query($conn,
  $sql_query))
 { 
      echo "NEW Details
 Entry inserted successfully !";
 }
    else
    {
        echo "error: ". $sql . "" .mysqli_error($conn) ;
    }
    mysqli_close($conn);
}

?>
