<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "customer";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function verifyCredentials($email, $password) {
        global $conn; 
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        
       
        $query = "SELECT * FROM customerdata WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        
        if ($result && mysqli_num_rows($result) > 0) {
            
            return true;
        } else {
            
            return false;
        }
    }
    
   
   
    if (verifyCredentials($email, $password)) {
        echo "Credentials are correct. User verified.";
       
    } else {
        echo "Invalid email address or password.";
        
    }
}
?>

