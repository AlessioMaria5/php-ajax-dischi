<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="main">
        <div class="songs-wrapper">
            <?php 
            echo "<ul class='song-card'>";

            foreach($database as $data){

            echo '<li>'
                .'<div class="song-wrapper">'
                .'<img src="'.$data['poster'].'">'
                .'</div>'
                .'<h3>' .$data['title']. '</h3>'
                .'<h4>' .$data['author']. '</h4>'
                .'<h4>' .$data['year'].'</h4>'
                .'</li>';
            }

            echo "</ul>";

            ?>
        </div>
    </div>
</body>
</html>