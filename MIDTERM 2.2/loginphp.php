<?php
    include_once('connection.php');
?>

<?php
        if(isset($_POST['signup'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $login_query = "SELECT * FROM `user` WHERE username = '$username' AND password = '$password'";
            $login_query_result = mysqli_query($connect, $login_query);

            if($login_query_result){
                echo 'Welcome';
            }else{
                echo 'Account does not exist';
            }
        }
    ?>