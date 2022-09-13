<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="email" placeholder="Enter the email"><br>
            <input type="password" name="pass" placeholder="Enter the password"><br>
            <button type="submit">Login</button>
        </form>
        <?php 
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
            $email =$_POST['email'];
            $password=$_POST['pass'];

            // echo $email . " ";
            // echo $password;

            //database connection
            $conn = new mysqli("localhost","root","","login");
            if($conn->connect_error)
            {
                die($conn->connect_error);
            }
            echo "Successfully connected <br>";

            //start login process

            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = $conn->query($sql);

            echo "<pre>";
            print_r($result);
            echo "</pre>";
            
            if($result->num_rows>0)
            {
                $row = $result -> fetch_assoc(); //returns 1 row
           
                echo "<pre>";
                print_r($row);
                echo "</pre>";

                $db_email = $row['email'];
                $db_password = $row['password'];
                if($email==$db_email && $password==$db_password)
                {
                    echo "login success";
                }
                else{
                    echo "login failed";
                }
            }
            else{
                echo "No related rows were found!!!";
            }
            
        }
        ?>
</body>
</html>