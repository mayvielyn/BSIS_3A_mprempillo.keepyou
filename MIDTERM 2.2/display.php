<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    
    <?php
        include_once('connection.php');
        $users = "SELECT * FROM user";
        $users_query = mysqli_query($connect, $users);


        if(mysqli_num_rows($users_query) > 0){
            while($records = mysqli_fetch_assoc($users_query)){
                echo '
                        <p>'.$records['firstname'].'</p>
                        <p>'.$records['lastname'].'</p>
                        <p>'.$records['contact'].'</p>
                        <p>'.$records['email'].'</p>
                        <p>'.$records['location'].'</p>
                        <p>'.$records['username'].'</p>
                        <p>'.$records['password'].'</p>
                    ';
            }
        } else{

            echo 'No records';
            
        }
?>
</body>
</html>