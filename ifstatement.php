<?php 
    $title = 'IF-ELSE Statements';
    include 'includes/header.php' 
?>

<h2>IF-ELSE Statements</h2>
    
<?php
    //An If statement that will carry out an action based on the value of the variable.

    $grade = 80;

    // ===, ==, <, >, <=, >=
    if($grade >= 50){
        echo $grade;
        echo '<h3 style="color: green;">You have passed</h3>';
    }else{
        echo $grade;
        echo '<h3 style="color: red;">You have failed</h3>';
    }

    //If-Else If-Else
    $grade = 'B';

    if($grade == 'A'){
        echo '<h3 style="color: green;">You are a SUPERSTAR!</h3>';
    }elseif($grade == 'B'){
        echo '<h3 style="color: blue;">You did WELL!</h3>';
    }else{
        echo '<h3 style="color: red;">You have FAILED!</h3>';
    }

    require 'includes/footer.php' 
?>