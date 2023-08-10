<?php  
 include('./connection.php');

 date_default_timezone_set('Asia/Karachi');

    if(isset($_POST['done'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $username=$_POST['user'];
        $password=$_POST['pass'];

        $date=date('d-m-y H:i:s A');

        $api="INSERT INTO register(first_name,last_name,user_name,password,created_at,updated_at) VALUES('$fname','$lname','$username','$password','$date','$date' ) ";

        $result=mysqli_query($con,$api);
        if($result){
            echo "Data has been inserted!";
        }

    }
   
?>