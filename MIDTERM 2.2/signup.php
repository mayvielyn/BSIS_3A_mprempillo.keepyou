<?php
    include_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body
        {
            background-color: #8A624A;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['signup'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $location = $_POST['location'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $signup_query = "INSERT INTO `user` (firstname, lastname, contact, email, location, username, password) VALUES ('$firstname', '$lastname', '$contact', '$email', '$location','$username', '$password')";
            $signup_query_result = mysqli_query($connect, $signup_query);


            if($signup_query_result){
                echo 'Successfully created an account!';
            }else{
                echo 'Failed to create an account';
            }
        }
    ?>
      
      <div class="container mt-5">
      <form action="signup.php" method="post">
        <div class="col-8 mx-auto bg-light border border-dark shadow rounded p-3">
            <div class="row">
                <div class="signup text-center">
                    <h3 class="text-dark text-uppercase">Sign-up</h3>
                </div>
                <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="firstname">
                </div>
                <div class="mb-3">
                    <label class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="lastname">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>  
                </div>
                <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input type="text" class="form-control" name="contact">
                </div>
                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" name="location">
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control">
                </div>  
                </div>
                <div class="sign-up-button text-center">
                <input type="submit" name="signup" value="Create Account"></input>
                </div>
                
            </div>
        </div>
    </form>
      </div>
     
           
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>