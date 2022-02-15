<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moocs</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/022bbbad11.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./imgs/logo.png" />
</head>

<body>
    <div class="btn">
        <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="text">MOOCS</div>

        <ul class="aside_content">
            <?php
            $dir = './moocs';
            $file = scandir($dir);

$z=0;

            for ($i = 2; $i < count($file); $i++) {
                $sous_dir = "./moocs/$file[$i]";
                $sous_file = scandir($sous_dir);
                $z++;
                echo ' <li>
        <a href="#" class="feat-btn" id="block'.$z.'" value="'.$file[$i].'">' . $file[$i] . '
            
        </a>';
                echo '
        <ul class="feat-show" id="sous_'.$file[$i].'">';
        
                for ($j = 2; $j < count($sous_file); $j++) {
                    
                    $tab_files[$i - 2][$j - 2] = $sous_file[$j];
                    echo '<li><a href="#"  value="'.$file[$i].'/'.$tab_files[$i - 2][$j - 2].'">' . $tab_files[$i - 2][$j - 2] . '</a></li>';
                }
                echo '</ul></li>';
            }
                
                ?>


    </nav>

    <section>
        <div class="title">Moocs Projet</div>
        <div class="container" >
            
            <div class="default">Veuillez selectionner un cours !</div>
        </div>
   

    </section>









    <script src="./js/script.js"></script>


    <footer>
        <span><i>Created by : <b>Nabil Kannane</b> & <b>Fatima zahra Moumou</b></i></span>
        
    </footer>
</body>

</html>