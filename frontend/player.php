<?php

require_once './php/utils.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player</title>
    <script type="module" src="https://unpkg.com/player-chrome"></script> 

</head>
<body>
    <?php createHTMLvideo("./static/videos/mienteme.mp4", "480px", "240px");  ?>
</body> 
</html>