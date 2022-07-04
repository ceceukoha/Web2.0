<?php
    $chi = 35;
    $you = "Hello World";

    echo $chi;
    echo $you;
    
    define('_house', 5);
    echo _house;

    $bools = true;
    echo $bools;

    $movieTitle = "The Notebook";
    $cast1 = "Emily Warren," ;
    $cast2 = "Jon Snow" ;
    $cast3 = "Lily Collin" ;
    $cast4 = "Emily Warren" ;
    $genre = "Thriller";
    $year= "2022";
    $rating= " 5 Star"

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <section>
            <div class="card my-5 mx-auto w-50">
                <h1>Movie Title: <?php echo $movieTitle ?></h1>
                <h1>Genre: <?php echo $genre ?></h1>
                <h1>Cast: <?php echo $cast1.$cast2 ?></h1>
                <h1>Year:<?php echo $year ?></h1>
                <h1>Movie Rating:<?php echo $rating ?></h1>
            </div>
        </section>
    </body>
    </html>
    <h1>Heyya</h1>