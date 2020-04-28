<?php 
    $title = 'SWITCH Statements';
    include 'includes/header.php' 
?>

<h2>SWITCH Statements</h2>

<?php
    $grade = 'K';

    switch($grade){
        case 'A':
            echo '<h3 style="color: green;">You are a SUPERSTAR!</h3>';
            break;
        case 'B':
            echo '<h3 style="color: blue;">You did WELL!</h3>';
            break;
        case 'C':
            echo '<h3 style="color: yellow;">You try GOOD!</h3>';
            break;
        default:
            echo '<h3 style="color: red;">You have FAILED!</h3>';
            break;
    }

    require 'includes/footer.php' 
?>