<?php 
    include_once('./api.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" >
        <input type="text" name="fname" placeholder="fname">
        <input type="text" name="lname" placeholder="lname">
        <input type="text" name="user" placeholder="username">
        <input type="number" name="pass" placeholder="password">
        <button type="submit" name="done" >submit</button>
    </form>

<ul>
<?php
    $api="SELECT*from register";
    $result=mysqli_query($con,$api);
    while($row=mysqli_fetch_assoc($result)){
        $fname=$row['first_name'];
        $lname=$row['last_name'];
        $user=$row['user_name'];
        $password=$row['password'];

        echo "<li><h2> $fname-$lname-$user-$password </h2></li>";

    }
    ?>
</ul>
</body>
</html>