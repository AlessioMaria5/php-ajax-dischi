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
        <form action="index.php" type="GET">
            <input type="text" name="genre">
            <button type="submit">Search for Genre</button>
        </form>
        <div class="songs-wrapper">
        <ul class='song-card'>
            <?php 
            $myGenre = $_GET['genre'];
                foreach($database as $data){

                    if($myGenre == $data['genre']){

                        echo '<li>'
                        .'<div class="song-wrapper">'
                        .'<img src="'.$data['poster'].'">'
                        .'</div>'
                        .'<h3>' .$data['title']. '</h3>'
                        .'<h4>' .$data['author']. '</h4>'
                        .'<h4>' .$data['year'].'</h4>'
                        .'</li>';

                    }
                }
                
            ?>
        </ul>
        </div>
    </div>
</body>
</html>