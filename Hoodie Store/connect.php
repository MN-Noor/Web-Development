<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
    $conn= mysqli_connect('localhost','root','','customer') or die ('connection failed:' .mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['mobile']) && isset($_POST['username']) && isset($_POST['password']))
    {
        $name =$_POST['name'];
        $email =$_POST['email'];
        $address =$_POST['address'];
        $mobile =$_POST['mobile'];
        $username =$_POST['username'];
        $password =$_POST['password'];
       
        $sql="INSERT INTO customerdata (name,email,address,mobile,username,password) VALUES('$name' ,'$email',' $address', '$mobile' ,'$username' ,'$password' )";

        $query=mysqli_query($conn, $sql);
        if($query)
        {
            echo "Entry Successfull";
        }
        else{
            echo "error occured";
        }
    }

}
?>
