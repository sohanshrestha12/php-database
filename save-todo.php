<?php
    include('db_config.php');

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";


        $todo_item = $_POST['todo'];
        echo "You have Entered " . $todo_item . " to the list.<br>";
        // echo "<pre>";
        // print_r($conn);
        // echo "</pre>";

        $sql_insert = "INSERT INTO todo_items(`title`) VALUES ('$todo_item')";
        $run = $conn -> query($sql_insert);
        header("Location: todo.php");
        die;
        // exit;
    }
?>