<?php 
    $title = 'ARRAYS';
    include 'includes/header.php' 
?>

<h2>ARRAYS</h2>
    
<?php
    //a variable
    $num = 3;

    //an array
    //Here only one data type
    //But we can store data of all data types in one array
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);

    //You can access the value in a subscript of the array using the index
    echo $numbers[5];

    echo "<p>$numbers[9]</p>";

    $size = count($numbers);

    echo "<p>Array Numbers size is : $size</p>";

    for($count = 0 ; $count < $size ; $count++){
        echo $numbers[$count] . ' ';
    }

    require 'includes/footer.php' 
?>