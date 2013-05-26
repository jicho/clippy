<?php
    
if($_POST["content"]) {
    file_put_contents("data", addslashes($_POST["content"]));
}

if(file_exists("data")) {
    $content = file_get_contents("data");
    $content = stripslashes($content);
}

?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>clippy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script>
        CKEDITOR.on('instanceReady', function(evt) {
            var editor = evt.editor;
            editor.execCommand('maximize');
        });
        </script>
        <link rel="shortcut icon" href="favicon.ico" />
        
    </head>

    <body>

        <form action="index.php" method="post">
            <textarea name="content" class="ckeditor"><?php echo $content; ?></textarea>
        </form>
    
    </body>
</html>