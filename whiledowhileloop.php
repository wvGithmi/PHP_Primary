<?php 
    $title = 'WHILE Loops';
    include 'includes/header.php' 
?>

<h2>WHILE Loops</h2>

<?php
    $grade = 0;
    //Infinite Loop
    //while($grade < 10){
    //   echo '<p>I am less than 10.</p>';
    //}

    //Pre-Condition Loop
    while($grade < 10){
        echo '<p>I am less than 10.</p>';
        $grade++;
    }

    echo 'EXIT LOOP!';
?>
    
<h2>DO-WHILE Loops</h2>

<?php
    //Post-Condition Loop
    $grade = 0;
    do{
        echo '<p>I am less than 10.</p>';
        $grade++;
    }while($grade < 10);
        
    echo 'EXIT LOOP!';
    
    require 'includes/footer.php' 
?>