<?php
if(isset($_POST['submit'])) {
    $name= $_POST['name'];
    $username= $_POST['username'];
    $email= $_POST['email'];
    $cardnum= $_POST['cardnum'];
    $pass = $_POST['pass'];

    if(!empty($name) && !empty($username) && !empty($email) && !empty($cardnum) && !empty($pass) ){

        $connection= mysqli_connect('localhost', 'root', '', 'fuellocater');
        if ($connection){
        }else{
            die("darabase connection failed");
        }
        
       $name=  mysqli_real_escape_string($connection, $name);
        $username= mysqli_real_escape_string($connection, $username);
        $email= mysqli_real_escape_string($connection, $email);
        $cardnum= mysqli_real_escape_string($connection, $cardnum);
        $pass = mysqli_real_escape_string($connection, $pass);
        
        /*
        $query= "SELECT randSalt from login";
        $select_randSalt_query= mysqli_query($connection, $query);
        if (!$select_randSalt_query){
            die("Query Failed");
        }
        $row = mysqli_fetch_array($select_randSalt_query);
        $salt= $row['randSalt'];
       $pass = crypt($pass, $salt);
       */
       
       $query = "INSERT INTO login(name,username,email, cardnum,password)";
        $query .= "VALUES ('$name','$username', '$email','$cardnum', '$pass')";
        $result= mysqli_query($connection,$query);
        if (! $result){
            die('Query failed ');
        }
      $message= "You have successfully Registered";
        header("Location: signin.php");
    }else{
        $message="Fieldds can not be empty ";
    }
 } else{
        $message="";
    }

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join us </title>
    <link rel="stylesheet" href="./css/signup.css">
</head>
<body>
<div class="sign-box">
        <img src="./images/icons8-user-location-100.png" alt="user-icon" class="avatar">
        <h1>Sign up</h1>
                <form action="signup.php" method="post">
                    <h2><?php echo $message; ?></h2>
                    <p>name</p>
                            <input type = "text"  name= "name"placeholder="John Doe" required="">
                            <P>username</P>
                            <input type = "text" required="" name= "username"placeholder="John Doe">
                            <p>email</p>
                            <input type="email" name="email" required="" placeholder="johndoe@gmail.com">
                            <p>card number</p>
                            <input type = "text"  name= "cardnum" required="" placeholder="55666666">
                            <p>password</p>
                            <input type = "password" name="pass" required="" placeholder="Password">
                            <br>
<input type="submit" name='submit'>
<a href="signin.php">Already have an account? Sign In</a>
</form>
    </div> 
</body>
</html>