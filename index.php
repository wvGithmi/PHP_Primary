<?php 
    $title = 'INDEX';
    include 'includes/header.php' 
?>

<!--Basic HTML-->
<h1>Hello HTML - PHP Primary</h1>
    
<?php
    //Printing to HTML using echo
    echo 'Hello PHP';
    echo '<br>';
    echo 'Second Line';
    echo '<br>';

    //Declare variable
    //Variables need a '$'. They are not strongly typed.
    $name = 'Githmi Anjana';
    $age = 22;

    //echo variable
    echo $name . '<br>';
    echo $age . '<br>';
        
    //echo varible in a sentence
    echo '<h3>My name is ' .$name . '</h3>';
    echo '<h3>My age is ' . $age . '</h3>';

    //echo using double quotes and interpolation
    echo "<h3>My name is $name </h3>";
    echo "<h3>My age is $age </h3>";
?>

<button type="button" class="btn btn-outline-dark">CLICK ME</button>

<?php require 'includes/footer.php' ?>