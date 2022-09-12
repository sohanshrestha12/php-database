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
            echo "Successfully connected";
        }
        ?>
</body>
</html>