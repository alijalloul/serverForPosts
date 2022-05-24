<?php
    ob_start();
    include_once 'dbh.inc.php';

        $title = $_POST['post_title'];
        $content = $_POST['post_content'];

        $sql = "INSERT INTO posts (post_title, post_content) VALUES ('$title', '$content)';";
        mysqli_query($conn, $sql);

        header("Location: ../index.php?post=success");
        exit();