<?php      
    include('con.php');  
    $userid = $_POST['userid'];  
    $password = $_POST['password'];    
        $userid = stripcslashes($userid);  
        $password = stripcslashes($password);  
        $userid = mysqli_real_escape_string($con, $userid);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from logd where userid = '$userid' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            header("location:http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=cnms&table=registereddata"); 
		   
        }  
        else{  
            echo "<h1 > Login failed. Invalid username or password.</h1>";  
        }     
?>  