<?php 
    $title = 'FOR Loops';
    include 'includes/header.php' 
?>

<h2>FOR Loops</h2>

<?php
    //For loops
    for($count = 0 ; $count < 10 ; $count++){
        echo '<p>Hello World</p>';
    }

    for($count = 0 ; $count < 10 ; $count++){
        echo "The count is : $count <br>";
    }

    echo '<br>';
        
    for($count = 1 ; $count <= 10 ; $count++){
        echo "The count is : $count <br>";
    }

    require 'includes/footer.php' 
?>