
<?php
session_start();
$_message="";
$connection= mysqli_connect('localhost', 'root', '', 'fuellocater');
if ($connection){
}else{
    die("database connection failed");
}
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $username= mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

$query ="SELECT * from login where username='{$username}' ";
$select_user_query= mysqli_query($connection, $query);
if  ( ! $select_user_query){

    die("Query Failed". mysqli_error($connection));
}
while($row= mysqli_fetch_array($select_user_query)){
   $db_name=$row['name'];
    $db_username= $row['username'];
   $db_password= $row['password'];

}

if ($username === $db_username && $password === $db_password ){
    $_SESSION['username']= $db_username;
    header("Location: index.php");
    
}
else{
    $_message = "Sign In Failed";
}

} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign IN </title>
    <link rel="stylesheet" href="./css/sign.css">
</head>
<body>
    <div class="sign-box">
        <img src="./images/icons8-user-location-100.png" alt="user-icon" class="avatar">
        <h1>Sign In</h1>
        <form action="signin.php" method="post">
            <p>username </p>
            <input type="text" name="username" placeholder="John Dube" required="">
            <p>Password</p>
            <input type="password" name="password" id="" placeholder="Password" required="">
           <input type="submit" name="submit" id="" value="Sign In">
           <div class="message">
             <p><?php echo $_message?><p></div>
                <a href="#">Forgot your password?</a><br>
                <a href="signup.php">Create Account</a>
        </form>
</div>
</body>
</html>
