<?php
    ob_start();
    include_once 'dbh.inc.php';

        $title = $_POST['post_title'];
        $content = $_POST['post_content'];

        $sql = "INSERT INTO posts (post_title, post_content, date) VALUES ('$title', '$content', date('m/d/Y h:i a'));";
        mysqli_query($conn, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);

        header("Location: ../index.php?post=success");
        exit();