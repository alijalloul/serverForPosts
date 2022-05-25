<?php include_once 'includes/dbh.inc.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <form id = "create_post" action="includes/post.inc.php" method="POST">
            <input id="title-input" type="text" name="post_title"/>
            <textarea id="content-input" type="text" name="post_content"></textarea>
            <button id="cancel_btn">CANCEL</button>
            <button id="post_btn" type="submit">POST</button>
        </form>

        <?php
            $sql = "SELECT * FROM posts;";
            $result = mysqli_query($conn, $sql);
            $nbRows = mysqli_num_rows($result);
            
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class = 'post' style='top:" . $row['id']*400 . "px;'>" . 
                         $row['date'] . 
                        "<h1 class = 'post_title'>" .  $row['post_title'] . "</h1>" . 
                        "<p class = 'post_content'>" .  $row['post_content'] . "</p>" . 
                        "<button class = 'remove-post-btn'>REMOVE</button>" . 
                    "</div>";
            }
        ?>
        <script src="js/cancel_S.js"></script>
    </body>
</html>