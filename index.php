<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <form id = "create_post" action="#!" return false>
            <input id="title-input" type="text"/>
            <textarea id="content-input" type="text"></textarea>
            <button id="cancel_btn">CANCEL</button>
            <button id="post_btn">POST</button>
        </form>
        <div class = "post">
            <?php
                echo "<h5 class='post_uploade'>" . date('m/d/Y h:i a') . "</h5>";     
            ?>
            <h1 class = "post_title">test </h1>   
            <p class = "post_content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos accusantium ratione atque impedit ea, numquam voluptatibus adipisci, sint pariatur, cumque nemo optio suscipit consequatur recusandae debitis facere alias ab officia?</p>
            <button class="remove-post-btn">REMOVE</button>
        </div>

        <script src="js/cancel_S.js"></script>
        <script src="js/post_S.js"></script>
        
    </body>
</html>