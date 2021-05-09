<?php

$conn =mysqli_connect("localhost","id16774774_test123","Test@1234567","id16774774_test");

if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        
        $name =  $_REQUEST['rname'];
        $pass = $_REQUEST['pwd'];
        $gender =  $_REQUEST['gend'];
        $email = $_REQUEST['em'];
        $phone = $_REQUEST['phn'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO Student VALUES('$name', 
            '$pass','$gender','$email','$phone')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n $pass\n "
                . "$gender\n $email\n $phone");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);

?>
        <br>
        <a href="index.html" align='center'>HOME</a>