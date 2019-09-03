<?php
    include_once('connection.php');

    $db=mysqli_connect($servername,$username,$password,$dbname);
    if($db->connect_error){
        die("connection failed".$db);
    }
    else{
        echo "sucess";
    }
    
 
    if(isset($_POST['save'])){
      $user_name= $_POST['user_name'];
      $emali=$_POST['email'];
      $password= $_POST['password'];
      $query="INSERT INTO login(user_name,emali,password)VALUES('$user_name','$email','$password')";
      mysqli_query($db,$query);
    }
?>