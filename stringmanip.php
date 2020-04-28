<?php 
    $title = 'STRING Manipulation';
    include 'includes/header.php' 
?>
    
<h2>STRING Manipulation</h2>

<?php
    //Concatenation of Strings
    echo '<h4>Concatenation of Strings</h4>';
    $phrase1 = "My name is Githmi,";
    $phrase2 = "I'm from Galle.";
    echo $phrase1 . " " . $phrase2;
    echo "<br>" . $phrase1 . " I'm turning into 22 now, " . $phrase2;

    echo "<hr>";

    //String Transformation
    echo '<h4>Stirng Transformation</h4>';
    $name = 'githmi anjana';
    echo 'Uppercase first letter : ' . ucfirst($name) . '<br>';
    echo 'Uppercase first letter of each word : ' . ucwords($name) . '<br>';
    echo 'Uppercase : ' . strtoupper($name) . '<br>';
    echo 'Lowercase : ' . strtolower("THIS WAS ALL UPPERCASE") . '<br><br>';

    echo 'Repeat string : ' . str_repeat('a', 10) . '<br>';
    echo 'Repeat string that in uppercase (Repeat string - Nested functions) : ' . strtoupper(str_repeat('a', 10)) . '<br>';
    echo 'Repeat string : ' . str_repeat($name . " ", 5) . '<br>';
    echo 'Get a substring : ' . substr($name, 3, 6) . '<br><br>';

    echo 'Get position of string : ' . strpos($name, 'n') . '<br>';

    //Returns NULL
    echo 'Get position of string : ' . strpos($name, 'z') . '<br><br>';

    echo 'Find character "g" : ' . strchr($name, 'g') . '<br>';
    echo 'Find character "B" : ' . strchr($name, 'B') . '<br>';
    echo 'Find character "a" : ' . strchr($name, 'a') . '<br>';
    echo 'Find character "j" : ' . strchr($name, 'j') . '<br>';
    echo 'Find character "T" : ' . strchr($name, 'T') . '<br><br>';

    echo 'Length of string : ' . strlen($name) . '<br><br>';

    echo 'Without Trim : ' . "A" . " B C D " . "E" . '<br>';
    echo 'Trim spaces both sides : ' . "A" . trim(" B C D ") . "E" . '<br>';
    echo 'Trim spaces to the left : ' . "A" . ltrim(" B C D ") . "E" . '<br>';
    echo 'Trim spaces to the right : ' . "A" . rtrim(" B C D ") . "E" . '<br><br>';

    echo 'Replace string with another : ' . str_replace("Githmi", "Pasindu", $phrase1);

    require 'includes/footer.php' 
?>