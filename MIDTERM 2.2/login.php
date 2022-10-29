<?php
    include_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body style="background-color: #8A624A;">
<?php
    include_once('connection.php');

        if(isset($_POST['login'])){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $login = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
            $login_query = mysqli_query($connect, $login);
            
            if(mysqli_num_rows($login_query) > 0){
                echo 'hello';
            } else{
                echo 'Account does not exist';
            }
        }
?>
           <div class="container mt-5 p-3">
            <div class="row">
            <form action="login.php" method="post">
                <div class="col-5 mx-auto p-3 bg-light border-dark shadow rounded">    
                <div class="title-login text-center">
                    <h3 class="text-uppercase text-dark">Log-in</h3>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                         <div class="mb-2 text-center">
                         <input type="submit" name="login" value="Login"></input>
                         </div> 
                   
                </div>
            </div>
            </form>
           </div>
  
  


  <!--End-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>