<?php

require('connection.php');
session_start();

// for login 

if (isset($_POST['login']))
{
    $query = "SELECT * FROM `swiggy_users` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $result = mysqli_query($con, $query);

    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'], $result_fetch['password']))
            {
                // if passwords match
                $_SESSION['logged_in']=true;
                $_SESSION['username']=$result_fetch['username'];
                header("location: index.php");
            }
            else 
            {
                // if password does not match
                echo"
                    <script> 
                        alert('Passwords does not match');  
                        window.location.href='index.php'; 
                    </script>
                "; 
            }
        }
        else
        {
            echo"
                <script> 
                    alert('Email or Username not registered');  
                    window.location.href='index.php'; 
                </script>
            "; 
        }
    }
    else
    {
        echo"
            <script> 
                alert('Cannot run query');  
                window.location.href='index.php'; 
            </script>
        "; 
    }
}


// for registration
if(isset($_POST['register']))
{
    $user_exist_query = "SELECT * FROM `swiggy_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result=mysqli_query($con, $user_exist_query);

    if ($result) {
        // if username or email are already taken
        if (mysqli_num_rows($result)>0) 
        {
            // if any user already have the email or username
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username'])
            {
                echo"
                    <script> 
                        alert('$result_fetch[username] - Username already exist');  
                        window.location.href='index.php'; 
                    </script>
                ";
            } 
            else 
            {
                // error for email already registered
                echo"
                <script> 
                    alert('$result_fetch[Email] - Email already exist');  
                    window.location.href='index.php'; 
                </script>
            ";   
            }
        }
        else #if no one have taken email or username before
        {
           $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
           $query = "INSERT INTO `swiggy_users`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
           if (mysqli_query($con, $query)) 
           {
                // if data can be inserted
                echo"
                <script> 
                    alert('Registration successful');  
                    window.location.href='index.php'; 
                </script>
            ";   
           }
           else 
           {
                // if data cannot be inserted
                echo"
                <script> 
                    alert('Cannot run query');  
                    window.location.href='index.php'; 
                </script>
            ";   
           }
        }
    } 
    else 
    {
        echo"
            <script> 
                alert('Cannot Run Query');  
                window.location.href='index.php'; 
            </script>
        ";
    }
}

?>